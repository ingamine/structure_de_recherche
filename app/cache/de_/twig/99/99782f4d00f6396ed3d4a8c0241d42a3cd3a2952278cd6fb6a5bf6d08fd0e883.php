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
        $__internal_e3cc810d8b16404090e86a30a54a63f389851e8e67290c96f86e9650484b97ef = $this->env->getExtension("native_profiler");
        $__internal_e3cc810d8b16404090e86a30a54a63f389851e8e67290c96f86e9650484b97ef->enter($__internal_e3cc810d8b16404090e86a30a54a63f389851e8e67290c96f86e9650484b97ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e3cc810d8b16404090e86a30a54a63f389851e8e67290c96f86e9650484b97ef->leave($__internal_e3cc810d8b16404090e86a30a54a63f389851e8e67290c96f86e9650484b97ef_prof);

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
