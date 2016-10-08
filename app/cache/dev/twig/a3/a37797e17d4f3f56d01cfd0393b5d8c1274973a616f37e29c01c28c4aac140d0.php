<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a430f315cc3235c313e70d7a3138c2be1cfcf41cb2806622df7d03bf11b5f8f6 extends Twig_Template
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
        $__internal_b33f743d0539d534bb12d209c878429728fa5fd680c9d6223336ba5cf88e7d41 = $this->env->getExtension("native_profiler");
        $__internal_b33f743d0539d534bb12d209c878429728fa5fd680c9d6223336ba5cf88e7d41->enter($__internal_b33f743d0539d534bb12d209c878429728fa5fd680c9d6223336ba5cf88e7d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b33f743d0539d534bb12d209c878429728fa5fd680c9d6223336ba5cf88e7d41->leave($__internal_b33f743d0539d534bb12d209c878429728fa5fd680c9d6223336ba5cf88e7d41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
