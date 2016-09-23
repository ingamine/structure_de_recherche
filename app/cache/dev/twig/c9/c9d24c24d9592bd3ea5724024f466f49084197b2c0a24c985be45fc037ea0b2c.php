<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_593d0bbaf67043f2e0aac7257d5628c9d30b2470322bff5c4f4ce4c30b4a3447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_200f42886c27b3ffbad6ca15f21f966aad2d53ab555a5aceafa836f3f3c088c4 = $this->env->getExtension("native_profiler");
        $__internal_200f42886c27b3ffbad6ca15f21f966aad2d53ab555a5aceafa836f3f3c088c4->enter($__internal_200f42886c27b3ffbad6ca15f21f966aad2d53ab555a5aceafa836f3f3c088c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_200f42886c27b3ffbad6ca15f21f966aad2d53ab555a5aceafa836f3f3c088c4->leave($__internal_200f42886c27b3ffbad6ca15f21f966aad2d53ab555a5aceafa836f3f3c088c4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05f8a0127cb93980e68e755712b5a5e8a2590ba2b0cbc7f978ceacd7651fdbee = $this->env->getExtension("native_profiler");
        $__internal_05f8a0127cb93980e68e755712b5a5e8a2590ba2b0cbc7f978ceacd7651fdbee->enter($__internal_05f8a0127cb93980e68e755712b5a5e8a2590ba2b0cbc7f978ceacd7651fdbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_05f8a0127cb93980e68e755712b5a5e8a2590ba2b0cbc7f978ceacd7651fdbee->leave($__internal_05f8a0127cb93980e68e755712b5a5e8a2590ba2b0cbc7f978ceacd7651fdbee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
