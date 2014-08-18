<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/18/14
 * Time: 3:19 PM
 */

namespace Acme\StoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

Class StoreForm extends AbstractType{

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    private $_fields;
    public function __construct($obj)
    {
        $this->_fields = $obj->listFields();
    }
    public function getName()
    {
        return 'storeform';
    }
    public function getDefaultOptions(array $options)
    {
        return array('data_class' => 'Acme\StoreBundle\Entity\\'. get_class($options));
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if($this->_fields){
            foreach ($this->_fields as $field => $v) {
                if($v == 'category'){
                    $builder->add($field);
                }else{
                    $builder->add($field , $v);
                }
            }
        }
    }

}