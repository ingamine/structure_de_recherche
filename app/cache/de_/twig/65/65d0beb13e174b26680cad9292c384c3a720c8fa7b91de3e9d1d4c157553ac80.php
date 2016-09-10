<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_11c78ce7795ee242517f37df18d9ad8086dcd3ecabb9648306e61db5c6868b32 extends Twig_Template
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
        $__internal_0906bfc9497e1a405f5cef87d35c6d2ac46e01996441125c720bd92376ac27e7 = $this->env->getExtension("native_profiler");
        $__internal_0906bfc9497e1a405f5cef87d35c6d2ac46e01996441125c720bd92376ac27e7->enter($__internal_0906bfc9497e1a405f5cef87d35c6d2ac46e01996441125c720bd92376ac27e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0906bfc9497e1a405f5cef87d35c6d2ac46e01996441125c720bd92376ac27e7->leave($__internal_0906bfc9497e1a405f5cef87d35c6d2ac46e01996441125c720bd92376ac27e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
