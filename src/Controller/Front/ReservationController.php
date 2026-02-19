<?php

namespace App\Controller\Front;

use App\Entity\Reservation;
use App\Entity\User;
use App\Form\ReservationType;
use App\Repository\AtelierRepository;
use App\Repository\ReservationRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/reservation')]
class ReservationController extends AbstractController
{
    #[Route('/mes-reservations', name: 'app_reservation_mes', methods: ['GET'])]
    #[Route('/mes-reservations/{id}', name: 'app_reservation_mes_legacy', requirements: ['id' => '\\d+'], methods: ['GET'])]
    public function mesReservations(
        Request $request,
        ReservationRepository $reservationRepository,
        UserRepository $userRepository,
        ?int $id = null
    ): Response {
        $user = $this->resolveUser($userRepository);
        if ($id !== null && $user->getId() !== $id) {
            throw $this->createAccessDeniedException('Vous ne pouvez consulter que vos reservations.');
        }

        $search = $request->query->get('search', '');
        $statut = $request->query->get('statut');
        $sort = (string) $request->query->get('sort', 'date_asc');

        $statutInt = null;
        if ($statut !== null && $statut !== '') {
            $candidate = (int) $statut;
            if (in_array($candidate, [0, 1, 2], true)) {
                $statutInt = $candidate;
            }
        }

        $allowedSorts = ['date_asc', 'date_desc', 'statut_asc', 'statut_desc', 'titre_asc', 'titre_desc', 'recent'];
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'date_asc';
        }

        $all = $reservationRepository->searchAndFilterByUser($user, $search, $statutInt, $sort);

        $today = new \DateTimeImmutable('today');
        $reservations = [];
        $historique = [];
        $historiqueIds = [];

        foreach ($all as $reservation) {
            $atelier = $reservation->getAtelier();
            if (!$atelier || !$atelier->getDateAtelier()) {
                continue;
            }

            $dateAtelier = \DateTimeImmutable::createFromInterface($atelier->getDateAtelier());
            if ($dateAtelier >= $today) {
                $reservations[] = $reservation;
                continue;
            }

            $historique[] = $reservation;
            $historiqueIds[$reservation->getId()] = true;
        }

