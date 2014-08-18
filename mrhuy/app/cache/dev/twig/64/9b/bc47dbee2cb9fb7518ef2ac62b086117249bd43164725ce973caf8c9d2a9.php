<?php

/* AcmeStoreBundle:Default:fieldsForm.html.twig */
class __TwigTemplate_649bbc47dbee2cb9fb7518ef2ac62b086117249bd43164725ce973caf8c9d2a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"single_input\">
        ";
        // line 5
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:fieldsForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  47 => 10,  45 => 9,  40 => 8,  37 => 7,  32 => 4,  29 => 3,);
    }
}
