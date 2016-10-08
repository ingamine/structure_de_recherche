<?php

/* groupes/edit.html.twig */
class __TwigTemplate_7adf21c8569ba881a9f5f41c77f7cbd305c7367f1d7f7fa025b5889b416d3fac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "groupes/edit.html.twig", 1);
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
        $__internal_95f2c78b98fe7e92afedbdfb154e3738e14ba95cbe5e04c10e01b114fca169df = $this->env->getExtension("native_profiler");
        $__internal_95f2c78b98fe7e92afedbdfb154e3738e14ba95cbe5e04c10e01b114fca169df->enter($__internal_95f2c78b98fe7e92afedbdfb154e3738e14ba95cbe5e04c10e01b114fca169df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "groupes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95f2c78b98fe7e92afedbdfb154e3738e14ba95cbe5e04c10e01b114fca169df->leave($__internal_95f2c78b98fe7e92afedbdfb154e3738e14ba95cbe5e04c10e01b114fca169df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06edeafcdd4b31f958757fc07ba47e8a630d419c90612c7c2b455396e669013e = $this->env->getExtension("native_profiler");
        $__internal_06edeafcdd4b31f958757fc07ba47e8a630d419c90612c7c2b455396e669013e->enter($__internal_06edeafcdd4b31f958757fc07ba47e8a630d419c90612c7c2b455396e669013e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Groupes edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("groupes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_06edeafcdd4b31f958757fc07ba47e8a630d419c90612c7c2b455396e669013e->leave($__internal_06edeafcdd4b31f958757fc07ba47e8a630d419c90612c7c2b455396e669013e_prof);

    }

    public function getTemplateName()
    {
        return "groupes/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Groupes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('groupes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
