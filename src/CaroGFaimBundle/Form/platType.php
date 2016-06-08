<?php

namespace CaroGFaimBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class platType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', null, array('label'=>'Nom du plat : '))
            ->add('type_plat', null, array('label'=>'Type : '))
            ->add('ingredients', null, array('label'=>'Ingrédients : '))
           // ->add('note', null, array('label'=>'Attribuer une note :', 'attr' => array('min'=>'0', 'max'=>'5')))
            ->add('annotations', null, array('required' => false, 'data'=>'', 'label'=> 'Annotations : '))
            ->add('photofilename', FileType::class, array('required' => false, 'data'=>'', 'label'=> 'Joindre une photo : '))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CaroGFaimBundle\Entity\plat'
        ));
    }
}