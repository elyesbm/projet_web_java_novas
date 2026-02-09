<?php

namespace App\Controller\Front;

use App\Repository\AtelierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/ateliers')]
class AtelierController extends AbstractController
{
    #[Route('', name: 'app_ateliers')]
    public function index(Request $request, AtelierRepository $atelierRepository): Response
    {
        // Récupération des paramètres de recherche, filtre et tri depuis la requête GET
        $search = $request->query->get('search', '');
        $contexte = $request->query->get('contexte');
        $sort = $request->query->get('sort', 'date_asc');

        // Conversion du contexte en int si fourni
        $contexteInt = null;
        if ($contexte !== null && $contexte !== '') {
            $contexteInt = (int) $contexte;
            if ($contexteInt !== 0 && $contexteInt !== 1) {
                $contexteInt = null;
            }
        }

        // Validation du tri
        $validSorts = ['date_asc', 'date_desc', 'titre_asc', 'titre_desc'];
        if (!in_array($sort, $validSorts)) {
            $sort = 'date_asc';
        }

        // Recherche, filtrage et tri des ateliers
        $ateliers = $atelierRepository->searchAndFilter($search, $contexteInt, $sort);

        return $this->render('front/reservation/ateliers.html.twig', [
            'ateliers' => $ateliers,
            'search' => $search,
            'contexte' => $contexteInt,
            'sort' => $sort,
        ]);
    }
}