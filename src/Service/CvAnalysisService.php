<?php

namespace App\Service;

use App\Entity\CvProfile;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Smalot\PdfParser\Parser as PdfParser;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Service d'analyse IA du CV.
 * Extrait le texte, interroge OpenAI GPT-4o-mini, parse la réponse JSON
 * et enrichit l'entité CvProfile avec l'ADN professionnel complet.
 */
class CvAnalysisService
{
    public function __construct(
        private EntityManagerInterface $em,
        private HttpClientInterface    $httpClient,
        private string                 $openaiApiKey
    ) {}

    /**
     * Analyse le CV et met à jour le CvProfile de l'utilisateur.
     */
    public function analyzeAndStore(User $user, string $filePath, string $fileName): CvProfile
    {
        // 1. Extraire le texte du PDF/DOCX
        $text = $this->extractText($filePath, $fileName);

        // 2. Interroger l'IA
        $analysis = $this->analyzeWithAI($text);

        // 3. Mettre à jour ou créer le CvProfile
        $profile = $user->getCvProfile() ?? new CvProfile();
        $profile->setUser($user);
        $profile->setCvFilePath($filePath);
        $profile->setCvFileName($fileName);
        $profile->setAnalyzedAt(new \DateTime());

        // Scores
        $profile->setCvScore($analysis['cv_score'] ?? 0);
        $profile->setMaturityScore($analysis['maturity_score'] ?? 0);
        $profile->setCompetitivenessIndex($analysis['competitiveness_index'] ?? 0);

        // ADN professionnel
        $profile->setEstimatedLevel($analysis['estimated_level'] ?? 'junior');
        $profile->setMainDomain($analysis['main_domain'] ?? 'Non défini');
        $profile->setTechnicalSkills($analysis['technical_skills'] ?? []);
        $profile->setSoftSkills($analysis['soft_skills'] ?? []);
        $profile->setWeakPoints($analysis['weak_points'] ?? []);
        $profile->setRecommendations($analysis['recommendations'] ?? []);
        $profile->setEvolutionSimulation($analysis['evolution_simulation'] ?? []);
        $profile->setAiSummary($analysis['summary'] ?? '');
        $profile->setRawAnalysis($analysis);

        $this->em->persist($profile);
        $this->em->flush();

        return $profile;
    }

    /**
     * Extrait le texte du fichier CV.
     */
    private function extractText(string $filePath, string $fileName): string
    {
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if ($ext === 'pdf') {
            try {
                $parser = new PdfParser();
                $pdf    = $parser->parseFile($filePath);
                return $pdf->getText();
            } catch (\Throwable $e) {
                return "Erreur extraction PDF: " . $e->getMessage();
            }
        }

        if (in_array($ext, ['docx', 'doc'])) {
            return $this->extractDocxText($filePath);
        }

        // Fichier texte brut
        return file_get_contents($filePath) ?: '';
    }

    /**
     * Extrait le texte d'un fichier DOCX (ZIP avec XML).
     */
    private function extractDocxText(string $filePath): string
    {
        try {
            $zip = new \ZipArchive();
            if ($zip->open($filePath) !== true) {
                return '';
            }
            $xml = $zip->getFromName('word/document.xml');
            $zip->close();
            if (!$xml) return '';

            $dom = new \DOMDocument();
            @$dom->loadXML($xml);
            $text = '';
            foreach ($dom->getElementsByTagNameNS('*', 't') as $node) {
                $text .= $node->nodeValue . ' ';
            }
            return trim($text);
        } catch (\Throwable) {
            return '';
        }
    }

