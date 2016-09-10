<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_884dff0bb6fcea9ddd6c085d1d3ff593637b060fb66ea25ac85a9625774c7ad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c17dc079bd6e7e6950c711663bd060e6f1db30688c10e193d7ad939c7fc6a60e = $this->env->getExtension("native_profiler");
        $__internal_c17dc079bd6e7e6950c711663bd060e6f1db30688c10e193d7ad939c7fc6a60e->enter($__internal_c17dc079bd6e7e6950c711663bd060e6f1db30688c10e193d7ad939c7fc6a60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c17dc079bd6e7e6950c711663bd060e6f1db30688c10e193d7ad939c7fc6a60e->leave($__internal_c17dc079bd6e7e6950c711663bd060e6f1db30688c10e193d7ad939c7fc6a60e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_660d605d0e58304f794b4c48ecb21e9c607c477c5de261fe71da8313656bc3f8 = $this->env->getExtension("native_profiler");
        $__internal_660d605d0e58304f794b4c48ecb21e9c607c477c5de261fe71da8313656bc3f8->enter($__internal_660d605d0e58304f794b4c48ecb21e9c607c477c5de261fe71da8313656bc3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_660d605d0e58304f794b4c48ecb21e9c607c477c5de261fe71da8313656bc3f8->leave($__internal_660d605d0e58304f794b4c48ecb21e9c607c477c5de261fe71da8313656bc3f8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
