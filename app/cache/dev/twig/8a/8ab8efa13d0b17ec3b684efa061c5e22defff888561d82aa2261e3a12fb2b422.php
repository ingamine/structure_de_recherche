<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_c94ff478477258493f3ab3081705f2e26c32f2fbf89d7377dcc963faccd12c37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_7ffc94fb561de35dd010a96d9b536a58c94b216b8758fbff278aa3a318927223 = $this->env->getExtension("native_profiler");
        $__internal_7ffc94fb561de35dd010a96d9b536a58c94b216b8758fbff278aa3a318927223->enter($__internal_7ffc94fb561de35dd010a96d9b536a58c94b216b8758fbff278aa3a318927223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ffc94fb561de35dd010a96d9b536a58c94b216b8758fbff278aa3a318927223->leave($__internal_7ffc94fb561de35dd010a96d9b536a58c94b216b8758fbff278aa3a318927223_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ccd299a656984e366417ab26073027c0556c2057509801bd0e24ae94307c2ac6 = $this->env->getExtension("native_profiler");
        $__internal_ccd299a656984e366417ab26073027c0556c2057509801bd0e24ae94307c2ac6->enter($__internal_ccd299a656984e366417ab26073027c0556c2057509801bd0e24ae94307c2ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ccd299a656984e366417ab26073027c0556c2057509801bd0e24ae94307c2ac6->leave($__internal_ccd299a656984e366417ab26073027c0556c2057509801bd0e24ae94307c2ac6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
