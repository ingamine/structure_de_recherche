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
        $__internal_25b6cdda4792e13308dc022f142bdf5d91b4c1702344ee432f4ee3fe5e0fe9a4 = $this->env->getExtension("native_profiler");
        $__internal_25b6cdda4792e13308dc022f142bdf5d91b4c1702344ee432f4ee3fe5e0fe9a4->enter($__internal_25b6cdda4792e13308dc022f142bdf5d91b4c1702344ee432f4ee3fe5e0fe9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25b6cdda4792e13308dc022f142bdf5d91b4c1702344ee432f4ee3fe5e0fe9a4->leave($__internal_25b6cdda4792e13308dc022f142bdf5d91b4c1702344ee432f4ee3fe5e0fe9a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_560523e2659c38151de794aaad0e2cabc8517a2ad9b6f601c31bc0d487e20cfd = $this->env->getExtension("native_profiler");
        $__internal_560523e2659c38151de794aaad0e2cabc8517a2ad9b6f601c31bc0d487e20cfd->enter($__internal_560523e2659c38151de794aaad0e2cabc8517a2ad9b6f601c31bc0d487e20cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_560523e2659c38151de794aaad0e2cabc8517a2ad9b6f601c31bc0d487e20cfd->leave($__internal_560523e2659c38151de794aaad0e2cabc8517a2ad9b6f601c31bc0d487e20cfd_prof);

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
