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
        $__internal_3a30dda0ee0c3c898949333f0f1a779e8f55fe4b9c3f2de63b8055d1446ff935 = $this->env->getExtension("native_profiler");
        $__internal_3a30dda0ee0c3c898949333f0f1a779e8f55fe4b9c3f2de63b8055d1446ff935->enter($__internal_3a30dda0ee0c3c898949333f0f1a779e8f55fe4b9c3f2de63b8055d1446ff935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a30dda0ee0c3c898949333f0f1a779e8f55fe4b9c3f2de63b8055d1446ff935->leave($__internal_3a30dda0ee0c3c898949333f0f1a779e8f55fe4b9c3f2de63b8055d1446ff935_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a06b36c6910fd852549508ce30d5b72ada4bc87843f0ceef1cb5ac527ca99fc = $this->env->getExtension("native_profiler");
        $__internal_9a06b36c6910fd852549508ce30d5b72ada4bc87843f0ceef1cb5ac527ca99fc->enter($__internal_9a06b36c6910fd852549508ce30d5b72ada4bc87843f0ceef1cb5ac527ca99fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9a06b36c6910fd852549508ce30d5b72ada4bc87843f0ceef1cb5ac527ca99fc->leave($__internal_9a06b36c6910fd852549508ce30d5b72ada4bc87843f0ceef1cb5ac527ca99fc_prof);

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
