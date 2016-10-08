<?php

/* @FOSUser/Resetting/password_already_requested.html.twig */
class __TwigTemplate_cdb8179597d1bbca7bdc6fd8eedd201d0ab330b99e1a26c7d327fc3b68d85a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/password_already_requested.html.twig", 1);
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
        $__internal_ff5c958987c9ae413a7a5a42c864d3a125da13880ebbe32f647141f88c0cd668 = $this->env->getExtension("native_profiler");
        $__internal_ff5c958987c9ae413a7a5a42c864d3a125da13880ebbe32f647141f88c0cd668->enter($__internal_ff5c958987c9ae413a7a5a42c864d3a125da13880ebbe32f647141f88c0cd668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff5c958987c9ae413a7a5a42c864d3a125da13880ebbe32f647141f88c0cd668->leave($__internal_ff5c958987c9ae413a7a5a42c864d3a125da13880ebbe32f647141f88c0cd668_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70e2ad85eb987e7e0364144f385ed1fcf6a5f085a07de92e6b5e61452209670e = $this->env->getExtension("native_profiler");
        $__internal_70e2ad85eb987e7e0364144f385ed1fcf6a5f085a07de92e6b5e61452209670e->enter($__internal_70e2ad85eb987e7e0364144f385ed1fcf6a5f085a07de92e6b5e61452209670e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_70e2ad85eb987e7e0364144f385ed1fcf6a5f085a07de92e6b5e61452209670e->leave($__internal_70e2ad85eb987e7e0364144f385ed1fcf6a5f085a07de92e6b5e61452209670e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
