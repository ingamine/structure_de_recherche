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
        $__internal_6dd0482edb7649f0c88c2576a731411c72818c9870ac173fd0164dc760ad213f = $this->env->getExtension("native_profiler");
        $__internal_6dd0482edb7649f0c88c2576a731411c72818c9870ac173fd0164dc760ad213f->enter($__internal_6dd0482edb7649f0c88c2576a731411c72818c9870ac173fd0164dc760ad213f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_6dd0482edb7649f0c88c2576a731411c72818c9870ac173fd0164dc760ad213f->leave($__internal_6dd0482edb7649f0c88c2576a731411c72818c9870ac173fd0164dc760ad213f_prof);

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
