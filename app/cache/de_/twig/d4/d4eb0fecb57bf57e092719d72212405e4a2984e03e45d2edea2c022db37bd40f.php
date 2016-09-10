<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3801e8ddfafa2b3878397240982a80d985ae7f44df1a93e5c4c1fb43809e5325 extends Twig_Template
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
        $__internal_953a9931d9801fcde3b54485de67ff0130df25aa5eee8e3a8c90fc86e425d22c = $this->env->getExtension("native_profiler");
        $__internal_953a9931d9801fcde3b54485de67ff0130df25aa5eee8e3a8c90fc86e425d22c->enter($__internal_953a9931d9801fcde3b54485de67ff0130df25aa5eee8e3a8c90fc86e425d22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_953a9931d9801fcde3b54485de67ff0130df25aa5eee8e3a8c90fc86e425d22c->leave($__internal_953a9931d9801fcde3b54485de67ff0130df25aa5eee8e3a8c90fc86e425d22c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
