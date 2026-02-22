<?php

namespace App\Form;

use App\Entity\Commentaire;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('contenu', CKEditorType::class, [
            'config_name' => 'commentaire',
            'required' => false,
            'empty_data' => '',
        ]);
        $builder->add('parent_id', HiddenType::class, [
            'mapped' => false,
            'required' => false,
        ]);
        $builder->add('audio', FileType::class, [
            'mapped' => false,
            'required' => false,
            'label' => false,
            'attr' => ['accept' => 'audio/*', 'class' => 'hidden comment-audio-input'],
            'constraints' => [
                new File([
                    'maxSize' => '5M',
                    'mimeTypes' => [
                        'audio/webm',
                        'audio/webm;codecs=opus',
                        'audio/ogg',
                        'audio/mp4',
                        'audio/mpeg',
                        'audio/wav',
                        'audio/x-wav',
                        'video/webm',
                        'application/octet-stream', // fallback quand le navigateur n’envoie pas le type
                    ],
                    'mimeTypesMessage' => 'Veuillez envoyer un fichier audio (WebM, Ogg, MP3, WAV).',
                ]),
            ],
        ]);

        $builder->addEventListener(FormEvents::POST_SUBMIT, function ($event): void {
            $form = $event->getForm();
            $comment = $form->getData();
            $contenu = trim((string) ($comment?->getContenu() ?? ''));
            $audio = $form->get('audio')->getData();
            if ($contenu === '' && !$audio) {
                $form->addError(new FormError('Ajoutez du texte ou un enregistrement vocal.'));
            }
            if ($contenu !== '' && \strlen($contenu) < 5 && !$audio) {
                $form->addError(new FormError('Le contenu doit contenir au moins 5 caractères.'));
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
