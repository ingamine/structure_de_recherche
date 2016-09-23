<?php

/* structure/new.html.twig */
class __TwigTemplate_454dede6f72ea41bd223d4545ba5a9eca42b3ec5d4d9c89caa5f023198f97bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "structure/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df50bfdbef0d31a411ea9a73db5a8d2ef2d28c70f62540cd5e0510c1cd0a96eb = $this->env->getExtension("native_profiler");
        $__internal_df50bfdbef0d31a411ea9a73db5a8d2ef2d28c70f62540cd5e0510c1cd0a96eb->enter($__internal_df50bfdbef0d31a411ea9a73db5a8d2ef2d28c70f62540cd5e0510c1cd0a96eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "structure/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df50bfdbef0d31a411ea9a73db5a8d2ef2d28c70f62540cd5e0510c1cd0a96eb->leave($__internal_df50bfdbef0d31a411ea9a73db5a8d2ef2d28c70f62540cd5e0510c1cd0a96eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9ad75851e5a747c29c755ec76468232c8b26ac5f100d5bb6e7a27b968cbd640 = $this->env->getExtension("native_profiler");
        $__internal_b9ad75851e5a747c29c755ec76468232c8b26ac5f100d5bb6e7a27b968cbd640->enter($__internal_b9ad75851e5a747c29c755ec76468232c8b26ac5f100d5bb6e7a27b968cbd640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Structure creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("structure_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b9ad75851e5a747c29c755ec76468232c8b26ac5f100d5bb6e7a27b968cbd640->leave($__internal_b9ad75851e5a747c29c755ec76468232c8b26ac5f100d5bb6e7a27b968cbd640_prof);

    }

    public function getTemplateName()
    {
        return "structure/new.html.twig";
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
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>Structure creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('structure_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
