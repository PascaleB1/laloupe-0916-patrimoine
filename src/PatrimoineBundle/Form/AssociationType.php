<?php

namespace PatrimoineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class AssociationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre1')
                ->add('titre2')
                ->add('titre3')
                ->add('titre4')
                ->add('titre5')
                ->add('article1', TextareaType::class)
                ->add('article2', TextareaType::class)
                ->add('article3', TextareaType::class)
                ->add('article4', TextareaType::class)
                ->add('article5', TextareaType::class)
                ->add('file1', FileType::class, array('label' => 'insérer une image', 'required' => false))
                ->add('file2', FileType::class, array('label' => 'insérer une image', 'required' => false))
                ->add('file3', FileType::class, array('label' => 'insérer une image', 'required' => false))
                ->add('file4', FileType::class, array('label' => 'insérer une image', 'required' => false))
                ->add('file5', FileType::class, array('label' => 'insérer une image', 'required' => false));


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
