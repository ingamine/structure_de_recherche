<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ee5904b513f53af0cddd84e55c8bcdca75918587bee26497962daa74b59dcfb1 extends Twig_Template
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
        $__internal_b2d1ea0e12532ba4c0faa9435a7b82bd052c6731a3d9b636a8657a79a09e53ce = $this->env->getExtension("native_profiler");
        $__internal_b2d1ea0e12532ba4c0faa9435a7b82bd052c6731a3d9b636a8657a79a09e53ce->enter($__internal_b2d1ea0e12532ba4c0faa9435a7b82bd052c6731a3d9b636a8657a79a09e53ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b2d1ea0e12532ba4c0faa9435a7b82bd052c6731a3d9b636a8657a79a09e53ce->leave($__internal_b2d1ea0e12532ba4c0faa9435a7b82bd052c6731a3d9b636a8657a79a09e53ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
