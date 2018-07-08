<?php
/**
 * Created by PhpStorm.
 * User: roche
 * Date: 19/06/18
 * Time: 17:29
 */

namespace SecuriteBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserRegisterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',  TextType::class, [
                'label' => '',
                'attr'=>[
                    'class' => 'form-control',
                    //'readonly' => "readonly",
                    'value' => 'Pseudo',

                ]
            ])
            ->add('firstname',  TextType::class, [
                'label' => '',
                'attr'=>[
                    'class' => 'form-control',
                    'readonly' => "readonly",
                    'value' => 'Prénom',

                ]
            ])
            ->add('lastname',  TextType::class, [
                'label' => '',
                'attr'=>[
                    'class' => 'form-control',
                    //'readonly' => "readonly",
                    'value' => 'Nom',

                ]
            ])
            ->add('sex',ChoiceType::class, [
                'choices'  => [
                    'Homme' => '0',
                    'Femme' => '1',
                ],
                'label' => 'Sexe',
                'attr'=>[
                    'class' => 'form-control',
                ],
            ])
            ->add('email',EmailType::class, [
                'label' => '',
                'attr'=>[
                    'class' => 'form-control',
                    'readonly' => "readonly",
                    'value' => 'Email',

                ]
            ])
            ->add('password',PasswordType::class, [
                'label' => '',
                'attr'=>[
                    'class' => 'form-control',
                    'readonly' => "readonly",
                    'value' => 'Password',
                ]
            ])
            ->add('profil',PasswordType::class, [
                'label' => '',
                'attr'=>[
                    'class' => 'form-control',
                    'readonly' => "readonly",
                    'value' => 'Profile',
                ]
            ])
            ->add('register',SubmitType::class, [
                'attr'=>[
                    'label' => '',
                    'class' => 'btn btn-info btn-md',
                    'value' => 'Profile',
                ],
            ]);

    }/**
 * {@inheritdoc}
 */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SecuriteBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'recettebundle_recette';
    }
}