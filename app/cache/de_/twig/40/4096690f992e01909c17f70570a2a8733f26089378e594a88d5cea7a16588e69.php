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
        $__internal_41962930231f408fca675c386b1cb976738558c1b8d314e48d2ef70439cc88b9 = $this->env->getExtension("native_profiler");
        $__internal_41962930231f408fca675c386b1cb976738558c1b8d314e48d2ef70439cc88b9->enter($__internal_41962930231f408fca675c386b1cb976738558c1b8d314e48d2ef70439cc88b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41962930231f408fca675c386b1cb976738558c1b8d314e48d2ef70439cc88b9->leave($__internal_41962930231f408fca675c386b1cb976738558c1b8d314e48d2ef70439cc88b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98defb8a1f1fa5391f0135deda2c0dbf28dc5d37eee6a4abc32f5f79f444b7ab = $this->env->getExtension("native_profiler");
        $__internal_98defb8a1f1fa5391f0135deda2c0dbf28dc5d37eee6a4abc32f5f79f444b7ab->enter($__internal_98defb8a1f1fa5391f0135deda2c0dbf28dc5d37eee6a4abc32f5f79f444b7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_98defb8a1f1fa5391f0135deda2c0dbf28dc5d37eee6a4abc32f5f79f444b7ab->leave($__internal_98defb8a1f1fa5391f0135deda2c0dbf28dc5d37eee6a4abc32f5f79f444b7ab_prof);

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
