<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_eae8ec3a922837c23f1330b2a47048d1c6522951aa2d0b95ff82103cd7d7207a extends Twig_Template
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
        $__internal_220121c3a062f51d14e121a144f2bb0db836d94c448377f2f55dd5e0e699f486 = $this->env->getExtension("native_profiler");
        $__internal_220121c3a062f51d14e121a144f2bb0db836d94c448377f2f55dd5e0e699f486->enter($__internal_220121c3a062f51d14e121a144f2bb0db836d94c448377f2f55dd5e0e699f486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_220121c3a062f51d14e121a144f2bb0db836d94c448377f2f55dd5e0e699f486->leave($__internal_220121c3a062f51d14e121a144f2bb0db836d94c448377f2f55dd5e0e699f486_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
