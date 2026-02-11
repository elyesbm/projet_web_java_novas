<?php

namespace App\Form;

use App\Entity\LearningPath;
use App\Entity\Skill;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LearningPathType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre_path', TextType::class, [
                'label' => 'Titre du parcours',
                'attr' => ['class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white', 'placeholder' => 'Ex: Maîtrise de Python'],
            ])
            ->add('description_skill', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['rows' => 4, 'class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white resize-none'],
            ])
            ->add('duree_estimee', IntegerType::class, [
                'label' => 'Durée estimée (heures ou semaines)',
                'attr' => ['class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white', 'min' => 1],
            ])
            ->add('type_etape', ChoiceType::class, [
                'label' => 'Type de contenu',
                'required' => false,
                'placeholder' => '— Non défini —',
                'choices' => [
                    'Article / Post' => LearningPath::TYPE_POST,
                    'Vidéo' => LearningPath::TYPE_VIDEO,
                    'Exercice' => LearningPath::TYPE_EXERCICE,
                    'Quiz' => LearningPath::TYPE_QUIZ,
                ],
                'attr' => ['class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white'],
            ])
            ->add('url', UrlType::class, [
                'label' => 'URL (vidéo, lien externe)',
                'required' => false,
                'attr' => ['class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white', 'placeholder' => 'https://...'],
            ])
            ->add('contexte_path', IntegerType::class, [
                'label' => 'Contexte (code)',
                'attr' => ['class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white'],
            ])
            ->add('statut_path', IntegerType::class, [
                'label' => 'Statut (0=inactif, 1=actif)',
                'attr' => ['class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white', 'min' => 0, 'max' => 1],
            ])
            ->add('niveau_path', IntegerType::class, [
                'label' => 'Niveau (1=débutant, 2=intermédiaire, 3=avancé)',
                'attr' => ['class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white', 'min' => 1, 'max' => 3],
            ])
            ->add('skill', EntityType::class, [
                'label' => 'Compétence associée',
                'class' => Skill::class,
                'choice_label' => 'nomSkill',
                'placeholder' => 'Choisir une compétence',
                'attr' => ['class' => 'w-full px-4 py-3 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => LearningPath::class,
        ]);
    }
}
