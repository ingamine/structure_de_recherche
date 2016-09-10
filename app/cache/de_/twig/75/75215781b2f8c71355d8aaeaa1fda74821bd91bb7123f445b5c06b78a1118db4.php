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
        $__internal_95b207b1e9174cd5d280243812d321293accb7d8e0cb1ff8eff2f2ed5f6b6fdc = $this->env->getExtension("native_profiler");
        $__internal_95b207b1e9174cd5d280243812d321293accb7d8e0cb1ff8eff2f2ed5f6b6fdc->enter($__internal_95b207b1e9174cd5d280243812d321293accb7d8e0cb1ff8eff2f2ed5f6b6fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_95b207b1e9174cd5d280243812d321293accb7d8e0cb1ff8eff2f2ed5f6b6fdc->leave($__internal_95b207b1e9174cd5d280243812d321293accb7d8e0cb1ff8eff2f2ed5f6b6fdc_prof);

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
