<?php

namespace Jd2hBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
/*use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;*/

class DonneurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('firstName')->add('mailAddress')->add('town')
            ->add('country', ChoiceType::class, array ('choices' => array('France'=>'France', 'Europe' => 'Europe', 'Reste du monde' => 'Reste du monde')))
            ->add('status', ChoiceType::class, array ('choices' => array('Etudiant'=>'Etudiant', 'Entrepreneur' => 'Entrepreneur', 'Salarié' => 'Salarié', 'Entre 2 jobs' => 'Entre 2 jobs', 'Indépendant' => 'Indépendant', 'A la retraite' => 'A la retraite'),))
            ->add('hour', ChoiceType::class, array('choices' => array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,)))
            /*->add('recaptcha', EWZRecaptchaType::class, array('language' => 'fr'))*/;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jd2hBundle\Entity\Donneur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jd2hbundle_donneur';
    }


}
