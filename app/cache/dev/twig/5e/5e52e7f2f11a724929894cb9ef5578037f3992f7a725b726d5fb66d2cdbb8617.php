<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_58c35da0334dac2404bdd7a610bb0f3941ff5c99b654a9af2e4811b0a7e91546 extends Twig_Template
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
        $__internal_0a55bc118224b1d12a80d5c20557707aab4822eb59ca7a7b83647b4c4ae1d3b9 = $this->env->getExtension("native_profiler");
        $__internal_0a55bc118224b1d12a80d5c20557707aab4822eb59ca7a7b83647b4c4ae1d3b9->enter($__internal_0a55bc118224b1d12a80d5c20557707aab4822eb59ca7a7b83647b4c4ae1d3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0a55bc118224b1d12a80d5c20557707aab4822eb59ca7a7b83647b4c4ae1d3b9->leave($__internal_0a55bc118224b1d12a80d5c20557707aab4822eb59ca7a7b83647b4c4ae1d3b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
