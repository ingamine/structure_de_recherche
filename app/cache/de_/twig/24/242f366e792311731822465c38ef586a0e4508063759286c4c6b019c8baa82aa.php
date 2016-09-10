<?php

/* these/new.html.twig */
class __TwigTemplate_7be75d94e14cae91ffff62f993d9dd985725a7468cc7a7b2995b2aed9830aec4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "these/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a392580e98aa3fcc73f2fb0893eb2136b0b98be1bc66d2d515c7b27da4d7b73 = $this->env->getExtension("native_profiler");
        $__internal_8a392580e98aa3fcc73f2fb0893eb2136b0b98be1bc66d2d515c7b27da4d7b73->enter($__internal_8a392580e98aa3fcc73f2fb0893eb2136b0b98be1bc66d2d515c7b27da4d7b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "these/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a392580e98aa3fcc73f2fb0893eb2136b0b98be1bc66d2d515c7b27da4d7b73->leave($__internal_8a392580e98aa3fcc73f2fb0893eb2136b0b98be1bc66d2d515c7b27da4d7b73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46becae48393ff7183cc403be6acf64c8a829bba475034d490470c840314d439 = $this->env->getExtension("native_profiler");
        $__internal_46becae48393ff7183cc403be6acf64c8a829bba475034d490470c840314d439->enter($__internal_46becae48393ff7183cc403be6acf64c8a829bba475034d490470c840314d439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>These creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("these_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_46becae48393ff7183cc403be6acf64c8a829bba475034d490470c840314d439->leave($__internal_46becae48393ff7183cc403be6acf64c8a829bba475034d490470c840314d439_prof);

    }

    public function getTemplateName()
    {
        return "these/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>These creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('these_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
