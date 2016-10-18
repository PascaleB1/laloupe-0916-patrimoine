<?php

namespace PatrimoineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AssociationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre1', TextareaType::class)
                ->add('titre2', TextareaType::class)
                ->add('titre3', TextareaType::class)
                ->add('titre4', TextareaType::class)
                ->add('article1', TextareaType::class)
                ->add('article2', TextareaType::class)
                ->add('article3', TextareaType::class)
                ->add('article4', TextareaType::class)
                ->add('file', 'file', array('label' => 'image', 'required' => false));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PatrimoineBundle\Entity\Association'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'patrimoinebundle_association';
    }


}
