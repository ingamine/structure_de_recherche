<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_076bffd1c5d067ef68f3e978eb5a36feff73aabdc2fab4be2aefd77cf34d437a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_89f0b5728e58c472ff18f365c623796539f6ba046d57385ec919845524b58a6d = $this->env->getExtension("native_profiler");
        $__internal_89f0b5728e58c472ff18f365c623796539f6ba046d57385ec919845524b58a6d->enter($__internal_89f0b5728e58c472ff18f365c623796539f6ba046d57385ec919845524b58a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89f0b5728e58c472ff18f365c623796539f6ba046d57385ec919845524b58a6d->leave($__internal_89f0b5728e58c472ff18f365c623796539f6ba046d57385ec919845524b58a6d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_300fa58f9e7fe288044b1d89cb8d5c63b07c180342f950f8cd904cf4fc60f8c1 = $this->env->getExtension("native_profiler");
        $__internal_300fa58f9e7fe288044b1d89cb8d5c63b07c180342f950f8cd904cf4fc60f8c1->enter($__internal_300fa58f9e7fe288044b1d89cb8d5c63b07c180342f950f8cd904cf4fc60f8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_300fa58f9e7fe288044b1d89cb8d5c63b07c180342f950f8cd904cf4fc60f8c1->leave($__internal_300fa58f9e7fe288044b1d89cb8d5c63b07c180342f950f8cd904cf4fc60f8c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
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
