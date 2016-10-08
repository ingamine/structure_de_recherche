<?php

/* soutenance/edit.html.twig */
class __TwigTemplate_43774a239823fee142aaff7ae55ff2149be8d60df5d82972722b6d3ccf35ac31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "soutenance/edit.html.twig", 1);
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
        $__internal_e744e9a8008076818f35c56663097291b43f000bf0f5a2ba1abf614ecb219cf6 = $this->env->getExtension("native_profiler");
        $__internal_e744e9a8008076818f35c56663097291b43f000bf0f5a2ba1abf614ecb219cf6->enter($__internal_e744e9a8008076818f35c56663097291b43f000bf0f5a2ba1abf614ecb219cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "soutenance/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e744e9a8008076818f35c56663097291b43f000bf0f5a2ba1abf614ecb219cf6->leave($__internal_e744e9a8008076818f35c56663097291b43f000bf0f5a2ba1abf614ecb219cf6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24e880a0959654d31b86c361c57b0d8dc868c00ab6ed9a7e9f6977d06319cc37 = $this->env->getExtension("native_profiler");
        $__internal_24e880a0959654d31b86c361c57b0d8dc868c00ab6ed9a7e9f6977d06319cc37->enter($__internal_24e880a0959654d31b86c361c57b0d8dc868c00ab6ed9a7e9f6977d06319cc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Soutenance edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("soutenance_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_24e880a0959654d31b86c361c57b0d8dc868c00ab6ed9a7e9f6977d06319cc37->leave($__internal_24e880a0959654d31b86c361c57b0d8dc868c00ab6ed9a7e9f6977d06319cc37_prof);

    }

    public function getTemplateName()
    {
        return "soutenance/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>Soutenance edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('soutenance_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
