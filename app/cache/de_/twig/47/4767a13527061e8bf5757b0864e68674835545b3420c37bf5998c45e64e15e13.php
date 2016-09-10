<?php

/* :media:new.html.twig */
class __TwigTemplate_f69321773e42fa40b649ac65da7a09603073395951f4a975313a43f67a151c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":media:new.html.twig", 1);
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
        $__internal_a30655b6495f385bcbd88d334620ca6eb6ba60e21ddaadbc25c2a7e49ddc84b9 = $this->env->getExtension("native_profiler");
        $__internal_a30655b6495f385bcbd88d334620ca6eb6ba60e21ddaadbc25c2a7e49ddc84b9->enter($__internal_a30655b6495f385bcbd88d334620ca6eb6ba60e21ddaadbc25c2a7e49ddc84b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":media:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30655b6495f385bcbd88d334620ca6eb6ba60e21ddaadbc25c2a7e49ddc84b9->leave($__internal_a30655b6495f385bcbd88d334620ca6eb6ba60e21ddaadbc25c2a7e49ddc84b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a080f97cd3ea8ea17a98f7f0db50803eaf03275f38a117c13f0ea9df620e1b51 = $this->env->getExtension("native_profiler");
        $__internal_a080f97cd3ea8ea17a98f7f0db50803eaf03275f38a117c13f0ea9df620e1b51->enter($__internal_a080f97cd3ea8ea17a98f7f0db50803eaf03275f38a117c13f0ea9df620e1b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Media creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("media_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a080f97cd3ea8ea17a98f7f0db50803eaf03275f38a117c13f0ea9df620e1b51->leave($__internal_a080f97cd3ea8ea17a98f7f0db50803eaf03275f38a117c13f0ea9df620e1b51_prof);

    }

    public function getTemplateName()
    {
        return ":media:new.html.twig";
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
/*     <h1>Media creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('media_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
