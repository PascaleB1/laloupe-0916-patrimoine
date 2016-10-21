<?php

namespace PatrimoineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RealisationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre1')
            ->add('article1')
            ->add('titre2')
            ->add('article2')
            ->add('titre3')
            ->add('article3')
            ->add('titre4')
            ->add('article4')
            ->add('titre5')
            ->add('article5')
            ->add('titre6')
            ->add('article6')
            ->add('titre7')
            ->add('article7')
            ->add('titre8')
            ->add('article8')
            ->add('titre9')
            ->add('article9')
            ->add('titre10')
            ->add('article10')
            ->add('file1', 'file', array('label' => 'image', 'required' => false))
            ->add('file2', 'file', array('label' => 'image', 'required' => false))
            ->add('file3', 'file', array('label' => 'image', 'required' => false))
            ->add('file4', 'file', array('label' => 'image', 'required' => false))
            ->add('file5', 'file', array('label' => 'image', 'required' => false))
            ->add('file6', 'file', array('label' => 'image', 'required' => false))
            ->add('file7', 'file', array('label' => 'image', 'required' => false))
            ->add('file8', 'file', array('label' => 'image', 'required' => false))
            ->add('file9', 'file', array('label' => 'image', 'required' => false))
            ->add('file10', 'file', array('label' => 'image', 'required' => false))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PatrimoineBundle\Entity\Realisation'
        ));
    }
}
