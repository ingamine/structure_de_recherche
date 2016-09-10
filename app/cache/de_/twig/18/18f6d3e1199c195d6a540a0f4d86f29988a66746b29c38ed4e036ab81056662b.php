<?php

/* :researchteam:new.html.twig */
class __TwigTemplate_93b01e01fadefca2e1665591786ac5a55e997e516aba488fce15ba61598434f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":researchteam:new.html.twig", 1);
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
        $__internal_b541c924cea9d1a0229a501ece50d477f7bd450b379b55faba1e0287d0063f52 = $this->env->getExtension("native_profiler");
        $__internal_b541c924cea9d1a0229a501ece50d477f7bd450b379b55faba1e0287d0063f52->enter($__internal_b541c924cea9d1a0229a501ece50d477f7bd450b379b55faba1e0287d0063f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":researchteam:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b541c924cea9d1a0229a501ece50d477f7bd450b379b55faba1e0287d0063f52->leave($__internal_b541c924cea9d1a0229a501ece50d477f7bd450b379b55faba1e0287d0063f52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12103a3035db1d1da80205cac38667b2451091e4673d9db84e547be856bc6a5c = $this->env->getExtension("native_profiler");
        $__internal_12103a3035db1d1da80205cac38667b2451091e4673d9db84e547be856bc6a5c->enter($__internal_12103a3035db1d1da80205cac38667b2451091e4673d9db84e547be856bc6a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_12103a3035db1d1da80205cac38667b2451091e4673d9db84e547be856bc6a5c->leave($__internal_12103a3035db1d1da80205cac38667b2451091e4673d9db84e547be856bc6a5c_prof);

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
/* {% extends 'base.html.twig' %}*/
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
