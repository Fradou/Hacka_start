<?php

namespace TransBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Locale\Locale;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemandType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('location')
            ->add('languageNeeded', LanguageType::class, array ('data' => Locale::getDefault(),))
            ->add('languageSpoken', LanguageType::class, array ('data' => Locale::getDefault(),))
            ->add('institutionInvolved', ChoiceType::class, array(
                'choices' => array('Bank' => 'Bank', 'Insurance' => 'Insurance', 'Restaurant' => 'Restaurant', 'Medical' => 'Medical', 'Government Service' => 'Government Service', 'Legal issue' => 'Legal issue', 'Emergency' => 'Emergency', 'Shopping' => 'Shopping'),
        'choices_as_values' => true,))
            ->add('institutionName')
            ->add('situation')
            ->add('translator')
            ->add('applicant');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TransBundle\Entity\Demand'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'transbundle_demand';
    }


}
