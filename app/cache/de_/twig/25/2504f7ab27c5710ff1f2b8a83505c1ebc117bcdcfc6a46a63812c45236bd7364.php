<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_aeb049a4768e91d6e4962cc728b1876ed3ad4d26adde85d9e42c8144543d7fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_05261c5b902d78e6e184deab00d717e7bd840c66a6a9eb85ae1681d6bd2659b9 = $this->env->getExtension("native_profiler");
        $__internal_05261c5b902d78e6e184deab00d717e7bd840c66a6a9eb85ae1681d6bd2659b9->enter($__internal_05261c5b902d78e6e184deab00d717e7bd840c66a6a9eb85ae1681d6bd2659b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05261c5b902d78e6e184deab00d717e7bd840c66a6a9eb85ae1681d6bd2659b9->leave($__internal_05261c5b902d78e6e184deab00d717e7bd840c66a6a9eb85ae1681d6bd2659b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1af54dc855459429ce8c0c2b8231719bb2236fe48e05781806025bb9a7a52702 = $this->env->getExtension("native_profiler");
        $__internal_1af54dc855459429ce8c0c2b8231719bb2236fe48e05781806025bb9a7a52702->enter($__internal_1af54dc855459429ce8c0c2b8231719bb2236fe48e05781806025bb9a7a52702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1af54dc855459429ce8c0c2b8231719bb2236fe48e05781806025bb9a7a52702->leave($__internal_1af54dc855459429ce8c0c2b8231719bb2236fe48e05781806025bb9a7a52702_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
