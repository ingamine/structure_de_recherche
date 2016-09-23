<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_80d539691764a1b7efc1c4bd4a6c8f732167cc04a5e10cb88a670e8f86fc7a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d3edd1c56deb7af20a28d43f8a1646202412ab66702dbccb7e61d7617d180a11 = $this->env->getExtension("native_profiler");
        $__internal_d3edd1c56deb7af20a28d43f8a1646202412ab66702dbccb7e61d7617d180a11->enter($__internal_d3edd1c56deb7af20a28d43f8a1646202412ab66702dbccb7e61d7617d180a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3edd1c56deb7af20a28d43f8a1646202412ab66702dbccb7e61d7617d180a11->leave($__internal_d3edd1c56deb7af20a28d43f8a1646202412ab66702dbccb7e61d7617d180a11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f63da08cf3bbcc6758280303c0bc231d252b2c26a76bdf4aa8387a37459770dc = $this->env->getExtension("native_profiler");
        $__internal_f63da08cf3bbcc6758280303c0bc231d252b2c26a76bdf4aa8387a37459770dc->enter($__internal_f63da08cf3bbcc6758280303c0bc231d252b2c26a76bdf4aa8387a37459770dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f63da08cf3bbcc6758280303c0bc231d252b2c26a76bdf4aa8387a37459770dc->leave($__internal_f63da08cf3bbcc6758280303c0bc231d252b2c26a76bdf4aa8387a37459770dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
