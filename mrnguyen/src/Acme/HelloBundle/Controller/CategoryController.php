<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use Acme\HelloBundle\Entity\Category;
use Acme\HelloBundle\Form\HelloForm;

/**
 * @Route("/hello/category")
 */
class CategoryController extends Controller
{
	/**
	 * @Route("/", name="hello_category")
	 * @Template("AcmeHelloBundle:Category:index.html.twig")
	 */
	public function indexAction()
	{
		$repository = $this->getDoctrine()->getRepository('AcmeHelloBundle:Category');
		return array('listCat' => $repository->findAll());
	}
	
	/**
	 * @Route("/edit/{id}", name="hello_category_edit")
	 * @Template("AcmeHelloBundle:Category:edit.html.twig")
	 */
	public function editAction($id){
		$repository = $this->getDoctrine()->getRepository('AcmeHelloBundle:Category');
		$cat = $repository->find($id);
		$form = $this->createForm(new HelloForm($cat), $cat);
		 
		return $this->render('AcmeHelloBundle:Category:edit.html.twig', array(
				'form' => $form->createView(),
		));
		 
	}
	
	/**
	 * @Route("/create", name="hello_category_create")
	 * @Template("AcmeHelloBundle:Category:edit.html.twig")
	 */
	public function createAction(){
		$cat = new Category();
		$form = $this->createForm(new HelloForm($cat), $cat);
	
		return $this->render('AcmeHelloBundle:Category:edit.html.twig', array(
				'form' => $form->createView(),
		));
	
	}
	
	/**
	 * @Route("/delete/{id}", name="hello_category_delete")
	 * @Template()
	 */
	public function deleteAction($id){
		$em = $this->getDoctrine()->getEntityManager();
		$cat = $em->getRepository('AcmeHelloBundle:Category')->findOneBy(array('id' => $id));
		$em->remove($cat);
		$em->flush();
		return $this->redirect($this->generateUrl('hello_category'));
	}
	
	/**
	 * @Route("/save", name="hello_category_save")
	 * @Template()
	 */
	public function saveAction(Request $request){
		$cat = new Category();
		$form = $this->createForm(new HelloForm($cat), $cat);
		 
		if($request->getMethod() == 'POST'){
			$form->bind($request);
			if($form->isValid()){
				$em = $this->getDoctrine()->getEntityManager();
				$data = $form->getData();
				if(($data->getId())){
					$cat = $em->getRepository('AcmeHelloBundle:Category')->find($data->getId());
					if (!$cat) {
						throw $this->createNotFoundException(
								'No category found for id '.$id
						);
					}
					$cat->setName($data->getName());
				}
				else
					$em->persist($cat);
				$em->flush();
				return $this->redirect($this->generateUrl('hello_category'));
			}
		}
		 
	}
}
