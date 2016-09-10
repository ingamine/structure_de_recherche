<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_18d3acae85601dec2d11161aa8fd534d55f6030e774a47cceb798416ab2e8b21 extends Twig_Template
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
        $__internal_c79f61802b77c57f3c4cfcc0b13f4da064807e8a5f97abe4d3e3189cbde04a01 = $this->env->getExtension("native_profiler");
        $__internal_c79f61802b77c57f3c4cfcc0b13f4da064807e8a5f97abe4d3e3189cbde04a01->enter($__internal_c79f61802b77c57f3c4cfcc0b13f4da064807e8a5f97abe4d3e3189cbde04a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c79f61802b77c57f3c4cfcc0b13f4da064807e8a5f97abe4d3e3189cbde04a01->leave($__internal_c79f61802b77c57f3c4cfcc0b13f4da064807e8a5f97abe4d3e3189cbde04a01_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
