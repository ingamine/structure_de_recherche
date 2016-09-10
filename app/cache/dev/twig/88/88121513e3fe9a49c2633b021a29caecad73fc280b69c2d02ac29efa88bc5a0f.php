<?php

/* etablissement/new.html.twig */
class __TwigTemplate_c63c94c4207d3838a72715297f67fd337f39d86a6153c44094a65045f3b21da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "etablissement/new.html.twig", 1);
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
        $__internal_691836421794fbbd493a35e879294636b40cb985c9884d76921e17109fe1f80d = $this->env->getExtension("native_profiler");
        $__internal_691836421794fbbd493a35e879294636b40cb985c9884d76921e17109fe1f80d->enter($__internal_691836421794fbbd493a35e879294636b40cb985c9884d76921e17109fe1f80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etablissement/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_691836421794fbbd493a35e879294636b40cb985c9884d76921e17109fe1f80d->leave($__internal_691836421794fbbd493a35e879294636b40cb985c9884d76921e17109fe1f80d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1771224ab62697f771eb6ee7fee04316b099b54c06749052e08ffc696e9c534 = $this->env->getExtension("native_profiler");
        $__internal_a1771224ab62697f771eb6ee7fee04316b099b54c06749052e08ffc696e9c534->enter($__internal_a1771224ab62697f771eb6ee7fee04316b099b54c06749052e08ffc696e9c534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etablissement creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("etablissement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a1771224ab62697f771eb6ee7fee04316b099b54c06749052e08ffc696e9c534->leave($__internal_a1771224ab62697f771eb6ee7fee04316b099b54c06749052e08ffc696e9c534_prof);

    }

    public function getTemplateName()
    {
        return "etablissement/new.html.twig";
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
/*     <h1>Etablissement creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('etablissement_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
