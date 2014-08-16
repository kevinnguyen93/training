<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/15/14
 * Time: 11:57 AM
 */
namespace Acme\StoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category')
            ->add('name' , 'text')
            ->add('price' , 'number')
            ->add('description','textarea');
    }

    public function getName()
    {
        return 'product';
    }
}