<?php

namespace App\Controller\Front;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $user = $this->getUser();
        if ($user) {
            $roles = $user->getRoles();
            if (in_array('ROLE_ADMIN', $roles, true)) {
                return $this->redirectToRoute('app_admin_dashboard');
            }
            if (in_array('ROLE_PSY', $roles, true)) {
                return $this->redirectToRoute('app_publications_index');
            }
            return $this->redirectToRoute('app_user_profile');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('front/auth/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(): never
    {
        throw new \LogicException('La déconnexion est gérée par le pare-feu Security.');
    }

    #[Route('/login/face', name: 'app_login_face', methods: ['POST'])]
    public function loginFace(
        Request $request,
        FaceRecognitionService $faceRecognitionService,
        TokenStorageInterface $tokenStorage
    ): Response {
        $content = $request->getContent();
        $data = json_decode($content, true);
        if (!\is_array($data) || !$this->isCsrfTokenValid('authenticate', $data['_csrf_token'] ?? '')) {
            $this->addFlash('error', 'Session invalide. Réessayez.');
            return $this->redirectToRoute('app_login');
        }
        $descriptor = $data['descriptor'] ?? null;
        if (!\is_array($descriptor) || \count($descriptor) !== 128) {
            $this->addFlash('error', 'Reconnaissance faciale invalide. Réessayez ou connectez-vous avec email et mot de passe.');
            return $this->redirectToRoute('app_login');
        }
        $user = $faceRecognitionService->findUserByDescriptor($descriptor);
        if ($user === null) {
            $this->addFlash('error', 'Visage non reconnu. Réessayez ou connectez-vous avec email et mot de passe.');
            return $this->redirectToRoute('app_login');
        }
        $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
        $tokenStorage->setToken($token);
        $request->getSession()->set('_security_main', serialize($token));
        $roles = $user->getRoles();
        if (in_array('ROLE_ADMIN', $roles, true)) {
            return $this->redirectToRoute('app_admin_dashboard');
        }
        if (in_array('ROLE_PSY', $roles, true)) {
            return $this->redirectToRoute('app_publications_index');
        }
        return $this->redirectToRoute('app_user_profile');
    }

    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $em
    ): Response {
        $currentUser = $this->getUser();
        if ($currentUser) {
            $roles = $currentUser->getRoles();
            if (in_array('ROLE_ADMIN', $roles, true)) {
                return $this->redirectToRoute('app_admin_dashboard');
            }
            if (in_array('ROLE_PSY', $roles, true)) {
                return $this->redirectToRoute('app_publications_index');
            }
            return $this->redirectToRoute('app_user_profile');
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
            $user->setROLE('ROLE_USER');
            $user->setIMAGE('');

            /** @var UploadedFile|null $photoFile */
            $photoFile = $form->get('photo')->getData();
            if ($photoFile) {
                $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/uploads/faces';
                if (!is_dir($uploadsDir)) {
                    mkdir($uploadsDir, 0755, true);
                }
                $safeName = preg_replace('/[^a-zA-Z0-9_-]/', '', $user->getEMAIL() ?? 'user') . '_' . uniqid() . '.' . $photoFile->guessExtension();
                try {
                    $photoFile->move($uploadsDir, $safeName);
                    $user->setIMAGE('/uploads/faces/' . $safeName);
                } catch (FileException) {
                    // garde IMAGE vide en cas d'erreur
                }
            }

            $faceEncoding = $form->get('face_encoding')->getData();
            if ($faceEncoding !== null && $faceEncoding !== '') {
                $decoded = json_decode($faceEncoding, true);
                if (\is_array($decoded) && \count($decoded) === 128) {
                    $user->setFaceEncoding($decoded);
                }
            }

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Compte créé. Connectez-vous avec votre email et mot de passe ou par reconnaissance faciale si vous avez enregistré une photo.');
            return $this->redirectToRoute('app_login');
        }

        // ⬇️ IL MANQUAIT CE RETURN ! Toujours retourner une Response
        return $this->render('front/auth/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }
}