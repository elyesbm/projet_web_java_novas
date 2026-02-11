<?php

namespace App\Form;

use App\Entity\Publication;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PublicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contexte', ChoiceType::class, [
                'choices' => [
                    'Academic' => 1,
                    'Personal' => 2,
                ],
                'expanded' => true,   // radios
                'multiple' => false,
                'data' => 1,          // default checked
            ])
            ->add('titre', TextType::class)
            ->add('contenu', TextareaType::class, [
                'attr' => ['rows' => 8],
            ])
            // champ uniquement UI (pas dans l'entité)
            ->add('anonyme', CheckboxType::class, [
                'mapped' => false,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Publication::class,
        ]);
    }
}
