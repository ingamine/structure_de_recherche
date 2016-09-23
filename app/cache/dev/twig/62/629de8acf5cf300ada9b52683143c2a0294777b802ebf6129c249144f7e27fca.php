<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_74b29c714f68ba34764ab4575d06d6320adc6dfc58c9b3a7afe0bdf9898c3d30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4f10a5629224f39171b82612ed16bf287e202dd8b97c0937a460aa462ce3b14b = $this->env->getExtension("native_profiler");
        $__internal_4f10a5629224f39171b82612ed16bf287e202dd8b97c0937a460aa462ce3b14b->enter($__internal_4f10a5629224f39171b82612ed16bf287e202dd8b97c0937a460aa462ce3b14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f10a5629224f39171b82612ed16bf287e202dd8b97c0937a460aa462ce3b14b->leave($__internal_4f10a5629224f39171b82612ed16bf287e202dd8b97c0937a460aa462ce3b14b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b84d879c609a82d930a9a55b4709a82fdae642ed61fab4e2c9dd1ef869ec8f83 = $this->env->getExtension("native_profiler");
        $__internal_b84d879c609a82d930a9a55b4709a82fdae642ed61fab4e2c9dd1ef869ec8f83->enter($__internal_b84d879c609a82d930a9a55b4709a82fdae642ed61fab4e2c9dd1ef869ec8f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b84d879c609a82d930a9a55b4709a82fdae642ed61fab4e2c9dd1ef869ec8f83->leave($__internal_b84d879c609a82d930a9a55b4709a82fdae642ed61fab4e2c9dd1ef869ec8f83_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
