<?php

/* AcmeStoreBundle:Product:formproduct.html.twig */
class __TwigTemplate_5a2672f6210059dd5bc41e5ff2fa7c90e18b55d233b2a05bc73e86fa32281b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@AcmeStore/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menusub' => array($this, 'block_menusub'),
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

    // line 12
    public function block_menusub($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("menusub", $context, $blocks);
        echo "
    <ul>
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("acme_store_listProduct");
        echo "\">List</a></li>
    </ul>
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add")) {
            // line 21
            echo "        <h2>Add Product</h2>
    ";
        } else {
            // line 23
            echo "        <h2>Edit Product</h2>
    ";
        }
        // line 25
        echo "    <hr/>
    ";
        // line 33
        echo "    <div class=\"formcontent\">
        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), 'form_start');
        echo "

        <div class=\"error has-error row demo-row\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), 'errors');
        echo "
        </div>

        <div class=\"row demo-row\">
            <div class=\"form-group\">
                <div class=\"col-xs-3\">
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "category"), 'label', array("attr" => array("class" => "control-label"), "label" => "Category Group: "));
        echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "category"), 'widget', array("attr" => array("class" => "select-block selectpicker")));
        echo "
                </div>
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "category"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row demo-row\">
            <div class=\"form-group\">
                <div class=\"col-xs-3\">
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "name"), 'label');
        echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "name"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "name"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row demo-row\">
            <div class=\"form-group\">
                <div class=\"col-xs-3\">
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "price"), 'label');
        echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "price"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "price"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row demo-row\">
            <div class=\"form-group\">
                <div class=\"col-xs-3\">
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "description"), 'label');
        echo "
                </div>
                <div class=\"col-xs-6\">
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "description"), 'widget', array("attr" => array("class" => "form-control", "rows" => "5")));
        echo "
                </div>
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProduct"]) ? $context["formProduct"] : $this->getContext($context, "formProduct")), "description"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"row_submit col-xs-3\">
                <input class=\"btn btn-block btn-lg btn-primary\" type=\"submit\" value=\"";
        // line 86
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add")) {
            echo "Add Product";
        } else {
            echo "Edit Product";
        }
        echo "\" />
            </div>
        </div>
        ";
        // line 89
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
        return array (  186 => 89,  176 => 86,  168 => 81,  163 => 79,  157 => 76,  148 => 70,  143 => 68,  137 => 65,  128 => 59,  123 => 57,  117 => 54,  108 => 48,  103 => 46,  97 => 43,  88 => 37,  82 => 34,  79 => 33,  76 => 25,  72 => 23,  68 => 21,  65 => 20,  62 => 19,  55 => 15,  49 => 13,  46 => 12,  40 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
