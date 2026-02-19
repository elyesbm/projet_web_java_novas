<?php

namespace App\Form;

use App\Entity\Publication;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PublicationEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contexte', ChoiceType::class, [
                'choices' => [
                    'Academic' => 1,
                    'Personal' => 2,
                ],
                'expanded' => true,
                'multiple' => false,
                // Server-side validation is handled by entity Assert constraints.
                'required' => false,
                'placeholder' => false,
            ])
            ->add('titre', TextType::class, [
                'required' => false,
            ])
            ->add('contenu', TextareaType::class, [
                'required' => false,
                'attr' => ['rows' => 8],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Publication::class,
        ]);
    }
}
