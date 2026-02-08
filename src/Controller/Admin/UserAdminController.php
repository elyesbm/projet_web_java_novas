<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

#[Route('/admin/users', name: 'app_admin_users_')]
class UserAdminController extends AbstractController
{
    public function __construct(
        private UserRepository $userRepository,
        private EntityManagerInterface $em,
        private UserPasswordHasherInterface $passwordHasher,
    ) {
    }

    #[Route('/', name: 'list')]
    public function list(Request $request): Response
    {
        $roleFilter = $request->query->get('role', '');
        $searchQ = $request->query->get('q', '');

        if ($searchQ !== '') {
            $users = $this->userRepository->searchByQuery($searchQ);
            if ($roleFilter !== '') {
                $users = array_filter($users, fn(User $u) => $u->getROLE() === $roleFilter);
            }
        } elseif ($roleFilter !== '') {
            $users = $this->userRepository->findByRole($roleFilter);
        } else {
            $users = $this->userRepository->findAllOrderedByNom();
        }

        $total = $this->userRepository->count([]);
        $totalAdmins = $this->userRepository->countByRole('ROLE_ADMIN');
        $totalPsy = $this->userRepository->countByRole('ROLE_PSY');

        return $this->render('admin/user/list.html.twig', [
            'users' => $users,
            'total' => $total,
            'total_admins' => $totalAdmins,
            'total_psy' => $totalPsy,
            'role_filter' => $roleFilter,
            'search_q' => $searchQ,
        ]);
    }

    #[Route('/new', name: 'new')]
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user, ['require_password' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword !== null && $plainPassword !== '') {
                $user->setPassword($this->passwordHasher->hashPassword($user, $plainPassword));
            }
            $this->em->persist($user);
            $this->em->flush();
            $this->addFlash('success', 'Utilisateur créé avec succès.');
            return $this->redirectToRoute('app_admin_users_list');
        }

        return $this->render('admin/user/form.html.twig', [
            'form' => $form,
            'mode' => 'create',
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', requirements: ['id' => '\d+'])]
    public function edit(int $id, Request $request): Response
    {
        $user = $this->userRepository->find($id);
        if (!$user) {
            throw new NotFoundHttpException('Utilisateur introuvable.');
        }

        $form = $this->createForm(UserType::class, $user, ['require_password' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword !== null && $plainPassword !== '') {
                $user->setPassword($this->passwordHasher->hashPassword($user, $plainPassword));
            }
            $this->em->flush();
            $this->addFlash('success', 'Modifications enregistrées.');
            return $this->redirectToRoute('app_admin_users_list');
        }

        return $this->render('admin/user/form.html.twig', [
            'form' => $form,
            'mode' => 'edit',
            'user' => $user,
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(int $id, Request $request): Response
    {
        $user = $this->userRepository->find($id);
        if (!$user) {
            throw new NotFoundHttpException('Utilisateur introuvable.');
        }

        if ($this->isCsrfTokenValid('user_delete_' . $id, $request->request->get('_token'))) {
            $this->em->remove($user);
            $this->em->flush();
            $this->addFlash('success', 'Utilisateur supprimé.');
        } else {
            $this->addFlash('error', 'Jeton de sécurité invalide.');
        }

        return $this->redirectToRoute('app_admin_users_list');
    }
}
