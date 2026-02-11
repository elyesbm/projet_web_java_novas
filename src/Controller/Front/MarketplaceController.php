<?php

namespace App\Controller\Front;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\User;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[Route('/marketplace')]
class MarketplaceController extends AbstractController
{
    #[Route('/', name: 'app_marketplace_index')]
    public function index(Request $request, ArticleRepository $articleRepository, CategorieRepository $categorieRepository): Response
    {
        // Catégories depuis la base
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

        // Articles depuis la base selon critères ou recherche libre
        $q = trim((string) $request->query->get('q', ''));
        if ($q !== '') {
            $articlesEntities = $articleRepository->search($q, $criteria, $order);
        } else {
            $articlesEntities = $articleRepository->findBy($criteria, $order);
        }
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
        ]);
    }

    #[Route('/article/{id}', name: 'app_marketplace_detail', requirements: ['id' => '\d+'])]
    public function detail(int $id, ArticleRepository $articleRepository): Response
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

        return $this->render('front/marketplace/detail.html.twig', [
            'article' => $article,
            'articles_similaires' => $articles_similaires,
        ]);
    }

    #[Route('/mes-articles', name: 'app_marketplace_mes')]
    public function mesArticles(ArticleRepository $articleRepository): Response
    {
        // À terme, filtrer par utilisateur connecté
        // Afficher les articles du plus récent au plus ancien
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
                    'titre' => [new Assert\NotBlank(['message' => 'Le titre est obligatoire.']), new Assert\Length(['min' => 2, 'max' => 255, 'minMessage' => 'Le titre doit contenir au moins {{ limit }} caractères.', 'maxMessage' => 'Le titre ne doit pas dépasser {{ limit }} caractères.'])],
                    'contenu' => [new Assert\NotBlank(['message' => 'Le contenu est obligatoire.']), new Assert\Length(['min' => 10, 'max' => 5000, 'minMessage' => 'Le contenu doit contenir au moins {{ limit }} caractères.', 'maxMessage' => 'Le contenu est trop long (max {{ limit }} caractères).'])],
                    'prix' => [
                        new Assert\NotBlank(['message' => 'Le prix est obligatoire.']),
                        new Assert\Regex(['pattern' => '/^\d+(?:[\.,]\d+)?$/', 'message' => 'Le prix doit être un nombre.']),
                        new Assert\Range([
                            'min' => 0,
                            'max' => 1000000,
                            'notInRangeMessage' => 'Le prix doit être compris entre {{ min }} et {{ max }}.',
                        ]),
                    ],
                    'categorie' => [new Assert\NotBlank(['message' => 'La catégorie est obligatoire.']), new Assert\Regex(['pattern' => '/^\d+$/', 'message' => 'La catégorie sélectionnée est invalide.'])],
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
                    $this->addFlash('error', 'La catégorie sélectionnée est invalide.');
                } else {
                    $article = new Article();
                    $article
                        ->setTitreArticle($titre)
                        ->setContenueArticle($contenu)
                        // TODO: gérer l’upload réel d’image. Placeholder pour l’instant.
                        ->setImageArticle($imageArticle)
                        ->setTypeArticle($type)
                        ->setPrixArticle((float) $prix)
                        ->setStatutArticle($statut)
                        ->setCategorie($categorie);

                    // Associer un auteur existant même si l'utilisateur n'est pas connecté
                    $author = $this->getUser();
                    if ($author instanceof User) {
                        $article->setAuteur($author);
                    } else {
                        $fallbackAuthor = $userRepository->findOneBy([]);
                        if ($fallbackAuthor instanceof User) {
                            $article->setAuteur($fallbackAuthor);
                        } else {
                            $this->addFlash('error', 'Aucun utilisateur trouvé pour associer l\'article. Créez au moins un utilisateur.');
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
                        $this->addFlash('error', 'Erreur lors de la création de l\'article. Voir le log.');
                        return $this->redirectToRoute('app_marketplace_index');
                    }

                    $this->addFlash('success', 'Votre article a été publié avec succès ! (ID: ' . $article->getId() . ')');
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
        // Formulaire public : ne nécessite pas d'utilisateur connecté
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
                    'prix' => [new Assert\NotBlank(['message' => 'Le prix est obligatoire.']), new Assert\Regex(['pattern' => '/^\d+(?:[\.,]\d+)?$/', 'message' => 'Le prix doit être un nombre.']), new Assert\Range(['min' => 0, 'max' => 1000000])],
                    'categorie' => [new Assert\NotBlank(['message' => 'La catégorie est obligatoire.']), new Assert\Regex(['pattern' => '/^\d+$/', 'message' => 'La catégorie sélectionnée est invalide.'])],
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
                    $this->addFlash('error', 'La catégorie sélectionnée est invalide.');
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
                        $this->addFlash('error', 'Aucun utilisateur trouvé pour associer l\'article public. Veuillez vous connecter.');
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
                        $this->addFlash('error', 'Erreur lors de la création de l\'article public. Voir le log.');
                        return $this->redirectToRoute('app_marketplace_index');
                    }

                    $this->addFlash('success', 'Votre article a été publié avec succès (anonyme). (ID: ' . $article->getId() . ')');
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
                    $this->addFlash('error', 'La catégorie sélectionnée est invalide.');
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

                    $this->addFlash('success', 'Votre article a été modifié avec succès !');
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
            $this->addFlash('success', 'Le produit a été supprimé.');
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
    public function ajouterCategorie(Request $request, EntityManagerInterface $entityManager): Response
    {
        // public category creation: no authentication required

        if ($request->isMethod('POST')) {
            $nom = trim((string) $request->request->get('nom', ''));
            $description = trim((string) $request->request->get('description', ''));

            $errors = [];
            if ($nom === '') {
                $errors[] = 'Le nom de la catégorie est obligatoire.';
            } else {
                $len = mb_strlen($nom);
                if ($len < 2) {
                    $errors[] = 'Le nom doit contenir au moins 2 caractères.';
                }
                if ($len > 255) {
                    $errors[] = 'Le nom ne doit pas dépasser 255 caractères.';
                }
            }
            if (mb_strlen($description) > 1000) {
                $errors[] = 'La description est trop longue (max 1000 caractères).';
            }

            if (!empty($errors)) {
                foreach ($errors as $err) {
                    $this->addFlash('error', $err);
                }
                return $this->render('front/marketplace/categories/ajouter.html.twig', [
                    'data' => ['nom' => $nom, 'description' => $description],
                ]);
            }

            $categorie = new Categorie();
            $categorie->setNomCategorie($nom)->setDescriptionCategorie($description);

            $entityManager->persist($categorie);
            $entityManager->flush();

            $this->addFlash('success', 'Catégorie créée avec succès.');
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
            throw $this->createNotFoundException('Catégorie introuvable.');
        }

        if ($request->isMethod('POST')) {
            $nom = trim((string) $request->request->get('nom', ''));
            $description = trim((string) $request->request->get('description', ''));

            if (!$nom) {
                $this->addFlash('error', 'Le nom de la catégorie est obligatoire.');
            } else {
                $categorie->setNomCategorie($nom)->setDescriptionCategorie($description);
                $entityManager->flush();

                $this->addFlash('success', 'Catégorie modifiée avec succès.');
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
            $this->addFlash('success', 'La catégorie a été supprimée.');
        }

        return $this->redirectToRoute('app_marketplace_categories');
    }

    
}
