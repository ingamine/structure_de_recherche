<?php

namespace GestionAdministrative\LgmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('researchTeam', 'entity', array(
                            'class' => 'LgmBundle:ResearchTeam',
                           'choice_label' => function ($ResearchTeam) {
                            return $ResearchTeam->getName();
                            }
                            ))
                                             
            ->add('a1','entity', array(
                            'class' => 'LgmBundle:Enseignant_Chercheur',
                           'choice_label' => function ($Enseignant_Chercheur) {
                            return $Enseignant_Chercheur->getNom();
                            }
                            ))
            ->add('a2','entity', array(
                            'class' => 'LgmBundle:Doctorant',
                           'choice_label' => function ($Doctorant) {
                            return $Doctorant->getNom();
                            }
                            ))
            ->add('a3')
            ->add('a4')
            ->add('a5')
            ->add('a6')
            ->add('a7')
            ->add('a8')
            ->add('a9')
            ->add('a10')
            ->add('annee')
            ->add('journal')
            ->add('indx')
            ->add('vol')
            ->add('num')
            ->add('pp')
            ->add('titre')
            ->add('brochure', 'file', 
                    array('label' => 'Brochure (PDF file)',
                     'data_class' => null
                    )
                        )
                
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionAdministrative\LgmBundle\Entity\Article'
        ));
    }
    
    public function getEquipe()
    {
        return 'article';
    }
    
}
