<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_f1906d4c052f6804e6ab7e56ed8ffb11c4303a47b6d9a2735719d6b3c2262735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_17a5d05cacb8ff208b76a80294f6d6a47fc4930ae9d0bfc959d42b7bca50718f = $this->env->getExtension("native_profiler");
        $__internal_17a5d05cacb8ff208b76a80294f6d6a47fc4930ae9d0bfc959d42b7bca50718f->enter($__internal_17a5d05cacb8ff208b76a80294f6d6a47fc4930ae9d0bfc959d42b7bca50718f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a5d05cacb8ff208b76a80294f6d6a47fc4930ae9d0bfc959d42b7bca50718f->leave($__internal_17a5d05cacb8ff208b76a80294f6d6a47fc4930ae9d0bfc959d42b7bca50718f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2260fd82121d096978dd83add688092f138ff48248a2e21514ca6f9b65415507 = $this->env->getExtension("native_profiler");
        $__internal_2260fd82121d096978dd83add688092f138ff48248a2e21514ca6f9b65415507->enter($__internal_2260fd82121d096978dd83add688092f138ff48248a2e21514ca6f9b65415507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_2260fd82121d096978dd83add688092f138ff48248a2e21514ca6f9b65415507->leave($__internal_2260fd82121d096978dd83add688092f138ff48248a2e21514ca6f9b65415507_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
