<?php

/* LgmBundle:Default:index.html.twig */
class __TwigTemplate_3473e27d23e91c84501b4404638b80ea564c5d228a8a7616da32aed12b223049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "LgmBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c527dd5b15c9b497a31007f304e98363a779f28ca56334644cbc942108fe56b1 = $this->env->getExtension("native_profiler");
        $__internal_c527dd5b15c9b497a31007f304e98363a779f28ca56334644cbc942108fe56b1->enter($__internal_c527dd5b15c9b497a31007f304e98363a779f28ca56334644cbc942108fe56b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LgmBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c527dd5b15c9b497a31007f304e98363a779f28ca56334644cbc942108fe56b1->leave($__internal_c527dd5b15c9b497a31007f304e98363a779f28ca56334644cbc942108fe56b1_prof);

    }

    public function getTemplateName()
    {
        return "LgmBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* */
