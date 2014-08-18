<?php

/* AcmeStoreBundle:Category:listcategory.html.twig */
class __TwigTemplate_70a42888ed2f1e257a51afef675e6d22d91de2b198d7c8df948c611acb434406 extends Twig_Template
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
        echo "    List Categories
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h2>List Category</h2>
    <div class=\"panel panel-default\">
        <table class=\"table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name Category</th>
                <th>Number Products</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "                <tr>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("acme_store_editCategory", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"), "html", null, true);
            echo "</a></td>
                    <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("acme_store_showCategory", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "products")), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("acme_store_deleteProduct", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\" >Delete</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Category:listcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  58 => 21,  65 => 22,  262 => 88,  257 => 70,  251 => 58,  237 => 48,  232 => 47,  223 => 60,  215 => 53,  210 => 50,  202 => 43,  188 => 71,  186 => 70,  175 => 40,  160 => 29,  153 => 17,  150 => 16,  137 => 88,  129 => 86,  113 => 82,  97 => 78,  81 => 73,  70 => 23,  53 => 5,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 63,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 56,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 56,  219 => 76,  217 => 75,  208 => 46,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 25,  67 => 23,  63 => 15,  59 => 17,  38 => 6,  94 => 28,  89 => 76,  85 => 75,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 77,  88 => 6,  78 => 21,  46 => 7,  27 => 1,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 41,  183 => 82,  171 => 61,  166 => 71,  163 => 30,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 84,  117 => 83,  105 => 80,  91 => 36,  62 => 21,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 29,  72 => 16,  69 => 11,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 57,  157 => 56,  145 => 46,  139 => 89,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 79,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 22,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 40,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 5,  141 => 48,  133 => 87,  130 => 41,  125 => 85,  122 => 43,  116 => 41,  112 => 42,  109 => 44,  106 => 36,  103 => 32,  99 => 41,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 31,  73 => 24,  64 => 10,  60 => 6,  57 => 11,  54 => 20,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 7,  36 => 5,  33 => 5,  30 => 7,);
    }
}
