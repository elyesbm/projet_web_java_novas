<?php

namespace App\Controller\Front;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Service\FaceRecognitionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
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

        // Toutes les erreurs retournent du JSON (pas de redirection 302 qui casse le fetch JS)
        if (!\is_array($data)) {
            return $this->json(['error' => 'Données invalides reçues'], 400);
        }

        // Validation CSRF
        if (!$this->isCsrfTokenValid('authenticate', $data['_csrf_token'] ?? '')) {
            return $this->json(['error' => 'Token CSRF invalide. Rechargez la page et réessayez.'], 403);
        }

        // Validation du descripteur facial
        $descriptor = $data['descriptor'] ?? null;
        if (!\is_array($descriptor) || \count($descriptor) !== 128) {
            return $this->json([
                'error' => 'Descripteur facial invalide (' . \count((array) $descriptor) . ' valeurs reçues, 128 attendues)'
            ], 400);
        }

        // Recherche de l'utilisateur correspondant
        $user = $faceRecognitionService->findUserByDescriptor($descriptor);
        if ($user === null) {
            return $this->json(['error' => 'Visage non reconnu. Réessayez ou utilisez email/mot de passe.'], 401);
        }

        // Authentification manuelle - inscription dans la session Symfony
        $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
        $tokenStorage->setToken($token);
        $request->getSession()->set('_security_main', serialize($token));
        $request->getSession()->save();

        // Calcul de l'URL de redirection selon le rôle
        $roles = $user->getRoles();
        if (in_array('ROLE_ADMIN', $roles, true)) {
            $url = $this->generateUrl('app_admin_dashboard');
        } elseif (in_array('ROLE_PSY', $roles, true)) {
            $url = $this->generateUrl('app_publications_index');
        } else {
            $url = $this->generateUrl('app_user_profile');
        }

        return $this->json(['success' => true, 'redirect' => $url]);
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

        return $this->render('front/auth/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }
}