<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_350d0677a0505bb1aedc8420f3912ab8dcc4ad70237cb07f1be22c807a0a53ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_fb1d50ef3197b919db7ccc2108ff4f9add67acdbcc54e68a181675eec59a7c82 = $this->env->getExtension("native_profiler");
        $__internal_fb1d50ef3197b919db7ccc2108ff4f9add67acdbcc54e68a181675eec59a7c82->enter($__internal_fb1d50ef3197b919db7ccc2108ff4f9add67acdbcc54e68a181675eec59a7c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb1d50ef3197b919db7ccc2108ff4f9add67acdbcc54e68a181675eec59a7c82->leave($__internal_fb1d50ef3197b919db7ccc2108ff4f9add67acdbcc54e68a181675eec59a7c82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f10af4dd5046b3ed75ede257f8ea79442348e06582bf072242f62fbd1cadc59e = $this->env->getExtension("native_profiler");
        $__internal_f10af4dd5046b3ed75ede257f8ea79442348e06582bf072242f62fbd1cadc59e->enter($__internal_f10af4dd5046b3ed75ede257f8ea79442348e06582bf072242f62fbd1cadc59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f10af4dd5046b3ed75ede257f8ea79442348e06582bf072242f62fbd1cadc59e->leave($__internal_f10af4dd5046b3ed75ede257f8ea79442348e06582bf072242f62fbd1cadc59e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
