<?php
/**
 * Created by PhpStorm.
 * User: roche
 * Date: 27/06/18
 * Time: 16:19
 */

namespace RecetteBundle\Form;


use RecetteBundle\Entity\Recette;
use RecetteBundle\Entity\Tags;
use Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class TagsType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        //$builder->add('tags', TextType::class);

        /*
        $builder
            //->addModelTransformer(new CollectionToArrayTransformer(),true)
            ->addModelTransformer(new TagsTransformer(), true);
        */

        $builder
            //->addModelTransformer(new CollectionToArrayTransformer(),true)
            ->addModelTransformer(new TagsTransformer());


    }


    public function getParent()
    {
        return TextType::class;
    }


}