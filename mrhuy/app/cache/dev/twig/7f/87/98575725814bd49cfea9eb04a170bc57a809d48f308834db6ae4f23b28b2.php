<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7f8798575725814bd49cfea9eb04a170bc57a809d48f308834db6ae4f23b28b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  162 => 47,  157 => 43,  152 => 41,  149 => 40,  142 => 34,  138 => 33,  134 => 32,  131 => 31,  128 => 30,  123 => 44,  120 => 43,  118 => 40,  113 => 37,  111 => 30,  108 => 29,  105 => 28,  100 => 17,  94 => 5,  89 => 48,  87 => 47,  82 => 28,  73 => 22,  69 => 21,  64 => 18,  57 => 12,  53 => 14,  47 => 11,  43 => 8,  38 => 8,  32 => 5,  26 => 1,  84 => 46,  80 => 27,  76 => 25,  72 => 23,  68 => 21,  65 => 20,  62 => 17,  55 => 15,  49 => 13,  46 => 12,  40 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
