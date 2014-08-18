<?php

/* AcmeStoreBundle:Category:formcategory.html.twig */
class __TwigTemplate_49d3e3d445a372d68e3464b5031917d333a42849882f0a26ff7e04a5479c2330 extends Twig_Template
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
            echo "        Add Category
    ";
        } else {
            // line 7
            echo "        Edit Category
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
            echo "        <h2>Add Category</h2>
    ";
        } else {
            // line 15
            echo "        <h2>Edit Category</h2>
    ";
        }
        // line 17
        echo "    <hr/>
    ";
        // line 21
        echo "    <div class=\"formcontent\">
        ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCategory"]) ? $context["formCategory"] : $this->getContext($context, "formCategory")), 'form_start');
        echo "

        <div class=\"error has-error row demo-row\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCategory"]) ? $context["formCategory"] : $this->getContext($context, "formCategory")), 'errors');
        echo "
        </div>

        <div class=\"row demo-row\">
            <div class=\"form-group\">
                <div class=\"col-xs-3\">
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCategory"]) ? $context["formCategory"] : $this->getContext($context, "formCategory")), "name"), 'label', array("attr" => array("class" => "control-label"), "label" => "Category Name: "));
        echo "
                </div>
                <div class=\"col-xs-3\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCategory"]) ? $context["formCategory"] : $this->getContext($context, "formCategory")), "name"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCategory"]) ? $context["formCategory"] : $this->getContext($context, "formCategory")), "name"), 'errors');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"row_submit col-xs-3\">
                <input class=\"btn btn-block btn-lg btn-primary\" type=\"submit\" value=\"";
        // line 41
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add")) {
            echo "Add Category";
        } else {
            echo "Edit Category";
        }
        echo "\" />
            </div>
        </div>
        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCategory"]) ? $context["formCategory"] : $this->getContext($context, "formCategory")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Category:formcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  99 => 41,  91 => 36,  86 => 34,  80 => 31,  71 => 25,  65 => 22,  62 => 21,  59 => 17,  55 => 15,  51 => 13,  48 => 12,  45 => 11,  39 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
