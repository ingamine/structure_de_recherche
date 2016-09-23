<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_32e39f79989ecbe1be663b57229eb7bc4fb9bc0b77a999cbf5655d2bdb4fe7a8 extends Twig_Template
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
        $__internal_8ec86565a02fdfdab473e295229772b8e22467cfbf3c623f5ac176be8c242ce7 = $this->env->getExtension("native_profiler");
        $__internal_8ec86565a02fdfdab473e295229772b8e22467cfbf3c623f5ac176be8c242ce7->enter($__internal_8ec86565a02fdfdab473e295229772b8e22467cfbf3c623f5ac176be8c242ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8ec86565a02fdfdab473e295229772b8e22467cfbf3c623f5ac176be8c242ce7->leave($__internal_8ec86565a02fdfdab473e295229772b8e22467cfbf3c623f5ac176be8c242ce7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
