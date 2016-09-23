<?php

/* :mastere:new.html.twig */
class __TwigTemplate_807e9bc64f6a0ff766a2a1cfe08f59239ffbeaa22ed3ce9f465e9234e21f489e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":mastere:new.html.twig", 1);
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
        $__internal_233adfec91ac52a0ae9cf2cfc6000ad70d05628d90221a81cadafaa601c54965 = $this->env->getExtension("native_profiler");
        $__internal_233adfec91ac52a0ae9cf2cfc6000ad70d05628d90221a81cadafaa601c54965->enter($__internal_233adfec91ac52a0ae9cf2cfc6000ad70d05628d90221a81cadafaa601c54965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mastere:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_233adfec91ac52a0ae9cf2cfc6000ad70d05628d90221a81cadafaa601c54965->leave($__internal_233adfec91ac52a0ae9cf2cfc6000ad70d05628d90221a81cadafaa601c54965_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb4940753b031443c039cd29e7a19269f655adc0fed65eb583360325aaeab414 = $this->env->getExtension("native_profiler");
        $__internal_fb4940753b031443c039cd29e7a19269f655adc0fed65eb583360325aaeab414->enter($__internal_fb4940753b031443c039cd29e7a19269f655adc0fed65eb583360325aaeab414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fb4940753b031443c039cd29e7a19269f655adc0fed65eb583360325aaeab414->leave($__internal_fb4940753b031443c039cd29e7a19269f655adc0fed65eb583360325aaeab414_prof);

    }

    public function getTemplateName()
    {
        return ":mastere:new.html.twig";
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
