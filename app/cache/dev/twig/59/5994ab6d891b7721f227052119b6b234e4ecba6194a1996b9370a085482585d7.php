<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_c163a6afc7d6ad9e5c302c36b0cdbb57536ca1faa8f1e21e8d61fd6cdd82d85f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_c3844ed1eef211c239368d7b45893298223fe121c327f2f92175f1ce2eb329b9 = $this->env->getExtension("native_profiler");
        $__internal_c3844ed1eef211c239368d7b45893298223fe121c327f2f92175f1ce2eb329b9->enter($__internal_c3844ed1eef211c239368d7b45893298223fe121c327f2f92175f1ce2eb329b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3844ed1eef211c239368d7b45893298223fe121c327f2f92175f1ce2eb329b9->leave($__internal_c3844ed1eef211c239368d7b45893298223fe121c327f2f92175f1ce2eb329b9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfa55f5d67ae7001378d91522a064f988daa103c2ff8f4c49af395952092f3a3 = $this->env->getExtension("native_profiler");
        $__internal_bfa55f5d67ae7001378d91522a064f988daa103c2ff8f4c49af395952092f3a3->enter($__internal_bfa55f5d67ae7001378d91522a064f988daa103c2ff8f4c49af395952092f3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_bfa55f5d67ae7001378d91522a064f988daa103c2ff8f4c49af395952092f3a3->leave($__internal_bfa55f5d67ae7001378d91522a064f988daa103c2ff8f4c49af395952092f3a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