    /**
     * Interroge OpenAI GPT via l'API REST (Symfony HttpClient) pour analyser le CV.
     */
    private function analyzeWithAI(string $cvText): array
    {
        // Vérification basique de la clé
        if (empty($this->openaiApiKey) || str_starts_with($this->openaiApiKey, 'sk-replace')) {
            return $this->getFallbackAnalysis($cvText);
        }

        // Limiter le texte pour ne pas dépasser les tokens
        $cvText = mb_substr($cvText, 0, 6000);

        $prompt = <<<PROMPT
Tu es un expert en recrutement et en analyse de CV. Analyse le CV suivant et retourne UNIQUEMENT un objet JSON valide (pas de markdown, pas de texte avant ou après).

CV À ANALYSER :
{$cvText}

Retourne ce JSON exactement (remplace les valeurs) :
{
  "summary": "Résumé professionnel en 2-3 phrases",
  "estimated_level": "junior|mid|senior|expert",
  "main_domain": "ex: Développement Web, Data Science, DevOps, Design, etc.",
  "technical_skills": ["PHP", "Symfony", "JavaScript", ...],
  "soft_skills": ["Communication", "Travail d'équipe", ...],
  "weak_points": ["Manque d'expérience en CI/CD", ...],
  "cv_score": 72,
  "maturity_score": 65,
  "competitiveness_index": 58,
  "recommendations": [
    {"priority": "haute", "action": "Ajouter des projets GitHub concrets avec liens", "impact": "+8 points CV"},
    {"priority": "moyenne", "action": "Obtenir une certification AWS ou Azure", "impact": "+12 points compétitivité"},
    {"priority": "moyenne", "action": "Mettre en avant les métriques de résultats (ex: +30% performance)", "impact": "+5 points"},
    {"priority": "faible", "action": "Améliorer la mise en forme avec un template ATS-friendly", "impact": "+3 points"}
  ],
  "evolution_simulation": [
    {"scenario": "Obtenir une certification cloud", "current_score": 72, "predicted_score": 84, "timeline": "3 mois"},
    {"scenario": "Ajouter 2 projets open source", "current_score": 72, "predicted_score": 80, "timeline": "2 mois"},
    {"scenario": "Compléter une formation DevOps", "current_score": 72, "predicted_score": 78, "timeline": "1 mois"},
    {"scenario": "Profil complet (toutes recommandations)", "current_score": 72, "predicted_score": 95, "timeline": "6 mois"}
  ]
}

Règles :
- cv_score : qualité globale du CV (présentation, clarté, impact, 0-100)
- maturity_score : maturité professionnelle basée sur expérience et parcours (0-100)
- competitiveness_index : comparaison aux standards actuels du marché (0-100)
- Toutes les valeurs doivent être en français
- Le JSON doit être valide et parseable
PROMPT;

        try {
            $response = $this->httpClient->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->openaiApiKey,
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'model'           => 'gpt-4o-mini',
                    'messages'        => [
                        [
                            'role'    => 'system',
                            'content' => 'Tu es un expert RH et recruteur senior. Tu réponds toujours avec du JSON valide uniquement.',
                        ],
                        [
                            'role'    => 'user',
                            'content' => $prompt,
                        ],
                    ],
                    'temperature'     => 0.3,
                    'max_tokens'      => 2000,
                    'response_format' => ['type' => 'json_object'],
                ],
                'timeout' => 60,
            ]);

            $statusCode = $response->getStatusCode();
            $body       = $response->toArray(false); // false = don't throw on 4xx/5xx

            if ($statusCode !== 200 || empty($body['choices'][0]['message']['content'])) {
                // Log l'erreur pour faciliter le débogage
                error_log('[CvAnalysis] OpenAI HTTP ' . $statusCode . ': ' . json_encode($body));
                return $this->getFallbackAnalysis($cvText);
            }

            $content = $body['choices'][0]['message']['content'];
            $data    = json_decode($content, true);

            if (!is_array($data)) {
                return $this->getFallbackAnalysis($cvText);
            }

            // Marquer l'analyse comme IA réelle
            $data['_source'] = 'openai';
            return $data;

        } catch (\Throwable $e) {
            error_log('[CvAnalysis] Exception OpenAI: ' . $e->getMessage());
            return $this->getFallbackAnalysis($cvText);
        }
    }

    /**
     * Analyse de secours basée sur des mots-clés si l'IA n'est pas disponible.
     */
    private function getFallbackAnalysis(string $cvText): array
    {
        $text = strtolower($cvText);

        // Détection de compétences techniques par mots-clés
        $techKeywords = [
            'PHP', 'Symfony', 'Laravel', 'JavaScript', 'TypeScript', 'React', 'Vue', 'Angular',
            'Python', 'Django', 'Flask', 'Java', 'Spring', 'Node.js', 'Express',
            'MySQL', 'PostgreSQL', 'MongoDB', 'Redis', 'Docker', 'Kubernetes',
            'AWS', 'Azure', 'GCP', 'Git', 'Linux', 'CI/CD', 'REST', 'GraphQL',
            'HTML', 'CSS', 'Tailwind', 'Bootstrap', 'Figma', 'Photoshop',
            'TensorFlow', 'PyTorch', 'Scikit-learn', 'Pandas', 'NumPy',
        ];

        $foundTech = [];
        foreach ($techKeywords as $skill) {
            if (str_contains($text, strtolower($skill))) {
                $foundTech[] = $skill;
            }
        }

        $softKeywords = ['communication', 'équipe', 'leadership', 'autonomie', 'créativité', 'organisation', 'adaptabilité', 'rigueur'];
        $foundSoft    = [];
        foreach ($softKeywords as $skill) {
            if (str_contains($text, $skill)) {
                $foundSoft[] = ucfirst($skill);
            }
        }

        // Score basé sur le nombre de compétences trouvées
        $techCount             = count($foundTech);
        $cvScore               = min(40 + $techCount * 3, 75);
        $maturityScore         = min(35 + $techCount * 2, 65);
        $competitivenessIndex  = min(30 + $techCount * 2.5, 60);

        // Niveau estimé
        $level = match (true) {
            $techCount >= 12 => 'senior',
            $techCount >= 7  => 'mid',
            default          => 'junior',
        };

        return [
            '_source'               => 'fallback',
            'summary'               => 'Profil analysé par détection de mots-clés (analyse IA non disponible — vérifiez votre clé OpenAI et votre quota).',
            'estimated_level'       => $level,
            'main_domain'           => 'Développement',
            'technical_skills'      => array_slice($foundTech, 0, 10),
            'soft_skills'           => array_slice($foundSoft, 0, 5) ?: ['Travail en équipe', 'Communication'],
            'weak_points'           => [
                'Analyse IA non disponible (vérifiez votre clé OpenAI et votre quota)',
                'Résultats basés uniquement sur la détection de mots-clés',
            ],
            'cv_score'              => (int) $cvScore,
            'maturity_score'        => (int) $maturityScore,
            'competitiveness_index' => (int) $competitivenessIndex,
            'recommendations'       => [
                ['priority' => 'haute',   'action' => 'Ajouter des projets concrets avec liens GitHub',              'impact' => '+8 points CV'],
                ['priority' => 'moyenne', 'action' => 'Obtenir une certification reconnue dans votre domaine',        'impact' => '+10 points compétitivité'],
                ['priority' => 'faible',  'action' => 'Améliorer la mise en forme avec un template ATS-friendly',    'impact' => '+3 points'],
            ],
            'evolution_simulation'  => [
                ['scenario' => 'Obtenir une certification',    'current_score' => (int) $cvScore, 'predicted_score' => min((int) $cvScore + 12, 100), 'timeline' => '3 mois'],
                ['scenario' => 'Ajouter 2 projets open source', 'current_score' => (int) $cvScore, 'predicted_score' => min((int) $cvScore + 8,  100), 'timeline' => '2 mois'],
                ['scenario' => 'Profil complet',               'current_score' => (int) $cvScore, 'predicted_score' => min((int) $cvScore + 23, 100), 'timeline' => '6 mois'],
            ],
        ];
    }
}
