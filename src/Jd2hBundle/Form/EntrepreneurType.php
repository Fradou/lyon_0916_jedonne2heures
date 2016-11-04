<?php

namespace Jd2hBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;

class EntrepreneurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('firstName')->add('mailAddress')->add('town')
            ->add('country', ChoiceType::class, array ('choices' => array('France'=>'France', 'Europe' => 'Europe', 'Reste du monde' => 'Reste du monde')))
            ->add('company')
            ->add('position', ChoiceType::class, array ('choices' => array('Fondateur'=>'Fondateur', 'Porteur de projet'=>'Porteur de projet', 'Dirigeant' => 'Dirigeant', 'Autre' => 'Autre')))
            ->add('activity', ChoiceType::class, array ('choices' => array('Agroalimentaire' => 'Agroalimentaire','Automobile'=>'Automobile', 'Banque/Assurance' => 'Banque/Assurance', 'BTP'=>'BTP', 'Chimie'=>'Chimie', 'Commerce'=>'Commerce', 'Electronique'=>'Electronique', 'Industrie pharmaceutique'=>'Industrie pharmaceutique','Informatique / Télécoms'=>'Informatique / Télécoms', 'Métallurgie'=>'Métallurgie','Multimédia'=>'Multimédia','Service aux entreprises'=>'Service aux entreprises','Textiles'=>'Textiles', 'Autres'=>'Autres')))
            ->add('recaptcha', EWZRecaptchaType::class, array('language' => 'fr'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jd2hBundle\Entity\Entrepreneur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jd2hbundle_entrepreneur';
    }


}
