<?php

/* AcmeStoreBundle:Product:showproduct.html.twig */
class __TwigTemplate_ce70cde8cd2ac2e064dc5dddcf6d9685f85ea943f16a256fb836c365878a8258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@AcmeStore/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AcmeStore/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Show Products
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h2>Show Products</h2>
    <hr/>
    <div class=\"panel panel-default\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name Product</th>
                <th>Name Category</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("acme_store_editProduct", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
        echo " </a></td>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</td>
                    <td><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("acme_store_showCategory", array("id" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category"), "id"))), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category"), "name"), "html", null, true);
        echo "</a></td>
                    <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
        echo "</td>
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Product:showproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  73 => 26,  67 => 25,  63 => 24,  57 => 23,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
