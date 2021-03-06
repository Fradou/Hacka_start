<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/12/16
 * Time: 02:20
 */

namespace TransBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Locale\Locale;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('native_language', LanguageType::class, array ('data' => Locale::getDefault(),))
            ->add('first_name')->add('last_name')->add('translator')->add('paypal_account')->add('nationality')
        ->add('profile_picture', FileType::class);
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