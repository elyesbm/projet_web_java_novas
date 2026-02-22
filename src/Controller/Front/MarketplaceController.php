<?php

namespace App\Controller\Front;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\User;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

#[Route('/marketplace')]
class MarketplaceController extends AbstractController
{
    #[Route('/', name: 'app_marketplace_index')]
    public function index(Request $request, ArticleRepository $articleRepository, CategorieRepository $categorieRepository, HttpClientInterface $httpClient): Response
    {
        $sendSmsOnReturn = (string) $request->query->get('send_sms', '') === '1';
        $stripeSessionId = (string) $request->query->get('session_id', '');
        if ($sendSmsOnReturn) {
            $this->sendTwilioPaymentSmsOnce($request, $httpClient, $stripeSessionId);
        }

        // CatÃ©gories depuis la base
        $categoriesEntities = $categorieRepository->findAll();
        $categories = array_map(static function (Categorie $categorie): array {
            $nom = $categorie->getNomCategorie() ?? '';
            $iconMap = [
                'Livres' => 'book',
                'Electronique' => 'laptop',
                'Fournitures' => 'pen-tool',
                'Mobilier' => 'armchair',
                'Vetements' => 'shirt',
                'Services' => 'handshake',
            ];
            $icon = $iconMap[$nom] ?? 'box';

            return [
                'id' => $categorie->getId(),
                'nom' => $nom,
                'description' => $categorie->getDescriptionCategorie(),
                'icon' => $icon,
            ];
        }, $categoriesEntities);

        // Build filter criteria and sort from query params
        $criteria = [];
        $order = ['id' => 'DESC'];

        $categorieFilter = $request->query->get('categorie');
        $typeFilter = $request->query->get('type');
        $statutFilter = $request->query->get('statut');
        $sort = $request->query->get('sort');

        if ($categorieFilter) {
            $catEntity = $categorieRepository->find((int) $categorieFilter);
            if ($catEntity) {
                $criteria['categorie'] = $catEntity;
            }
        }
        if ($typeFilter) {
            $criteria['type_article'] = $typeFilter;
        }
        if ($statutFilter) {
            $criteria['statut_article'] = $statutFilter;
        }
        if ($sort) {
            match ($sort) {
                'price_asc' => $order = ['prix_article' => 'ASC'],
                'price_desc' => $order = ['prix_article' => 'DESC'],
                'date_asc' => $order = ['id' => 'ASC'],
                'date_desc' => $order = ['id' => 'DESC'],
                default => $order = ['id' => 'DESC'],
            };
        }

        // Articles depuis la base selon critÃ¨res ou recherche libre
        $q = trim((string) $request->query->get('q', ''));
        $perPage = 4;
        $currentPage = max(1, (int) $request->query->get('page', 1));
        $offset = ($currentPage - 1) * $perPage;

        $totalArticles = $articleRepository->countSearch($q, $criteria);
        $totalPages = max(1, (int) ceil($totalArticles / $perPage));
        if ($currentPage > $totalPages) {
            $currentPage = $totalPages;
            $offset = ($currentPage - 1) * $perPage;
        }

        $articlesEntities = $articleRepository->searchPaginated($q, $criteria, $order, $perPage, $offset);
        $articles = array_map(function (Article $article): array {
            $categorie = $article->getCategorie();
            $auteur = $article->getAuteur();

            // Ensure image file exists, otherwise use fallback
            $image = $article->getImageArticle() ?: 'skills-learning.jpg';
            $imagesDir = $this->getParameter('kernel.project_dir') . '/public/images';
            $imagePath = $imagesDir . '/' . $image;
            if (!is_file($imagePath)) {
                $image = 'skills-learning.jpg';
            }

            return [
                'id' => $article->getId(),
                'titre' => $article->getTitreArticle(),
                'contenu' => $article->getContenueArticle(),
                'image' => $image,
                'type' => $article->getTypeArticle() ?: 'academic',
                'prix' => $article->getPrixArticle() ?? 0,
                'statut' => $article->getStatutArticle() ?? 'disponible',
                'vendeur' => [
                    'nom' => $auteur instanceof User ? trim(($auteur->getPrenom() ?? '') . ' ' . ($auteur->getNom() ?? '')) : 'Etudiant',
                    'avatar' => 'student-avatar.jpg',
                    'niveau' => $auteur instanceof User ? ($auteur->getROLE() ?? 'Etudiant') : 'Etudiant',
                ],
                'categorie' => $categorie instanceof Categorie ? [
                    'id' => $categorie->getId(),
                    'nom' => $categorie->getNomCategorie(),
                ] : ['id' => null, 'nom' => 'Autre'],
                'date' => (new \DateTimeImmutable())->format('Y-m-d'),
            ];
        }, $articlesEntities);

        return $this->render('front/marketplace/index.html.twig', [
            'categories' => $categories,
            'articles' => $articles,
            'current_page' => $currentPage,
            'total_pages' => $totalPages,
        ]);
    }

