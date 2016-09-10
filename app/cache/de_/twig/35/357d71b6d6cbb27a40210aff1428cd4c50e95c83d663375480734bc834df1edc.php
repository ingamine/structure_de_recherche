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
        $__internal_916caae4f32838415c4d782580c1c35c3c18e87413c8840127f69536221c1bba = $this->env->getExtension("native_profiler");
        $__internal_916caae4f32838415c4d782580c1c35c3c18e87413c8840127f69536221c1bba->enter($__internal_916caae4f32838415c4d782580c1c35c3c18e87413c8840127f69536221c1bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_916caae4f32838415c4d782580c1c35c3c18e87413c8840127f69536221c1bba->leave($__internal_916caae4f32838415c4d782580c1c35c3c18e87413c8840127f69536221c1bba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2acccf7508fcd48f313d7217360de87056d08ce5139c6ba626a9bd8ee079e9f9 = $this->env->getExtension("native_profiler");
        $__internal_2acccf7508fcd48f313d7217360de87056d08ce5139c6ba626a9bd8ee079e9f9->enter($__internal_2acccf7508fcd48f313d7217360de87056d08ce5139c6ba626a9bd8ee079e9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2acccf7508fcd48f313d7217360de87056d08ce5139c6ba626a9bd8ee079e9f9->leave($__internal_2acccf7508fcd48f313d7217360de87056d08ce5139c6ba626a9bd8ee079e9f9_prof);

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
