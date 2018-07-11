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
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtapeType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $osptions)
    {
        $builder
            ->add('etapeImage', FileType::class, [
                'attr'=>[
                    'required' => false,
                    'data_class' => null
                ]
            ])
            ->add('etapeDescription', TextType::class);
    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RecetteBundle\Entity\Etape'
        ));
    }
}