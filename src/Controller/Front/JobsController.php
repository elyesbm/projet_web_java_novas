<?php

namespace App\Controller\Front;

use App\Entity\Offrejob;
use App\Entity\CandidatureJob;
use App\Enum\OffreCategorie;
use App\Enum\OffreLieu;
use App\Enum\OffreStatut;
use App\Repository\OffrejobRepository;
use App\Repository\CandidatureJobRepository;
use App\Repository\UserRepository;
use App\Service\OffreQuotaManager;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Nucleos\DompdfBundle\Wrapper\DompdfWrapperInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class JobsController extends AbstractController
{
    #[Route('/jobs', name: 'front_jobs_index', methods: ['GET'])]
    public function index(Request $request, OffrejobRepository $repo, PaginatorInterface $paginator): Response
    {
        $q = trim((string) $request->query->get('q', ''));
        $categorie = $this->normalizeFilter($request->query->get('categorie'), $this->categorieOptions());
        $lieu = $this->normalizeFilter($request->query->get('lieu'), $this->lieuOptions());
        $rawStatut = $request->query->get('statut');
        $statut = $this->normalizeFilter($rawStatut, $this->statutOptions());
        if ($statut === null && (! is_string($rawStatut) || trim($rawStatut) === '')) {
            $statut = OffreStatut::OUVERTE->value;
        }
        $sort = (string) $request->query->get('job_sort', 'date');
        $dir = (string) $request->query->get('job_dir', 'desc');

        $allFilteredOffres = $repo->searchAndSort($q ?: null, $categorie, $lieu, $statut, $sort, $dir);
        $qb = $repo->searchAndSortQueryBuilder($q ?: null, $categorie, $lieu, $statut, $sort, $dir);
        $offres = $paginator->paginate(
            $qb,
            $request->query->getInt('page', 1),
            6
        );

        return $this->render('front/jobs/index.html.twig', [
            'offres' => $offres,
            'offres_for_stats' => $allFilteredOffres,
            'q' => $q,
            'categorie' => $categorie,
            'lieu' => $lieu,
            'statut' => $statut,
            'sort' => $sort,
            'dir' => $dir,
            'categorie_options' => $this->categorieOptions(),
            'lieu_options' => $this->lieuOptions(),
            'statut_options' => $this->statutOptions(),
        ]);
    }

    #[Route('/jobs/{id}', name: 'front_jobs_detail', methods: ['GET'], requirements: ['id' => '\\d+'])]
    public function detail(
        Offrejob $offre,
        CandidatureJobRepository $candRepo,
        OffrejobRepository $offreRepo,
        EntityManagerInterface $em
    ): Response {
        if ($offre->getStatutOffre() === OffreStatut::OUVERTE->value && $offre->isExpired()) {
            $offre->setStatutOffre(OffreStatut::EXPIREE);
            $em->flush();
        }

        $user = $this->getUser();

        $isCreateur = false;
        if ($user && method_exists($user, 'getId') && $offre->getCreateur()?->getId() === $user->getId()) {
            $isCreateur = true;
        }

        $dejaPostule = false;
        if ($user) {
            $dejaPostule = (bool) $candRepo->findOneBy(['offre' => $offre, 'candidat' => $user]);
        }

        $jobsSimilaires = $offreRepo->findBy(
            ['categorie_offre' => $offre->getCategorieOffre()],
            ['date_creation_offre' => 'DESC'],
            4
        );

        $jobsSimilaires = array_values(array_filter($jobsSimilaires, fn($o) => $o->getId() !== $offre->getId()));
        $jobsSimilaires = array_slice($jobsSimilaires, 0, 3);

        return $this->render('front/jobs/detail.html.twig', [
            'offre' => $offre,
            'isCreateur' => $isCreateur,
            'dejaPostule' => $dejaPostule,
            'jobsSimilaires' => $jobsSimilaires,
        ]);
    }

    #[Route('/jobs/{id}/export-pdf', name: 'front_jobs_export_pdf', methods: ['GET'], requirements: ['id' => '\\d+'])]
    public function exportPdf(Offrejob $offre, DompdfWrapperInterface $dompdf): Response
    {
        $html = $this->renderView('pdf/jobs/single_offer.html.twig', [
            'offre' => $offre,
            'generatedAt' => new \DateTimeImmutable(),
        ]);

        $pdf = $dompdf->getPdf($html, [
            'defaultPaperSize' => 'a4',
            'defaultPaperOrientation' => 'portrait',
        ]);

        $response = new Response($pdf);
        $filename = sprintf('job-offer-%d.pdf', $offre->getId() ?? 0);
        $disposition = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $filename);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/jobs/{id}/postuler', name: 'front_jobs_apply', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function apply(
        Offrejob $offre,
        Request $request,
        EntityManagerInterface $em,
        CandidatureJobRepository $candRepo,
        UserRepository $userRepo,
        ValidatorInterface $validator
    ): Response {
        if (! $this->isCsrfTokenValid('jobs_apply_' . $offre->getId(), (string) $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_jobs_detail', ['id' => $offre->getId()]);
        }

        $user = $this->getUser();
        if (!$user) {
            $user = $userRepo->findOneBy([]); // fallback any user
            if (!$user) {
                $this->addFlash('danger', 'Aucun utilisateur trouvÃ© en base. CrÃ©e un user dâ€™abord.');
                return $this->redirectToRoute('front_jobs_detail', ['id' => $offre->getId()]);
            }
        }

        $already = $candRepo->findOneBy(['offre' => $offre, 'candidat' => $user]);
        if ($already) {
            $this->addFlash('warning', 'Vous avez dÃ©jÃ  postulÃ© Ã  cette offre.');
            return $this->redirectToRoute('front_jobs_detail', ['id' => $offre->getId()]);
        }

        if ($offre->getStatutOffre() === OffreStatut::OUVERTE->value && $offre->isExpired()) {
            $offre->setStatutOffre(OffreStatut::EXPIREE);
            $em->flush();
            $this->addFlash('warning', 'Cette offre est expiree.');
            return $this->redirectToRoute('front_jobs_detail', ['id' => $offre->getId()]);
        }

        if ($offre->getStatutOffre() !== OffreStatut::OUVERTE->value || $offre->getCapaciteRestante() <= 0) {
            $this->addFlash('warning', 'Cette offre n\'accepte plus de candidatures.');
            return $this->redirectToRoute('front_jobs_detail', ['id' => $offre->getId()]);
        }

        $msg = trim((string) $request->request->get('message_candidature', ''));
        if ($msg === '') {
            $this->addFlash('warning', 'Message obligatoire.');
            return $this->redirectToRoute('front_jobs_detail', ['id' => $offre->getId()]);
        }

        $cvFile = $request->files->get('cv_file');
        if ($cvFile !== null && ! $cvFile instanceof UploadedFile) {
            $this->addFlash('warning', 'Fichier CV invalide.');
            return $this->redirectToRoute('front_jobs_detail', ['id' => $offre->getId()]);
        }

        $c = new CandidatureJob();
        $c->setOffre($offre);
        $c->setCandidat($user);
        $c->setMessageCandidature($msg);
        $c->setStatutCandidature('EN_ATTENTE');
        $c->setDateCandidature(new \DateTime());
        $c->setCvFile($cvFile);

        $violations = $validator->validate($c);
        if (count($violations) > 0) {
            foreach ($violations as $violation) {
                $this->addFlash('warning', $violation->getMessage());
            }

            return $this->redirectToRoute('front_jobs_detail', ['id' => $offre->getId()]);
        }

        $em->persist($c);
        $em->flush();

        $this->addFlash('success', 'Candidature envoyÃ©e ?');
        return $this->redirectToRoute('front_jobs_my_candidatures');
    }

    #[Route('/jobs/mes-candidatures', name: 'front_jobs_my_candidatures', methods: ['GET'])]
    public function mesCandidatures(
        CandidatureJobRepository $repo,
        UserRepository $userRepo
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            $user = $userRepo->findOneBy([]);
        }

        $cands = $user
            ? $repo->findBy(['candidat' => $user], ['date_candidature' => 'DESC'])
            : [];

        $stats = [
            'total' => count($cands),
            'enAttente' => 0,
            'acceptees' => 0,
            'refusees' => 0,
        ];

        foreach ($cands as $c) {
            $st = $c->getStatutCandidature();
            if ($st === 'EN_ATTENTE') {
                $stats['enAttente']++;
            } elseif ($st === 'ACCEPTEE') {
                $stats['acceptees']++;
            } elseif ($st === 'REFUSEE') {
                $stats['refusees']++;
            }
        }

        return $this->render('front/jobs/mes_candidatures.html.twig', [
            'candidatures' => $cands,
            'stats' => $stats,
            'admin_view' => false,
        ]);
    }

    #[Route('/jobs/mes-candidatures/export-pdf', name: 'front_jobs_my_candidatures_export_pdf', methods: ['GET'])]
    public function exportMyCandidaturesPdf(
        CandidatureJobRepository $repo,
        UserRepository $userRepo,
        DompdfWrapperInterface $dompdf
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            $user = $userRepo->findOneBy([]);
        }

        $cands = $user
            ? $repo->findBy(['candidat' => $user], ['date_candidature' => 'DESC'])
            : [];

        $html = $this->renderView('pdf/jobs/my_applications.html.twig', [
            'candidatures' => $cands,
            'user' => $user,
            'generatedAt' => new \DateTimeImmutable(),
        ]);

        $pdf = $dompdf->getPdf($html, [
            'defaultPaperSize' => 'a4',
            'defaultPaperOrientation' => 'portrait',
        ]);

        $response = new Response($pdf);
        $filename = 'my-applications.pdf';
        $disposition = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $filename);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    #[Route('/jobs/mes-offres', name: 'front_jobs_my_offres', methods: ['GET'])]
    public function myOffres(Request $request, OffrejobRepository $repo, UserRepository $userRepo): Response
    {
        $user = $this->getUser();
        if (!$user) {
            $user = $userRepo->findOneBy([]);
            if (!$user) {
                $this->addFlash('danger', 'Aucun utilisateur trouvÃ© en base. CrÃ©e un user dâ€™abord.');
                return $this->redirectToRoute('front_jobs_index');
            }
        }

        $q = trim((string) $request->query->get('q', ''));
        $statut = $this->normalizeFilter($request->query->get('statut'), $this->statutOptions());
        $sort = (string) $request->query->get('sort', 'date');
        $dir = (string) $request->query->get('dir', 'desc');

        $offres = $repo->searchMine((int) $user->getId(), $q ?: null, null, null, $statut, $sort, $dir);

        $stats = [
            'total' => count($offres),
            'actives' => 0,
            'pourvues' => 0,
            'candidatures' => 0,
        ];

        foreach ($offres as $offre) {
            $stats['candidatures'] += $offre->getCandidatures()->count();
            if ($offre->getStatutOffre() === OffreStatut::OUVERTE->value) {
                $stats['actives']++;
            } else {
                $stats['pourvues']++;
            }
        }

        return $this->render('front/jobs/mes_offres.html.twig', [
            'offres' => $offres,
            'q' => $q,
            'sort' => $sort,
            'dir' => $dir,
            'stats' => $stats,
            'statut_filter' => $statut,
        ]);
    }

    #[Route('/jobs/ajouter', name: 'front_jobs_add', methods: ['GET','POST'])]
    public function add(
        Request $request,
        EntityManagerInterface $em,
        UserRepository $userRepo
    ): Response {
        $form = [
            'categorie_offre' => 'TUTORAT',
            'titre_offre' => '',
            'description_offre' => '',
            'lieu' => 'EN_LIGNE',
            'statut_offre' => 'OUVERTE',
            'capacite_max' => 5,
            'date_expiration' => (new \DateTimeImmutable('+30 days'))->format('Y-m-d\TH:i'),
        ];
        $errors = [];

        if ($request->isMethod('GET')) {
            return $this->render('front/jobs/ajouter.html.twig', [
                'mode' => 'create',
                'offre' => null,
                'form' => $form,
                'errors' => $errors,
                'categorie_options' => $this->categorieOptions(),
                'lieu_options' => $this->lieuOptions(),
            ]);
        }

        if (! $this->isCsrfTokenValid('jobs_form_create', (string) $request->request->get('_token'))) {
            $errors['global'] = 'Jeton CSRF invalide.';
        }

        $user = $this->getUser();
        if (!$user) {
            $user = $userRepo->findOneBy([]); // fallback any user
        }

        if (!$user) {
            $errors['global'] = 'Impossible de publier: aucun utilisateur en base (table user vide).';
            return $this->render('front/jobs/ajouter.html.twig', [
                'mode' => 'create',
                'offre' => null,
                'form' => $form,
                'errors' => $errors,
                'categorie_options' => $this->categorieOptions(),
                'lieu_options' => $this->lieuOptions(),
            ]);
        }

        $form['categorie_offre'] = (string) $request->request->get('categorie_offre', $form['categorie_offre']);
        $form['titre_offre'] = trim((string) $request->request->get('titre_offre', ''));
        $form['description_offre'] = trim((string) $request->request->get('description_offre', ''));
        $form['lieu'] = (string) $request->request->get('lieu', $form['lieu']);
        $form['statut_offre'] = (string) $request->request->get('statut_offre', $form['statut_offre']);
        $form['capacite_max'] = (int) $request->request->get('capacite_max', $form['capacite_max']);
        $form['date_expiration'] = trim((string) $request->request->get('date_expiration', $form['date_expiration']));

        $this->validateJobForm($form, $errors);

        if ($errors) {
            return $this->render('front/jobs/ajouter.html.twig', [
                'mode' => 'create',
                'offre' => null,
                'form' => $form,
                'errors' => $errors,
                'categorie_options' => $this->categorieOptions(),
                'lieu_options' => $this->lieuOptions(),
            ]);
        }

        $o = new Offrejob();
        $o->setTitreOffre($form['titre_offre']);
        $o->setDescriptionOffre($form['description_offre']);
        $o->setCategorieOffre($form['categorie_offre']);
        $o->setLieu($form['lieu']);
        $o->setStatutOffre($form['statut_offre']);
        $o->setCapaciteMax($form['capacite_max']);
        $o->setCapaciteRestante($form['capacite_max']);
        $o->setDateCreationOffre(new \DateTime());
        $o->setDateExpiration($this->parseDateExpiration($form['date_expiration']) ?? new \DateTimeImmutable('+30 days'));
        $o->setCreateur($user);

        $em->persist($o);
        $em->flush();

        $this->addFlash('success', 'Offre ajoutÃ©e ?');
        return $this->redirectToRoute('front_jobs_index');
    }

    #[Route('/jobs/{id}/modifier', name: 'front_jobs_edit', methods: ['GET','POST'], requirements: ['id' => '\\d+'])]
    public function edit(
        Offrejob $offre,
        Request $request,
        EntityManagerInterface $em,
        UserRepository $userRepo
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            $user = $userRepo->findOneBy([]);
        }

        if ($user && $offre->getCreateur()?->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        $form = [
            'categorie_offre' => $offre->getCategorieOffre() ?: 'TUTORAT',
            'titre_offre' => $offre->getTitreOffre() ?: '',
            'description_offre' => $offre->getDescriptionOffre() ?: '',
            'lieu' => $offre->getLieu() ?: 'EN_LIGNE',
            'statut_offre' => $offre->getStatutOffre() ?: 'OUVERTE',
            'capacite_max' => $offre->getCapaciteMax(),
            'date_expiration' => $offre->getDateExpiration()?->format('Y-m-d\TH:i') ?? '',
        ];
        $errors = [];

        if ($request->isMethod('POST')) {
            if (! $this->isCsrfTokenValid('jobs_form_edit_' . $offre->getId(), (string) $request->request->get('_token'))) {
                $errors['global'] = 'Jeton CSRF invalide.';
            }

            $form['categorie_offre'] = (string) $request->request->get('categorie_offre', $form['categorie_offre']);
            $form['titre_offre'] = trim((string) $request->request->get('titre_offre', ''));
            $form['description_offre'] = trim((string) $request->request->get('description_offre', ''));
            $form['lieu'] = (string) $request->request->get('lieu', $form['lieu']);
            $form['statut_offre'] = (string) $request->request->get('statut_offre', $form['statut_offre']);
            $form['capacite_max'] = (int) $request->request->get('capacite_max', $form['capacite_max']);
            $form['date_expiration'] = trim((string) $request->request->get('date_expiration', $form['date_expiration']));

            $this->validateJobForm($form, $errors);

            $acceptedCount = $this->countAcceptedCandidatures($offre);
            if ($form['capacite_max'] < $acceptedCount) {
                $errors['capacite_max'] = sprintf(
                    'La capacite maximale doit etre >= au nombre de candidatures acceptees (%d).',
                    $acceptedCount
                );
            }

            if ($errors) {
                return $this->render('front/jobs/ajouter.html.twig', [
                    'mode' => 'edit',
                    'offre' => $offre,
                    'form' => $form,
                    'errors' => $errors,
                    'categorie_options' => $this->categorieOptions(),
                    'lieu_options' => $this->lieuOptions(),
                ]);
            }

            $offre->setTitreOffre($form['titre_offre']);
            $offre->setDescriptionOffre($form['description_offre']);
            $offre->setCategorieOffre($form['categorie_offre']);
            $offre->setLieu($form['lieu']);
            $offre->setCapaciteMax($form['capacite_max']);
            $offre->setDateExpiration($this->parseDateExpiration($form['date_expiration']) ?? $offre->getDateExpiration() ?? new \DateTimeImmutable('+30 days'));

            $remaining = max(0, $form['capacite_max'] - $acceptedCount);
            $offre->setCapaciteRestante($remaining);

            $status = $form['statut_offre'];
            if ($remaining === 0 && $status === OffreStatut::OUVERTE->value) {
                $status = OffreStatut::FERMEE->value;
            }
            $offre->setStatutOffre($status);

            $em->flush();

            $this->addFlash('success', 'Offre modifiÃ©e ?');
            return $this->redirectToRoute('front_jobs_my_offres');
        }

        return $this->render('front/jobs/ajouter.html.twig', [
            'mode' => 'edit',
            'offre' => $offre,
            'form' => $form,
            'errors' => $errors,
            'categorie_options' => $this->categorieOptions(),
            'lieu_options' => $this->lieuOptions(),
        ]);
    }

    #[Route('/jobs/{id}/supprimer', name: 'front_jobs_delete', methods: ['POST'], requirements: ['id' => '\\d+'])]
    public function delete(
        Offrejob $offre,
        Request $request,
        EntityManagerInterface $em,
        UserRepository $userRepo
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            $user = $userRepo->findOneBy([]);
        }

        if ($user && $offre->getCreateur()?->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        if (! $this->isCsrfTokenValid('jobs_delete_' . $offre->getId(), (string) $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_jobs_my_offres');
        }

        $em->remove($offre);
        $em->flush();

        $this->addFlash('success', 'Offre supprimÃ©e ???');
        return $this->redirectToRoute('front_jobs_my_offres');
    }

    #[Route('/jobs/{id}/candidatures', name: 'front_jobs_candidatures', methods: ['GET'], requirements: ['id' => '\\d+'])]
    public function candidatures(
        Offrejob $offre,
        CandidatureJobRepository $repo,
        UserRepository $userRepo
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            $user = $userRepo->findOneBy([]);
        }

        if (!$user || $offre->getCreateur()?->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        $cands = $repo->findBy(['offre' => $offre], ['date_candidature' => 'DESC']);
        $stats = [
            'total' => count($cands),
            'enAttente' => 0,
            'acceptees' => 0,
            'refusees' => 0,
        ];

        foreach ($cands as $c) {
            $st = $c->getStatutCandidature();
            if ($st === 'EN_ATTENTE') {
                $stats['enAttente']++;
            } elseif ($st === 'ACCEPTEE') {
                $stats['acceptees']++;
            } elseif ($st === 'REFUSEE') {
                $stats['refusees']++;
            }
        }

        return $this->render('front/jobs/mes_candidatures.html.twig', [
            'candidatures' => $cands,
            'stats' => $stats,
            'admin_view' => true,
            'can_manage' => true,
            'manage_route' => 'front_jobs_candidature_status',
            'offre' => $offre,
        ]);
    }

    #[Route('/jobs/candidature/{id}/status/{status}', name: 'front_jobs_candidature_status', methods: ['POST'], requirements: ['id' => '\\d+', 'status' => 'ACCEPTEE|REFUSEE'])]
    public function setCandidatureStatus(
        int $id,
        string $status,
        Request $request,
        CandidatureJobRepository $candRepo,
        UserRepository $userRepo,
        OffreQuotaManager $quotaManager
    ): Response {
        $cand = $candRepo->find($id);
        if (!$cand) {
            throw $this->createNotFoundException();
        }

        $user = $this->getUser();
        if (!$user) {
            $user = $userRepo->findOneBy([]);
        }

        if (!$user || $cand->getOffre()?->getCreateur()?->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        if (! $this->isCsrfTokenValid('cand_status_' . $cand->getId() . '_' . $status, (string) $request->request->get('_token'))) {
            $this->addFlash('danger', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('front_jobs_candidatures', ['id' => $cand->getOffre()->getId()]);
        }

        $result = $quotaManager->applyCandidatureStatus($cand, $status);
        $this->addFlash($result['ok'] ? 'success' : 'warning', $result['message']);
        return $this->redirectToRoute('front_jobs_candidatures', ['id' => $cand->getOffre()->getId()]);
    }

    private function categorieOptions(): array
    {
        return [
            OffreCategorie::TUTORAT->value => 'Tutorat',
            OffreCategorie::AIDE->value => 'Aide acadÃ©mique',
            OffreCategorie::CREATION->value => 'CrÃ©ation',
        ];
    }

    private function lieuOptions(): array
    {
        return [
            OffreLieu::EN_LIGNE->value => 'En ligne',
            OffreLieu::PRESENTIEL->value => 'PrÃ©sentiel',
        ];
    }

    private function statutOptions(): array
    {
        return [
            OffreStatut::OUVERTE->value => 'Ouverte',
            OffreStatut::FERMEE->value => 'Fermee',
            OffreStatut::EXPIREE->value => 'Expiree',
        ];
    }

    private function normalizeFilter($value, array $options): ?string
    {
        $value = is_string($value) ? trim($value) : '';
        if ($value === '' || ! array_key_exists($value, $options)) {
            return null;
        }

        return $value;
    }

    private function validateJobForm(array $form, array &$errors): void
    {
        if ($form['titre_offre'] === '' || mb_strlen($form['titre_offre']) < 3) {
            $errors['titre_offre'] = 'Le titre est obligatoire (min 3 caractÃ¨res).';
        }

        if ($form['description_offre'] === '' || mb_strlen($form['description_offre']) < 10) {
            $errors['description_offre'] = 'La description est obligatoire (min 10 caractÃ¨res).';
        }

        if (! array_key_exists($form['categorie_offre'], $this->categorieOptions())) {
            $errors['categorie_offre'] = 'CatÃ©gorie invalide.';
        }

        if (! array_key_exists($form['lieu'], $this->lieuOptions())) {
            $errors['lieu'] = 'Lieu invalide.';
        }

        if (! array_key_exists($form['statut_offre'], $this->statutOptions())) {
            $errors['statut_offre'] = 'Statut invalide.';
        }

        if (! isset($form['capacite_max']) || $form['capacite_max'] <= 0) {
            $errors['capacite_max'] = 'La capacite maximale doit etre superieure a 0.';
        }

        $expiration = $this->parseDateExpiration($form['date_expiration'] ?? null);
        if (! $expiration) {
            $errors['date_expiration'] = 'La date d expiration est invalide.';
        } elseif ($expiration <= new \DateTimeImmutable()) {
            $errors['date_expiration'] = 'La date d expiration doit etre dans le futur.';
        }
    }

    private function countAcceptedCandidatures(Offrejob $offre): int
    {
        $count = 0;
        foreach ($offre->getCandidatures() as $candidature) {
            if ($candidature->getStatutCandidature() === 'ACCEPTEE') {
                $count++;
            }
        }

        return $count;
    }

    private function parseDateExpiration(?string $value): ?\DateTimeImmutable
    {
        if (! is_string($value) || trim($value) === '') {
            return null;
        }

        try {
            return new \DateTimeImmutable($value);
        } catch (\Throwable) {
            return null;
        }
    }
}







