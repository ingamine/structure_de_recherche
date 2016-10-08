<?php

/* :soutenance:new.html.twig */
class __TwigTemplate_059585c78936a93fe32e79a76dda302d511415da884f928baf5932d3806cf2a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":soutenance:new.html.twig", 1);
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
        $__internal_71065f4065d4cd47ebb6b775031fd0640ed885a53982b3265986e7f94f604749 = $this->env->getExtension("native_profiler");
        $__internal_71065f4065d4cd47ebb6b775031fd0640ed885a53982b3265986e7f94f604749->enter($__internal_71065f4065d4cd47ebb6b775031fd0640ed885a53982b3265986e7f94f604749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":soutenance:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71065f4065d4cd47ebb6b775031fd0640ed885a53982b3265986e7f94f604749->leave($__internal_71065f4065d4cd47ebb6b775031fd0640ed885a53982b3265986e7f94f604749_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43da4708bd475b633174b04ec619a44f7568ef6a6a91cb31601b036e77abdd10 = $this->env->getExtension("native_profiler");
        $__internal_43da4708bd475b633174b04ec619a44f7568ef6a6a91cb31601b036e77abdd10->enter($__internal_43da4708bd475b633174b04ec619a44f7568ef6a6a91cb31601b036e77abdd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Soutenance creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("soutenance_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_43da4708bd475b633174b04ec619a44f7568ef6a6a91cb31601b036e77abdd10->leave($__internal_43da4708bd475b633174b04ec619a44f7568ef6a6a91cb31601b036e77abdd10_prof);

    }

    public function getTemplateName()
    {
        return ":soutenance:new.html.twig";
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
/*     <h1>Soutenance creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('soutenance_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
