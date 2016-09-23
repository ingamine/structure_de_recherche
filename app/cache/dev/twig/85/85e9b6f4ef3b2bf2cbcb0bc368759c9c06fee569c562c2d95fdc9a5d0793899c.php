<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ee5904b513f53af0cddd84e55c8bcdca75918587bee26497962daa74b59dcfb1 extends Twig_Template
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
        $__internal_98b96632a448608f14515aa812d2ea1e722bdc64e9decbe6f330157392c393d8 = $this->env->getExtension("native_profiler");
        $__internal_98b96632a448608f14515aa812d2ea1e722bdc64e9decbe6f330157392c393d8->enter($__internal_98b96632a448608f14515aa812d2ea1e722bdc64e9decbe6f330157392c393d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_98b96632a448608f14515aa812d2ea1e722bdc64e9decbe6f330157392c393d8->leave($__internal_98b96632a448608f14515aa812d2ea1e722bdc64e9decbe6f330157392c393d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
