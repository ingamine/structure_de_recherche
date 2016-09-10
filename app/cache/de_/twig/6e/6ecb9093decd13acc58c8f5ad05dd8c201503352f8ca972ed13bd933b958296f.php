<?php

/* :habilitation:new.html.twig */
class __TwigTemplate_7e55fd069b77c03a8835553ca96ca9ee9c8d3e43b6120da488d9b3cd8c6a449e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":habilitation:new.html.twig", 1);
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
        $__internal_0912b5c268b6797eadc51518a14d4dbd00b3b5f802f9003eb2c062e2337c764d = $this->env->getExtension("native_profiler");
        $__internal_0912b5c268b6797eadc51518a14d4dbd00b3b5f802f9003eb2c062e2337c764d->enter($__internal_0912b5c268b6797eadc51518a14d4dbd00b3b5f802f9003eb2c062e2337c764d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":habilitation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0912b5c268b6797eadc51518a14d4dbd00b3b5f802f9003eb2c062e2337c764d->leave($__internal_0912b5c268b6797eadc51518a14d4dbd00b3b5f802f9003eb2c062e2337c764d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_618708cc83c8333cf09d897f4d5ab62d45c50ec8d8c62356f67debd6b9e4f87e = $this->env->getExtension("native_profiler");
        $__internal_618708cc83c8333cf09d897f4d5ab62d45c50ec8d8c62356f67debd6b9e4f87e->enter($__internal_618708cc83c8333cf09d897f4d5ab62d45c50ec8d8c62356f67debd6b9e4f87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Habilitation creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("habilitation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_618708cc83c8333cf09d897f4d5ab62d45c50ec8d8c62356f67debd6b9e4f87e->leave($__internal_618708cc83c8333cf09d897f4d5ab62d45c50ec8d8c62356f67debd6b9e4f87e_prof);

    }

    public function getTemplateName()
    {
        return ":habilitation:new.html.twig";
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
/*     <h1>Habilitation creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('habilitation_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
