<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\User;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/admin/marketplace', name: 'app_admin_marketplace_')]
class MarketplaceAdminController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function list(
        Request $request,
        ArticleRepository $articleRepository,
        CategorieRepository $categorieRepository
    ): Response {
        $q = trim((string) $request->query->get('q', ''));
        $statutFilter = $request->query->get('statut');
        $typeFilter = $request->query->get('type');
        $categorieFilter = $request->query->get('categorie');
        $sort = $request->query->get('sort', 'date_desc');

        $criteria = [];
        if ($statutFilter) {
            $criteria['statut_article'] = $statutFilter;
        }
        if ($typeFilter) {
            $criteria['type_article'] = $typeFilter;
        }
        if ($categorieFilter) {
            $catEntity = $categorieRepository->find((int) $categorieFilter);
            if ($catEntity instanceof Categorie) {
                $criteria['categorie'] = $catEntity;
            }
        }

        $order = ['id' => 'DESC'];
        switch ($sort) {
            case 'price_asc':
                $order = ['prix_article' => 'ASC'];
                break;
            case 'price_desc':
                $order = ['prix_article' => 'DESC'];
                break;
            case 'date_asc':
                $order = ['id' => 'ASC'];
                break;
            case 'date_desc':
            default:
                $order = ['id' => 'DESC'];
                break;
        }

        $articles = $articleRepository->search($q, $criteria, $order);
        $categoriesEntities = $categorieRepository->findAll();

        $qCat = trim((string) $request->query->get('q_cat', ''));
        $sortCat = $request->query->get('sort_cat', 'date_desc');

        $qb = $categorieRepository->createQueryBuilder('c');

        if ($qCat !== '') {
            $isNumeric = ctype_digit($qCat);
            $expr = 'c.nom_categorie LIKE :q OR c.description_categorie LIKE :q';
            if ($isNumeric) {
                $expr .= ' OR c.id = :qid';
            }

            $qb->andWhere('(' . $expr . ')')
                ->setParameter('q', '%' . $qCat . '%');

            if ($isNumeric) {
                $qb->setParameter('qid', (int) $qCat);
            }
        }

        switch ($sortCat) {
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

        $categoriesList = $qb->getQuery()->getResult();

        return $this->render('admin/marketplace/list.html.twig', [
            'articles' => $articles,
            'categories' => $categoriesEntities,
            'categories_list' => $categoriesList,
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        CategorieRepository $categorieRepository,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator,
        UserRepository $userRepository
    ): Response {
        $categories = $this->buildCategoriesForSelect($categorieRepository->findAll());
        $article = new Article();

        if ($request->isMethod('POST')) {
            /** @var UploadedFile|null $uploadedFile */
            $uploadedFile = $request->files->get('image');
            $imageValue = trim((string) $request->request->get('image_article', ''));

            $rawPrice = str_replace(',', '.', trim((string) $request->request->get('prix', '')));
            $rawCategorieId = (string) $request->request->get('categorie', '');
            $rawType = trim((string) $request->request->get('type', 'academic'));
            $rawStatut = trim((string) $request->request->get('statut', 'disponible'));
            $categorie = ctype_digit($rawCategorieId) ? $categorieRepository->find((int) $rawCategorieId) : null;
            $resolvedImageValue = $imageValue !== '' ? $imageValue : ($uploadedFile instanceof UploadedFile ? '__uploaded__' : '');

            $inputData = [
                'titre' => trim((string) $request->request->get('titre', '')),
                'contenu' => trim((string) $request->request->get('contenu', '')),
                'prix' => $rawPrice,
                'categorie' => $rawCategorieId,
                'type' => $rawType,
                'statut' => $rawStatut,
                'image_article' => $resolvedImageValue,
            ];

            $inputConstraints = new Assert\Collection([
                'fields' => [
                    'titre' => [
                        new Assert\NotBlank(['message' => 'Le titre est obligatoire.']),
                        new Assert\Length([
                            'min' => 2,
                            'max' => 255,
                            'minMessage' => 'Le titre doit contenir au moins {{ limit }} caracteres.',
                            'maxMessage' => 'Le titre ne doit pas depasser {{ limit }} caracteres.',
                        ]),
                    ],
                    'contenu' => [
                        new Assert\NotBlank(['message' => 'Le contenu est obligatoire.']),
                        new Assert\Length([
                            'min' => 10,
                            'max' => 255,
                            'minMessage' => 'Le contenu doit contenir au moins {{ limit }} caracteres.',
                            'maxMessage' => 'Le contenu ne doit pas depasser {{ limit }} caracteres.',
                        ]),
                    ],
                    'prix' => [
                        new Assert\NotBlank(['message' => 'Le prix est obligatoire.']),
                        new Assert\Regex([
                            'pattern' => '/^\d+(?:[.,]\d+)?$/',
                            'message' => 'Le prix doit etre un nombre valide.',
                        ]),
                        new Assert\Range([
                            'min' => 0,
                            'max' => 1000000,
                            'notInRangeMessage' => 'Le prix doit etre compris entre {{ min }} et {{ max }}.',
                        ]),
                    ],
                    'categorie' => [
                        new Assert\NotBlank(['message' => 'La categorie est obligatoire.']),
                        new Assert\Regex([
                            'pattern' => '/^\d+$/',
                            'message' => 'La categorie selectionnee est invalide.',
                        ]),
                    ],
                    'type' => new Assert\Choice([
                        'choices' => ['academic', 'commercial', 'service', 'other'],
                        'message' => 'Type invalide.',
                    ]),
                    'statut' => new Assert\Choice([
                        'choices' => ['disponible', 'vendu', 'reserve'],
                        'message' => 'Statut invalide.',
                    ]),
                    'image_article' => [
                        new Assert\NotBlank(['message' => "L'image est obligatoire."]),
                        new Assert\Length(['max' => 2000, 'maxMessage' => "Le chemin de l'image est trop long."]),
                    ],
                ],
                'allowExtraFields' => true,
            ]);

            $inputViolations = $validator->validate($inputData, $inputConstraints);
            $hasInputErrors = count($inputViolations) > 0;
            if ($hasInputErrors) {
                $this->addValidationFlashes($inputViolations);
            }

            if ($uploadedFile instanceof UploadedFile) {
                $fileViolations = $validator->validate($uploadedFile, new Assert\File([
                    'maxSize' => '2M',
                    'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp'],
                    'mimeTypesMessage' => "Le format de l'image est invalide (jpg, png, gif, webp).",
                    'maxSizeMessage' => "L'image est trop volumineuse (max 2MB).",
                ]));
                if (count($fileViolations) > 0) {
                    $this->addValidationFlashes($fileViolations);
                    $hasInputErrors = true;
                }
            }

            $article
                ->setTitreArticle($this->nullableTrimmedString($request->request->get('titre')))
                ->setContenueArticle($this->nullableTrimmedString($request->request->get('contenu')))
                ->setImageArticle($imageValue !== '' ? $imageValue : null)
                ->setTypeArticle($this->nullableTrimmedString($rawType))
                ->setStatutArticle($this->nullableTrimmedString($rawStatut))
                ->setPrixArticle($rawPrice !== '' && is_numeric($rawPrice) ? (float) $rawPrice : null)
                ->setCategorie($categorie instanceof Categorie ? $categorie : null);

            $author = $this->getUser();
            if ($author instanceof User) {
                $article->setAuteur($author);
            } else {
                $fallbackAuthor = $userRepository->findOneBy([]);
                if (!$fallbackAuthor instanceof User) {
                    $this->addFlash('error', 'Aucun utilisateur trouve pour associer l\'article.');

                    return $this->redirectToRoute('app_admin_marketplace_list');
                }

                $article->setAuteur($fallbackAuthor);
            }

            if ($hasInputErrors) {
                return $this->render('admin/marketplace/form.html.twig', [
                    'mode' => 'create',
                    'article' => $article,
                    'categories' => $categories,
                ]);
            } else {
                if ($uploadedFile instanceof UploadedFile) {
                    $movedFilename = $this->moveUploadedImage($uploadedFile);
                    if ($movedFilename === null) {
                        return $this->render('admin/marketplace/form.html.twig', [
                            'mode' => 'create',
                            'article' => $article,
                            'categories' => $categories,
                        ]);
                    }
                    $article->setImageArticle($movedFilename);
                }

                $violations = $validator->validate($article);
                if (count($violations) > 0) {
                    $this->addValidationFlashes($violations);

                    return $this->render('admin/marketplace/form.html.twig', [
                        'mode' => 'create',
                        'article' => $article,
                        'categories' => $categories,
                    ]);
                }

                $entityManager->persist($article);
                $entityManager->flush();

                $this->addFlash('success', 'Article cree avec succes.');

                return $this->redirectToRoute('app_admin_marketplace_list');
            }
        }

        return $this->render('admin/marketplace/form.html.twig', [
            'mode' => 'create',
            'article' => $article,
            'categories' => $categories,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(
        int $id,
        Request $request,
        ArticleRepository $articleRepository,
        CategorieRepository $categorieRepository,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): Response {
        $article = $articleRepository->find($id);
        if (!$article instanceof Article) {
            throw $this->createNotFoundException('Article introuvable.');
        }

        $categories = $this->buildCategoriesForSelect($categorieRepository->findAll());

        if ($request->isMethod('POST')) {
            /** @var UploadedFile|null $uploadedFile */
            $uploadedFile = $request->files->get('image');
            $imageValue = trim((string) $request->request->get('image_article', ''));

            if ($uploadedFile instanceof UploadedFile) {
                $movedFilename = $this->moveUploadedImage($uploadedFile);
                if ($movedFilename === null) {
                    return $this->redirectToRoute('app_admin_marketplace_edit', ['id' => $id]);
                }
                $imageValue = $movedFilename;
            } elseif ($imageValue === '') {
                $imageValue = $article->getImageArticle() ?? '';
            }

            $rawPrice = str_replace(',', '.', trim((string) $request->request->get('prix', '')));
            $rawCategorieId = (string) $request->request->get('categorie', '');
            $categorie = ctype_digit($rawCategorieId) ? $categorieRepository->find((int) $rawCategorieId) : null;

            $article
                ->setTitreArticle($this->nullableTrimmedString($request->request->get('titre')))
                ->setContenueArticle($this->nullableTrimmedString($request->request->get('contenu')))
                ->setImageArticle($imageValue !== '' ? $imageValue : null)
                ->setTypeArticle($this->nullableTrimmedString($request->request->get('type')))
                ->setStatutArticle($this->nullableTrimmedString($request->request->get('statut')))
                ->setPrixArticle($rawPrice !== '' && is_numeric($rawPrice) ? (float) $rawPrice : null)
                ->setCategorie($categorie instanceof Categorie ? $categorie : null);

            $violations = $validator->validate($article);
            if (count($violations) > 0) {
                $this->addValidationFlashes($violations);
            } else {
                $entityManager->flush();

                $this->addFlash('success', 'Article modifie avec succes.');

                return $this->redirectToRoute('app_admin_marketplace_list');
            }
        }

        return $this->render('admin/marketplace/form.html.twig', [
            'mode' => 'edit',
            'article' => $article,
            'categories' => $categories,
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['POST'])]
    public function delete(
        int $id,
        Request $request,
        ArticleRepository $articleRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_article_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');

            return $this->redirectToRoute('app_admin_marketplace_list');
        }

        $article = $articleRepository->find($id);
        if ($article instanceof Article) {
            $entityManager->remove($article);
            $entityManager->flush();
            $this->addFlash('success', 'Article supprime avec succes.');
        }

        return $this->redirectToRoute('app_admin_marketplace_list');
    }

    #[Route('/categorie/new', name: 'categorie_new', methods: ['GET', 'POST'])]
    public function categorieNew(
        Request $request,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): Response {
        $categorie = new Categorie();

        if ($request->isMethod('POST')) {
            $categorie
                ->setNomCategorie($this->nullableTrimmedString($request->request->get('nom')))
                ->setDescriptionCategorie(trim((string) $request->request->get('description', '')));

            $violations = $validator->validate($categorie);
            if (count($violations) > 0) {
                $this->addValidationFlashes($violations);
            } else {
                $entityManager->persist($categorie);
                $entityManager->flush();

                $this->addFlash('success', 'Categorie creee avec succes.');

                return $this->redirectToRoute('app_admin_marketplace_list', ['tab' => 'categories']);
            }
        }

        return $this->render('admin/marketplace/categorie_form.html.twig', [
            'mode' => 'create',
            'categorie' => $categorie,
        ]);
    }

    #[Route('/categorie/{id}/edit', name: 'categorie_edit', methods: ['GET', 'POST'])]
    public function categorieEdit(
        Request $request,
        int $id,
        CategorieRepository $categorieRepository,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): Response {
        $categorie = $categorieRepository->find($id);
        if (!$categorie instanceof Categorie) {
            throw $this->createNotFoundException('Categorie introuvable.');
        }

        if ($request->isMethod('POST')) {
            $categorie
                ->setNomCategorie($this->nullableTrimmedString($request->request->get('nom')))
                ->setDescriptionCategorie(trim((string) $request->request->get('description', '')));

            $violations = $validator->validate($categorie);
            if (count($violations) > 0) {
                $this->addValidationFlashes($violations);
            } else {
                $entityManager->flush();

                $this->addFlash('success', 'Categorie modifiee avec succes.');

                return $this->redirectToRoute('app_admin_marketplace_list', ['tab' => 'categories']);
            }
        }

        return $this->render('admin/marketplace/categorie_form.html.twig', [
            'mode' => 'edit',
            'categorie' => $categorie,
        ]);
    }

    #[Route('/categorie/{id}/delete', name: 'categorie_delete', methods: ['POST'])]
    public function categorieDelete(
        Request $request,
        int $id,
        CategorieRepository $categorieRepository,
        EntityManagerInterface $entityManager
    ): Response {
        if (!$this->isCsrfTokenValid('delete_categorie_' . $id, (string) $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');

            return $this->redirectToRoute('app_admin_marketplace_list', ['tab' => 'categories']);
        }

        $categorie = $categorieRepository->find($id);
        if ($categorie instanceof Categorie) {
            $entityManager->remove($categorie);
            $entityManager->flush();
            $this->addFlash('success', 'Categorie supprimee avec succes.');
        }

        return $this->redirectToRoute('app_admin_marketplace_list', ['tab' => 'categories']);
    }

    /**
     * @param list<Categorie> $categoriesEntities
     *
     * @return list<array{id:int|null, nom:string|null}>
     */
    private function buildCategoriesForSelect(array $categoriesEntities): array
    {
        return array_map(static function (Categorie $categorie): array {
            return [
                'id' => $categorie->getId(),
                'nom' => $categorie->getNomCategorie(),
            ];
        }, $categoriesEntities);
    }

    private function nullableTrimmedString(mixed $value): ?string
    {
        $trimmed = trim((string) $value);

        return $trimmed === '' ? null : $trimmed;
    }

    private function moveUploadedImage(UploadedFile $uploadedFile): ?string
    {
        $ext = strtolower($uploadedFile->getClientOriginalExtension() ?: '');
        $allowedExt = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if (!in_array($ext, $allowedExt, true)) {
            $this->addFlash('error', "Le format de l'image est invalide (jpg, png, gif, webp). ");

            return null;
        }

        $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/images';
        $newFilename = uniqid('article_', true) . '.' . ($ext !== '' ? $ext : 'jpg');

        try {
            $uploadedFile->move($uploadsDir, $newFilename);

            return $newFilename;
        } catch (FileException) {
            $this->addFlash('error', "Erreur lors de l'upload de l'image.");

            return null;
        }
    }

    private function addValidationFlashes(ConstraintViolationListInterface $violations): void
    {
        foreach ($violations as $violation) {
            $this->addFlash('error', $violation->getMessage());
        }
    }
}
