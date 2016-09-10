<?php

/* structure/new.html.twig */
class __TwigTemplate_454dede6f72ea41bd223d4545ba5a9eca42b3ec5d4d9c89caa5f023198f97bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "structure/new.html.twig", 1);
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
        $__internal_2f889efddc23dd60e5d6b5863dae9d0a45889aba349c9e06b29d346c2b04d2bd = $this->env->getExtension("native_profiler");
        $__internal_2f889efddc23dd60e5d6b5863dae9d0a45889aba349c9e06b29d346c2b04d2bd->enter($__internal_2f889efddc23dd60e5d6b5863dae9d0a45889aba349c9e06b29d346c2b04d2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "structure/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f889efddc23dd60e5d6b5863dae9d0a45889aba349c9e06b29d346c2b04d2bd->leave($__internal_2f889efddc23dd60e5d6b5863dae9d0a45889aba349c9e06b29d346c2b04d2bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f719952f65000ff9f76bb6defce7939d96a368049127a9df10813f9b8012243 = $this->env->getExtension("native_profiler");
        $__internal_0f719952f65000ff9f76bb6defce7939d96a368049127a9df10813f9b8012243->enter($__internal_0f719952f65000ff9f76bb6defce7939d96a368049127a9df10813f9b8012243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Structure creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("structure_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0f719952f65000ff9f76bb6defce7939d96a368049127a9df10813f9b8012243->leave($__internal_0f719952f65000ff9f76bb6defce7939d96a368049127a9df10813f9b8012243_prof);

    }

    public function getTemplateName()
    {
        return "structure/new.html.twig";
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
/*     <h1>Structure creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('structure_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
