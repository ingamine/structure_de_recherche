<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_b60b1951d686f8be5c8be1465e3ea7506c6594999302d5ec8a94fbb50296eb86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_9b9e6cc89324184f23e41f829ba4515dc070f436f9a39a56c229308057a04e4c = $this->env->getExtension("native_profiler");
        $__internal_9b9e6cc89324184f23e41f829ba4515dc070f436f9a39a56c229308057a04e4c->enter($__internal_9b9e6cc89324184f23e41f829ba4515dc070f436f9a39a56c229308057a04e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b9e6cc89324184f23e41f829ba4515dc070f436f9a39a56c229308057a04e4c->leave($__internal_9b9e6cc89324184f23e41f829ba4515dc070f436f9a39a56c229308057a04e4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f3c17ce037a511ae298b67ae04402d56767bb02bc5b72248f9dca47aef0bf51 = $this->env->getExtension("native_profiler");
        $__internal_0f3c17ce037a511ae298b67ae04402d56767bb02bc5b72248f9dca47aef0bf51->enter($__internal_0f3c17ce037a511ae298b67ae04402d56767bb02bc5b72248f9dca47aef0bf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_0f3c17ce037a511ae298b67ae04402d56767bb02bc5b72248f9dca47aef0bf51->leave($__internal_0f3c17ce037a511ae298b67ae04402d56767bb02bc5b72248f9dca47aef0bf51_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
