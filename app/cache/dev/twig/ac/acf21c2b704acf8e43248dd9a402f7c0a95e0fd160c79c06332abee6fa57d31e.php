<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c46f9f3c02bec10ce08bc951de0d056fb1bf06aa2c0f3cbe8390a6ca198f885c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4059916b39d7f7912c62fa71fb70134a7dae1ffeee769dbe136958544ba0a3ea = $this->env->getExtension("native_profiler");
        $__internal_4059916b39d7f7912c62fa71fb70134a7dae1ffeee769dbe136958544ba0a3ea->enter($__internal_4059916b39d7f7912c62fa71fb70134a7dae1ffeee769dbe136958544ba0a3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4059916b39d7f7912c62fa71fb70134a7dae1ffeee769dbe136958544ba0a3ea->leave($__internal_4059916b39d7f7912c62fa71fb70134a7dae1ffeee769dbe136958544ba0a3ea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
