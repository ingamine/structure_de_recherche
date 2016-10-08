<?php

namespace GestionAdministrative\LgmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints as Assert;


class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label' => 'Prénom',
                'required' => true,
                'constraints' => array(
                    new Assert\NotBlank(array(
                        'message' => 'form.error.notBlank',
                    )),
                    new Assert\Length(array(
                        'min' => 2,
                        'minMessage' => 'min deux caractères',
                        'max' => 254,
                        'maxMessage' => 'form.error.length.maxMessage',
                    ))
                )
            ))
            ->add('lastName')
            ->add('gender', 'choice', array('choices' => array('F'=>'Féminin','M'=>'Masculin')))
            ->add('birthday', 'birthday')
            ->add('birthPlace')
            ->add('email', 'email')
            ->add('phoneNumber', 'number')
            ->add('grade', 'choice', array('choices' => array('PR'=>'Professeur',
                                                              'MC'=>'Maitre Conférance',
                                                              'MA'=>'Maitre Assistant',
                                                              'A'=>'Assistant', )))
            ->add('profile', 'choice', array('choices' => array('J'=>'Junior','S'=>'Senior')))
            ->add('documentId')
            ->add('photoId')
                
            
	    ->add('directeur', 'checkbox' , array('required' =>false))
            ->add('coDirecteur', 'checkbox' , array('required' =>false))
            ->add('effectue', 'checkbox' , array('required' =>false))
			
        
           
            
            ->add('mediaId')
            
            ->add('habilitation')
            ->add('These')
            ->add('Mastere')
            ->add('Soutenance')
            ->add('ProductionScientifique')
            ->add('ResearchTeam')
            ->add('Structure')
                
            ->add('imageFile', 'vich_image', array(
                                            'required'      => false,
                                            'allow_delete'  => true, // not mandatory, default is true
                                            'download_link' => true, // not mandatory, default is true
                
                
                
                
                
        ));    
                
                
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
