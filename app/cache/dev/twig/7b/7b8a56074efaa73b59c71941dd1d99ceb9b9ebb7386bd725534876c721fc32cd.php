<?php

/* :productionscientifique:edit.html.twig */
class __TwigTemplate_5960ce892c19985d5b5b8a231622cc05c0f6fb00fc440de70adcb6adcad75801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":productionscientifique:edit.html.twig", 1);
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
        $__internal_6d9f7fbb50ec1d7b0a153f0c60ce5786bcf8a32f9d5d80400ac17169723fd255 = $this->env->getExtension("native_profiler");
        $__internal_6d9f7fbb50ec1d7b0a153f0c60ce5786bcf8a32f9d5d80400ac17169723fd255->enter($__internal_6d9f7fbb50ec1d7b0a153f0c60ce5786bcf8a32f9d5d80400ac17169723fd255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":productionscientifique:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d9f7fbb50ec1d7b0a153f0c60ce5786bcf8a32f9d5d80400ac17169723fd255->leave($__internal_6d9f7fbb50ec1d7b0a153f0c60ce5786bcf8a32f9d5d80400ac17169723fd255_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_87abec5c87fc2d98f4dae3b59c5f5a5ae64ff02a07dd3d67388488eb41df3395 = $this->env->getExtension("native_profiler");
        $__internal_87abec5c87fc2d98f4dae3b59c5f5a5ae64ff02a07dd3d67388488eb41df3395->enter($__internal_87abec5c87fc2d98f4dae3b59c5f5a5ae64ff02a07dd3d67388488eb41df3395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>ProductionScientifique edit</h1>

    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("productionscientifique_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_87abec5c87fc2d98f4dae3b59c5f5a5ae64ff02a07dd3d67388488eb41df3395->leave($__internal_87abec5c87fc2d98f4dae3b59c5f5a5ae64ff02a07dd3d67388488eb41df3395_prof);

    }

    public function getTemplateName()
    {
        return ":productionscientifique:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  66 => 15,  60 => 12,  53 => 8,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* {% block body %}*/
/*     <h1>ProductionScientifique edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('productionscientifique_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
