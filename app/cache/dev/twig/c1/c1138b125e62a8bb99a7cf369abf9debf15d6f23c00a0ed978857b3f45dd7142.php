<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1f9e85d515d5badb7185904619004b0ebb1a346ac84e41d79c4fc4e1a38a5d73 extends Twig_Template
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
        $__internal_85b4719de0b78c8b74be1f722f0c5dc21024a33e3b89c8ec23c4cc3cc92ecfca = $this->env->getExtension("native_profiler");
        $__internal_85b4719de0b78c8b74be1f722f0c5dc21024a33e3b89c8ec23c4cc3cc92ecfca->enter($__internal_85b4719de0b78c8b74be1f722f0c5dc21024a33e3b89c8ec23c4cc3cc92ecfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_85b4719de0b78c8b74be1f722f0c5dc21024a33e3b89c8ec23c4cc3cc92ecfca->leave($__internal_85b4719de0b78c8b74be1f722f0c5dc21024a33e3b89c8ec23c4cc3cc92ecfca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
