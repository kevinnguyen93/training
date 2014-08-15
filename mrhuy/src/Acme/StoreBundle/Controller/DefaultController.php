<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\StoreBundle\Entity\Product;
use Acme\StoreBundle\Entity\Category;
use Acme\StoreBundle\Form\ProductType;

class DefaultController extends Controller
{
    /**
     * @Route(
     *  "/",
     *  name="acme_store_index"
     * )
     * @Template("AcmeStoreBundle:Default:index.html.twig")
     */
    public function indexAction(Request $request)
    {
        $listProducts = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Product')
            ->findAll();
        return array('title'=>'Home Store' , 'listProducts'=>$listProducts);
    }
    /**
     * @Route(
     *  "/listProduct",
     *  name="acme_store_listProduct"
     * )
     * @Template("AcmeStoreBundle:Default:listproduct.html.twig")
     */
    public function listProductAction(Request $request)
    {
        $listProducts = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Product')
            ->findAll();
        return array('listProducts'=>$listProducts);
    }
    /**
     * @Route(
     *  "/listCategory",
     *  name="acme_store_listCategory"
     * )
     * @Template("AcmeStoreBundle:Default:listcategory.html.twig")
     */
    public function listCategoryAction(Request $request)
    {
        $listCategories = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Category')
            ->findAll();
        return array('listCategories'=>$listCategories);
    }
    /**
     * @Route(
     *  "/createProduct",
     *  name="acme_store_createProduct"
     * )
     * @Template("AcmeStoreBundle:Default:createproduct.html.twig")
     */
    public function createProductAction(Request $request)
    {
        $product = new Product();
        $formProduct = $this->createForm(new ProductType(), $product);

        if($request->getMethod() == 'POST'){
            $formProduct->bind($request);
            if($formProduct->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($product);
                $em->flush();
                return $this->redirect($this->generateUrl('acme_store_listProduct'));
            }
        }

        return array('formProduct'=> $formProduct->createView());
    }

    /**
     * @Route(
     *  "/editProduct/{id}",
     *  name="acme_store_eidtProduct"
     * )
     * @Template("AcmeStoreBundle:Default:createproduct.html.twig")
     */
    public function editProductAction(Request $request, $id)
    {
        $product = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Product')
            ->find($id);
        if(!$product){
            throw $this->createNotFoundException('No product found for id: ' . $id);
        }
        $formProduct = $this->createForm(new ProductType(), $product);

        if($request->getMethod() == 'POST'){
            $formProduct->bind($request);
            if($formProduct->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($product);
                $em->flush();
                return $this->redirect($this->generateUrl('acme_store_listProduct'));
            }
        }

        return array('formProduct'=> $formProduct->createView());
    }

    /* ------------------------------------- old function --------------------------- */
    /**
     * @Route(
     *  "/create",
     *  name="acme_store_create"
     * )
     * @Template()
     */
    public function createAction()
    {
        $category = new Category();
        $category->setName('Main category' . rand(1000,9999));
        $product = new Product();
        $product->setName('product ' . rand(1000,9999));
        $product->setPrice('19.99');
        $product->setDescription('lorem ipsum dolor');
        // relate this product to the category
        $product->setCategory($category);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();

        return new Response('Created product Id: '. $product->getId() . ' and category id: ' . $category->getId() );
    }
    /**
     * @Route(
     *  "/showProduct/{id}",
     *  name="acme_store_showProduct"
     * )
     * @Template()
     */
    public function showProductAction($id)
    {
        $product = $this->getDoctrine()
                    ->getRepository('AcmeStoreBundle:Product')
                    ->find($id);
        $category = $product->getCategory();
        $categoryName = $category->getName();
        echo get_class($category);
        if(!$product){
            throw $this->createNotFoundException('No product found for id: ' . $id);
        }

        return new Response('Show product Id: '. $product->getId() . '<br/> name product: ' . $product->getName() . '<br> Category Name: ' . $categoryName);
    }
    /**
     * @Route(
     *  "/showCategory/{id}",
     *  name="acme_store_showCategory"
     * )
     * @Template()
     */
    public function showCategoryAction($id)
    {
        $category = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Category')
            ->find($id);
        $products = $category->getProducts();
        if(!$category){
            throw $this->createNotFoundException('No category found for id: ' . $id);
        }

//        echo '<pre>';
//        print_r($category);
//        foreach($products as $product){
//            print_r($product->getId());
//        }
//        exit();
//        return new Response('Show $category Id: '. $category->getId() . '<br/> name $category: ' . $category->getName() . '<br> Category Name: ' . $categoryName);
    }
    /**
     * @Route(
     *  "/update/{id}",
     *  name="acme_store_update"
     * )
     * @Template()
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);

        if(!$product){
            throw $this->createNotFoundException('No product found for id: ' . $id);
        }

        $product->setName('new name product' . rand(1000,9999));
        $em->flush();

        return new Response('Updated product Id: '. $product->getId() );
    }
    /**
     * @Route(
     *  "/delete/{id}",
     *  name="acme_store_delete"
     * )
     * @Template()
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);

        if(!$product){
            throw $this->createNotFoundException('No product found for id: ' . $id);
        }

        $em->remove($product);
        $em->flush();

        return new Response('Deleted product Id: '. $id );
    }
    /**
     * @Route(
     *  "/showall",
     *  name="acme_store_showall"
     * )
     * @Template()
     */
    public function showallAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $products = $em->getRepository('AcmeStoreBundle:Product')
            ->findAllOrderedByName();
        echo '<pre>';print_r($products);exit();
    }
}
