<?php

/* :habilitation:new.html.twig */
class __TwigTemplate_7e55fd069b77c03a8835553ca96ca9ee9c8d3e43b6120da488d9b3cd8c6a449e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":habilitation:new.html.twig", 1);
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
        $__internal_5bf144c19b0a47fde842612ab716a46b9299134de1cc30c7dda3f005c9d4ad65 = $this->env->getExtension("native_profiler");
        $__internal_5bf144c19b0a47fde842612ab716a46b9299134de1cc30c7dda3f005c9d4ad65->enter($__internal_5bf144c19b0a47fde842612ab716a46b9299134de1cc30c7dda3f005c9d4ad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":habilitation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bf144c19b0a47fde842612ab716a46b9299134de1cc30c7dda3f005c9d4ad65->leave($__internal_5bf144c19b0a47fde842612ab716a46b9299134de1cc30c7dda3f005c9d4ad65_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2c9431c04ee5f02a57410cceea190531e60e6631de3c9cc48511d329505032b = $this->env->getExtension("native_profiler");
        $__internal_a2c9431c04ee5f02a57410cceea190531e60e6631de3c9cc48511d329505032b->enter($__internal_a2c9431c04ee5f02a57410cceea190531e60e6631de3c9cc48511d329505032b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a2c9431c04ee5f02a57410cceea190531e60e6631de3c9cc48511d329505032b->leave($__internal_a2c9431c04ee5f02a57410cceea190531e60e6631de3c9cc48511d329505032b_prof);

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
/* {% extends('LgmBundle::layout.html.twig') %}*/
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
