<?php

/* @Lgm/Default/index.html.twig */
class __TwigTemplate_e710504470008260850c89b7387b6f6c6b86c79db818a0ad598a0d2ef43e15d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "@Lgm/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a779ab4c4fbbc87a89ec831d35e76f29dbbd027eca9058097a267f7fad528dc9 = $this->env->getExtension("native_profiler");
        $__internal_a779ab4c4fbbc87a89ec831d35e76f29dbbd027eca9058097a267f7fad528dc9->enter($__internal_a779ab4c4fbbc87a89ec831d35e76f29dbbd027eca9058097a267f7fad528dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Lgm/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a779ab4c4fbbc87a89ec831d35e76f29dbbd027eca9058097a267f7fad528dc9->leave($__internal_a779ab4c4fbbc87a89ec831d35e76f29dbbd027eca9058097a267f7fad528dc9_prof);

    }

    public function getTemplateName()
    {
        return "@Lgm/Default/index.html.twig";
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
