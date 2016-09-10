<?php

/* :productionscientifique:new.html.twig */
class __TwigTemplate_bcc75ec8094ec9d71a678776216f76ae9b42d5c518dcc5d5fb144d98be7a234a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":productionscientifique:new.html.twig", 1);
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
        $__internal_c8a3698b6df57c09ee6f44852102e4ce238f968f8195e591b1a871a8b36f4aeb = $this->env->getExtension("native_profiler");
        $__internal_c8a3698b6df57c09ee6f44852102e4ce238f968f8195e591b1a871a8b36f4aeb->enter($__internal_c8a3698b6df57c09ee6f44852102e4ce238f968f8195e591b1a871a8b36f4aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":productionscientifique:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a3698b6df57c09ee6f44852102e4ce238f968f8195e591b1a871a8b36f4aeb->leave($__internal_c8a3698b6df57c09ee6f44852102e4ce238f968f8195e591b1a871a8b36f4aeb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff95fc5cf7a82668fc0bb971e04b4859b0753819b61ba6d63be24c6167529b88 = $this->env->getExtension("native_profiler");
        $__internal_ff95fc5cf7a82668fc0bb971e04b4859b0753819b61ba6d63be24c6167529b88->enter($__internal_ff95fc5cf7a82668fc0bb971e04b4859b0753819b61ba6d63be24c6167529b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff95fc5cf7a82668fc0bb971e04b4859b0753819b61ba6d63be24c6167529b88->leave($__internal_ff95fc5cf7a82668fc0bb971e04b4859b0753819b61ba6d63be24c6167529b88_prof);

    }

    public function getTemplateName()
    {
        return ":productionscientifique:new.html.twig";
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
