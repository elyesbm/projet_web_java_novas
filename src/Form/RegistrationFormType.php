<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $inputClass = 'w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50';

        $builder
            ->add('PRENOM', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['class' => $inputClass, 'placeholder' => 'Jean'],
                // ⬇️ CONTRAINTES AJOUTÉES
                'constraints' => [
                    new NotBlank(['message' => 'Le prénom est obligatoire']),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Le prénom doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Le prénom ne peut pas dépasser {{ limit }} caractères'
                    ]),
                ],
            ])
            ->add('NOM', TextType::class, [
                'label' => 'Nom',
                'attr' => ['class' => $inputClass, 'placeholder' => 'Dupont'],
                // ⬇️ CONTRAINTES AJOUTÉES
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est obligatoire']),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Le nom doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères'
                    ]),
                ],
            ])
            ->add('EMAIL', EmailType::class, [
                'label' => 'Email universitaire',
                'attr' => ['class' => $inputClass, 'placeholder' => 'jean.dupont@univ.fr'],
                // ⬇️ CONTRAINTES AJOUTÉES
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est obligatoire']),
                    new Email(['message' => 'L\'email n\'est pas valide']),
                ],
            ])
            ->add('NUMERO', IntegerType::class, [
                'label' => 'Numéro de téléphone',
                'required' => false,
                'attr' => ['class' => $inputClass, 'placeholder' => '0612345678'],
                // ⬇️ CONTRAINTE AJOUTÉE (optionnel mais recommandé)
                'constraints' => [
                    new Positive(['message' => 'Le numéro doit être positif']),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => ['class' => $inputClass . ' pr-12', 'placeholder' => 'Minimum 8 caractères'],
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                    'attr' => ['class' => $inputClass, 'placeholder' => '••••••••'],
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le mot de passe est obligatoire']),
                    new Length([
                        'min' => 8, // ⬅️ CORRIGÉ : 8 au lieu de 6 pour matcher le placeholder
                        'minMessage' => 'Le mot de passe doit faire au moins {{ limit }} caractères'
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}