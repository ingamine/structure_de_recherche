<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_43a8368ef0203c1100190df8f217479cc68de5e7d2599314fac93c3eeef68ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_5b6961f94c563034cf3d35f8c4e7ad3912abf834f63a5653c7076ce9bf773b54 = $this->env->getExtension("native_profiler");
        $__internal_5b6961f94c563034cf3d35f8c4e7ad3912abf834f63a5653c7076ce9bf773b54->enter($__internal_5b6961f94c563034cf3d35f8c4e7ad3912abf834f63a5653c7076ce9bf773b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b6961f94c563034cf3d35f8c4e7ad3912abf834f63a5653c7076ce9bf773b54->leave($__internal_5b6961f94c563034cf3d35f8c4e7ad3912abf834f63a5653c7076ce9bf773b54_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a09d2225c7b5d648ad003211f6045a9f4c6e7fe9b903d44979e7096bb345210 = $this->env->getExtension("native_profiler");
        $__internal_2a09d2225c7b5d648ad003211f6045a9f4c6e7fe9b903d44979e7096bb345210->enter($__internal_2a09d2225c7b5d648ad003211f6045a9f4c6e7fe9b903d44979e7096bb345210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_2a09d2225c7b5d648ad003211f6045a9f4c6e7fe9b903d44979e7096bb345210->leave($__internal_2a09d2225c7b5d648ad003211f6045a9f4c6e7fe9b903d44979e7096bb345210_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
