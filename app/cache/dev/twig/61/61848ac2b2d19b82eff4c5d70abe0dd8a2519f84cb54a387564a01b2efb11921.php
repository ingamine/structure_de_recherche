<?php

/* researchteam/new.html.twig */
class __TwigTemplate_cdc0383db5cc3e965e99bc11a1e213b1fdcd1f60d0a8b8d3bea4bfe24fbbfb31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "researchteam/new.html.twig", 1);
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
        $__internal_dde26c8483d2a95a2e9d0ab7c72bdfbd50d761660e4c14feab1f6bbde856befe = $this->env->getExtension("native_profiler");
        $__internal_dde26c8483d2a95a2e9d0ab7c72bdfbd50d761660e4c14feab1f6bbde856befe->enter($__internal_dde26c8483d2a95a2e9d0ab7c72bdfbd50d761660e4c14feab1f6bbde856befe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "researchteam/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde26c8483d2a95a2e9d0ab7c72bdfbd50d761660e4c14feab1f6bbde856befe->leave($__internal_dde26c8483d2a95a2e9d0ab7c72bdfbd50d761660e4c14feab1f6bbde856befe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c497f236fd2021ef5d73898350fe9a7024430a43379f892ad086cb1c1661c854 = $this->env->getExtension("native_profiler");
        $__internal_c497f236fd2021ef5d73898350fe9a7024430a43379f892ad086cb1c1661c854->enter($__internal_c497f236fd2021ef5d73898350fe9a7024430a43379f892ad086cb1c1661c854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ResearchTeam creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("researchteam_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c497f236fd2021ef5d73898350fe9a7024430a43379f892ad086cb1c1661c854->leave($__internal_c497f236fd2021ef5d73898350fe9a7024430a43379f892ad086cb1c1661c854_prof);

    }

    public function getTemplateName()
    {
        return "researchteam/new.html.twig";
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
/*     <h1>ResearchTeam creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('researchteam_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
