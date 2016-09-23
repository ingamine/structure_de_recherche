<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_c46dc3ab5b5f998cb335947fee403c81c81f37df0583e9ea7c77c5aa26aabd70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_c339b06cc697ff79ed15092a3c1ab7fe84d2936942e45cdce0a4ebaf31887e06 = $this->env->getExtension("native_profiler");
        $__internal_c339b06cc697ff79ed15092a3c1ab7fe84d2936942e45cdce0a4ebaf31887e06->enter($__internal_c339b06cc697ff79ed15092a3c1ab7fe84d2936942e45cdce0a4ebaf31887e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c339b06cc697ff79ed15092a3c1ab7fe84d2936942e45cdce0a4ebaf31887e06->leave($__internal_c339b06cc697ff79ed15092a3c1ab7fe84d2936942e45cdce0a4ebaf31887e06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3171dddf4e9870463e6f26bf28be36f4f2d4816598f13cf65605912803d05212 = $this->env->getExtension("native_profiler");
        $__internal_3171dddf4e9870463e6f26bf28be36f4f2d4816598f13cf65605912803d05212->enter($__internal_3171dddf4e9870463e6f26bf28be36f4f2d4816598f13cf65605912803d05212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_3171dddf4e9870463e6f26bf28be36f4f2d4816598f13cf65605912803d05212->leave($__internal_3171dddf4e9870463e6f26bf28be36f4f2d4816598f13cf65605912803d05212_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
