<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_ee24af44a2fb7da7f79d8c64ce9d188e0fe25926ae6b534462ded73e9767696c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_fec09d3dd2bba78aa50fd579a7c428b3abe9266971d30a9807a0f2d64ebbe442 = $this->env->getExtension("native_profiler");
        $__internal_fec09d3dd2bba78aa50fd579a7c428b3abe9266971d30a9807a0f2d64ebbe442->enter($__internal_fec09d3dd2bba78aa50fd579a7c428b3abe9266971d30a9807a0f2d64ebbe442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec09d3dd2bba78aa50fd579a7c428b3abe9266971d30a9807a0f2d64ebbe442->leave($__internal_fec09d3dd2bba78aa50fd579a7c428b3abe9266971d30a9807a0f2d64ebbe442_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa22931ce9c9702533e0118f653edae36d8d7e453b9cc8f30c80c2318e534587 = $this->env->getExtension("native_profiler");
        $__internal_aa22931ce9c9702533e0118f653edae36d8d7e453b9cc8f30c80c2318e534587->enter($__internal_aa22931ce9c9702533e0118f653edae36d8d7e453b9cc8f30c80c2318e534587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_aa22931ce9c9702533e0118f653edae36d8d7e453b9cc8f30c80c2318e534587->leave($__internal_aa22931ce9c9702533e0118f653edae36d8d7e453b9cc8f30c80c2318e534587_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
