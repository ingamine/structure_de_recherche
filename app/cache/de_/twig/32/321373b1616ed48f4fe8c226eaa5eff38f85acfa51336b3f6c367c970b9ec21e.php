<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_13a2549a5f8aecc6749a9c342e229fa9ec977fcc2261ccaaac035954e622b07d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_ee19909eb71be35e2402cfb6bf34191d0751295c4e0348f8715d09c39b882b6b = $this->env->getExtension("native_profiler");
        $__internal_ee19909eb71be35e2402cfb6bf34191d0751295c4e0348f8715d09c39b882b6b->enter($__internal_ee19909eb71be35e2402cfb6bf34191d0751295c4e0348f8715d09c39b882b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee19909eb71be35e2402cfb6bf34191d0751295c4e0348f8715d09c39b882b6b->leave($__internal_ee19909eb71be35e2402cfb6bf34191d0751295c4e0348f8715d09c39b882b6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc04ea7e9961004f660a0c0c3c31043f5bb7dbcaf90f8d8bca050e02b25d4fef = $this->env->getExtension("native_profiler");
        $__internal_dc04ea7e9961004f660a0c0c3c31043f5bb7dbcaf90f8d8bca050e02b25d4fef->enter($__internal_dc04ea7e9961004f660a0c0c3c31043f5bb7dbcaf90f8d8bca050e02b25d4fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_dc04ea7e9961004f660a0c0c3c31043f5bb7dbcaf90f8d8bca050e02b25d4fef->leave($__internal_dc04ea7e9961004f660a0c0c3c31043f5bb7dbcaf90f8d8bca050e02b25d4fef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
