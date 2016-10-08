<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_fccc7d5dde2329ca00b8a3c10280f1727d090d78fc06e6a7bef0bac555333f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_375edaef9d24c0039b421c83d4e8d281a83ef83122777fdadc2d570893aa3de0 = $this->env->getExtension("native_profiler");
        $__internal_375edaef9d24c0039b421c83d4e8d281a83ef83122777fdadc2d570893aa3de0->enter($__internal_375edaef9d24c0039b421c83d4e8d281a83ef83122777fdadc2d570893aa3de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_375edaef9d24c0039b421c83d4e8d281a83ef83122777fdadc2d570893aa3de0->leave($__internal_375edaef9d24c0039b421c83d4e8d281a83ef83122777fdadc2d570893aa3de0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3afca55a7758331558cd7da131a08e3013a1808f16398f18b57fa5d6c84dac2 = $this->env->getExtension("native_profiler");
        $__internal_c3afca55a7758331558cd7da131a08e3013a1808f16398f18b57fa5d6c84dac2->enter($__internal_c3afca55a7758331558cd7da131a08e3013a1808f16398f18b57fa5d6c84dac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c3afca55a7758331558cd7da131a08e3013a1808f16398f18b57fa5d6c84dac2->leave($__internal_c3afca55a7758331558cd7da131a08e3013a1808f16398f18b57fa5d6c84dac2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
