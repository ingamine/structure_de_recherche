<?php

namespace GestionAdministrative\LgmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Cadre_equivalantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qualite')
            ->add('cINCEquivalant')
            ->add('nom')
            ->add('prenom')
            ->add('codeStructure')
            ->add('etab')
            ->add('date_naissance', 'date')
            ->add('lieu_naissance')
            ->add('tel_mob')
            ->add('tel_fixe')
            ->add('e_mail')
            ->add('dernier_diplome_obtenu')
            ->add('date_dernier_dip_obtenu', 'date')
            ->add('etabDepObtenu')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionAdministrative\LgmBundle\Entity\Cadre_equivalant'
        ));
    }
}
