<?php

/* @Lgm/Default/index.html.twig */
class __TwigTemplate_e710504470008260850c89b7387b6f6c6b86c79db818a0ad598a0d2ef43e15d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "@Lgm/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9be25cd9bc01f8a79e1b913a40bda826149808c75fba9bc728fae45dfbd21d2b = $this->env->getExtension("native_profiler");
        $__internal_9be25cd9bc01f8a79e1b913a40bda826149808c75fba9bc728fae45dfbd21d2b->enter($__internal_9be25cd9bc01f8a79e1b913a40bda826149808c75fba9bc728fae45dfbd21d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Lgm/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be25cd9bc01f8a79e1b913a40bda826149808c75fba9bc728fae45dfbd21d2b->leave($__internal_9be25cd9bc01f8a79e1b913a40bda826149808c75fba9bc728fae45dfbd21d2b_prof);

    }

    public function getTemplateName()
    {
        return "@Lgm/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* */
