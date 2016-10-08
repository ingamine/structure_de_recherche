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
        $__internal_72133066c1ee52dc6c5813b598b5f423bb4aa30ef1ef68277377e0c065de2b0c = $this->env->getExtension("native_profiler");
        $__internal_72133066c1ee52dc6c5813b598b5f423bb4aa30ef1ef68277377e0c065de2b0c->enter($__internal_72133066c1ee52dc6c5813b598b5f423bb4aa30ef1ef68277377e0c065de2b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72133066c1ee52dc6c5813b598b5f423bb4aa30ef1ef68277377e0c065de2b0c->leave($__internal_72133066c1ee52dc6c5813b598b5f423bb4aa30ef1ef68277377e0c065de2b0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae0a9b5233c7753a807ebc997b2853649481bcbab6101eadc2b890dcaa35d1c6 = $this->env->getExtension("native_profiler");
        $__internal_ae0a9b5233c7753a807ebc997b2853649481bcbab6101eadc2b890dcaa35d1c6->enter($__internal_ae0a9b5233c7753a807ebc997b2853649481bcbab6101eadc2b890dcaa35d1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_ae0a9b5233c7753a807ebc997b2853649481bcbab6101eadc2b890dcaa35d1c6->leave($__internal_ae0a9b5233c7753a807ebc997b2853649481bcbab6101eadc2b890dcaa35d1c6_prof);

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
