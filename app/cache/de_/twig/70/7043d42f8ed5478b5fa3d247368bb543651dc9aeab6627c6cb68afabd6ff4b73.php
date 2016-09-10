<?php

/* :mastere:new.html.twig */
class __TwigTemplate_807e9bc64f6a0ff766a2a1cfe08f59239ffbeaa22ed3ce9f465e9234e21f489e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":mastere:new.html.twig", 1);
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
        $__internal_64a5f985f5c87c1c4992a8a791b80955028ed30452e0e8f2067d3d1c3069e6ad = $this->env->getExtension("native_profiler");
        $__internal_64a5f985f5c87c1c4992a8a791b80955028ed30452e0e8f2067d3d1c3069e6ad->enter($__internal_64a5f985f5c87c1c4992a8a791b80955028ed30452e0e8f2067d3d1c3069e6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mastere:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a5f985f5c87c1c4992a8a791b80955028ed30452e0e8f2067d3d1c3069e6ad->leave($__internal_64a5f985f5c87c1c4992a8a791b80955028ed30452e0e8f2067d3d1c3069e6ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3bb369b1865083b8cf01e6b50d5ed6a1b20dda415b1ef72ebe9af3e5ae62bbd = $this->env->getExtension("native_profiler");
        $__internal_e3bb369b1865083b8cf01e6b50d5ed6a1b20dda415b1ef72ebe9af3e5ae62bbd->enter($__internal_e3bb369b1865083b8cf01e6b50d5ed6a1b20dda415b1ef72ebe9af3e5ae62bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Mastere creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("mastere_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e3bb369b1865083b8cf01e6b50d5ed6a1b20dda415b1ef72ebe9af3e5ae62bbd->leave($__internal_e3bb369b1865083b8cf01e6b50d5ed6a1b20dda415b1ef72ebe9af3e5ae62bbd_prof);

    }

    public function getTemplateName()
    {
        return ":mastere:new.html.twig";
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
/*     <h1>Mastere creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('mastere_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
