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
        $__internal_a22db65a5789d63704d0e8bf529891869d675a40ee9899b46d1530d751232351 = $this->env->getExtension("native_profiler");
        $__internal_a22db65a5789d63704d0e8bf529891869d675a40ee9899b46d1530d751232351->enter($__internal_a22db65a5789d63704d0e8bf529891869d675a40ee9899b46d1530d751232351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a22db65a5789d63704d0e8bf529891869d675a40ee9899b46d1530d751232351->leave($__internal_a22db65a5789d63704d0e8bf529891869d675a40ee9899b46d1530d751232351_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e3a6d7cba318ea4910ac0d5fe5dd696b2ee8a3963c07da7b282c597665f181b = $this->env->getExtension("native_profiler");
        $__internal_1e3a6d7cba318ea4910ac0d5fe5dd696b2ee8a3963c07da7b282c597665f181b->enter($__internal_1e3a6d7cba318ea4910ac0d5fe5dd696b2ee8a3963c07da7b282c597665f181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1e3a6d7cba318ea4910ac0d5fe5dd696b2ee8a3963c07da7b282c597665f181b->leave($__internal_1e3a6d7cba318ea4910ac0d5fe5dd696b2ee8a3963c07da7b282c597665f181b_prof);

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
