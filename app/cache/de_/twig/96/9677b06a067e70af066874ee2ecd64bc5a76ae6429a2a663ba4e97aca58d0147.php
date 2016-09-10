<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_cc3ab1f14a521965692fee98c5f69bdb6ca9a54f105db2d1265a9790507a1a3c extends Twig_Template
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
        $__internal_06c2a7020f8fe4cb1546fd194448a18f733f99560e1e8d0bf3bc08298afa03ec = $this->env->getExtension("native_profiler");
        $__internal_06c2a7020f8fe4cb1546fd194448a18f733f99560e1e8d0bf3bc08298afa03ec->enter($__internal_06c2a7020f8fe4cb1546fd194448a18f733f99560e1e8d0bf3bc08298afa03ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_06c2a7020f8fe4cb1546fd194448a18f733f99560e1e8d0bf3bc08298afa03ec->leave($__internal_06c2a7020f8fe4cb1546fd194448a18f733f99560e1e8d0bf3bc08298afa03ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
