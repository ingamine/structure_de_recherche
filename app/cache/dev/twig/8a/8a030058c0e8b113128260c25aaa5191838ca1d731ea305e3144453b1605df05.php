<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f1906d4c052f6804e6ab7e56ed8ffb11c4303a47b6d9a2735719d6b3c2262735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_d73d816be35f9d1698cb8997a434a7c360a877612a4ae5f79a1530a24090bc4b = $this->env->getExtension("native_profiler");
        $__internal_d73d816be35f9d1698cb8997a434a7c360a877612a4ae5f79a1530a24090bc4b->enter($__internal_d73d816be35f9d1698cb8997a434a7c360a877612a4ae5f79a1530a24090bc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d73d816be35f9d1698cb8997a434a7c360a877612a4ae5f79a1530a24090bc4b->leave($__internal_d73d816be35f9d1698cb8997a434a7c360a877612a4ae5f79a1530a24090bc4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cb61ee0811482e213bd2744386030f72768480e3b1ad3423721dd1e0dad40f8 = $this->env->getExtension("native_profiler");
        $__internal_8cb61ee0811482e213bd2744386030f72768480e3b1ad3423721dd1e0dad40f8->enter($__internal_8cb61ee0811482e213bd2744386030f72768480e3b1ad3423721dd1e0dad40f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8cb61ee0811482e213bd2744386030f72768480e3b1ad3423721dd1e0dad40f8->leave($__internal_8cb61ee0811482e213bd2744386030f72768480e3b1ad3423721dd1e0dad40f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
