<?php

namespace App\Form;

use App\Entity\Publication;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => false,
                'empty_data' => '',
                'invalid_message' => 'Choisissez un contexte valide.',
            ])
            ->add('titre', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'trim' => true,
            ])
            ->add('contenu', CKEditorType::class, [
                'config_name' => 'publication',
                'required' => false,
                'empty_data' => '',
            ])
            ->add('image_publication', TextType::class, [
                'required' => false,
                'mapped' => true,
                'attr' => ['class' => 'hidden', 'id' => 'publication-image-generated'],
            ])
            ->add('youtube_video', TextType::class, [
                'required' => false,
                'mapped' => true,
                'property_path' => 'youtubeVideoId', // valeur normalisée (ID seul) après soumission
                'attr' => [
                    'placeholder' => 'URL ou ID (ex: https://www.youtube.com/watch?v=dQw4w9WgXcQ)',
                    'class' => 'w-full h-10 bg-secondary border border-white/10 rounded-xl px-4 text-sm focus:outline-none focus:border-primary',
                ],
            ]);

        if ($options['with_anonyme']) {
            $builder->add('anonyme', CheckboxType::class, [
                'mapped' => false,
                'required' => false,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Publication::class,
            'with_anonyme' => true,
        ]);

        $resolver->setAllowedTypes('with_anonyme', 'bool');
    }
}
