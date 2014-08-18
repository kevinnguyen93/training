<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_647698bda3848f7e1d98c206fde9e0d669d77e76e6ab976d2fcc03c252087039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 74,  167 => 71,  118 => 49,  462 => 202,  449 => 198,  441 => 196,  431 => 189,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  380 => 160,  361 => 146,  351 => 141,  348 => 140,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  320 => 127,  315 => 125,  303 => 122,  289 => 113,  286 => 112,  267 => 101,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  200 => 72,  197 => 71,  185 => 75,  172 => 62,  165 => 60,  127 => 60,  110 => 22,  90 => 27,  703 => 626,  695 => 624,  691 => 623,  679 => 620,  675 => 619,  667 => 617,  659 => 615,  655 => 614,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  975 => 305,  971 => 304,  967 => 303,  963 => 302,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  930 => 287,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  891 => 271,  888 => 270,  884 => 267,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  830 => 250,  826 => 247,  824 => 246,  822 => 245,  819 => 244,  815 => 239,  812 => 238,  808 => 235,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 227,  791 => 226,  789 => 225,  786 => 224,  782 => 221,  779 => 216,  774 => 212,  754 => 208,  751 => 206,  748 => 205,  745 => 203,  742 => 202,  739 => 200,  737 => 199,  735 => 198,  732 => 197,  728 => 192,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 625,  696 => 178,  692 => 175,  690 => 174,  687 => 622,  683 => 621,  681 => 169,  678 => 168,  673 => 165,  671 => 618,  668 => 163,  663 => 616,  661 => 159,  658 => 158,  654 => 155,  652 => 154,  649 => 153,  645 => 150,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  629 => 141,  627 => 140,  624 => 139,  620 => 136,  617 => 135,  614 => 133,  609 => 129,  599 => 128,  594 => 127,  592 => 126,  589 => 124,  587 => 123,  584 => 122,  579 => 118,  577 => 116,  576 => 115,  575 => 114,  574 => 113,  570 => 112,  567 => 110,  565 => 109,  562 => 108,  556 => 104,  554 => 103,  552 => 102,  550 => 101,  548 => 100,  544 => 99,  541 => 97,  539 => 96,  536 => 95,  522 => 92,  519 => 91,  505 => 88,  502 => 87,  477 => 82,  472 => 79,  470 => 78,  465 => 77,  463 => 76,  446 => 197,  443 => 74,  439 => 195,  429 => 188,  425 => 64,  421 => 62,  412 => 60,  410 => 59,  399 => 56,  397 => 55,  394 => 168,  389 => 51,  383 => 49,  377 => 47,  373 => 156,  370 => 45,  357 => 37,  349 => 34,  346 => 33,  342 => 137,  339 => 28,  334 => 26,  330 => 23,  328 => 22,  326 => 21,  323 => 128,  321 => 18,  317 => 17,  300 => 121,  295 => 11,  290 => 7,  287 => 5,  282 => 3,  275 => 105,  270 => 102,  265 => 299,  263 => 294,  260 => 293,  255 => 284,  250 => 274,  245 => 270,  242 => 269,  222 => 238,  212 => 224,  207 => 75,  194 => 70,  191 => 77,  181 => 65,  178 => 64,  161 => 162,  146 => 147,  134 => 54,  126 => 121,  124 => 108,  114 => 91,  104 => 42,  84 => 24,  76 => 25,  34 => 11,  77 => 27,  58 => 17,  65 => 26,  262 => 98,  257 => 291,  251 => 58,  237 => 262,  232 => 249,  223 => 60,  215 => 53,  210 => 50,  202 => 43,  188 => 76,  186 => 190,  175 => 40,  160 => 29,  153 => 69,  150 => 55,  137 => 88,  129 => 122,  113 => 48,  97 => 41,  81 => 23,  70 => 19,  53 => 12,  23 => 1,  480 => 162,  474 => 80,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 70,  435 => 69,  430 => 144,  427 => 65,  423 => 63,  413 => 134,  409 => 132,  407 => 131,  402 => 58,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 48,  379 => 119,  374 => 116,  368 => 112,  365 => 41,  362 => 39,  360 => 38,  355 => 143,  341 => 105,  337 => 27,  322 => 101,  314 => 16,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 4,  283 => 88,  278 => 106,  268 => 300,  264 => 84,  258 => 81,  252 => 283,  247 => 273,  241 => 90,  229 => 85,  220 => 81,  214 => 231,  177 => 63,  169 => 168,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 317,  269 => 94,  254 => 92,  243 => 56,  240 => 263,  238 => 85,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 56,  219 => 237,  217 => 232,  208 => 46,  204 => 78,  179 => 69,  159 => 158,  143 => 56,  135 => 62,  119 => 40,  102 => 41,  71 => 29,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 34,  89 => 37,  85 => 32,  75 => 17,  68 => 14,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 77,  88 => 32,  78 => 26,  46 => 13,  27 => 3,  44 => 15,  31 => 3,  28 => 3,  201 => 213,  196 => 211,  183 => 189,  171 => 73,  166 => 167,  163 => 30,  158 => 79,  156 => 58,  151 => 152,  142 => 59,  138 => 56,  136 => 138,  121 => 50,  117 => 19,  105 => 34,  91 => 33,  62 => 25,  49 => 14,  24 => 4,  25 => 35,  19 => 1,  79 => 34,  72 => 16,  69 => 11,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 93,  157 => 56,  145 => 70,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 31,  96 => 37,  83 => 33,  74 => 27,  66 => 10,  55 => 13,  52 => 12,  50 => 10,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 223,  203 => 73,  199 => 212,  193 => 40,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 177,  168 => 61,  164 => 70,  162 => 59,  154 => 153,  149 => 148,  147 => 54,  144 => 144,  141 => 51,  133 => 87,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 42,  109 => 87,  106 => 45,  103 => 32,  99 => 31,  95 => 28,  92 => 37,  86 => 29,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 22,  57 => 12,  54 => 20,  51 => 13,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
