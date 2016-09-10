<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_7f58b499e3bb66dd785a21e7783e455b30458e2599b7a514484cc4225f137dd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_862c7402dfa128ffdc29123134d6d33f504226109a97df0ec8527e470ab196fe = $this->env->getExtension("native_profiler");
        $__internal_862c7402dfa128ffdc29123134d6d33f504226109a97df0ec8527e470ab196fe->enter($__internal_862c7402dfa128ffdc29123134d6d33f504226109a97df0ec8527e470ab196fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_862c7402dfa128ffdc29123134d6d33f504226109a97df0ec8527e470ab196fe->leave($__internal_862c7402dfa128ffdc29123134d6d33f504226109a97df0ec8527e470ab196fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b336ff4571f28677ee28247cd8dabde8f80375033d9cf06c80c0938333bb0e4 = $this->env->getExtension("native_profiler");
        $__internal_3b336ff4571f28677ee28247cd8dabde8f80375033d9cf06c80c0938333bb0e4->enter($__internal_3b336ff4571f28677ee28247cd8dabde8f80375033d9cf06c80c0938333bb0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3b336ff4571f28677ee28247cd8dabde8f80375033d9cf06c80c0938333bb0e4->leave($__internal_3b336ff4571f28677ee28247cd8dabde8f80375033d9cf06c80c0938333bb0e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
