<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use Acme\HelloBundle\Entity\User;
use Acme\HelloBundle\Form\HelloForm;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="hello")
	 * @Template("AcmeHelloBundle:Default:index.html.twig")
	 */
    public function indexAction()
    {
    	$repository = $this->getDoctrine()->getRepository('AcmeHelloBundle:User');
    	return array('listUser' => $repository->findAll());
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
    
    /**
     * @Route("/edit/{id}", name="hello_edit")
     * @Template("AcmeHelloBundle:Default:edit.html.twig")
     */
    public function editAction($id){
    	$repository = $this->getDoctrine()->getRepository('AcmeHelloBundle:User');
    	$user = $repository->find($id);
    	$form = $this->createForm(new HelloForm($user), $user);
    	
    	return $this->render('AcmeHelloBundle:Default:edit.html.twig', array(
    			'form' => $form->createView(),
    	));
    	
    }
    
    /**
     * @Route("/createuser", name="hello_createuser")
     * @Template("AcmeHelloBundle:Default:edit.html.twig")
     */
    public function createuserAction(){
    	$user = new User();
    	$form = $this->createForm(new HelloForm($user), $user);
    	 
    	return $this->render('AcmeHelloBundle:Default:edit.html.twig', array(
    			'form' => $form->createView(),
    	));
    	 
    }
    
    /**
     * @Route("/deleteuser/{id}", name="hello_deleteuser")
     * @Template()
     */
    public function deleteuserAction($id){
    	$em = $this->getDoctrine()->getEntityManager();
    	$user = $em->getRepository('AcmeHelloBundle:User')->findOneBy(array('id' => $id));
    	$em->remove($user);
    	$em->flush();
    	return $this->redirect($this->generateUrl('hello'));
    }
    
    /**
     * @Route("/save", name="hello_save")
     * @Template()
     */
    public function saveAction(Request $request){
    	$user = new User();
    	$form = $this->createForm(new HelloForm($user), $user);
    	
    	if($request->getMethod() == 'POST'){
    		$form->bind($request);
    		if($form->isValid()){
    			$em = $this->getDoctrine()->getEntityManager();
    			$data = $form->getData();
    			if(($data->getId())){
    				$user = $em->getRepository('AcmeHelloBundle:User')->find($data->getId());
    				if (!$user) {
    					throw $this->createNotFoundException(
    						'No user found for id '.$id
    					);
    				}
    				$user->setFirstname($data->getFirstname());
    				$user->setLastname($data->getLastname());
    				$user->setUsername($data->getUsername());
    				$user->checkPassword($data->getPassword());
    			}
    			else 
    				$em->persist($user);
    			$em->flush();
    			return $this->redirect($this->generateUrl('hello'));
    		}
    	}
    	
    }
    
    
}
