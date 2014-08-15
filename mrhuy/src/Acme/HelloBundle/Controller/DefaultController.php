<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction(Request $request , $name , $nickname)
    {
//        echo '<pre>';print_r($request);print_r($name);print_r($nickname);exit();

        $request->isXmlHttpRequest(); // is it an Ajax request?

        $request->getPreferredLanguage(array('en', 'fr'));

        $request->query->get('name'); // get a $_GET parameter

        $request->request->get('name'); // get a $_POST parameter

        if ($name != 'huy') {
            throw $this->createNotFoundException('The name does not exist');
        }
        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $name , 'nickname' => $nickname));
//        return new Response('<html><body>Hello '. $name .'!</body></html>');
    }
    public function redirectingAction()
    {
        return $this->redirect($this->generateUrl('acme_hello_homepage',array('name' => 'redirectingAction', 'nickname' => 'Action')));
    }
    public function forwardingAction()
    {
        $response = $this->forward('AcmeHelloBundle:Default:fancy', array(
            'name'  => 'forwardingAction',
            'color' => 'green',
        ));

        // ... further modify the response or return it directly

        return $response;
    }
    public function fancyAction($name , $color){
        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $name , 'nickname' => $color));
    }
    /**
     * @Route(
     *  "/abc/",
     *  name="_helloabc_abc"
     * )
     * @Template()
     */
    public function abcAction(){
        return new Response('<html><body> <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, voluptas?</h2> </body></html>');
    }
}
