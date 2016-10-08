<?php

/* productionscientifique/edit.html.twig */
class __TwigTemplate_1bae05fae91d4d6a5a90a2594513776b2e284bde3f61db700b27bd2af4888d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "productionscientifique/edit.html.twig", 1);
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
        $__internal_fe806ab25be39b2adbf7382b6810ec6d03dada5ed6fe087d187a9131e42957b8 = $this->env->getExtension("native_profiler");
        $__internal_fe806ab25be39b2adbf7382b6810ec6d03dada5ed6fe087d187a9131e42957b8->enter($__internal_fe806ab25be39b2adbf7382b6810ec6d03dada5ed6fe087d187a9131e42957b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productionscientifique/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe806ab25be39b2adbf7382b6810ec6d03dada5ed6fe087d187a9131e42957b8->leave($__internal_fe806ab25be39b2adbf7382b6810ec6d03dada5ed6fe087d187a9131e42957b8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8beedd6795dd5a74c6e2fb621847123741c02f9259f86b0579b53289790dc1fc = $this->env->getExtension("native_profiler");
        $__internal_8beedd6795dd5a74c6e2fb621847123741c02f9259f86b0579b53289790dc1fc->enter($__internal_8beedd6795dd5a74c6e2fb621847123741c02f9259f86b0579b53289790dc1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8beedd6795dd5a74c6e2fb621847123741c02f9259f86b0579b53289790dc1fc->leave($__internal_8beedd6795dd5a74c6e2fb621847123741c02f9259f86b0579b53289790dc1fc_prof);

    }

    public function getTemplateName()
    {
        return "productionscientifique/edit.html.twig";
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
