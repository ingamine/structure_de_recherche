<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e84172becadc1cc7d9d041ff72c85c720c8dca1871f2dd8b82ebf3feb89aa700 extends Twig_Template
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
        $__internal_1f319f518f38ff2bc0d95853e92343111548e1d4c4196e991548741fedf415b8 = $this->env->getExtension("native_profiler");
        $__internal_1f319f518f38ff2bc0d95853e92343111548e1d4c4196e991548741fedf415b8->enter($__internal_1f319f518f38ff2bc0d95853e92343111548e1d4c4196e991548741fedf415b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_1f319f518f38ff2bc0d95853e92343111548e1d4c4196e991548741fedf415b8->leave($__internal_1f319f518f38ff2bc0d95853e92343111548e1d4c4196e991548741fedf415b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
