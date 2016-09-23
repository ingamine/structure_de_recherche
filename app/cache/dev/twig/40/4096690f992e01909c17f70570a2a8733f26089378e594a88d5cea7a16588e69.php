<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_142f1c5234403efd3826d4843f1639212bfaa4f8578db5f0a362edf5f4d19f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_3ef5ea838f26e492a88862c07bd4fcf928a46d42d38cb6af1b8dbcf0e15af613 = $this->env->getExtension("native_profiler");
        $__internal_3ef5ea838f26e492a88862c07bd4fcf928a46d42d38cb6af1b8dbcf0e15af613->enter($__internal_3ef5ea838f26e492a88862c07bd4fcf928a46d42d38cb6af1b8dbcf0e15af613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ef5ea838f26e492a88862c07bd4fcf928a46d42d38cb6af1b8dbcf0e15af613->leave($__internal_3ef5ea838f26e492a88862c07bd4fcf928a46d42d38cb6af1b8dbcf0e15af613_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8329bbc793250fd0a2465d56c94a437679e2a645f74548dcd45e6a150e5d0ec0 = $this->env->getExtension("native_profiler");
        $__internal_8329bbc793250fd0a2465d56c94a437679e2a645f74548dcd45e6a150e5d0ec0->enter($__internal_8329bbc793250fd0a2465d56c94a437679e2a645f74548dcd45e6a150e5d0ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_8329bbc793250fd0a2465d56c94a437679e2a645f74548dcd45e6a150e5d0ec0->leave($__internal_8329bbc793250fd0a2465d56c94a437679e2a645f74548dcd45e6a150e5d0ec0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
