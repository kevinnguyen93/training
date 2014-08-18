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
        return array (  110 => 50,  90 => 39,  703 => 626,  695 => 624,  691 => 623,  679 => 620,  675 => 619,  667 => 617,  659 => 615,  655 => 614,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  975 => 305,  971 => 304,  967 => 303,  963 => 302,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  930 => 287,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  891 => 271,  888 => 270,  884 => 267,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  830 => 250,  826 => 247,  824 => 246,  822 => 245,  819 => 244,  815 => 239,  812 => 238,  808 => 235,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 227,  791 => 226,  789 => 225,  786 => 224,  782 => 221,  779 => 216,  774 => 212,  754 => 208,  751 => 206,  748 => 205,  745 => 203,  742 => 202,  739 => 200,  737 => 199,  735 => 198,  732 => 197,  728 => 192,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 625,  696 => 178,  692 => 175,  690 => 174,  687 => 622,  683 => 621,  681 => 169,  678 => 168,  673 => 165,  671 => 618,  668 => 163,  663 => 616,  661 => 159,  658 => 158,  654 => 155,  652 => 154,  649 => 153,  645 => 150,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  629 => 141,  627 => 140,  624 => 139,  620 => 136,  617 => 135,  614 => 133,  609 => 129,  599 => 128,  594 => 127,  592 => 126,  589 => 124,  587 => 123,  584 => 122,  579 => 118,  577 => 116,  576 => 115,  575 => 114,  574 => 113,  570 => 112,  567 => 110,  565 => 109,  562 => 108,  556 => 104,  554 => 103,  552 => 102,  550 => 101,  548 => 100,  544 => 99,  541 => 97,  539 => 96,  536 => 95,  522 => 92,  519 => 91,  505 => 88,  502 => 87,  477 => 82,  472 => 79,  470 => 78,  465 => 77,  463 => 76,  446 => 75,  443 => 74,  439 => 71,  429 => 66,  425 => 64,  421 => 62,  412 => 60,  410 => 59,  399 => 56,  397 => 55,  394 => 54,  389 => 51,  383 => 49,  377 => 47,  373 => 46,  370 => 45,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  334 => 26,  330 => 23,  328 => 22,  326 => 21,  323 => 19,  321 => 18,  317 => 17,  300 => 13,  295 => 11,  290 => 7,  287 => 5,  282 => 3,  275 => 330,  270 => 316,  265 => 299,  263 => 294,  260 => 293,  255 => 284,  250 => 274,  245 => 270,  242 => 269,  222 => 238,  212 => 224,  207 => 216,  194 => 197,  191 => 196,  181 => 185,  178 => 184,  161 => 162,  146 => 147,  134 => 133,  126 => 121,  124 => 108,  114 => 91,  104 => 74,  84 => 33,  76 => 25,  34 => 11,  77 => 25,  58 => 21,  65 => 26,  262 => 88,  257 => 291,  251 => 58,  237 => 262,  232 => 249,  223 => 60,  215 => 53,  210 => 50,  202 => 43,  188 => 194,  186 => 190,  175 => 40,  160 => 29,  153 => 17,  150 => 72,  137 => 88,  129 => 122,  113 => 82,  97 => 78,  81 => 32,  70 => 23,  53 => 20,  23 => 1,  480 => 162,  474 => 80,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 70,  435 => 69,  430 => 144,  427 => 65,  423 => 63,  413 => 134,  409 => 132,  407 => 131,  402 => 58,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 48,  379 => 119,  374 => 116,  368 => 112,  365 => 41,  362 => 39,  360 => 38,  355 => 106,  341 => 105,  337 => 27,  322 => 101,  314 => 16,  312 => 98,  309 => 97,  305 => 95,  298 => 12,  294 => 90,  285 => 4,  283 => 88,  278 => 331,  268 => 300,  264 => 84,  258 => 81,  252 => 283,  247 => 273,  241 => 77,  229 => 46,  220 => 70,  214 => 231,  177 => 63,  169 => 168,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 2,  273 => 317,  269 => 94,  254 => 92,  243 => 56,  240 => 263,  238 => 85,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 56,  219 => 237,  217 => 232,  208 => 46,  204 => 215,  179 => 69,  159 => 158,  143 => 56,  135 => 53,  119 => 56,  102 => 32,  71 => 29,  67 => 32,  63 => 15,  59 => 17,  38 => 12,  94 => 45,  89 => 37,  85 => 37,  75 => 17,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 77,  88 => 6,  78 => 21,  46 => 7,  27 => 1,  44 => 15,  31 => 4,  28 => 3,  201 => 213,  196 => 211,  183 => 189,  171 => 173,  166 => 167,  163 => 30,  158 => 77,  156 => 157,  151 => 152,  142 => 59,  138 => 54,  136 => 138,  121 => 107,  117 => 83,  105 => 48,  91 => 44,  62 => 25,  49 => 17,  24 => 4,  25 => 3,  19 => 1,  79 => 34,  72 => 16,  69 => 11,  47 => 10,  40 => 7,  37 => 7,  22 => 2,  246 => 57,  157 => 56,  145 => 70,  139 => 67,  131 => 132,  123 => 47,  120 => 40,  115 => 43,  111 => 90,  108 => 36,  101 => 73,  98 => 31,  96 => 38,  83 => 25,  74 => 34,  66 => 10,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 223,  203 => 78,  199 => 212,  193 => 40,  189 => 71,  187 => 84,  182 => 66,  176 => 178,  173 => 177,  168 => 80,  164 => 163,  162 => 57,  154 => 153,  149 => 148,  147 => 58,  144 => 144,  141 => 143,  133 => 87,  130 => 61,  125 => 59,  122 => 43,  116 => 94,  112 => 42,  109 => 87,  106 => 86,  103 => 32,  99 => 45,  95 => 28,  92 => 37,  86 => 36,  82 => 22,  80 => 35,  73 => 24,  64 => 3,  60 => 22,  57 => 11,  54 => 20,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
