<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_dba0e245bc110b242df04b9159d9c5b280d7daa58af5915549411d26cacf5f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_1f4c1549322e1c22e26ed2973b8959af3fffb65ded43e73f7cb5801102837fc0 = $this->env->getExtension("native_profiler");
        $__internal_1f4c1549322e1c22e26ed2973b8959af3fffb65ded43e73f7cb5801102837fc0->enter($__internal_1f4c1549322e1c22e26ed2973b8959af3fffb65ded43e73f7cb5801102837fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f4c1549322e1c22e26ed2973b8959af3fffb65ded43e73f7cb5801102837fc0->leave($__internal_1f4c1549322e1c22e26ed2973b8959af3fffb65ded43e73f7cb5801102837fc0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abf926c5f0258af09444e48e4f9a1dfadad5ffd5ccaa5fe3116c5c27b10c1a7a = $this->env->getExtension("native_profiler");
        $__internal_abf926c5f0258af09444e48e4f9a1dfadad5ffd5ccaa5fe3116c5c27b10c1a7a->enter($__internal_abf926c5f0258af09444e48e4f9a1dfadad5ffd5ccaa5fe3116c5c27b10c1a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_abf926c5f0258af09444e48e4f9a1dfadad5ffd5ccaa5fe3116c5c27b10c1a7a->leave($__internal_abf926c5f0258af09444e48e4f9a1dfadad5ffd5ccaa5fe3116c5c27b10c1a7a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
