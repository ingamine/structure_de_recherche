<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_fde02eae0a6ebb9b09539bc308035a02a9ebc9bb705cdc61e833fd42587af380 extends Twig_Template
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
        $__internal_4f3687763fbce57f82e3e85549a63e810d3cc8e2c6d12edecff6c84a3c1c8566 = $this->env->getExtension("native_profiler");
        $__internal_4f3687763fbce57f82e3e85549a63e810d3cc8e2c6d12edecff6c84a3c1c8566->enter($__internal_4f3687763fbce57f82e3e85549a63e810d3cc8e2c6d12edecff6c84a3c1c8566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4f3687763fbce57f82e3e85549a63e810d3cc8e2c6d12edecff6c84a3c1c8566->leave($__internal_4f3687763fbce57f82e3e85549a63e810d3cc8e2c6d12edecff6c84a3c1c8566_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
