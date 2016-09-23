<?php

/* :media:edit.html.twig */
class __TwigTemplate_4ca726fdb5c145f1ce2b4fb03981411cf9556a4611bdb5e0d6c31c827add8f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":media:edit.html.twig", 1);
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
        $__internal_e90c2c29a523d57b3b64c3819ca6f5490f4e430bda71e5ea663fe04a4efc9a48 = $this->env->getExtension("native_profiler");
        $__internal_e90c2c29a523d57b3b64c3819ca6f5490f4e430bda71e5ea663fe04a4efc9a48->enter($__internal_e90c2c29a523d57b3b64c3819ca6f5490f4e430bda71e5ea663fe04a4efc9a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":media:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e90c2c29a523d57b3b64c3819ca6f5490f4e430bda71e5ea663fe04a4efc9a48->leave($__internal_e90c2c29a523d57b3b64c3819ca6f5490f4e430bda71e5ea663fe04a4efc9a48_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_472bba51319b764b5275dcc3ebde26020d1c916d005483965a8cb5b14cb66ac2 = $this->env->getExtension("native_profiler");
        $__internal_472bba51319b764b5275dcc3ebde26020d1c916d005483965a8cb5b14cb66ac2->enter($__internal_472bba51319b764b5275dcc3ebde26020d1c916d005483965a8cb5b14cb66ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Media edit</h1>

    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("media_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_472bba51319b764b5275dcc3ebde26020d1c916d005483965a8cb5b14cb66ac2->leave($__internal_472bba51319b764b5275dcc3ebde26020d1c916d005483965a8cb5b14cb66ac2_prof);

    }

    public function getTemplateName()
    {
        return ":media:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  66 => 15,  60 => 12,  53 => 8,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* {% block body %}*/
/*     <h1>Media edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('media_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
