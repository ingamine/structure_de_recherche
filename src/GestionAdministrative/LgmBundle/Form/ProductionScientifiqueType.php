<?php

namespace GestionAdministrative\LgmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductionScientifiqueType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('type')
            ->add('datePublication', 'date')
            ->add('auteur')
            ->add('nbAuteur')
            ->add('nomJournal')
            ->add('nomCongres')
            ->add('edition')
            ->add('isbn')
            ->add('indexe')
            ->add('indexFactor')
         
            ->add('Media')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionAdministrative\LgmBundle\Entity\ProductionScientifique'
        ));
    }
}
