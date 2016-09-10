<?php

/* soutenance/new.html.twig */
class __TwigTemplate_a79703a4319d623c09f8c16ee90098b1c0a09101370c0ed66537a3e27d8e2cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "soutenance/new.html.twig", 1);
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
        $__internal_316de4142740bf5b36422c5bc407f393721f00ac59508a6e236723f51a309b99 = $this->env->getExtension("native_profiler");
        $__internal_316de4142740bf5b36422c5bc407f393721f00ac59508a6e236723f51a309b99->enter($__internal_316de4142740bf5b36422c5bc407f393721f00ac59508a6e236723f51a309b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "soutenance/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_316de4142740bf5b36422c5bc407f393721f00ac59508a6e236723f51a309b99->leave($__internal_316de4142740bf5b36422c5bc407f393721f00ac59508a6e236723f51a309b99_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4a918a667c62fa2a4226342d813b121adf38bfc205c9d48131b0d6c921709a4 = $this->env->getExtension("native_profiler");
        $__internal_c4a918a667c62fa2a4226342d813b121adf38bfc205c9d48131b0d6c921709a4->enter($__internal_c4a918a667c62fa2a4226342d813b121adf38bfc205c9d48131b0d6c921709a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Soutenance creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("soutenance_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c4a918a667c62fa2a4226342d813b121adf38bfc205c9d48131b0d6c921709a4->leave($__internal_c4a918a667c62fa2a4226342d813b121adf38bfc205c9d48131b0d6c921709a4_prof);

    }

    public function getTemplateName()
    {
        return "soutenance/new.html.twig";
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
/*     <h1>Soutenance creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('soutenance_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
