<?php

namespace App\Controller\Front;

use App\Service\CvAnalysisService;
use App\Service\ScoreHistoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user/cv')]
class CvController extends AbstractController
{
    /**
     * Dashboard d'analyse CV (affichage du profil existant)
     */
    #[Route('', name: 'app_cv_dashboard')]
    public function dashboard(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('front/cv/dashboard.html.twig', [
            'user'      => $user,
            'cvProfile' => $user->getCvProfile(),
        ]);
    }

    /**
     * Upload + analyse du CV
     */
    #[Route('/upload', name: 'app_cv_upload', methods: ['POST'])]
    public function upload(Request $request, CvAnalysisService $cvAnalysisService, ScoreHistoryService $scoreHistoryService): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Non connecté'], 401);
        }

        // Validation CSRF
        if (!$this->isCsrfTokenValid('cv_upload', $request->request->get('_csrf_token', ''))) {
            return $this->json(['error' => 'Token invalide'], 403);
        }

        $file = $request->files->get('cv_file');
        if (!$file) {
            return $this->json(['error' => 'Aucun fichier reçu'], 400);
        }

        // Vérification type MIME
        $allowed = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'text/plain'];
        $mime = $file->getMimeType();
        if (!in_array($mime, $allowed)) {
            return $this->json(['error' => 'Format non supporté. Utilisez PDF, DOCX ou TXT.'], 400);
        }

        // Vérification taille (5 Mo max)
        if ($file->getSize() > 5 * 1024 * 1024) {
            return $this->json(['error' => 'Fichier trop volumineux (5 Mo max)'], 400);
        }

        // Sauvegarde du fichier
        $uploadsDir = $this->getParameter('kernel.project_dir') . '/var/cv_uploads';
        if (!is_dir($uploadsDir)) {
            mkdir($uploadsDir, 0755, true);
        }

        $safeName  = 'cv_' . $user->getId() . '_' . time() . '.' . $file->guessExtension();
        $file->move($uploadsDir, $safeName);
        $filePath  = $uploadsDir . '/' . $safeName;

        // Analyse IA
        try {
            // Snapshot de l’ancien profil avant analyse
            $oldProfile = clone ($user->getCvProfile() ?? new \App\Entity\CvProfile());
            $profile = $cvAnalysisService->analyzeAndStore($user, $filePath, $file->getClientOriginalName());

            // 📊 Historique des scores
            try {
                $scoreHistoryService->recordCvAnalysis($user, $oldProfile, $profile);
            } catch (\Throwable) { /* non-bloquant */ }

            return $this->json([
                'success'  => true,
                'redirect' => $this->generateUrl('app_cv_dashboard'),
            ]);
        } catch (\Throwable $e) {
            return $this->json(['error' => 'Erreur lors de l\'analyse : ' . $e->getMessage()], 500);
        }
    }
}
