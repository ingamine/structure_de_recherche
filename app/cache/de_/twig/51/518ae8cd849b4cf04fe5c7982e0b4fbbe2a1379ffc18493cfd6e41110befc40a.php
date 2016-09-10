<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d5bf4092821b991ce34a860f6d48eb4b0468a29ac8c153669fd185fa14f74270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5609ddcbbb4c1a8858fd6dd5e3726a86bea1e83d28445a48f9bc6d7ca877a87f = $this->env->getExtension("native_profiler");
        $__internal_5609ddcbbb4c1a8858fd6dd5e3726a86bea1e83d28445a48f9bc6d7ca877a87f->enter($__internal_5609ddcbbb4c1a8858fd6dd5e3726a86bea1e83d28445a48f9bc6d7ca877a87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5609ddcbbb4c1a8858fd6dd5e3726a86bea1e83d28445a48f9bc6d7ca877a87f->leave($__internal_5609ddcbbb4c1a8858fd6dd5e3726a86bea1e83d28445a48f9bc6d7ca877a87f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa71517db093652be27b6edc00f1461c3f40d4aa88ecaf3ae355bef10e384850 = $this->env->getExtension("native_profiler");
        $__internal_fa71517db093652be27b6edc00f1461c3f40d4aa88ecaf3ae355bef10e384850->enter($__internal_fa71517db093652be27b6edc00f1461c3f40d4aa88ecaf3ae355bef10e384850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fa71517db093652be27b6edc00f1461c3f40d4aa88ecaf3ae355bef10e384850->leave($__internal_fa71517db093652be27b6edc00f1461c3f40d4aa88ecaf3ae355bef10e384850_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
