<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_20521cb2062ccaa2a46426ae6a55287bc458774961e629ae67996a2d7b902673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_8e7572727c8db76fb5381d5bdb46aeb8e9110f0d440941e33ca619aa3b4d6fe4 = $this->env->getExtension("native_profiler");
        $__internal_8e7572727c8db76fb5381d5bdb46aeb8e9110f0d440941e33ca619aa3b4d6fe4->enter($__internal_8e7572727c8db76fb5381d5bdb46aeb8e9110f0d440941e33ca619aa3b4d6fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e7572727c8db76fb5381d5bdb46aeb8e9110f0d440941e33ca619aa3b4d6fe4->leave($__internal_8e7572727c8db76fb5381d5bdb46aeb8e9110f0d440941e33ca619aa3b4d6fe4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_499901b8e6e3030beec700d5edca4bd7029605472aafedddd5f5b80de860dc32 = $this->env->getExtension("native_profiler");
        $__internal_499901b8e6e3030beec700d5edca4bd7029605472aafedddd5f5b80de860dc32->enter($__internal_499901b8e6e3030beec700d5edca4bd7029605472aafedddd5f5b80de860dc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_499901b8e6e3030beec700d5edca4bd7029605472aafedddd5f5b80de860dc32->leave($__internal_499901b8e6e3030beec700d5edca4bd7029605472aafedddd5f5b80de860dc32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
