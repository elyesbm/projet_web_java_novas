<?php

namespace App\Controller\Front;

use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/profile', name: 'app_user_profile')]
    public function profile(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        return $this->render('front/user/profile.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/update-face', name: 'app_user_update_face', methods: ['POST'])]
    public function updateFace(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Non connecté'], 401);
        }

        $data = json_decode($request->getContent(), true);
        if (!\is_array($data)) {
            return $this->json(['error' => 'Données invalides'], 400);
        }

        // Validation CSRF
        if (!$this->isCsrfTokenValid('face_encoding', $data['_csrf_token'] ?? '')) {
            return $this->json(['error' => 'Token CSRF invalide'], 403);
        }

        $descriptor = $data['descriptor'] ?? null;
        if (!\is_array($descriptor) || \count($descriptor) !== 128) {
            return $this->json(['error' => 'Descripteur facial invalide (' . \count((array)$descriptor) . ' valeurs)'], 400);
        }

        $user->setFaceEncoding($descriptor);
        $em->flush();

        return $this->json(['success' => true, 'message' => 'Visage enregistré avec succès !']);
    }

    #[Route('/profile/edit', name: 'app_user_edit')]
    public function edit(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(UserType::class, $user, [
            'require_password' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
                $user->setPassword($hashedPassword);
            }
            $em->flush();
            $this->addFlash('success', 'Profil mis à jour avec succès!');
            return $this->redirectToRoute('app_user_profile');
        }

        return $this->render('front/user/edit.html.twig', [
            'form' => $form,
            'user' => $user,
        ]);
    }
}
