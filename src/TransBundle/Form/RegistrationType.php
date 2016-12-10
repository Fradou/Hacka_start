<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/12/16
 * Time: 02:20
 */

namespace TransBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('native_language')->add('first_name')->add('last_name')->add('paypal_account')->add('nationality');
    }

    public function getParent()
    {
        return 'fos_user_registration';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}