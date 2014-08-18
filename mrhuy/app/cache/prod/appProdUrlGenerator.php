<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'acme_store_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/store/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_store_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/store/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_store_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/store/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_store_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/store/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_store_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/store/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_store_showall' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::showallAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/store/showall',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_hello_homepage' => array (  0 =>   array (    0 => 'name',    1 => 'nickname',  ),  1 =>   array (    '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::indexAction',    '_format' => 'html',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nickname',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    2 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_hello_redirecting' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::redirectingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hello/redirecting/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_hello_forwarding' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::forwardingAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hello/forwarding/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_helloabc_abc' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::abcAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/helloabc/abc/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
