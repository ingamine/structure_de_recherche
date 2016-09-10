<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_36e6c9c46287f662589deff939664b4ab8b305b3b15099db4cee5a6068c2188c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_95be2f6344439cf0023ede7f6ab049128c41a1198d0381faaf06dd184cd32835 = $this->env->getExtension("native_profiler");
        $__internal_95be2f6344439cf0023ede7f6ab049128c41a1198d0381faaf06dd184cd32835->enter($__internal_95be2f6344439cf0023ede7f6ab049128c41a1198d0381faaf06dd184cd32835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95be2f6344439cf0023ede7f6ab049128c41a1198d0381faaf06dd184cd32835->leave($__internal_95be2f6344439cf0023ede7f6ab049128c41a1198d0381faaf06dd184cd32835_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_975176fd58999fe284283975656c1cd3bc8c29d3e743025c7d5773e89cd01f32 = $this->env->getExtension("native_profiler");
        $__internal_975176fd58999fe284283975656c1cd3bc8c29d3e743025c7d5773e89cd01f32->enter($__internal_975176fd58999fe284283975656c1cd3bc8c29d3e743025c7d5773e89cd01f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_975176fd58999fe284283975656c1cd3bc8c29d3e743025c7d5773e89cd01f32->leave($__internal_975176fd58999fe284283975656c1cd3bc8c29d3e743025c7d5773e89cd01f32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
