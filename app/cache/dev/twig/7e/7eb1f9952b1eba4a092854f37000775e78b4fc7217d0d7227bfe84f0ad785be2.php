<?php

/* habilitation/new.html.twig */
class __TwigTemplate_ea9b98a54586d7f574a39236a85e7d88de599a2fe4ef7092d504bd344c970a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "habilitation/new.html.twig", 1);
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
        $__internal_4f905130d589c32cf4bd618cce144654dd59fc0f6e8836b850f731b9fb1c754e = $this->env->getExtension("native_profiler");
        $__internal_4f905130d589c32cf4bd618cce144654dd59fc0f6e8836b850f731b9fb1c754e->enter($__internal_4f905130d589c32cf4bd618cce144654dd59fc0f6e8836b850f731b9fb1c754e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "habilitation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f905130d589c32cf4bd618cce144654dd59fc0f6e8836b850f731b9fb1c754e->leave($__internal_4f905130d589c32cf4bd618cce144654dd59fc0f6e8836b850f731b9fb1c754e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57f22cd4888c490b82296b14d4f4ae2ec36023fd2bb8a215f1c05ec4b0e7e862 = $this->env->getExtension("native_profiler");
        $__internal_57f22cd4888c490b82296b14d4f4ae2ec36023fd2bb8a215f1c05ec4b0e7e862->enter($__internal_57f22cd4888c490b82296b14d4f4ae2ec36023fd2bb8a215f1c05ec4b0e7e862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_57f22cd4888c490b82296b14d4f4ae2ec36023fd2bb8a215f1c05ec4b0e7e862->leave($__internal_57f22cd4888c490b82296b14d4f4ae2ec36023fd2bb8a215f1c05ec4b0e7e862_prof);

    }

    public function getTemplateName()
    {
        return "habilitation/new.html.twig";
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
