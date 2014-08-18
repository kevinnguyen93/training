<?php

/* AcmeStoreBundle:Category:showcategory.html.twig */
class __TwigTemplate_e213b29fe7bc444850cb6bedb4371777f7371570e08e6aa63333424596413eca extends Twig_Template
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
        echo "    Show Category
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h2>Show Category</h2>
    <div class=\"panel panel-default\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name Category</th>
                <th>Number Products</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("acme_store_editCategory", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
        echo "</a></td>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
        echo "</td>
                    <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "products")), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Category:showcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  60 => 21,  54 => 20,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
