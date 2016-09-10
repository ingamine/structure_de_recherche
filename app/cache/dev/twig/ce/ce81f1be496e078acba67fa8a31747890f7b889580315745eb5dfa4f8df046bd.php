<?php

/* these/edit.html.twig */
class __TwigTemplate_054c473b7c68d64c196998259dac7aa53aebdcd3f03b980ce1712074c4c31f6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "these/edit.html.twig", 1);
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
        $__internal_510e42614269e812aaeb09715b6d4e63d22c315ad4be610f512e9cdffd2dbe88 = $this->env->getExtension("native_profiler");
        $__internal_510e42614269e812aaeb09715b6d4e63d22c315ad4be610f512e9cdffd2dbe88->enter($__internal_510e42614269e812aaeb09715b6d4e63d22c315ad4be610f512e9cdffd2dbe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "these/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_510e42614269e812aaeb09715b6d4e63d22c315ad4be610f512e9cdffd2dbe88->leave($__internal_510e42614269e812aaeb09715b6d4e63d22c315ad4be610f512e9cdffd2dbe88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b62da6708ac9a11af032ec64d2069f52aa11e6d58abf37d7693514e80174407f = $this->env->getExtension("native_profiler");
        $__internal_b62da6708ac9a11af032ec64d2069f52aa11e6d58abf37d7693514e80174407f->enter($__internal_b62da6708ac9a11af032ec64d2069f52aa11e6d58abf37d7693514e80174407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>These edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("these_index");
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
        
        $__internal_b62da6708ac9a11af032ec64d2069f52aa11e6d58abf37d7693514e80174407f->leave($__internal_b62da6708ac9a11af032ec64d2069f52aa11e6d58abf37d7693514e80174407f_prof);

    }

    public function getTemplateName()
    {
        return "these/edit.html.twig";
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
/*     <h1>These edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('these_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
