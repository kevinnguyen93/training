<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/17/14
 * Time: 8:45 AM
 */
namespace Acme\StoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

Class UserType extends AbstractType{

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'user';
    }

    public function getDefaultOptions(array $options)
    {
        return array('data_class' => 'Acme\StoreBundle\Entity\User');
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email');
        $builder->add('plainPassword', 'repeated', array(
            'first_name' => 'password',
            'second_name' => 'confirm',
            'type' => 'password',
        ));
    }
}