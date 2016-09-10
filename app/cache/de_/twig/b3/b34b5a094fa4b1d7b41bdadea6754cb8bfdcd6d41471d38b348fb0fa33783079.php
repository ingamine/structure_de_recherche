<?php

/* default/index.html.twig */
class __TwigTemplate_70b215ac774b913d2e82b8fcd1ca2d6ac074b3bd480fbe1a89e300e86e8eedbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc03e1762a4e33e8919b8eb4ad85647b199932b7d987078a140204f722aa354d = $this->env->getExtension("native_profiler");
        $__internal_bc03e1762a4e33e8919b8eb4ad85647b199932b7d987078a140204f722aa354d->enter($__internal_bc03e1762a4e33e8919b8eb4ad85647b199932b7d987078a140204f722aa354d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc03e1762a4e33e8919b8eb4ad85647b199932b7d987078a140204f722aa354d->leave($__internal_bc03e1762a4e33e8919b8eb4ad85647b199932b7d987078a140204f722aa354d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
