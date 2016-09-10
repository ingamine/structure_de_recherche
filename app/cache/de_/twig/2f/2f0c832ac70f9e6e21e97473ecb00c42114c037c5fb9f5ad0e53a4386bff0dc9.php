<?php

/* structure/new.html.twig */
class __TwigTemplate_454dede6f72ea41bd223d4545ba5a9eca42b3ec5d4d9c89caa5f023198f97bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "structure/new.html.twig", 1);
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
        $__internal_396803eebf2d29c6369d857cc36ce1b80eccdbc2ffb9432b0773e5305657d5e1 = $this->env->getExtension("native_profiler");
        $__internal_396803eebf2d29c6369d857cc36ce1b80eccdbc2ffb9432b0773e5305657d5e1->enter($__internal_396803eebf2d29c6369d857cc36ce1b80eccdbc2ffb9432b0773e5305657d5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "structure/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_396803eebf2d29c6369d857cc36ce1b80eccdbc2ffb9432b0773e5305657d5e1->leave($__internal_396803eebf2d29c6369d857cc36ce1b80eccdbc2ffb9432b0773e5305657d5e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a17f5bf6691157b6e4bdd137229a21d8057c5c3970af2de18ecc4080d3c506e = $this->env->getExtension("native_profiler");
        $__internal_7a17f5bf6691157b6e4bdd137229a21d8057c5c3970af2de18ecc4080d3c506e->enter($__internal_7a17f5bf6691157b6e4bdd137229a21d8057c5c3970af2de18ecc4080d3c506e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a17f5bf6691157b6e4bdd137229a21d8057c5c3970af2de18ecc4080d3c506e->leave($__internal_7a17f5bf6691157b6e4bdd137229a21d8057c5c3970af2de18ecc4080d3c506e_prof);

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
/* {% extends 'base.html.twig' %}*/
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
