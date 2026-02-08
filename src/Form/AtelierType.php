<?php

namespace App\Form;

use App\Entity\Atelier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AtelierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre_atelier', TextType::class)
            ->add('description_atelier', TextareaType::class)
            ->add('type_atelier', TextType::class)
            ->add('date_atelier', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('capacite', IntegerType::class)
            ->add('image_atelier', TextType::class)
            ->add('contexte_atelier', ChoiceType::class, [
                'choices' => [
                    'Hard Skill' => 1,
                    'Soft Skill' => 0,
                ],
                'expanded' => true,
            ])
            ->add('statut_atelier', ChoiceType::class, [
                'choices' => [
                     'Actif' => 1,
                     'Passé' => 0,
              ],
               'expanded' => true,
          ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Atelier::class,
        ]);
    }
}
