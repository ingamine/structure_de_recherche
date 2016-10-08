<?php

namespace GestionAdministrative\LgmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints as Assert;


class Enseignant_ChercheurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cINEnseigCh')
            ->add('nom')
            ->add('prenom')
            ->add('nomJeuneFille')
            ->add('dateNaiss', 'date')
            ->add('lieuNaiss')
            ->add('sexe')
            ->add('grade')
            ->add('etablisement')
            ->add('fonction')
            ->add('telMob')
            ->add('telFixe')
            ->add('eMail')
            ->add('dernierDepObtenu')
            ->add('dateDepObtenu', 'date')
            ->add('etabDepObtenu')
            ->add('codeStructure')
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionAdministrative\LgmBundle\Entity\Enseignant_Chercheur'
        ));
    }
}
