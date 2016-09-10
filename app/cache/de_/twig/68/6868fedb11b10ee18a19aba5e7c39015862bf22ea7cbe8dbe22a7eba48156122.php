<?php

/* :these:new.html.twig */
class __TwigTemplate_3201e18755e9f71ecf1b3a748c59af7c7d0cf8f8410f4533f3f28abc4bda1277 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":these:new.html.twig", 1);
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
        $__internal_f51ff22a8537b0f2d531d05fdd8ef8f0e7099f858e49983f4fec13b82395ab7c = $this->env->getExtension("native_profiler");
        $__internal_f51ff22a8537b0f2d531d05fdd8ef8f0e7099f858e49983f4fec13b82395ab7c->enter($__internal_f51ff22a8537b0f2d531d05fdd8ef8f0e7099f858e49983f4fec13b82395ab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":these:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f51ff22a8537b0f2d531d05fdd8ef8f0e7099f858e49983f4fec13b82395ab7c->leave($__internal_f51ff22a8537b0f2d531d05fdd8ef8f0e7099f858e49983f4fec13b82395ab7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_591647fa2bee67bece18ae0d50d446714597a25cdfcde83db06c57716d976188 = $this->env->getExtension("native_profiler");
        $__internal_591647fa2bee67bece18ae0d50d446714597a25cdfcde83db06c57716d976188->enter($__internal_591647fa2bee67bece18ae0d50d446714597a25cdfcde83db06c57716d976188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_591647fa2bee67bece18ae0d50d446714597a25cdfcde83db06c57716d976188->leave($__internal_591647fa2bee67bece18ae0d50d446714597a25cdfcde83db06c57716d976188_prof);

    }

    public function getTemplateName()
    {
        return ":these:new.html.twig";
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
