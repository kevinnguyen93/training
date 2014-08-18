<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_b748261a3aed68de4607aaca4317e6126e6ac53255c49752de4f52c0e2cd3774 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  42 => 14,  35 => 7,  31 => 5,  25 => 3,  21 => 2,  92 => 21,  85 => 19,  79 => 18,  75 => 17,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  101 => 24,  91 => 31,  86 => 28,  66 => 15,  51 => 15,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  44 => 10,  27 => 4,  22 => 2,  54 => 21,  162 => 47,  157 => 43,  152 => 41,  149 => 40,  142 => 59,  138 => 57,  134 => 32,  131 => 31,  128 => 30,  123 => 47,  120 => 43,  118 => 40,  113 => 37,  111 => 30,  108 => 29,  105 => 40,  100 => 17,  94 => 22,  89 => 20,  87 => 20,  82 => 28,  73 => 22,  69 => 25,  64 => 12,  57 => 16,  53 => 14,  47 => 11,  43 => 8,  38 => 13,  32 => 12,  26 => 5,  84 => 46,  80 => 19,  76 => 25,  72 => 16,  68 => 14,  65 => 20,  62 => 23,  55 => 13,  49 => 19,  46 => 7,  40 => 8,  36 => 7,  33 => 6,  30 => 3,);
    }
}
