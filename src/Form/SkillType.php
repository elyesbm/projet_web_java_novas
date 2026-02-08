<?php

namespace App\Form;

use App\Entity\Skill;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SkillType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_skill', TextType::class, [
                'label' => 'Nom du skill',
                'attr' => ['placeholder' => 'Ex: Communication orale, Python...', 'class' => 'w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all placeholder:text-muted-foreground/50'],
            ])
            ->add('description_skill', TextareaType::class, [
                'label' => 'Description (optionnel)',
                'required' => false,
                'attr' => ['rows' => 3, 'placeholder' => 'Décrivez votre expérience avec ce skill...', 'class' => 'w-full bg-secondary border border-white/10 rounded-xl p-4 focus:outline-none focus:border-primary transition-all resize-none placeholder:text-muted-foreground/50'],
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Communication' => 'Communication',
                    'Programmation' => 'Programmation',
                    'Management' => 'Management',
                    'Data Science' => 'Data Science',
                    'Bien-être' => 'Bien-être',
                    'Développement Web' => 'Développement Web',
                    'Design' => 'Design',
                    'Marketing' => 'Marketing',
                ],
                'attr' => ['class' => 'w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all appearance-none cursor-pointer'],
            ])
            ->add('contexte_skill', ChoiceType::class, [
                'label' => 'Type de compétence',
                'choices' => [
                    'Hard Skill (technique, académique)' => 'hard',
                    'Soft Skill (interpersonnel, humain)' => 'soft',
                ],
                'attr' => ['class' => 'w-full h-14 bg-secondary border border-white/10 rounded-xl px-4 focus:outline-none focus:border-primary transition-all appearance-none cursor-pointer'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Skill::class,
        ]);
    }
}
