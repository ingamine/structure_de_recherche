<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d00ee2496e4ecbd3fcec6b0568280d82718f344447a2d14f1b24b7c37b51d65a extends Twig_Template
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
        $__internal_e1fdfa575c583bbf2e8044f7d60b526bc8c1117f538d257317df2b3e11158075 = $this->env->getExtension("native_profiler");
        $__internal_e1fdfa575c583bbf2e8044f7d60b526bc8c1117f538d257317df2b3e11158075->enter($__internal_e1fdfa575c583bbf2e8044f7d60b526bc8c1117f538d257317df2b3e11158075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_e1fdfa575c583bbf2e8044f7d60b526bc8c1117f538d257317df2b3e11158075->leave($__internal_e1fdfa575c583bbf2e8044f7d60b526bc8c1117f538d257317df2b3e11158075_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
