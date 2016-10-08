<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d4c9f8207d3dd178a9a38394fecfa40f6b6e56a4f29ed7f2ad4ee09b10d41a1e extends Twig_Template
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
        $__internal_a69e04e9fcd1f093354e6fb2d28fba9cfd614fe598e7de8c709364ba884e4471 = $this->env->getExtension("native_profiler");
        $__internal_a69e04e9fcd1f093354e6fb2d28fba9cfd614fe598e7de8c709364ba884e4471->enter($__internal_a69e04e9fcd1f093354e6fb2d28fba9cfd614fe598e7de8c709364ba884e4471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a69e04e9fcd1f093354e6fb2d28fba9cfd614fe598e7de8c709364ba884e4471->leave($__internal_a69e04e9fcd1f093354e6fb2d28fba9cfd614fe598e7de8c709364ba884e4471_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
