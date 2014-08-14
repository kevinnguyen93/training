<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
	/**
	 * @Route("/{name}/{nickname}", name="hello")
	 * @Template("AcmeHelloBundle:Default:index.html.twig")
	 */
    public function indexAction($name, $nickname)
    {
        return array(
    		'name' => $name,
    		'nickname' => $nickname
    	);
    }
    /**
     * @Route("/redirect", name="hello_redirect")
     * @Template("AcmeHelloBundle:Default:redirect.html.twig")
     */
    public function redirectAction(){
		return array();
    }
    /**
     * @Route("/forward", name="hello_forward")
     * @Template("AcmeHelloBundle:Default:forward.html.twig")
     */
    public function forwardAction(){
    	return array();
    }
}