    #[Route('/export/pdf', name: 'app_marketplace_export_pdf', methods: ['GET'])]
    public function exportPdfDisponibles(ArticleRepository $articleRepository): Response
    {
        $articlesEntities = $articleRepository->createQueryBuilder('a')
            ->leftJoin('a.categorie', 'c')
            ->addSelect('c')
            ->where('a.statut_article IS NULL OR LOWER(TRIM(a.statut_article)) = :statut')
            ->setParameter('statut', 'disponible')
            ->orderBy('a.id', 'DESC')
            ->getQuery()
            ->getResult();

        $articles = array_map(static function (Article $article): array {
            $categorie = $article->getCategorie();
            return [
                'titre' => (string) ($article->getTitreArticle() ?? 'Sans titre'),
                'categorie' => $categorie instanceof Categorie ? (string) ($categorie->getNomCategorie() ?? 'Autre') : 'Autre',
                'prix' => (float) ($article->getPrixArticle() ?? 0),
                'description' => trim((string) ($article->getContenueArticle() ?? '')),
                'statut' => (string) ($article->getStatutArticle() ?? 'disponible'),
            ];
        }, $articlesEntities);

        $html = $this->renderView('front/marketplace/pdf_disponibles.html.twig', [
            'articles' => $articles,
            'generated_at' => new \DateTimeImmutable(),
        ]);

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        // Use a core PDF font to avoid font parsing issues on some Windows/iconv setups.
        $options->set('defaultFont', 'Helvetica');
        $options->set('isFontSubsettingEnabled', false);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="marketplace-produits-disponibles-' . (new \DateTimeImmutable())->format('Ymd-His') . '.pdf"',
        ]);
    }

    #[Route('/article/{id}', name: 'app_marketplace_detail', requirements: ['id' => '\d+'])]
    public function detail(int $id, Request $request, ArticleRepository $articleRepository): Response
    {
        $articleEntity = $articleRepository->find($id);
        if (!$articleEntity instanceof Article) {
            throw $this->createNotFoundException('Article introuvable.');
        }
        $categorie = $articleEntity->getCategorie();
        $auteur = $articleEntity->getAuteur();
        // Detail image handling: prefer stored image if file exists
        $detailImage = $articleEntity->getImageArticle() ?: 'skills-learning.jpg';
        $imagesDir = $this->getParameter('kernel.project_dir') . '/public/images';
        if (!is_file($imagesDir . '/' . $detailImage)) {
            $detailImage = 'skills-learning.jpg';
        }

        $article = [
            'id' => $articleEntity->getId(),
            'titre' => $articleEntity->getTitreArticle(),
            'contenu' => $articleEntity->getContenueArticle(),
            'image' => $detailImage,
            'images' => [$detailImage, 'workshop.jpg', 'student-hero.jpg'],
            'type' => $articleEntity->getTypeArticle() ?: 'academic',
            'prix' => $articleEntity->getPrixArticle() ?? 0,
            'statut' => $articleEntity->getStatutArticle() ?? 'disponible',
            'vendeur' => [
                'nom' => $auteur instanceof User ? trim(($auteur->getPrenom() ?? '') . ' ' . ($auteur->getNom() ?? '')) : 'Vendeur',
                'avatar' => 'student-avatar.jpg',
                'niveau' => $auteur instanceof User ? ($auteur->getROLE() ?? 'Etudiant') : 'Etudiant',
                'membre_depuis' => '2022',
                'annonces' => 0,
                'note' => 4.8,
            ],
            'categorie' => $categorie instanceof Categorie ? ['id' => $categorie->getId(), 'nom' => $categorie->getNomCategorie()] : ['id' => null, 'nom' => 'Autre'],
            'date' => (new \DateTimeImmutable())->format('Y-m-d'),
            'vues' => 0,
        ];
        $autres = $articleRepository->findBy([], ['id' => 'DESC'], 4);
        $articles_similaires = array_map(static function (Article $a) {
            return [
                'id' => $a->getId(),
                'titre' => $a->getTitreArticle(),
                'prix' => $a->getPrixArticle() ?? 0,
                'image' => $a->getImageArticle() ?: 'workshop.jpg',
            ];
        }, array_values(array_filter($autres, static fn (Article $a) => $a->getId() !== $id)));
        $articles_similaires = array_slice($articles_similaires, 0, 3);
        $session = $request->getSession();
        $cartQty = (array) $session->get('marketplace_cart_qty', []);
        if (empty($cartQty)) {
            $legacyCartIds = array_values(array_unique(array_map('intval', (array) $session->get('marketplace_cart', []))));
            foreach ($legacyCartIds as $legacyId) {
                $cartQty[(string) $legacyId] = 1;
            }
        }
        $inCart = ((int) ($cartQty[(string) $articleEntity->getId()] ?? 0)) > 0;

        return $this->render('front/marketplace/detail.html.twig', [
            'article' => $article,
            'articles_similaires' => $articles_similaires,
            'in_cart' => $inCart,
        ]);
    }

    #[Route('/panier', name: 'app_marketplace_panier', methods: ['GET'])]
    public function panier(Request $request, ArticleRepository $articleRepository): Response
    {
        $session = $request->getSession();
        $cartQty = (array) $session->get('marketplace_cart_qty', []);
        if (empty($cartQty)) {
            $legacyCartIds = array_values(array_unique(array_map('intval', (array) $session->get('marketplace_cart', []))));
            foreach ($legacyCartIds as $legacyId) {
                $cartQty[(string) $legacyId] = 1;
            }
        }

        $cartIds = [];
        foreach ($cartQty as $id => $qty) {
            $articleId = (int) $id;
            $quantity = (int) $qty;
            if ($articleId > 0 && $quantity > 0) {
                $cartIds[] = $articleId;
            }
        }

        $articlesEntities = [];
        if (!empty($cartIds)) {
            $articlesEntities = $articleRepository->findBy(['id' => $cartIds]);
        }

        $articlesById = [];
        foreach ($articlesEntities as $articleEntity) {
            if (!$articleEntity instanceof Article) {
                continue;
            }
            $articlesById[$articleEntity->getId()] = $articleEntity;
        }

        $articles = [];
        foreach ($cartIds as $articleId) {
            if (!isset($articlesById[$articleId])) {
                continue;
            }
            $articleEntity = $articlesById[$articleId];
            $image = $articleEntity->getImageArticle() ?: 'skills-learning.jpg';
            $imagesDir = $this->getParameter('kernel.project_dir') . '/public/images';
            if (!is_file($imagesDir . '/' . $image)) {
                $image = 'skills-learning.jpg';
            }

            $articles[] = [
                'id' => $articleEntity->getId(),
                'titre' => $articleEntity->getTitreArticle(),
                'prix' => $articleEntity->getPrixArticle() ?? 0,
                'image' => $image,
                'quantite' => (int) ($cartQty[(string) $articleEntity->getId()] ?? 1),
            ];
        }

        return $this->render('front/marketplace/panier.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/paiement/checkout', name: 'app_marketplace_checkout', methods: ['POST'])]
    public function checkout(Request $request, ArticleRepository $articleRepository, HttpClientInterface $httpClient): Response
    {
        if (!$this->isCsrfTokenValid('marketplace_checkout', (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_marketplace_panier');
        }

        $secretKey = (string) ($_ENV['STRIPE_SECRET_KEY'] ?? $_SERVER['STRIPE_SECRET_KEY'] ?? '');
        if ($secretKey === '') {
            $this->addFlash('error', 'Stripe non configuré. Ajoutez STRIPE_SECRET_KEY dans .env.local');
            return $this->redirectToRoute('app_marketplace_panier');
        }

        $session = $request->getSession();
        $cartQty = (array) $session->get('marketplace_cart_qty', []);
        if (empty($cartQty)) {
            $legacyCartIds = array_values(array_unique(array_map('intval', (array) $session->get('marketplace_cart', []))));
            foreach ($legacyCartIds as $legacyId) {
                $cartQty[(string) $legacyId] = 1;
            }
        }

        $cartIds = [];
        foreach ($cartQty as $id => $qty) {
            if ((int) $id > 0 && (int) $qty > 0) {
                $cartIds[] = (int) $id;
            }
        }
        if (empty($cartIds)) {
            $this->addFlash('error', 'Votre panier est vide.');
            return $this->redirectToRoute('app_marketplace_panier');
        }

        $articles = $articleRepository->findBy(['id' => $cartIds]);
        $articlesById = [];
        foreach ($articles as $article) {
            if ($article instanceof Article) {
                $articlesById[$article->getId()] = $article;
            }
        }

        $payload = [
            'mode' => 'payment',
            'success_url' => $this->generateUrl('app_marketplace_checkout_success', [], UrlGeneratorInterface::ABSOLUTE_URL) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => $this->generateUrl('app_marketplace_panier', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ];

        $lineIndex = 0;
        foreach ($cartIds as $articleId) {
            if (!isset($articlesById[$articleId])) {
                continue;
            }
            $article = $articlesById[$articleId];
            $qty = max(1, (int) ($cartQty[(string) $articleId] ?? 1));
            $unitAmount = (int) round(((float) ($article->getPrixArticle() ?? 0)) * 100);
            if ($unitAmount < 1) {
                $unitAmount = 100;
            }

            $payload[sprintf('line_items[%d][price_data][currency]', $lineIndex)] = 'eur';
            $payload[sprintf('line_items[%d][price_data][product_data][name]', $lineIndex)] = (string) ($article->getTitreArticle() ?? ('Article #' . $articleId));
            $payload[sprintf('line_items[%d][price_data][unit_amount]', $lineIndex)] = $unitAmount;
            $payload[sprintf('line_items[%d][quantity]', $lineIndex)] = $qty;
            $lineIndex++;
        }

        if ($lineIndex === 0) {
            $this->addFlash('error', 'Aucun article valide dans le panier.');
            return $this->redirectToRoute('app_marketplace_panier');
        }

        try {
            $response = $httpClient->request('POST', 'https://api.stripe.com/v1/checkout/sessions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $secretKey,
                ],
                'body' => $payload,
            ]);
            $statusCode = $response->getStatusCode();
            $data = $response->toArray(false);
            if ($statusCode >= 300 || empty($data['url'])) {
                $this->addFlash('error', 'Impossible de créer la session de paiement Stripe.');
                return $this->redirectToRoute('app_marketplace_panier');
            }

            return $this->redirect($data['url']);
        } catch (\Throwable $e) {
            $this->addFlash('error', 'Erreur Stripe: ' . $e->getMessage());
            return $this->redirectToRoute('app_marketplace_panier');
        }
    }

    #[Route('/ai/analyse', name: 'app_marketplace_ai_analyze', methods: ['POST'])]
    public function analyzeWithAi(Request $request, HttpClientInterface $httpClient): JsonResponse
    {
        try {
            $payload = $request->toArray();
        } catch (\Throwable) {
            return $this->json(['error' => 'Payload JSON invalide.'], 400);
        }

        $csrfToken = (string) ($payload['_token'] ?? '');
        if (!$this->isCsrfTokenValid('marketplace_ai_analyze', $csrfToken)) {
            return $this->json(['error' => 'Token CSRF invalide.'], 403);
        }

        $productName = trim((string) ($payload['product_name'] ?? ''));
        $productUrl = trim((string) ($payload['product_url'] ?? ''));

        if ($productName === '' || $productUrl === '') {
            return $this->json(['error' => 'Nom du produit et lien du produit sont obligatoires.'], 400);
        }

        $apiKey = (string) (
            $_ENV['MARKETPLACE_GEMINI_API_KEY']
            ?? $_SERVER['MARKETPLACE_GEMINI_API_KEY']
            ?? $_ENV['GEMINI_API_KEY']
            ?? $_SERVER['GEMINI_API_KEY']
            ?? ''
        );
        if ($apiKey === '') {
            return $this->json(['error' => 'Cle Gemini manquante. Configurez MARKETPLACE_GEMINI_API_KEY dans .env.local.'], 500);
        }

        $configuredModel = (string) (
            $_ENV['MARKETPLACE_GEMINI_MODEL']
            ?? $_SERVER['MARKETPLACE_GEMINI_MODEL']
            ?? 'gemini-2.0-flash'
        );
        $fallbackModels = ['gemini-2.0-flash', 'gemini-2.0-flash-lite', 'gemini-1.5-flash-latest'];
        $modelsToTry = array_values(array_unique(array_filter(array_merge([$configuredModel], $fallbackModels), static fn ($m) => is_string($m) && trim($m) !== '')));

        try {
            $modelsResponse = $httpClient->request('GET', sprintf('https://generativelanguage.googleapis.com/v1beta/models?key=%s', rawurlencode($apiKey)));
            $modelsData = $modelsResponse->toArray(false);
            $availableModels = [];

            foreach ((array) ($modelsData['models'] ?? []) as $modelInfo) {
                if (!is_array($modelInfo)) {
                    continue;
                }
                $methods = (array) ($modelInfo['supportedGenerationMethods'] ?? []);
                if (!in_array('generateContent', $methods, true)) {
                    continue;
                }

                $name = (string) ($modelInfo['name'] ?? '');
                if (str_starts_with($name, 'models/')) {
                    $name = substr($name, 7);
                }
                $name = trim($name);
                if ($name !== '') {
                    $availableModels[] = $name;
                }
            }

            if (!empty($availableModels)) {
                // Preserve user preference first, then append actually available models.
                $modelsToTry = array_values(array_unique(array_merge($modelsToTry, $availableModels)));
            }
        } catch (\Throwable) {
            // Keep static fallback list if listModels is unavailable.
        }

        try {
            $data = null;
            $lastError = 'Erreur Gemini';
            foreach ($modelsToTry as $model) {
                $response = $httpClient->request('POST', sprintf('https://generativelanguage.googleapis.com/v1beta/models/%s:generateContent?key=%s', rawurlencode($model), rawurlencode($apiKey)), [
                    'json' => [
                        'contents' => [
                            [
                                'parts' => [
                                    [
                                        'text' => sprintf(
                                            "Tu es un analyste e-commerce.\nAnalyse ce produit en te basant sur le nom et le lien.\nNom: %s\nLien: %s\nReponds uniquement en JSON valide sans markdown avec les cles exactes: recommended_price (string), reviews_quality (Bonne|Moyenne|Mauvaise), demand_score (number sur 10), justification (string).",
                                            $productName,
                                            $productUrl
                                        ),
                                    ],
                                ],
                            ],
                        ],
                        'generationConfig' => [
                            'responseMimeType' => 'application/json',
                        ],
                    ],
                ]);

                $statusCode = $response->getStatusCode();
                $attemptData = $response->toArray(false);
                if ($statusCode < 300 && isset($attemptData['candidates'][0]['content']['parts'][0]['text'])) {
                    $data = $attemptData;
                    break;
                }

                $lastError = (string) ($attemptData['error']['message'] ?? $lastError);
            }

            if (!is_array($data)) {
                return $this->json(['error' => $lastError], 502);
            }

            $rawText = (string) ($data['candidates'][0]['content']['parts'][0]['text'] ?? '');
            $rawText = trim($rawText);
            if (str_starts_with($rawText, '```')) {
                $rawText = preg_replace('/^```(?:json)?\s*/', '', $rawText) ?? $rawText;
                $rawText = preg_replace('/\s*```$/', '', $rawText) ?? $rawText;
                $rawText = trim($rawText);
            }

            $analysis = json_decode($rawText, true);
            if (!is_array($analysis)) {
                return $this->json(['error' => 'Reponse Gemini non exploitable.'], 502);
            }

            $reviewsQuality = (string) ($analysis['reviews_quality'] ?? 'Moyenne');
            if (!in_array($reviewsQuality, ['Bonne', 'Moyenne', 'Mauvaise'], true)) {
                $reviewsQuality = 'Moyenne';
            }
            $demandScore = (float) ($analysis['demand_score'] ?? 5);
            $demandScore = max(0, min(10, $demandScore));

            return $this->json([
                'recommended_price' => (string) ($analysis['recommended_price'] ?? 'N/A'),
                'reviews_quality' => $reviewsQuality,
                'demand_score' => round($demandScore, 1),
                'justification' => (string) ($analysis['justification'] ?? ''),
            ]);
        } catch (\Throwable $e) {
            return $this->json(['error' => 'Erreur Gemini: ' . $e->getMessage()], 502);
        }
    }
    #[Route('/paiement/success', name: 'app_marketplace_checkout_success', methods: ['GET'])]
    public function checkoutSuccess(Request $request): Response
    {
        $stripeSessionId = (string) $request->query->get('session_id', '');

        $session = $request->getSession();
        $session->remove('marketplace_cart_qty');
        $session->remove('marketplace_cart');

        return $this->render('front/marketplace/paiement_success.html.twig', [
            'session_id' => $stripeSessionId,
        ]);
    }

    private function sendTwilioPaymentSmsOnce(Request $request, HttpClientInterface $httpClient, string $stripeSessionId): void
    {
        if ($stripeSessionId === '') {
            $this->addFlash('error', 'Session Stripe manquante: SMS non envoye.');
            return;
        }

        $session = $request->getSession();
        $alreadySentForSession = (array) $session->get('marketplace_sms_sent_sessions', []);
        if (($alreadySentForSession[$stripeSessionId] ?? false) === true) {
            return;
        }

        $twilioSid = (string) ($_ENV['MARKETPLACE_TWILIO_ACCOUNT_SID'] ?? $_SERVER['MARKETPLACE_TWILIO_ACCOUNT_SID'] ?? '');
        $twilioToken = (string) ($_ENV['MARKETPLACE_TWILIO_AUTH_TOKEN'] ?? $_SERVER['MARKETPLACE_TWILIO_AUTH_TOKEN'] ?? '');
        $twilioFrom = (string) ($_ENV['MARKETPLACE_TWILIO_FROM_PHONE'] ?? $_SERVER['MARKETPLACE_TWILIO_FROM_PHONE'] ?? '');
        $twilioTo = (string) ($_ENV['MARKETPLACE_TWILIO_TO_PHONE'] ?? $_SERVER['MARKETPLACE_TWILIO_TO_PHONE'] ?? '');

        if ($twilioSid === '' || $twilioToken === '' || $twilioFrom === '' || $twilioTo === '') {
            $this->addFlash('error', 'Configuration Twilio incomplete: SMS non envoye.');
            return;
        }

        $smsBody = 'Merci pour votre confiance. Le paiement a ete effectue avec succes et votre commande vous sera livree dans 2 jours.';

        try {
            $response = $httpClient->request('POST', sprintf('https://api.twilio.com/2010-04-01/Accounts/%s/Messages.json', rawurlencode($twilioSid)), [
                'auth_basic' => [$twilioSid, $twilioToken],
                'body' => [
                    'From' => $twilioFrom,
                    'To' => $twilioTo,
                    'Body' => $smsBody,
                ],
            ]);
            $statusCode = $response->getStatusCode();
            $data = $response->toArray(false);

            if ($statusCode >= 300 || empty($data['sid'])) {
                $twilioMessage = (string) ($data['message'] ?? 'Erreur inconnue');
                $twilioCode = (string) ($data['code'] ?? $statusCode);
                $this->addFlash('error', sprintf('Echec SMS Twilio (code %s): %s', $twilioCode, $twilioMessage));
                return;
            }

            $alreadySentForSession[$stripeSessionId] = true;
            $session->set('marketplace_sms_sent_sessions', $alreadySentForSession);
            $this->addFlash('success', 'SMS de confirmation envoye.');
        } catch (TransportExceptionInterface|\Throwable $e) {
            $this->addFlash('error', 'Erreur reseau Twilio: ' . $e->getMessage());
        }
    }

    #[Route('/panier/ajouter/{id}', name: 'app_marketplace_panier_ajouter', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function ajouterAuPanier(int $id, Request $request, ArticleRepository $articleRepository): Response
    {
        if (!$this->isCsrfTokenValid('panier_ajouter_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_marketplace_index');
        }

        $article = $articleRepository->find($id);
        if (!$article instanceof Article) {
            $this->addFlash('error', 'Article introuvable.');
            return $this->redirectToRoute('app_marketplace_index');
        }

        $session = $request->getSession();
        $cartQty = (array) $session->get('marketplace_cart_qty', []);
        if (empty($cartQty)) {
            $legacyCartIds = array_values(array_unique(array_map('intval', (array) $session->get('marketplace_cart', []))));
            foreach ($legacyCartIds as $legacyId) {
                $cartQty[(string) $legacyId] = 1;
            }
        }

        $key = (string) $id;
        $cartQty[$key] = ((int) ($cartQty[$key] ?? 0)) + 1;
        $session->set('marketplace_cart_qty', $cartQty);
        $session->remove('marketplace_cart');
        if ((int) $cartQty[$key] === 1) {
            $this->addFlash('success', 'Article ajouté au panier.');
        }

        $redirectTo = (string) $request->request->get('redirect_to', 'detail');
        if ($redirectTo === 'panier') {
            return $this->redirectToRoute('app_marketplace_panier');
        }

        return $this->redirectToRoute('app_marketplace_detail', ['id' => $id]);
    }

    #[Route('/panier/diminuer/{id}', name: 'app_marketplace_panier_diminuer', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function diminuerQuantitePanier(int $id, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('panier_diminuer_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_marketplace_panier');
        }

        $session = $request->getSession();
        $cartQty = (array) $session->get('marketplace_cart_qty', []);
        if (empty($cartQty)) {
            $legacyCartIds = array_values(array_unique(array_map('intval', (array) $session->get('marketplace_cart', []))));
            foreach ($legacyCartIds as $legacyId) {
                $cartQty[(string) $legacyId] = 1;
            }
        }

        $key = (string) $id;
        $currentQty = (int) ($cartQty[$key] ?? 0);
        if ($currentQty > 1) {
            $cartQty[$key] = $currentQty - 1;
        } else {
            unset($cartQty[$key]);
        }

        $session->set('marketplace_cart_qty', $cartQty);
        $session->remove('marketplace_cart');
        return $this->redirectToRoute('app_marketplace_panier');
    }

    #[Route('/panier/supprimer/{id}', name: 'app_marketplace_panier_supprimer', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function supprimerDuPanier(int $id, Request $request): Response
    {
        if (!$this->isCsrfTokenValid('panier_supprimer_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_marketplace_panier');
        }

        $session = $request->getSession();
        $cartQty = (array) $session->get('marketplace_cart_qty', []);
        if (empty($cartQty)) {
            $legacyCartIds = array_values(array_unique(array_map('intval', (array) $session->get('marketplace_cart', []))));
            foreach ($legacyCartIds as $legacyId) {
                $cartQty[(string) $legacyId] = 1;
            }
        }

        unset($cartQty[(string) $id]);
        $session->set('marketplace_cart_qty', $cartQty);
        $session->remove('marketplace_cart');

        $this->addFlash('success', 'Article retiré du panier.');
        return $this->redirectToRoute('app_marketplace_panier');
    }

    #[Route('/mes-articles', name: 'app_marketplace_mes')]
    public function mesArticles(ArticleRepository $articleRepository): Response
    {
        // Ã€ terme, filtrer par utilisateur connectÃ©
        // Afficher les articles du plus rÃ©cent au plus ancien
        $articlesEntities = $articleRepository->findBy([], ['id' => 'DESC']);
        $mesArticles = array_map(function (Article $article): array {
            $categorie = $article->getCategorie();
            $imagesDir = $this->getParameter('kernel.project_dir') . '/public/images';
            $image = $article->getImageArticle() ?: 'skills-learning.jpg';
            if (!is_file($imagesDir . '/' . $image)) {
                $image = 'skills-learning.jpg';
            }

            return [
                'id' => $article->getId(),
                'titre' => $article->getTitreArticle(),
                'prix' => $article->getPrixArticle() ?? 0,
                'image' => $image,
                'statut' => $article->getStatutArticle() ?? 'disponible',
                'categorie' => $categorie instanceof Categorie ? $categorie->getNomCategorie() : 'Autre',
                'vues' => 0,
                'messages' => 0,
            ];
        }, $articlesEntities);

        return $this->render('front/marketplace/mes_articles.html.twig', [
            'articles' => $mesArticles,
        ]);
    }

    #[Route('/article/ajouter', name: 'app_marketplace_ajouter', methods: ['GET', 'POST'])]
    public function ajouter(
        Request $request,
        CategorieRepository $categorieRepository,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator,
        \App\Repository\UserRepository $userRepository
    ): Response {
        $categoriesEntities = $categorieRepository->findAll();
        $categories = array_map(static function (Categorie $categorie): array {
            return [
                'id' => $categorie->getId(),
                'nom' => $categorie->getNomCategorie(),
            ];
        }, $categoriesEntities);

        if ($request->isMethod('POST')) {
            $uploadedFile = $request->files->get('image');

            $data = [
                'titre' => trim((string) $request->request->get('titre', '')),
                'contenu' => trim((string) $request->request->get('contenu', '')),
                'prix' => $request->request->get('prix', ''),
                'categorie' => $request->request->get('categorie'),
                'type' => trim((string) $request->request->get('type', 'academic')),
                'statut' => trim((string) $request->request->get('statut', 'disponible')),
                'image_article' => trim((string) $request->request->get('image_article', '')) ?: 'skills-learning.jpg',
            ];

            $constraints = new Assert\Collection([
                'fields' => [
                    'titre' => [new Assert\NotBlank(['message' => 'Le titre est obligatoire.']), new Assert\Length(['min' => 2, 'max' => 255, 'minMessage' => 'Le titre doit contenir au moins {{ limit }} caractÃ¨res.', 'maxMessage' => 'Le titre ne doit pas dÃ©passer {{ limit }} caractÃ¨res.'])],
                    'contenu' => [new Assert\NotBlank(['message' => 'Le contenu est obligatoire.']), new Assert\Length(['min' => 10, 'max' => 5000, 'minMessage' => 'Le contenu doit contenir au moins {{ limit }} caractÃ¨res.', 'maxMessage' => 'Le contenu est trop long (max {{ limit }} caractÃ¨res).'])],
                    'prix' => [
                        new Assert\NotBlank(['message' => 'Le prix est obligatoire.']),
                        new Assert\Regex(['pattern' => '/^\d+(?:[\.,]\d+)?$/', 'message' => 'Le prix doit Ãªtre un nombre.']),
                        new Assert\Range([
                            'min' => 0,
                            'max' => 1000000,
                            'notInRangeMessage' => 'Le prix doit Ãªtre compris entre {{ min }} et {{ max }}.',
                        ]),
                    ],
                    'categorie' => [new Assert\NotBlank(['message' => 'La catÃ©gorie est obligatoire.']), new Assert\Regex(['pattern' => '/^\d+$/', 'message' => 'La catÃ©gorie sÃ©lectionnÃ©e est invalide.'])],
                    'type' => new Assert\Choice(['choices' => ['academic', 'commercial', 'service', 'other'], 'message' => 'Type invalide.']),
                    'statut' => new Assert\Choice(['choices' => ['disponible', 'vendu', 'reserve'], 'message' => 'Statut invalide.']),
                    'image_article' => new Assert\Optional(),
                ],
                'allowExtraFields' => true,
            ]);

            $violations = $validator->validate($data, $constraints);
            $errors = [];
            if (count($violations) > 0) {
                foreach ($violations as $violation) {
                    $errors[] = $violation->getMessage();
                }
            }

            // Validate uploaded file with Assert\File if present
            if ($uploadedFile instanceof UploadedFile) {
                $fileConstraints = new Assert\File(['maxSize' => '2M', 'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp'], 'mimeTypesMessage' => 'Le format de l\'image est invalide.', 'maxSizeMessage' => 'L\'image est trop volumineuse (max 2MB).']);
                $fileViolations = $validator->validate($uploadedFile, $fileConstraints);
                if (count($fileViolations) > 0) {
                    foreach ($fileViolations as $fv) {
                        $errors[] = $fv->getMessage();
                    }
                } else {
                    $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/images';
                    $newFilename = uniqid('article_', true) . '.' . ($uploadedFile->getClientOriginalExtension() ?: 'jpg');
                    try {
                        $uploadedFile->move($uploadsDir, $newFilename);
                        $data['image_article'] = $newFilename;
                    } catch (FileException $e) {
                        @file_put_contents(sys_get_temp_dir().'/novas_db_error.log', 'Image upload error: '.$e->getMessage().PHP_EOL, FILE_APPEND);
                        $errors[] = 'Erreur lors de l\'upload de l\'image.';
                    }
                }
            }

            if (!empty($errors)) {
                foreach ($errors as $err) {
                    $this->addFlash('error', $err);
                }
            } else {
                $titre = $data['titre'];
                $contenu = $data['contenu'];
                $prix = (float) str_replace(',', '.', $data['prix']);
                $type = $data['type'] ?? 'academic';
                $categorieId = (int) $data['categorie'];
                $statut = $data['statut'] ?? 'disponible';
                $imageArticle = $data['image_article'] ?? 'skills-learning.jpg';
                $categorie = $categorieRepository->find($categorieId);

                if (!$categorie instanceof Categorie) {
                    $this->addFlash('error', 'La catÃ©gorie sÃ©lectionnÃ©e est invalide.');
                } else {
                    $article = new Article();
                    $article
                        ->setTitreArticle($titre)
                        ->setContenueArticle($contenu)
                        // TODO: gÃ©rer lâ€™upload rÃ©el dâ€™image. Placeholder pour lâ€™instant.
                        ->setImageArticle($imageArticle)
                        ->setTypeArticle($type)
                        ->setPrixArticle((float) $prix)
                        ->setStatutArticle($statut)
                        ->setCategorie($categorie);

                    // Associer un auteur existant mÃªme si l'utilisateur n'est pas connectÃ©
                    $author = $this->getUser();
                    if ($author instanceof User) {
                        $article->setAuteur($author);
                    } else {
                        $fallbackAuthor = $userRepository->findOneBy([]);
                        if ($fallbackAuthor instanceof User) {
                            $article->setAuteur($fallbackAuthor);
                        } else {
                            $this->addFlash('error', 'Aucun utilisateur trouvÃ© pour associer l\'article. CrÃ©ez au moins un utilisateur.');
                            return $this->redirectToRoute('app_marketplace_index');
                        }
                    }

                    $entityManager->persist($article);
                    try {
                        $entityManager->flush();
                    } catch (\Throwable $e) {
                        $msg = sprintf("Article create error: %s - %s", $e->getMessage(), json_encode([
                            'titre' => $titre,
                            'categorie' => $categorieId,
                            'prix' => $prix,
                        ]));
                        @file_put_contents(sys_get_temp_dir().'/novas_db_error.log', $msg.PHP_EOL, FILE_APPEND);
                        $this->addFlash('error', 'Erreur lors de la crÃ©ation de l\'article. Voir le log.');
                        return $this->redirectToRoute('app_marketplace_index');
                    }

                    $this->addFlash('success', 'Votre article a Ã©tÃ© publiÃ© avec succÃ¨s ! (ID: ' . $article->getId() . ')');
                    return $this->redirectToRoute('app_marketplace_detail', ['id' => $article->getId()]);
                }
            }
        }

        return $this->render('front/marketplace/ajouter.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/article/ajouter-public', name: 'app_marketplace_ajouter_public', methods: ['GET', 'POST'])]
    public function ajouterPublic(
        Request $request,
        CategorieRepository $categorieRepository,
        EntityManagerInterface $entityManager,
        \App\Repository\UserRepository $userRepository,
        ValidatorInterface $validator
    ): Response
    {
        // Formulaire public : ne nÃ©cessite pas d'utilisateur connectÃ©
        $categoriesEntities = $categorieRepository->findAll();
        $categories = array_map(static function (Categorie $categorie): array {
            return [
                'id' => $categorie->getId(),
                'nom' => $categorie->getNomCategorie(),
            ];
        }, $categoriesEntities);

        if ($request->isMethod('POST')) {
            $uploadedFile = $request->files->get('image');
            $data = [
                'titre' => trim((string) $request->request->get('titre', '')),
                'contenu' => trim((string) $request->request->get('contenu', '')),
                'prix' => $request->request->get('prix', ''),
                'categorie' => $request->request->get('categorie'),
                'type' => trim((string) $request->request->get('type', 'academic')),
                'statut' => trim((string) $request->request->get('statut', 'disponible')),
                'image_article' => trim((string) $request->request->get('image_article', '')) ?: 'skills-learning.jpg',
            ];

            $constraints = new Assert\Collection([
                'fields' => [
                    'titre' => [new Assert\NotBlank(['message' => 'Le titre est obligatoire.']), new Assert\Length(['min' => 2, 'max' => 255])],
                    'contenu' => [new Assert\NotBlank(['message' => 'Le contenu est obligatoire.']), new Assert\Length(['min' => 10, 'max' => 5000])],
                    'prix' => [new Assert\NotBlank(['message' => 'Le prix est obligatoire.']), new Assert\Regex(['pattern' => '/^\d+(?:[\.,]\d+)?$/', 'message' => 'Le prix doit Ãªtre un nombre.']), new Assert\Range(['min' => 0, 'max' => 1000000])],
                    'categorie' => [new Assert\NotBlank(['message' => 'La catÃ©gorie est obligatoire.']), new Assert\Regex(['pattern' => '/^\d+$/', 'message' => 'La catÃ©gorie sÃ©lectionnÃ©e est invalide.'])],
                    'type' => new Assert\Choice(['choices' => ['academic', 'commercial', 'service', 'other']]),
                    'statut' => new Assert\Choice(['choices' => ['disponible', 'vendu', 'reserve']]),
                    'image_article' => new Assert\Optional(),
                ],
                'allowExtraFields' => true,
            ]);

            $violations = $validator->validate($data, $constraints);
            $errors = [];
            if (count($violations) > 0) {
                foreach ($violations as $v) {
                    $errors[] = $v->getMessage();
                }
            }

            if ($uploadedFile instanceof UploadedFile) {
                $fileConstraints = new Assert\File(['maxSize' => '2M', 'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp']]);
                $fileViolations = $validator->validate($uploadedFile, $fileConstraints);
                if (count($fileViolations) > 0) {
                    foreach ($fileViolations as $fv) {
                        $errors[] = $fv->getMessage();
                    }
                } else {
                    $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/images';
                    $newFilename = uniqid('article_', true) . '.' . ($uploadedFile->getClientOriginalExtension() ?: 'jpg');
                    try {
                        $uploadedFile->move($uploadsDir, $newFilename);
                        $data['image_article'] = $newFilename;
                    } catch (FileException $e) {
                        @file_put_contents(sys_get_temp_dir().'/novas_db_error.log', 'Image upload error (public): '.$e->getMessage().PHP_EOL, FILE_APPEND);
                        $errors[] = 'Erreur lors de l\'upload de l\'image.';
                    }
                }
            }

            if (!empty($errors)) {
                foreach ($errors as $err) {
                    $this->addFlash('error', $err);
                }
            } else {
                $titre = $data['titre'];
                $contenu = $data['contenu'];
                $prix = (float) str_replace(',', '.', $data['prix']);
                $type = $data['type'] ?? 'academic';
                $categorieId = (int) $data['categorie'];
                $statut = $data['statut'] ?? 'disponible';
                $imageArticle = $data['image_article'] ?? 'skills-learning.jpg';

                $categorie = $categorieRepository->find($categorieId);

                if (!$categorie instanceof Categorie) {
                    $this->addFlash('error', 'La catÃ©gorie sÃ©lectionnÃ©e est invalide.');
                } else {
                    $article = new Article();
                    $article
                        ->setTitreArticle($titre)
                        ->setContenueArticle($contenu)
                        ->setImageArticle($imageArticle)
                        ->setTypeArticle($type)
                        ->setPrixArticle((float) $prix)
                        ->setStatutArticle($statut)
                        ->setCategorie($categorie);

                    // Associer un auteur existant si possible (colonne non-nullable)
                    $author = $userRepository->findOneBy([]);
                    if ($author) {
                        $article->setAuteur($author);
                    } else {
                        $this->addFlash('error', 'Aucun utilisateur trouvÃ© pour associer l\'article public. Veuillez vous connecter.');
                        return $this->redirectToRoute('app_login');
                    }

                    $entityManager->persist($article);
                    try {
                        $entityManager->flush();
                    } catch (\Throwable $e) {
                        $msg = sprintf("Article create (public) error: %s - %s", $e->getMessage(), json_encode([
                            'titre' => $titre,
                            'categorie' => $categorieId,
                            'prix' => $prix,
                        ]));
                        @file_put_contents(sys_get_temp_dir().'/novas_db_error.log', $msg.PHP_EOL, FILE_APPEND);
                        $this->addFlash('error', 'Erreur lors de la crÃ©ation de l\'article public. Voir le log.');
                        return $this->redirectToRoute('app_marketplace_index');
                    }

                    $this->addFlash('success', 'Votre article a ete publie avec succes (anonyme). (ID: ' . $article->getId() . ')');
                    return $this->redirectToRoute('app_marketplace_detail', ['id' => $article->getId()]);
                }
            }
        }

        return $this->render('front/marketplace/ajouter_public.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/article/{id}/modifier', name: 'app_marketplace_modifier', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function modifier(
        Request $request,
        int $id,
        ArticleRepository $articleRepository,
        CategorieRepository $categorieRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Allow public modification: no authentication required here

        $article = $articleRepository->find($id);
        if (!$article instanceof Article) {
            throw $this->createNotFoundException('Article introuvable.');
        }

        $categoriesEntities = $categorieRepository->findAll();
        $categories = array_map(static function (Categorie $categorie): array {
            return [
                'id' => $categorie->getId(),
                'nom' => $categorie->getNomCategorie(),
            ];
        }, $categoriesEntities);

        if ($request->isMethod('POST')) {
            $titre = $request->request->get('titre');
            $contenu = $request->request->get('contenu');
            $prix = $request->request->get('prix');
            $type = $request->request->get('type', 'academic');
            $categorieId = $request->request->get('categorie');
            $statut = $request->request->get('statut', 'disponible');
            $imageArticle = trim((string) $request->request->get('image_article', ''));
            $uploadedFile = $request->files->get('image');
            if ($uploadedFile instanceof UploadedFile) {
                $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/images';
                $newFilename = uniqid('article_', true) . '.' . ($uploadedFile->getClientOriginalExtension() ?: 'jpg');
                try {
                    $uploadedFile->move($uploadsDir, $newFilename);
                    $imageArticle = $newFilename;
                } catch (FileException $e) {
                    @file_put_contents(sys_get_temp_dir().'/novas_db_error.log', 'Image upload error (modifier): '.$e->getMessage().PHP_EOL, FILE_APPEND);
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                    $imageArticle = $article->getImageArticle() ?: 'skills-learning.jpg';
                }
            }
            if ($imageArticle === '') {
                $imageArticle = $article->getImageArticle() ?: 'skills-learning.jpg';
            }

            if (!$titre || !$contenu || !$prix || !$categorieId) {
                $this->addFlash('error', 'Merci de remplir tous les champs obligatoires.');
            } else {
                $categorie = $categorieRepository->find($categorieId);

                if (!$categorie instanceof Categorie) {
                    $this->addFlash('error', 'La catÃ©gorie sÃ©lectionnÃ©e est invalide.');
                } else {
                    $article
                        ->setTitreArticle($titre)
                        ->setContenueArticle($contenu)
                        ->setImageArticle($imageArticle)
                        ->setTypeArticle($type)
                        ->setPrixArticle((float) $prix)
                        ->setStatutArticle($statut)
                        ->setCategorie($categorie);

                    $entityManager->flush();

                    $this->addFlash('success', 'Votre article a ete modifie avec succes !');
                    return $this->redirectToRoute('app_marketplace_index');
                }
            }
        }

        return $this->render('front/marketplace/modifier.html.twig', [
            'article' => $article,
            'categories' => $categories,
        ]);
    }

    #[Route('/article/{id}/supprimer', name: 'app_marketplace_supprimer', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function supprimer(
        Request $request,
        int $id,
        ArticleRepository $articleRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Allow public deletion: no authentication required here (CSRF check remains)

        if (!$this->isCsrfTokenValid('supprimer_article_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_marketplace_index');
        }

        $article = $articleRepository->find($id);
        if ($article instanceof Article) {
            $entityManager->remove($article);
            $entityManager->flush();
            $this->addFlash('success', 'Le produit a Ã©tÃ© supprimÃ©.');
        }

        return $this->redirectToRoute('app_marketplace_index');
    }

    #[Route('/categories', name: 'app_marketplace_categories')]
    public function categories(Request $request, CategorieRepository $categorieRepository): Response
    {
        // Support search (q) and sort similar to marketplace
        $q = trim((string) $request->query->get('q', ''));
        $sort = $request->query->get('sort', 'date_desc');

        $qb = $categorieRepository->createQueryBuilder('c');

        if ($q !== '') {
            $isNumeric = ctype_digit($q);
            $expr = 'c.nom_categorie LIKE :q OR c.description_categorie LIKE :q';
            if ($isNumeric) {
                $expr .= ' OR c.id = :qid';
            }

            $qb->andWhere('(' . $expr . ')')
               ->setParameter('q', '%' . $q . '%');

            if ($isNumeric) {
                $qb->setParameter('qid', (int) $q);
            }
        }

        switch ($sort) {
            case 'name_asc':
                $qb->orderBy('c.nom_categorie', 'ASC');
                break;
            case 'name_desc':
                $qb->orderBy('c.nom_categorie', 'DESC');
                break;
            case 'date_asc':
                $qb->orderBy('c.id', 'ASC');
                break;
            case 'date_desc':
            default:
                $qb->orderBy('c.id', 'DESC');
                break;
        }

        $categories = $qb->getQuery()->getResult();

        return $this->render('front/marketplace/categories/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/categorie/ajouter', name: 'app_marketplace_categorie_ajouter', methods: ['GET', 'POST'])]
    public function ajouterCategorie(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        // public category creation: no authentication required

        if ($request->isMethod('POST')) {
            $data = [
                'nom' => trim((string) $request->request->get('nom', '')),
                'description' => trim((string) $request->request->get('description', '')),
            ];

            $constraints = new Assert\Collection([
                'fields' => [
                    'nom' => [
                        new Assert\NotBlank(['message' => 'Le nom de la catÃ©gorie est obligatoire.']),
                        new Assert\Length([
                            'min' => 2,
                            'max' => 255,
                            'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractÃ¨res.',
                            'maxMessage' => 'Le nom ne doit pas dÃ©passer {{ limit }} caractÃ¨res.',
                        ]),
                    ],
                    'description' => new Assert\Optional([
                        new Assert\Length([
                            'max' => 255,
                            'maxMessage' => 'La description ne doit pas dÃ©passer {{ limit }} caractÃ¨res.',
                        ]),
                    ]),
                ],
                'allowExtraFields' => true,
            ]);

            $violations = $validator->validate($data, $constraints);
            $errors = [];
            if (count($violations) > 0) {
                foreach ($violations as $violation) {
                    $errors[] = $violation->getMessage();
                }
            }

            if (!empty($errors)) {
                foreach ($errors as $err) {
                    $this->addFlash('error', $err);
                }
                return $this->render('front/marketplace/categories/ajouter.html.twig', [
                    'data' => $data,
                ]);
            }

            $categorie = new Categorie();
            $categorie
                ->setNomCategorie($data['nom'])
                ->setDescriptionCategorie($data['description']);

            $entityManager->persist($categorie);
            $entityManager->flush();

            $this->addFlash('success', 'CatÃ©gorie crÃ©Ã©e avec succÃ¨s.');
            return $this->redirectToRoute('app_marketplace_categories');
        }

        return $this->render('front/marketplace/categories/ajouter.html.twig');
    }

    #[Route('/categorie/{id}/modifier', name: 'app_marketplace_categorie_modifier', methods: ['GET', 'POST'], requirements: ['id' => '\\d+'])]
    public function modifierCategorie(Request $request, int $id, CategorieRepository $categorieRepository, EntityManagerInterface $entityManager): Response
    {
        // public category modification: no authentication required

        $categorie = $categorieRepository->find($id);
        if (!$categorie instanceof Categorie) {
            throw $this->createNotFoundException('CatÃ©gorie introuvable.');
        }

        if ($request->isMethod('POST')) {
            $nom = trim((string) $request->request->get('nom', ''));
            $description = trim((string) $request->request->get('description', ''));

            if (!$nom) {
                $this->addFlash('error', 'Le nom de la catÃ©gorie est obligatoire.');
            } else {
                $categorie->setNomCategorie($nom)->setDescriptionCategorie($description);
                $entityManager->flush();

                $this->addFlash('success', 'CatÃ©gorie modifiÃ©e avec succÃ¨s.');
                return $this->redirectToRoute('app_marketplace_categories');
            }
        }

        return $this->render('front/marketplace/categories/modifier.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    #[Route('/categorie/{id}/supprimer', name: 'app_marketplace_categorie_supprimer', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function supprimerCategorie(Request $request, int $id, CategorieRepository $categorieRepository, EntityManagerInterface $entityManager): Response
    {
        // public category deletion: no authentication required (CSRF check remains)

        if (!$this->isCsrfTokenValid('supprimer_categorie_' . $id, $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_marketplace_categories');
        }

        $categorie = $categorieRepository->find($id);
        if ($categorie instanceof Categorie) {
            $entityManager->remove($categorie);
            $entityManager->flush();
            $this->addFlash('success', 'La catÃ©gorie a Ã©tÃ© supprimÃ©e.');
        }

        return $this->redirectToRoute('app_marketplace_categories');
    }

    
}
