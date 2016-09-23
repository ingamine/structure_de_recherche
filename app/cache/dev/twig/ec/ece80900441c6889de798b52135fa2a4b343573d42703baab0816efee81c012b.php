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
        $__internal_ba6c070e8cc7c103ec5032a2e098834d3c588ede97209fd458e3ecfe4f5d33ec = $this->env->getExtension("native_profiler");
        $__internal_ba6c070e8cc7c103ec5032a2e098834d3c588ede97209fd458e3ecfe4f5d33ec->enter($__internal_ba6c070e8cc7c103ec5032a2e098834d3c588ede97209fd458e3ecfe4f5d33ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba6c070e8cc7c103ec5032a2e098834d3c588ede97209fd458e3ecfe4f5d33ec->leave($__internal_ba6c070e8cc7c103ec5032a2e098834d3c588ede97209fd458e3ecfe4f5d33ec_prof);

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
