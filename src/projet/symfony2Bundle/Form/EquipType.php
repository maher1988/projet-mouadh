<?php

namespace projet\symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EquipType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('ville')
            ->add('gouvernorat')
            ->add('che')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'projet\symfony2Bundle\Entity\Equip'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_symfony2bundle_equip';
    }
}
