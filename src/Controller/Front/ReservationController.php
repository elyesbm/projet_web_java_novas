<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\AtelierRepository;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;


#[Route('/reservation')]
class ReservationController extends AbstractController
{
    /**
     * Mes réservations pour l'utilisateur dont l'id est dans l'URL (ex: /reservation/mes-reservations/1)
     */
    #[Route('/mes-reservations/{id}', name: 'app_reservation_mes', requirements: ['id' => '\d+'])]
    public function mesReservations(int $id, UserRepository $userRepository): Response
    {
        $user = $userRepository->find($id);
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        $today = new \DateTimeImmutable('today');
        $toutes = $user->getReservations();

        $reservations = [];
        $historique = [];
        foreach ($toutes as $reservation) {
            $atelier = $reservation->getAtelier();
            if (!$atelier || !$atelier->getDateAtelier()) {
                continue;
            }
            $dateAtelier = $atelier->getDateAtelier() instanceof \DateTimeInterface
                ? \DateTimeImmutable::createFromInterface($atelier->getDateAtelier())
                : null;
            if ($dateAtelier && $dateAtelier >= $today) {
                $reservations[] = $reservation;
            } else {
                $historique[] = $reservation;
            }
        }

        return $this->render('front/reservation/mes_reservations.html.twig', [
            'user' => $user,
            'reservations' => $reservations,
            'historique' => $historique,
        ]);
    }

    #[Route('/{id}/reserver/{userId}',name: 'app_reservation_reserver',requirements: ['id' => '\d+', 'userId' => '\d+'], methods: ['GET', 'POST'])]
    public function reserver(
        Request $request,
        AtelierRepository $atelierRepository,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        int $id,
        int $userId ): Response
    
    {
        // 🔍 Récupération de l'atelier
        $atelier = $atelierRepository->find($id);

        if (!$atelier) {
            throw $this->createNotFoundException('Atelier introuvable');
        }
        $user = $userRepository->find($userId);

        if (!$user) {
         throw $this->createNotFoundException('Utilisateur introuvable');
          }

        // 🆕 Nouvelle réservation
        $reservation = new Reservation();

        // 🧾 Création du formulaire lié à l'entité Reservation
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        // ✅ Soumission valide
        if ($form->isSubmitted() && $form->isValid()) {

            // 🔗 Relations métier
            $reservation->setAtelier($atelier);
            $reservation->setUser($this->getUser());
            $reservation->setStatutReservation(0); // 0 = en attente

            // 💾 Sauvegarde
            $entityManager->persist($reservation);
            $entityManager->flush();

            // 🔔 Message succès
            $this->addFlash('success', 'Votre réservation a été enregistrée avec succès');

            return $this->redirectToRoute('app_reservation_mes', ['id' => $user->getId()]);
        }

        // 🎨 Affichage du formulaire (design intact)
        return $this->render('front/reservation/reserver.html.twig', [
            'atelier' => $atelier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Annuler (supprimer) une réservation.
     */
    #[Route('/annuler/{id}', name: 'app_reservation_annuler', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function annuler(int $id, Request $request, ReservationRepository $reservationRepository, EntityManagerInterface $em): Response
    {
        $reservation = $reservationRepository->find($id);
        if (!$reservation) {
            throw $this->createNotFoundException('Réservation introuvable.');
        }

        $token = $request->request->get('_token');
        if (!$this->isCsrfTokenValid('annuler' . $id, $token)) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $userId = $reservation->getUser() ? $reservation->getUser()->getId() : null;
        $em->remove($reservation);
        $em->flush();

        $this->addFlash('success', 'Réservation annulée.');

        if ($userId !== null) {
            return $this->redirectToRoute('app_reservation_mes', ['id' => $userId]);
        }
        return $this->redirectToRoute('app_home');
    }
}