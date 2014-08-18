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
        return array (  262 => 88,  257 => 70,  251 => 58,  246 => 57,  243 => 56,  237 => 48,  232 => 47,  229 => 46,  223 => 60,  221 => 56,  215 => 53,  210 => 50,  208 => 46,  202 => 43,  196 => 41,  193 => 40,  188 => 71,  186 => 70,  177 => 63,  175 => 40,  163 => 30,  160 => 29,  153 => 17,  150 => 16,  144 => 5,  139 => 89,  137 => 88,  133 => 87,  129 => 86,  125 => 85,  121 => 84,  117 => 83,  113 => 82,  109 => 81,  101 => 79,  97 => 78,  93 => 77,  89 => 76,  85 => 75,  81 => 73,  79 => 29,  70 => 23,  66 => 22,  61 => 19,  59 => 16,  54 => 14,  44 => 10,  39 => 8,  27 => 1,  105 => 80,  96 => 38,  92 => 37,  86 => 36,  80 => 35,  74 => 34,  71 => 33,  67 => 32,  53 => 20,  48 => 11,  45 => 10,  40 => 7,  33 => 5,  30 => 3,);
    }
}
