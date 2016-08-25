<?php

namespace GestionAdministrative\LgmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('lastName')
            ->add('gender')
            ->add('birthday', 'datetime')
            ->add('birthPlace')
            ->add('email')
            ->add('phoneNumber')
            ->add('grade')
            ->add('profile')
            ->add('documentId')
            ->add('photoId')
            ->add('directeur')
            ->add('coDirecteur')
            ->add('effectue')
            ->add('mediaId')
            
            ->add('habilitation')
            ->add('These')
            ->add('Mastere')
            ->add('Soutenance')
            ->add('ProductionScientifique')
            ->add('ResearchTeam')
            ->add('Structure')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionAdministrative\LgmBundle\Entity\User'
        ));
    }
}
