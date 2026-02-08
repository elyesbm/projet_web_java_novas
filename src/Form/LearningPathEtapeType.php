<?php

namespace App\Form;

use App\Entity\LearningPathEtape;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LearningPathEtapeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => ['class' => 'w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800', 'placeholder' => 'Ex: Introduction aux bases'],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['rows' => 2, 'class' => 'w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 resize-none'],
            ])
            ->add('type_etape', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'Article / Post' => LearningPathEtape::TYPE_POST,
                    'Vidéo' => LearningPathEtape::TYPE_VIDEO,
                    'Exercice' => LearningPathEtape::TYPE_EXERCICE,
                    'Quiz' => LearningPathEtape::TYPE_QUIZ,
                ],
                'attr' => ['class' => 'w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800'],
            ])
            ->add('url', UrlType::class, [
                'label' => 'URL (vidéo, lien externe)',
                'required' => false,
                'attr' => ['class' => 'w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800', 'placeholder' => 'https://...'],
            ])
            ->add('duree_minutes', IntegerType::class, [
                'label' => 'Durée (min)',
                'attr' => ['class' => 'w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800', 'min' => 1],
            ])
            ->add('ordre', IntegerType::class, [
                'label' => 'Ordre',
                'attr' => ['class' => 'w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800', 'min' => 1],
            ])
            ->add('niveau_min', ChoiceType::class, [
                'label' => 'Niveau min.',
                'choices' => [
                    'Débutant (1)' => 1,
                    'Intermédiaire (2)' => 2,
                    'Avancé (3)' => 3,
                ],
                'attr' => ['class' => 'w-full px-4 py-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LearningPathEtape::class,
        ]);
    }
}
