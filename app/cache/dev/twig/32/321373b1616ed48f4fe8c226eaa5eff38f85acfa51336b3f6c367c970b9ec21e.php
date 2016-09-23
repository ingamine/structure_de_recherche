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
        $__internal_908509fea46aabab612bd9c0cd5517b37606f7cf2dd3c15c624d743a2ef377df = $this->env->getExtension("native_profiler");
        $__internal_908509fea46aabab612bd9c0cd5517b37606f7cf2dd3c15c624d743a2ef377df->enter($__internal_908509fea46aabab612bd9c0cd5517b37606f7cf2dd3c15c624d743a2ef377df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_908509fea46aabab612bd9c0cd5517b37606f7cf2dd3c15c624d743a2ef377df->leave($__internal_908509fea46aabab612bd9c0cd5517b37606f7cf2dd3c15c624d743a2ef377df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c4d07ca0a5f23debe18fda5cc2255519b00303ab40f705b508ae2136e2590ab = $this->env->getExtension("native_profiler");
        $__internal_3c4d07ca0a5f23debe18fda5cc2255519b00303ab40f705b508ae2136e2590ab->enter($__internal_3c4d07ca0a5f23debe18fda5cc2255519b00303ab40f705b508ae2136e2590ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_3c4d07ca0a5f23debe18fda5cc2255519b00303ab40f705b508ae2136e2590ab->leave($__internal_3c4d07ca0a5f23debe18fda5cc2255519b00303ab40f705b508ae2136e2590ab_prof);

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
