<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_c10e7003a7c1d20905444bae62bb06f25fba654f162dbd3a438be566ae52b7a7 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  35 => 4,  31 => 5,  25 => 3,  21 => 2,  92 => 21,  85 => 19,  79 => 18,  75 => 17,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  101 => 24,  91 => 31,  86 => 28,  66 => 15,  51 => 15,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  44 => 10,  27 => 4,  22 => 2,  54 => 21,  162 => 47,  157 => 43,  152 => 41,  149 => 40,  142 => 59,  138 => 57,  134 => 32,  131 => 31,  128 => 30,  123 => 47,  120 => 43,  118 => 40,  113 => 37,  111 => 30,  108 => 29,  105 => 40,  100 => 17,  94 => 22,  89 => 20,  87 => 20,  82 => 28,  73 => 22,  69 => 25,  64 => 12,  57 => 16,  53 => 14,  47 => 11,  43 => 8,  38 => 13,  32 => 12,  26 => 5,  84 => 46,  80 => 19,  76 => 25,  72 => 16,  68 => 14,  65 => 20,  62 => 23,  55 => 13,  49 => 19,  46 => 7,  40 => 8,  36 => 7,  33 => 10,  30 => 3,);
    }
}
