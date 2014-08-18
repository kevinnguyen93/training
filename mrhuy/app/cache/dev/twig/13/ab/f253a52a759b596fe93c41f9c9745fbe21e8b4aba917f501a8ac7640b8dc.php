<?php

/* AcmeStoreBundle:Product:formproduct.html.twig */
class __TwigTemplate_13abf253a52a759b596fe93c41f9c9745fbe21e8b4aba917f501a8ac7640b8dc extends Twig_Template
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
        echo "    ";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add")) {
            // line 5
            echo "        Add Product
    ";
        } else {
            // line 7
            echo "        Edit Product
    ";
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add")) {
            // line 13
            echo "        <h2>Add Product</h2>
    ";
        } else {
            // line 15
            echo "        <h2>Edit Product</h2>
    ";
        }
        // line 17
        echo "    <hr/>
    ";
        // line 25
        echo "    <div class=\"formcontent\">
        ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), 'form_start');
        echo "

        <div class=\"error has-error row demo-row\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), 'errors');
        echo "
        </div>
        <div class=\"row demo-row\">
            <div class=\"form-group\">
                <div class=\"col-xs-3\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "category"), 'label', array("attr" => array("class" => "control-label"), "label" => "Category Group: "));
        echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "category"), 'widget', array("attr" => array("class" => "select-block selectpicker")));
        echo "
                </div>
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "category"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row demo-row\">
            <div class=\"form-group\">
                <div class=\"col-xs-3\">
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "name"), 'label');
        echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "name"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "name"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row demo-row\">
            <div class=\"form-group\">
                <div class=\"col-xs-3\">
                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "price"), 'label');
        echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "price"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "price"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row demo-row\">
            <div class=\"form-group\">
                <div class=\"col-xs-3\">
                    ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "description"), 'label');
        echo "
                </div>
                <div class=\"col-xs-6\">
                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "description"), 'widget', array("attr" => array("class" => "form-control", "rows" => "5")));
        echo "
                </div>
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "description"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"row_submit col-xs-3\">
                <input class=\"btn btn-block btn-lg btn-primary\" type=\"submit\" value=\"";
        // line 77
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add")) {
            echo "Add Product";
        } else {
            echo "Edit Product";
        }
        echo "\" />
            </div>
        </div>
        ";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), 'form_end');
        echo "
    </div>

    <hr/>

    ";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Product:formproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 80,  158 => 77,  150 => 72,  145 => 70,  139 => 67,  130 => 61,  125 => 59,  119 => 56,  110 => 50,  105 => 48,  99 => 45,  90 => 39,  85 => 37,  79 => 34,  71 => 29,  65 => 26,  62 => 25,  59 => 17,  55 => 15,  51 => 13,  48 => 12,  45 => 11,  39 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
