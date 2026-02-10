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
    public function list(Request $request, ReservationRepository $reservationRepository): Response
    {
        // Récupération des paramètres de recherche, filtre et tri
        $search = $request->query->get('search', '');
        $statut = $request->query->get('statut');
        $sort = $request->query->get('sort', 'id_desc');

        // Conversion du statut en int si fourni
        $statutInt = null;
        if ($statut !== null && $statut !== '') {
            $statutInt = (int) $statut;
            if ($statutInt !== 0 && $statutInt !== 1 && $statutInt !== 2) {
                $statutInt = null;
            }
        }

        // Validation du tri
        $validSorts = ['id_desc', 'id_asc', 'date_asc', 'date_desc', 'nom_asc', 'nom_desc'];
        if (!in_array($sort, $validSorts)) {
            $sort = 'id_desc';
        }

        // Recherche, filtrage et tri
        $reservations = $reservationRepository->searchFilterAndSort($search, $statutInt, $sort);

        // Calcul des stats sur toutes les réservations (pas seulement celles filtrées)
        $toutesReservations = $reservationRepository->findAll();
        $stats = [
            'total' => count($toutesReservations),
            'en_attente' => 0,
            'acceptees' => 0,
            'refusees' => 0,
        ];
        foreach ($toutesReservations as $r) {
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
            'search' => $search,
            'statut' => $statutInt,
            'sort' => $sort,
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
