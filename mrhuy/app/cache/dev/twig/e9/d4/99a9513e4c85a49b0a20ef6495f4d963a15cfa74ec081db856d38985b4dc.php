<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_e9d499a9513e4c85a49b0a20ef6495f4d963a15cfa74ec081db856d38985b4dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 5,  25 => 4,  21 => 2,  92 => 21,  85 => 19,  79 => 18,  75 => 17,  56 => 9,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  101 => 24,  91 => 31,  86 => 28,  66 => 15,  51 => 12,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  44 => 10,  27 => 4,  22 => 2,  54 => 21,  162 => 47,  157 => 43,  152 => 41,  149 => 40,  142 => 59,  138 => 57,  134 => 32,  131 => 31,  128 => 30,  123 => 47,  120 => 43,  118 => 40,  113 => 37,  111 => 30,  108 => 29,  105 => 40,  100 => 17,  94 => 22,  89 => 20,  87 => 20,  82 => 28,  73 => 22,  69 => 25,  64 => 12,  57 => 14,  53 => 14,  47 => 11,  43 => 8,  38 => 8,  32 => 12,  26 => 3,  84 => 46,  80 => 19,  76 => 25,  72 => 16,  68 => 14,  65 => 20,  62 => 23,  55 => 13,  49 => 19,  46 => 7,  40 => 8,  36 => 7,  33 => 5,  30 => 3,);
    }
}
