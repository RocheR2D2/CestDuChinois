<?php

namespace RecetteBundle\Form;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecetteType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $fontcolor = 'color:#3B3B3B;';

        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr'=>[
                    'class' => 'form-control',
                    'name' => 'titre',
                ]
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'attr'=>[
                    'class' => 'form-control',
                    'name' => 'image',
                ]
            ])
            ->add('description', TextType::class,[
                'label' => 'Description',
                'attr'=>[
                    'name' => 'description',
                    'class' => 'form-control',
                ]
            ])

            ->add('etape', EtapeType::class, [
                'label' => 'Étape',
                'attr'=>[
                    'class' => 'form-control',
                    'style' => 'display:none',
                    'name' => 'etape[]',
                ]
            ])

            ->add('ingredient', TextType::class, [
                'label' => 'Ingrédients',
                'attr'=>[
                    'class' => 'form-control',
                    'name' => 'ingredient[]',
                ]
            ])
            ->add('saveur', ChoiceType::class, [
                'label' => 'Saveurs',
                'attr'=>[
                    'name' => 'saveur',
                    'style' => $fontcolor
                ],
                'expanded' => true,
                'multiple' => true,
                'choices'  => [
                    'Sucré ' => 0,
                    'Salé ' => 1,
                    'Acide ' => 2,
                    'Amer ' => 3,
                ],

            ])
            ->add('facons', ChoiceType::class, [
                'label' => 'Manière de Cuisine',
                'attr'=>[
                    'name' => 'facon',
                    'style' => $fontcolor
                ],
                'expanded' => true,
                'multiple' => true,
                'choices'  => [
                    'fri' => 0,
                    'sauté' => 1,
                    'à vapeur' => 2,
                    'pression' => 3,
                ]
            ])
            ->add('temps', TextType::class, [
                'label' => 'Temps de Cuission',
                'attr'=>[
                    'class' => 'form-control',
                    'name' => 'temps',
                ]
            ])
            ->add('niveau', ChoiceType::class, [
                'label' => 'Difficulté',
                'attr'=>[
                    'name' => 'niveau',
                ],
                'choices'  => [
                    'facile' => 0,
                    'moyen' => 1,
                    'difficile' => 2,
                ],
            ])
            ->add('tags', TagsType::class);


            //->getForm();
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RecetteBundle\Entity\Recette'
        ));
    }

    /*
    public function getBlockPrefix()
    {
        return 'recettebundle_recette';
    }
    */

}
