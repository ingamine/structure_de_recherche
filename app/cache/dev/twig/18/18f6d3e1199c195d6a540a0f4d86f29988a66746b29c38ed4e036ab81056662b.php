<?php

/* :researchteam:new.html.twig */
class __TwigTemplate_93b01e01fadefca2e1665591786ac5a55e997e516aba488fce15ba61598434f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":researchteam:new.html.twig", 1);
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
        $__internal_d313f248a1b6faffda15d5962bcb2c0a2c83569a90298c6c2164b10163762b42 = $this->env->getExtension("native_profiler");
        $__internal_d313f248a1b6faffda15d5962bcb2c0a2c83569a90298c6c2164b10163762b42->enter($__internal_d313f248a1b6faffda15d5962bcb2c0a2c83569a90298c6c2164b10163762b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":researchteam:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d313f248a1b6faffda15d5962bcb2c0a2c83569a90298c6c2164b10163762b42->leave($__internal_d313f248a1b6faffda15d5962bcb2c0a2c83569a90298c6c2164b10163762b42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a24b89e8c03ba8e04fa331e6e1e5bbe558d48cafa0003c8b484678f6cc5264f = $this->env->getExtension("native_profiler");
        $__internal_2a24b89e8c03ba8e04fa331e6e1e5bbe558d48cafa0003c8b484678f6cc5264f->enter($__internal_2a24b89e8c03ba8e04fa331e6e1e5bbe558d48cafa0003c8b484678f6cc5264f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2a24b89e8c03ba8e04fa331e6e1e5bbe558d48cafa0003c8b484678f6cc5264f->leave($__internal_2a24b89e8c03ba8e04fa331e6e1e5bbe558d48cafa0003c8b484678f6cc5264f_prof);

    }

    public function getTemplateName()
    {
        return ":researchteam:new.html.twig";
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