        return $this->render('front/reservation/mes_reservations.html.twig', [
            'user' => $user,
            'reservations' => $reservations,
            'historique' => $historique,
            'reservations_all' => $all,
            'historique_ids' => $historiqueIds,
            'search' => $search,
            'statut' => $statutInt,
            'sort' => $sort,
        ]);
    }

    #[Route('/{id}/reserver', name: 'app_reservation_reserver', requirements: ['id' => '\\d+'], methods: ['GET', 'POST'])]
    #[Route('/{id}/reserver/{userId}', name: 'app_reservation_reserver_legacy', requirements: ['id' => '\\d+', 'userId' => '\\d+'], methods: ['GET', 'POST'])]
    public function reserver(
        Request $request,
        AtelierRepository $atelierRepository,
        ReservationRepository $reservationRepository,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        int $id,
        ?int $userId = null
    ): Response {
        $atelier = $atelierRepository->find($id);
        if (!$atelier) {
            throw $this->createNotFoundException('Atelier introuvable.');
        }

        $user = $this->resolveUser($userRepository);
        if ($userId !== null && $user->getId() !== $userId) {
            throw $this->createAccessDeniedException('Vous ne pouvez reserver que pour votre propre compte.');
        }

        if ($reservationRepository->existsForUserAndAtelier($user, $atelier)) {
            $this->addFlash('warning', 'Vous avez deja une reservation pour cet atelier.');
            return $this->redirectToRoute('app_reservation_mes');
        }

        $reservation = new Reservation();
        $reservation->setAtelier($atelier);
        $reservation->setUser($user);
        $reservation->setStatutReservation(0);

        $fullName = trim(sprintf('%s %s', (string) $user->getPrenom(), (string) $user->getNom()));
        $reservation->setNomUser($fullName !== '' ? $fullName : ((string) $user->getNom() ?: 'Utilisateur'));
        $reservation->setEmailUser((string) ($user->getEmail() ?? ''));

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservation);
            $entityManager->flush();

            $this->addFlash('success', 'Votre reservation a ete enregistree avec succes.');
            return $this->redirectToRoute('app_reservation_mes');
        }

        return $this->render('front/reservation/reserver.html.twig', [
            'atelier' => $atelier,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/export-pdf/{id}', name: 'app_reservation_export_pdf', requirements: ['id' => '\\d+'])]
    public function exportPdf(int $id, ReservationRepository $reservationRepository, UserRepository $userRepository): Response
    {
        $reservation = $reservationRepository->find($id);
        if (!$reservation) {
            throw $this->createNotFoundException('Reservation introuvable.');
        }
        $this->assertReservationOwner($reservation, $this->resolveUser($userRepository));

        $html = $this->renderView('front/reservation/pdf_reservation.html.twig', [
            'reservation' => $reservation,
        ]);

        if (class_exists(\Dompdf\Dompdf::class)) {
            $dompdf = new \Dompdf\Dompdf();
            $dompdf->getOptions()->set('isRemoteEnabled', true);
            $dompdf->getOptions()->set('defaultFont', 'DejaVu Sans');
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            return new Response($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="reservation-' . $reservation->getId() . '.pdf"',
            ]);
        }

        $printHtml = $this->renderView('front/reservation/pdf_reservation_print.html.twig', [
            'reservation' => $reservation,
            'content' => $html,
        ]);

        return new Response($printHtml, 200, ['Content-Type' => 'text/html; charset=UTF-8']);
    }

    #[Route('/qrcode/{id}', name: 'app_reservation_qrcode', requirements: ['id' => '\\d+'])]
    public function qrcode(
        int $id,
        ReservationRepository $reservationRepository,
        UrlGeneratorInterface $urlGenerator,
        UserRepository $userRepository
    ): Response
    {
        $reservation = $reservationRepository->find($id);
        if (!$reservation) {
            throw $this->createNotFoundException('Reservation introuvable.');
        }
        $this->assertReservationOwner($reservation, $this->resolveUser($userRepository));

        $pdfUrl = $urlGenerator->generate('app_reservation_export_pdf', ['id' => $id], UrlGeneratorInterface::ABSOLUTE_URL);

        return $this->render('front/reservation/qrcode_reservation.html.twig', [
            'reservation' => $reservation,
            'qr_url' => $pdfUrl,
        ]);
    }

    #[Route('/annuler/{id}', name: 'app_reservation_annuler', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function annuler(
        int $id,
        Request $request,
        ReservationRepository $reservationRepository,
        EntityManagerInterface $entityManager,
        UserRepository $userRepository
    ): Response {
        $reservation = $reservationRepository->find($id);
        if (!$reservation) {
            throw $this->createNotFoundException('Reservation introuvable.');
        }
        $this->assertReservationOwner($reservation, $this->resolveUser($userRepository));

        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('annuler' . $id, $token)) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $entityManager->remove($reservation);
        $entityManager->flush();

        $this->addFlash('success', 'Reservation annulee.');
        return $this->redirectToRoute('app_reservation_mes');
    }

    private function resolveUser(UserRepository $userRepository): User
    {
        $securityUser = $this->getUser();
        if ($securityUser instanceof User) {
            return $securityUser;
        }

        if ($securityUser !== null && method_exists($securityUser, 'getUserIdentifier')) {
            $identifier = $securityUser->getUserIdentifier();
            if ($identifier !== '') {
                $user = $userRepository->findOneBy(['email' => $identifier]);
                if ($user instanceof User) {
                    return $user;
                }
            }
        }

        throw $this->createAccessDeniedException('Authentication required.');
    }

    private function assertReservationOwner(Reservation $reservation, User $user): void
    {
        $ownerId = $reservation->getUser()?->getId();
        if ($ownerId === null || $ownerId !== $user->getId()) {
            throw $this->createAccessDeniedException('Acces refuse a cette reservation.');
        }
    }
}
