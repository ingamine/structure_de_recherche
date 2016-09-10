<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_7de26d7b5556926e601de1c1d7802919c9f0b5c1a6231d932521a284419116b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_020f0344b7044e35dd89ba696b7034471155abcf4068fc43823ecb5dbbd1d7ea = $this->env->getExtension("native_profiler");
        $__internal_020f0344b7044e35dd89ba696b7034471155abcf4068fc43823ecb5dbbd1d7ea->enter($__internal_020f0344b7044e35dd89ba696b7034471155abcf4068fc43823ecb5dbbd1d7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_020f0344b7044e35dd89ba696b7034471155abcf4068fc43823ecb5dbbd1d7ea->leave($__internal_020f0344b7044e35dd89ba696b7034471155abcf4068fc43823ecb5dbbd1d7ea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f0a232eb162ee2e371b1f86d3256f6257e958e81d069ec23ec7e1e8373ec993 = $this->env->getExtension("native_profiler");
        $__internal_2f0a232eb162ee2e371b1f86d3256f6257e958e81d069ec23ec7e1e8373ec993->enter($__internal_2f0a232eb162ee2e371b1f86d3256f6257e958e81d069ec23ec7e1e8373ec993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_2f0a232eb162ee2e371b1f86d3256f6257e958e81d069ec23ec7e1e8373ec993->leave($__internal_2f0a232eb162ee2e371b1f86d3256f6257e958e81d069ec23ec7e1e8373ec993_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
