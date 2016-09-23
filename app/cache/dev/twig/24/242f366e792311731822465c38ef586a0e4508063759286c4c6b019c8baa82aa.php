<?php

/* these/new.html.twig */
class __TwigTemplate_7be75d94e14cae91ffff62f993d9dd985725a7468cc7a7b2995b2aed9830aec4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "these/new.html.twig", 1);
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
        $__internal_8688cb76500ccd22ef7c93850fd8be025fd67576da2c2879fad5aa52595aae36 = $this->env->getExtension("native_profiler");
        $__internal_8688cb76500ccd22ef7c93850fd8be025fd67576da2c2879fad5aa52595aae36->enter($__internal_8688cb76500ccd22ef7c93850fd8be025fd67576da2c2879fad5aa52595aae36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "these/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8688cb76500ccd22ef7c93850fd8be025fd67576da2c2879fad5aa52595aae36->leave($__internal_8688cb76500ccd22ef7c93850fd8be025fd67576da2c2879fad5aa52595aae36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cc1f614d89f406fc418347bcbda49e09eaebf87a1f01f87e4ed5692e8e694f1 = $this->env->getExtension("native_profiler");
        $__internal_2cc1f614d89f406fc418347bcbda49e09eaebf87a1f01f87e4ed5692e8e694f1->enter($__internal_2cc1f614d89f406fc418347bcbda49e09eaebf87a1f01f87e4ed5692e8e694f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2cc1f614d89f406fc418347bcbda49e09eaebf87a1f01f87e4ed5692e8e694f1->leave($__internal_2cc1f614d89f406fc418347bcbda49e09eaebf87a1f01f87e4ed5692e8e694f1_prof);

    }

    public function getTemplateName()
    {
        return "these/new.html.twig";
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
