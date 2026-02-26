<?php

namespace App\Controller\Admin;

use App\Entity\CandidatureJob;
use App\Entity\Offrejob;
use App\Enum\CandidatureStatus;
use App\Enum\ModerationStatus;
use App\Repository\CandidatureJobRepository;
use App\Repository\OffrejobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/moderation')]
class JobsModerationController extends AbstractController
{
    #[Route('/jobs', name: 'app_admin_moderation_jobs', methods: ['GET'])]
    public function pendingJobs(OffrejobRepository $offrejobRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/moderation/jobs.html.twig', [
            'offres' => $offrejobRepository->findPendingModeration(),
        ]);
    }

    #[Route('/jobs/{id}/approve', name: 'app_admin_moderation_jobs_approve', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function approveJob(
        Offrejob $offrejob,
        Request $request,
        EntityManagerInterface $entityManager
    ): RedirectResponse {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$this->isCsrfTokenValid('moderate_job_approve_' . $offrejob->getId(), (string) $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('app_admin_moderation_jobs');
        }

        $offrejob->setModerationStatus(ModerationStatus::APPROVED);
        $entityManager->flush();

        $this->addFlash('success', 'Offre approuvee.');
        return $this->redirectToRoute('app_admin_moderation_jobs');
    }

    #[Route('/jobs/{id}/reject', name: 'app_admin_moderation_jobs_reject', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function rejectJob(
        Offrejob $offrejob,
        Request $request,
        EntityManagerInterface $entityManager
    ): RedirectResponse {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$this->isCsrfTokenValid('moderate_job_reject_' . $offrejob->getId(), (string) $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('app_admin_moderation_jobs');
        }

        $offrejob->setModerationStatus(ModerationStatus::REJECTED);
        $entityManager->flush();

        $this->addFlash('success', 'Offre rejetee.');
        return $this->redirectToRoute('app_admin_moderation_jobs');
    }

    #[Route('/applications', name: 'app_admin_moderation_applications', methods: ['GET'])]
    public function pendingApplications(CandidatureJobRepository $candidatureJobRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/moderation/applications.html.twig', [
            'candidatures' => $candidatureJobRepository->findPendingModeration(),
        ]);
    }

    #[Route('/applications/{id}/approve', name: 'app_admin_moderation_applications_approve', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function approveApplication(
        CandidatureJob $candidatureJob,
        Request $request,
        EntityManagerInterface $entityManager
    ): RedirectResponse {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$this->isCsrfTokenValid('moderate_application_approve_' . $candidatureJob->getId(), (string) $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('app_admin_moderation_applications');
        }

        $candidatureJob->setModerationStatus(ModerationStatus::APPROVED);
        $entityManager->flush();

        $this->addFlash('success', 'Candidature approuvee.');
        return $this->redirectToRoute('app_admin_moderation_applications');
    }

    #[Route('/applications/{id}/reject', name: 'app_admin_moderation_applications_reject', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function rejectApplication(
        CandidatureJob $candidatureJob,
        Request $request,
        EntityManagerInterface $entityManager
    ): RedirectResponse {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$this->isCsrfTokenValid('moderate_application_reject_' . $candidatureJob->getId(), (string) $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('app_admin_moderation_applications');
        }

        $candidatureJob->setModerationStatus(ModerationStatus::REJECTED);
        if ($candidatureJob->getStatutCandidature() === CandidatureStatus::EN_ATTENTE->value) {
            $candidatureJob->setStatutCandidature(CandidatureStatus::REFUSEE);
        }
        $entityManager->flush();

        $this->addFlash('success', 'Candidature rejetee.');
        return $this->redirectToRoute('app_admin_moderation_applications');
    }
}

