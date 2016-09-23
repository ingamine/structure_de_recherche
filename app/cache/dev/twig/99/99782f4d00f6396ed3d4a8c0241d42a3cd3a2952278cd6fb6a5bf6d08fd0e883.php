<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6ef8875e519ed1a067ff275199edd5a47016b5b77983e9b8b33150cda5c2b741 extends Twig_Template
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
        $__internal_5c2b8377bac090f8b3bb22f95001c26d2941811376ef5c10a21dd3920ae79a66 = $this->env->getExtension("native_profiler");
        $__internal_5c2b8377bac090f8b3bb22f95001c26d2941811376ef5c10a21dd3920ae79a66->enter($__internal_5c2b8377bac090f8b3bb22f95001c26d2941811376ef5c10a21dd3920ae79a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5c2b8377bac090f8b3bb22f95001c26d2941811376ef5c10a21dd3920ae79a66->leave($__internal_5c2b8377bac090f8b3bb22f95001c26d2941811376ef5c10a21dd3920ae79a66_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
