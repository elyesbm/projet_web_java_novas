<?php

namespace App\Controller\Admin;

use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/reservations', name: 'app_admin_reservations_')]
class ReservationAdminController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function list(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findBy([], ['id' => 'DESC']);

        $stats = [
            'total' => count($reservations),
            'en_attente' => 0,
            'acceptees' => 0,
            'refusees' => 0,
        ];
        foreach ($reservations as $r) {
            if ($r->getStatutReservation() === 0) {
                $stats['en_attente']++;
            } elseif ($r->getStatutReservation() === 1) {
                $stats['acceptees']++;
            } else {
                $stats['refusees']++;
            }
        }

        return $this->render('admin/reservation/list.html.twig', [
            'reservations' => $reservations,
            'stats' => $stats,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', requirements: ['id' => '\d+'])]
    public function edit(int $id, Request $request, ReservationRepository $reservationRepository, EntityManagerInterface $em): Response
    {
        $reservation = $reservationRepository->find($id);
        if (!$reservation) {
            throw $this->createNotFoundException('Réservation introuvable.');
        }

        $form = $this->createFormBuilder($reservation)
            ->add('statut_reservation', ChoiceType::class, [
                'choices' => [
                    'En attente' => 0,
                    'Acceptée' => 1,
                    'Refusée' => 2,
                ],
                'label' => 'Statut',
                'attr' => ['class' => 'w-full px-4 py-3 rounded-xl border'],
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Statut de la réservation mis à jour.');
            return $this->redirectToRoute('app_admin_reservations_list');
        }

        return $this->render('admin/reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }
}
