<?php

/* productionscientifique/edit.html.twig */
class __TwigTemplate_1bae05fae91d4d6a5a90a2594513776b2e284bde3f61db700b27bd2af4888d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "productionscientifique/edit.html.twig", 1);
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
        $__internal_9b839437c819c0b010f1edd19cf9d91f355f0e62baa2e0151478915fbc535b25 = $this->env->getExtension("native_profiler");
        $__internal_9b839437c819c0b010f1edd19cf9d91f355f0e62baa2e0151478915fbc535b25->enter($__internal_9b839437c819c0b010f1edd19cf9d91f355f0e62baa2e0151478915fbc535b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productionscientifique/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b839437c819c0b010f1edd19cf9d91f355f0e62baa2e0151478915fbc535b25->leave($__internal_9b839437c819c0b010f1edd19cf9d91f355f0e62baa2e0151478915fbc535b25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_246dbb62c61425d4cfe54ead32a843ddcbef11bb9e664ae36cb9f49c776636f4 = $this->env->getExtension("native_profiler");
        $__internal_246dbb62c61425d4cfe54ead32a843ddcbef11bb9e664ae36cb9f49c776636f4->enter($__internal_246dbb62c61425d4cfe54ead32a843ddcbef11bb9e664ae36cb9f49c776636f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ProductionScientifique edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("productionscientifique_index");
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
        
        $__internal_246dbb62c61425d4cfe54ead32a843ddcbef11bb9e664ae36cb9f49c776636f4->leave($__internal_246dbb62c61425d4cfe54ead32a843ddcbef11bb9e664ae36cb9f49c776636f4_prof);

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
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
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
