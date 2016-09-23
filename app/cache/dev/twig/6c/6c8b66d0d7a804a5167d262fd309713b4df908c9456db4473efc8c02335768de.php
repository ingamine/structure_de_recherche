<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4be13f92a0fb09c9363bda640f17db2e57c71da3e3f581b67a877194a8be70f8 extends Twig_Template
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
        $__internal_88e1b831a83f48916c95ac0350a461875949141da0dc061dd9f77f2feac4c699 = $this->env->getExtension("native_profiler");
        $__internal_88e1b831a83f48916c95ac0350a461875949141da0dc061dd9f77f2feac4c699->enter($__internal_88e1b831a83f48916c95ac0350a461875949141da0dc061dd9f77f2feac4c699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_88e1b831a83f48916c95ac0350a461875949141da0dc061dd9f77f2feac4c699->leave($__internal_88e1b831a83f48916c95ac0350a461875949141da0dc061dd9f77f2feac4c699_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
