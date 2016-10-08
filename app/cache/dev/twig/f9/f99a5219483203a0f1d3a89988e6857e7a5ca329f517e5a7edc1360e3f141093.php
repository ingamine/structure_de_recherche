<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_163cbd37ee745927a2210659680a897352a25b4a7d634115ab8b0de28db15f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_e0c9b26f4ae96be1da412aef62b4ddc5f7ef368326334ba1dbcd3787279b5938 = $this->env->getExtension("native_profiler");
        $__internal_e0c9b26f4ae96be1da412aef62b4ddc5f7ef368326334ba1dbcd3787279b5938->enter($__internal_e0c9b26f4ae96be1da412aef62b4ddc5f7ef368326334ba1dbcd3787279b5938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0c9b26f4ae96be1da412aef62b4ddc5f7ef368326334ba1dbcd3787279b5938->leave($__internal_e0c9b26f4ae96be1da412aef62b4ddc5f7ef368326334ba1dbcd3787279b5938_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_750c2075786972821635f0242d92a862e09a6c44bccf6248396f3198b0bc6ed7 = $this->env->getExtension("native_profiler");
        $__internal_750c2075786972821635f0242d92a862e09a6c44bccf6248396f3198b0bc6ed7->enter($__internal_750c2075786972821635f0242d92a862e09a6c44bccf6248396f3198b0bc6ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_750c2075786972821635f0242d92a862e09a6c44bccf6248396f3198b0bc6ed7->leave($__internal_750c2075786972821635f0242d92a862e09a6c44bccf6248396f3198b0bc6ed7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
