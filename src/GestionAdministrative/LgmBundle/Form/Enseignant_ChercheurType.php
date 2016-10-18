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
            ->add('sexe', 'choice', array('choices' => array('Masculin'=>'Masculin',
                                                             'Féminin'=>'Féminin'  )))
            ->add('grade', 'choice', array('choices' => array('Professeur'=>'Professeur',
                                                              'Maitre de Conférence'=>'Maitre de Conférence',
                                                              'Maitre Assistant'=>'Maitre Assistant',
                                                              'Assistant'=>'Assistant')))
            ->add('etablisement')
            ->add('fonction')
            ->add('telMob')
            ->add('telFixe')
            ->add('eMail')
            ->add('dernierDepObtenu','choice', array('choices' => array('Habilitation'=>'Habilitation',
                                                                        'Doctorat'=>'Doctorat',
                                                                        'Agrégation'=>'Agrégation',
                                                                        'DEA'=>'DEA')))
            ->add('dateDepObtenu', 'date')
            ->add('etabDepObtenu')
            ->add('codeStructure')
            ->add('team', 'entity', array(
                            'class' => 'LgmBundle:ResearchTeam',
                           'choice_label' => function ($ResearchTeam) {
                            return $ResearchTeam->getName();
                            }
                            ))
            
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
