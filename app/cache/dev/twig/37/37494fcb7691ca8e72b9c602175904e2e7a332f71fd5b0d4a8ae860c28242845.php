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
        $__internal_e0526124ef9c1683a18f11422909023d699d1abdf85fc0a4d159cac7e666a3db = $this->env->getExtension("native_profiler");
        $__internal_e0526124ef9c1683a18f11422909023d699d1abdf85fc0a4d159cac7e666a3db->enter($__internal_e0526124ef9c1683a18f11422909023d699d1abdf85fc0a4d159cac7e666a3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mastere/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0526124ef9c1683a18f11422909023d699d1abdf85fc0a4d159cac7e666a3db->leave($__internal_e0526124ef9c1683a18f11422909023d699d1abdf85fc0a4d159cac7e666a3db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e9a13cc1e589f4ffff4edfa037b6778675d774263cdee816116b781b294c925 = $this->env->getExtension("native_profiler");
        $__internal_3e9a13cc1e589f4ffff4edfa037b6778675d774263cdee816116b781b294c925->enter($__internal_3e9a13cc1e589f4ffff4edfa037b6778675d774263cdee816116b781b294c925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3e9a13cc1e589f4ffff4edfa037b6778675d774263cdee816116b781b294c925->leave($__internal_3e9a13cc1e589f4ffff4edfa037b6778675d774263cdee816116b781b294c925_prof);

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
