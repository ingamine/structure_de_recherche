<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_1def408a7ecfbbdb07b42256e7652ec1c37f994939ebc80f0558528078bfcb83 extends Twig_Template
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
        $__internal_f842d2d681c2d8496f3407762ee26d3a6b8c16d6fcc2a22182ec511c4aa1f6b3 = $this->env->getExtension("native_profiler");
        $__internal_f842d2d681c2d8496f3407762ee26d3a6b8c16d6fcc2a22182ec511c4aa1f6b3->enter($__internal_f842d2d681c2d8496f3407762ee26d3a6b8c16d6fcc2a22182ec511c4aa1f6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f842d2d681c2d8496f3407762ee26d3a6b8c16d6fcc2a22182ec511c4aa1f6b3->leave($__internal_f842d2d681c2d8496f3407762ee26d3a6b8c16d6fcc2a22182ec511c4aa1f6b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
