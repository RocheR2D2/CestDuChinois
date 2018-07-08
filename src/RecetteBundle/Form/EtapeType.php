<?php
/**
 * Created by PhpStorm.
 * User: roche
 * Date: 25/06/18
 * Time: 12:56
 */

namespace RecetteBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class EtapeType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $osptions)
    {
        $builder
            ->add('etapeImg', FileType::class, [
                'attr'=>[
                    'class' => 'form-control',
                    'name' => 'etapeImg[]',
                ]
            ])
            ->add('etapeDescription', TextType::class, [
                'attr'=>[
                    'class' => 'form-control',
                    'name' => 'etapeDescription[]',
                ]
            ]);
    }
}