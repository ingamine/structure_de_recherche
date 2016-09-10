<?php

/* mastere/new.html.twig */
class __TwigTemplate_6ec580c29dfab2422b0deca311e8af400b23de4f21b9a5f7736ca59e178a79fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "mastere/new.html.twig", 1);
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
        $__internal_66573ce540789a33c113746d2a99f0dfffbccbb07ed0318a864f71cc97e753fa = $this->env->getExtension("native_profiler");
        $__internal_66573ce540789a33c113746d2a99f0dfffbccbb07ed0318a864f71cc97e753fa->enter($__internal_66573ce540789a33c113746d2a99f0dfffbccbb07ed0318a864f71cc97e753fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mastere/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66573ce540789a33c113746d2a99f0dfffbccbb07ed0318a864f71cc97e753fa->leave($__internal_66573ce540789a33c113746d2a99f0dfffbccbb07ed0318a864f71cc97e753fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd3f5d0ec7ca508f2665256a6a8825c2ad83c42bbccae2bc716d5fbe3f58e87b = $this->env->getExtension("native_profiler");
        $__internal_bd3f5d0ec7ca508f2665256a6a8825c2ad83c42bbccae2bc716d5fbe3f58e87b->enter($__internal_bd3f5d0ec7ca508f2665256a6a8825c2ad83c42bbccae2bc716d5fbe3f58e87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd3f5d0ec7ca508f2665256a6a8825c2ad83c42bbccae2bc716d5fbe3f58e87b->leave($__internal_bd3f5d0ec7ca508f2665256a6a8825c2ad83c42bbccae2bc716d5fbe3f58e87b_prof);

    }

    public function getTemplateName()
    {
        return "mastere/new.html.twig";
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
