<?php

/* @AcmeStore/layout.html.twig */
class __TwigTemplate_5bc86a75ab657ba42c63bfe203eaf1ff029653bf99d368d45a404d057890e8e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheep' => array($this, 'block_stylesheep'),
            'container' => array($this, 'block_container'),
            'main_menu' => array($this, 'block_main_menu'),
            'menusub_product' => array($this, 'block_menusub_product'),
            'menusub_category' => array($this, 'block_menusub_category'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Loading Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/bootstrap/css/prettify.css"), "html", null, true);
        echo "\" />

    <!-- Loading Flat UI -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/css/flat-ui.css"), "html", null, true);
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheep', $context, $blocks);
        // line 19
        echo "
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

</head>
<body>
    <div class=\"container\">
        ";
        // line 29
        $this->displayBlock('container', $context, $blocks);
        // line 73
        echo "    </div>
    <!-- load Js -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/flatui-checkbox.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/flatui-radio.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/jquery.stacktable.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("flatui/js/video.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/application.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 88
        $this->displayBlock('javascript', $context, $blocks);
        // line 89
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Flat UI ";
    }

    // line 16
    public function block_stylesheep($context, array $blocks = array())
    {
        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/demo.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 29
    public function block_container($context, array $blocks = array())
    {
        // line 30
        echo "            <div class=\"row demo-row\">
                <div class=\"col-xs-9\">
                    <nav class=\"navbar navbar-inverse navbar-embossed\" role=\"navigation\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-01\">
                                <span class=\"sr-only\">Toggle navigation</span>
                            </button>
                        </div>
                        <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-01\">
                            <ul class=\"nav navbar-nav navbar-left\">
                                ";
        // line 40
        $this->displayBlock('main_menu', $context, $blocks);
        // line 63
        echo "                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav><!-- /navbar -->
                </div>
            </div>

            <div id=\"content\" class=\"row\">
                ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "            </div>
        ";
    }

    // line 40
    public function block_main_menu($context, array $blocks = array())
    {
        // line 41
        echo "                                <li><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("acme_store_index");
        echo "\">Home</a></li>
                                <li>
                                    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getUrl("acme_store_listProduct");
        echo "\" id=\"menu_product\" data-toggle=\"dropdown\">Product</a>
                                    <span class=\"dropdown-arrow\"></span>
                                    <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menu_product\">
                                        ";
        // line 46
        $this->displayBlock('menusub_product', $context, $blocks);
        // line 50
        echo "                                    </ul>
                                </li>
                                <li>
                                    <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getUrl("acme_store_listCategory");
        echo "\" id=\"menu_category\" data-toggle=\"dropdown\">Category</a>
                                    <span class=\"dropdown-arrow\"></span>
                                    <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"menu_category\">
                                        ";
        // line 56
        $this->displayBlock('menusub_category', $context, $blocks);
        // line 60
        echo "                                    </ul>
                                </li>
                                ";
    }

    // line 46
    public function block_menusub_product($context, array $blocks = array())
    {
        // line 47
        echo "                                            <li><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("acme_store_listProduct");
        echo "\">List</a></li>
                                            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getUrl("acme_store_createProduct");
        echo "\">Add</a></li>
                                        ";
    }

    // line 56
    public function block_menusub_category($context, array $blocks = array())
    {
        // line 57
        echo "                                            <li><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("acme_store_listCategory");
        echo "\">List</a></li>
                                            <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getUrl("acme_store_createCategory");
        echo "\">Add</a></li>
                                        ";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
    }

    // line 88
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@AcmeStore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 88,  257 => 70,  251 => 58,  237 => 48,  232 => 47,  223 => 60,  215 => 53,  210 => 50,  202 => 43,  188 => 71,  186 => 70,  175 => 40,  160 => 29,  153 => 17,  150 => 16,  137 => 88,  129 => 86,  113 => 82,  97 => 78,  81 => 73,  70 => 23,  53 => 5,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 46,  220 => 70,  214 => 69,  177 => 63,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 56,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 56,  219 => 76,  217 => 75,  208 => 46,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 16,  38 => 6,  94 => 28,  89 => 76,  85 => 75,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 77,  88 => 6,  78 => 21,  46 => 7,  27 => 1,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 41,  183 => 82,  171 => 61,  166 => 71,  163 => 30,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 84,  117 => 83,  105 => 80,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 29,  72 => 16,  69 => 11,  47 => 10,  40 => 8,  37 => 7,  22 => 2,  246 => 57,  157 => 56,  145 => 46,  139 => 89,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 79,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 22,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 7,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 40,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 5,  141 => 48,  133 => 87,  130 => 41,  125 => 85,  122 => 43,  116 => 41,  112 => 42,  109 => 81,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 10,  60 => 6,  57 => 11,  54 => 14,  51 => 14,  48 => 11,  45 => 9,  42 => 10,  39 => 8,  36 => 5,  33 => 5,  30 => 7,);
    }
}
