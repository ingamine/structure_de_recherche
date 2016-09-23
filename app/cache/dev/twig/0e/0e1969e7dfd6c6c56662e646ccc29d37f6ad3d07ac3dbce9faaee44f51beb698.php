<?php

/* productionscientifique/new.html.twig */
class __TwigTemplate_320d920c93fc0eac81912cf8ecada5863c9964c036bf276b644d2f950402866c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "productionscientifique/new.html.twig", 1);
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
        $__internal_05a55fe4f1ac5053e671a5f99008ea5879d89bfdc1538af5c04fb851bfe2afd8 = $this->env->getExtension("native_profiler");
        $__internal_05a55fe4f1ac5053e671a5f99008ea5879d89bfdc1538af5c04fb851bfe2afd8->enter($__internal_05a55fe4f1ac5053e671a5f99008ea5879d89bfdc1538af5c04fb851bfe2afd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productionscientifique/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05a55fe4f1ac5053e671a5f99008ea5879d89bfdc1538af5c04fb851bfe2afd8->leave($__internal_05a55fe4f1ac5053e671a5f99008ea5879d89bfdc1538af5c04fb851bfe2afd8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e5193bf7f36f389e13405576746d45d41e781a0ccb152e450b35154508c0b2 = $this->env->getExtension("native_profiler");
        $__internal_f3e5193bf7f36f389e13405576746d45d41e781a0ccb152e450b35154508c0b2->enter($__internal_f3e5193bf7f36f389e13405576746d45d41e781a0ccb152e450b35154508c0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ProductionScientifique creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("productionscientifique_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f3e5193bf7f36f389e13405576746d45d41e781a0ccb152e450b35154508c0b2->leave($__internal_f3e5193bf7f36f389e13405576746d45d41e781a0ccb152e450b35154508c0b2_prof);

    }

    public function getTemplateName()
    {
        return "productionscientifique/new.html.twig";
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
/*     <h1>ProductionScientifique creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('productionscientifique_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
