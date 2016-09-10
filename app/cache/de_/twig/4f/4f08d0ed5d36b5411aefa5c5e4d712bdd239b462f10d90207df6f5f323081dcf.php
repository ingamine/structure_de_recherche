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
        $__internal_21662a4b722321e91c6bc07a8271013808e4c935f1cea3afad71745318fd16e7 = $this->env->getExtension("native_profiler");
        $__internal_21662a4b722321e91c6bc07a8271013808e4c935f1cea3afad71745318fd16e7->enter($__internal_21662a4b722321e91c6bc07a8271013808e4c935f1cea3afad71745318fd16e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_21662a4b722321e91c6bc07a8271013808e4c935f1cea3afad71745318fd16e7->leave($__internal_21662a4b722321e91c6bc07a8271013808e4c935f1cea3afad71745318fd16e7_prof);

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
