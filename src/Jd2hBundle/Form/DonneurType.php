<?php

namespace Jd2hBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DonneurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('firstName')->add('mailAdress')->add('town')
            ->add('country', 'choice', array ('choices' => array('France'=>'France', 'Europe' => 'Europe', 'Reste du monde' => 'Reste du monde')))
            ->add('status', 'choice', array ('choices' => array('Etudiant'=>'Etudiant', 'Entrepreneur' => 'Entrepreneur', 'Salarié' => 'Salarié', 'Entre 2 jobs' => 'Entre 2 jobs', 'Indépendant' => 'Indépendant', 'A la retraite' => 'A la retraite'),))
            ->add('hour', 'choice', array('choices' => array(1,2,3,4,5,6,7,8,)))        ;
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
