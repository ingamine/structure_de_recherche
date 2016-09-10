<?php

/* productionscientifique/new.html.twig */
class __TwigTemplate_320d920c93fc0eac81912cf8ecada5863c9964c036bf276b644d2f950402866c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "productionscientifique/new.html.twig", 1);
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
        $__internal_710741e5583933fb1e5069e7870f16d348674441abbe2327d9daf2dabc3cfaf4 = $this->env->getExtension("native_profiler");
        $__internal_710741e5583933fb1e5069e7870f16d348674441abbe2327d9daf2dabc3cfaf4->enter($__internal_710741e5583933fb1e5069e7870f16d348674441abbe2327d9daf2dabc3cfaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productionscientifique/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_710741e5583933fb1e5069e7870f16d348674441abbe2327d9daf2dabc3cfaf4->leave($__internal_710741e5583933fb1e5069e7870f16d348674441abbe2327d9daf2dabc3cfaf4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d743e2edb0276128063d3360f193dc77b705c1fa5c0e1f3c430e1db14c16c9c = $this->env->getExtension("native_profiler");
        $__internal_0d743e2edb0276128063d3360f193dc77b705c1fa5c0e1f3c430e1db14c16c9c->enter($__internal_0d743e2edb0276128063d3360f193dc77b705c1fa5c0e1f3c430e1db14c16c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d743e2edb0276128063d3360f193dc77b705c1fa5c0e1f3c430e1db14c16c9c->leave($__internal_0d743e2edb0276128063d3360f193dc77b705c1fa5c0e1f3c430e1db14c16c9c_prof);

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
/* {% extends 'base.html.twig' %}*/
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
