<?php

/* :default:index.html.twig */
class __TwigTemplate_546591d985ecaece499acd9f2549354cb4582f797fc494accc5faa4ba0e52767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7af48f218a9f84306ec458e3623ead910dfdd7bc9cc28dcf5d5840e1e0282af5 = $this->env->getExtension("native_profiler");
        $__internal_7af48f218a9f84306ec458e3623ead910dfdd7bc9cc28dcf5d5840e1e0282af5->enter($__internal_7af48f218a9f84306ec458e3623ead910dfdd7bc9cc28dcf5d5840e1e0282af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7af48f218a9f84306ec458e3623ead910dfdd7bc9cc28dcf5d5840e1e0282af5->leave($__internal_7af48f218a9f84306ec458e3623ead910dfdd7bc9cc28dcf5d5840e1e0282af5_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
