<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $requirePassword = $options['require_password'];
        $builder
            ->add('NOM', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500',
                    'placeholder' => 'Dupont',
                ],
            ])
            ->add('PRENOM', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500',
                    'placeholder' => 'Marie',
                ],
            ])
            ->add('EMAIL', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500',
                    'placeholder' => 'marie.dupont@univ-lyon.fr',
                ],
            ])
            ->add('IMAGE', TextType::class, [
                'label' => 'Image (URL)',
                'empty_data' => '',
                'attr' => [
                    'class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500',
                    'placeholder' => 'https://... ou chemin',
                ],
            ])
            ->add('NUMERO', IntegerType::class, [
                'label' => 'Numéro',
                'attr' => [
                    'class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500',
                    'placeholder' => '0612345678',
                ],
            ])
            ->add('ROLE', ChoiceType::class, [
                'label' => 'Rôle',
                'choices' => [
                    'Étudiant' => 'ROLE_USER',
                    'Admin' => 'ROLE_ADMIN',
                    'Psy' => 'ROLE_PSY',
                ],
                'attr' => [
                    'class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500',
                ],
            ])
            ->add('ACTIF', CheckboxType::class, [
                'label' => 'Actif',
                'required' => false,
                'attr' => [
                    'class' => 'h-4 w-4',
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => $requirePassword ? 'Mot de passe' : 'Nouveau mot de passe (laisser vide pour ne pas changer)',
                'mapped' => false,
                'required' => $requirePassword,
                'attr' => [
                    'class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 focus:ring-2 focus:ring-primary-500',
                    'placeholder' => $requirePassword ? '••••••••' : '••••••••',
                    'autocomplete' => 'new-password',
                ],
                'constraints' => $requirePassword ? [
                    new NotBlank(['message' => 'Le mot de passe est obligatoire.']),
                    new Length(['min' => 6, 'minMessage' => 'Le mot de passe doit faire au moins {{ limit }} caractères.']),
                ] : [],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'require_password' => true,
        ]);
    }
}
