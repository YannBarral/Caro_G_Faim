<?php

namespace CaroGFaimBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class dinerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('dateDiner', 'datetime', array('label' => 'Date du dîner'))
            ->add('estArchive', null, array('label' => 'Dîner effectué ?'))
            ->add('invites', null, array('label'=>"Invités : "));

        $diner = $builder->getData();

        $type_plats = $diner->getPresenterTypePlats();

        $i = 0;
        foreach($type_plats as $type_plat) {
            $builder->add("id_plat[$i]", ChoiceType::class, array('label' => $type_plat->getLibelle()));
            $i++;
        }
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CaroGFaimBundle\Entity\diner'
        ));
    }
}
