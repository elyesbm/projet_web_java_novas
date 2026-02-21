<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $inputClass = 'w-full h-14 bg-secondary border border-white/10 rounded-xl pl-12 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all placeholder:text-muted-foreground/50';

        $builder
            ->add('PRENOM', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['class' => $inputClass, 'placeholder' => 'Jean'],
            ])
            ->add('NOM', TextType::class, [
                'label' => 'Nom',
                'attr' => ['class' => $inputClass, 'placeholder' => 'Dupont'],
            ])
            ->add('EMAIL', EmailType::class, [
                'label' => 'Email universitaire',
                'attr' => ['class' => $inputClass, 'placeholder' => 'jean.dupont@univ.fr'],
            ])
            ->add('NUMERO', IntegerType::class, [
                'label' => 'Numéro de téléphone',
                'required' => false,
                'attr' => ['class' => $inputClass, 'placeholder' => '0612345678'],
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
            ])
            ->add('photo', FileType::class, [
                'label' => 'Photo pour reconnaissance faciale (optionnel)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez envoyer une image (JPEG, PNG ou WebP).',
                    ]),
                ],
                'attr' => ['class' => 'hidden', 'accept' => 'image/*'],
            ])
            ->add('face_encoding', HiddenType::class, [
                'mapped' => false,
                'required' => false,
                'attr' => ['id' => 'face_encoding_input'],
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