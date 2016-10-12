<?php

namespace GestionAdministrative\LgmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('equipe')
            ->add('a1')
            ->add('a2')
            ->add('a3')
            ->add('a4')
            ->add('a5')
            ->add('a6')
            ->add('a7')
            ->add('a8')
            ->add('a9')
            ->add('a10')
            ->add('journal')
            ->add('indx')
            ->add('vol')
            ->add('num')
            ->add('pp')
            ->add('titre')
            ->add('path')
            ->add('created', 'datetime')
            ->add('updated', 'datetime')
            ->add('deletedAt', 'datetime')
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
}
