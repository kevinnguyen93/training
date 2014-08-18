<?php
namespace Acme\HelloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class HelloForm extends AbstractType
{
	private $_fields;
	public function __construct($obj){
		$this->_fields = $obj->listFields();
	}
	
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	if($this->_fields){
    		foreach ($this->_fields as $field => $v){
    			$builder->add($field, $v);
    		}
    	}
    	
        $builder->add('save', 'submit', array('label' => 'Save'));
    }
    
    public function getDefaultOptions(array $options)
    {
    	return array(
    			'data_class' => 'Acme\HelloBundle\Entity\\'.get_class($options)
    	);
    }
    

    public function getName()
    {
        return 'HelloForm';
    }
}