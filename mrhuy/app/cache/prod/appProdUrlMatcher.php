<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/store')) {
            // acme_store_index
            if (rtrim($pathinfo, '/') === '/store') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_store_index');
                }

                return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_store_index',);
            }

            // acme_store_create
            if ($pathinfo === '/store/create') {
                return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::createAction',  '_route' => 'acme_store_create',);
            }

            // acme_store_show
            if (0 === strpos($pathinfo, '/store/show') && preg_match('#^/store/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_store_show')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::showAction',));
            }

            // acme_store_update
            if (0 === strpos($pathinfo, '/store/update') && preg_match('#^/store/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_store_update')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::updateAction',));
            }

            // acme_store_delete
            if (0 === strpos($pathinfo, '/store/delete') && preg_match('#^/store/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_store_delete')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::deleteAction',));
            }

            // acme_store_showall
            if ($pathinfo === '/store/showall') {
                return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::showallAction',  '_route' => 'acme_store_showall',);
            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // acme_hello_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)/(?P<nickname>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_hello_homepage')), array (  '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::indexAction',  '_format' => 'html',));
            }

            // acme_hello_redirecting
            if (rtrim($pathinfo, '/') === '/hello/redirecting') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_hello_redirecting');
                }

                return array (  '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::redirectingAction',  '_route' => 'acme_hello_redirecting',);
            }

            // acme_hello_forwarding
            if (rtrim($pathinfo, '/') === '/hello/forwarding') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_hello_forwarding');
                }

                return array (  '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::forwardingAction',  '_route' => 'acme_hello_forwarding',);
            }

            // _helloabc_abc
            if (rtrim($pathinfo, '/') === '/helloabc/abc') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_helloabc_abc');
                }

                return array (  '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::abcAction',  '_route' => '_helloabc_abc',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
