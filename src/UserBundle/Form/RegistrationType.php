<?php
/**
 * Created by PhpStorm.
 * User: alin
 * Date: 24.02.2016
 * Time: 20:38
 */

namespace UserBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                null,
                [
                    'label' => "Nume si Prenume",
                    'required' => false,
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )->add(
                'username',
                null,
                [
                    'label' => 'form.username',
                    'translation_domain' => 'FOSUserBundle',
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )->add(
                'email',
                LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'),
                [
                    'label' => "Email",
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )->add('plainPassword',
                LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'),
                [
                    'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                    'options' => ['translation_domain' => 'FOSUserBundle'],
                    'first_options' => [
                        'label' => 'form.password',
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ],
                    'second_options' => [
                        'label' => 'form.password_confirmation',
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ],
                    'invalid_message' => 'fos_user.password.mismatch'
                ]
            )->add(
                'submit',
                'Symfony\Component\Form\Extension\Core\Type\SubmitType',
                [
                    'attr' => [
                        'class' => 'btn btn-lg btn-primary btn-block'
                    ]
                ]
            );
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}