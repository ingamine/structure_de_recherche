<?php

/* LgmBundle:Default:index.html.twig */
class __TwigTemplate_3473e27d23e91c84501b4404638b80ea564c5d228a8a7616da32aed12b223049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "LgmBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41d22b0ffba85f43f71197d4293776213f0a05ecbfaf81217eda67e5b89a4cac = $this->env->getExtension("native_profiler");
        $__internal_41d22b0ffba85f43f71197d4293776213f0a05ecbfaf81217eda67e5b89a4cac->enter($__internal_41d22b0ffba85f43f71197d4293776213f0a05ecbfaf81217eda67e5b89a4cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LgmBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41d22b0ffba85f43f71197d4293776213f0a05ecbfaf81217eda67e5b89a4cac->leave($__internal_41d22b0ffba85f43f71197d4293776213f0a05ecbfaf81217eda67e5b89a4cac_prof);

    }

    public function getTemplateName()
    {
        return "LgmBundle:Default:index.html.twig";
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
