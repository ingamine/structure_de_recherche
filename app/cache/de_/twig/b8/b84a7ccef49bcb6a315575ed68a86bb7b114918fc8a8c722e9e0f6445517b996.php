<?php

/* etablissement/edit.html.twig */
class __TwigTemplate_a6e50d291ef32802f802e3d50d15da6a9b1481fe4f55785fc7fad3ab164baf9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etablissement/edit.html.twig", 1);
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
        $__internal_ab2f8bab7fe12ec43a6536f6c286e2069fee679c123e1beb1313111365e81c1e = $this->env->getExtension("native_profiler");
        $__internal_ab2f8bab7fe12ec43a6536f6c286e2069fee679c123e1beb1313111365e81c1e->enter($__internal_ab2f8bab7fe12ec43a6536f6c286e2069fee679c123e1beb1313111365e81c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etablissement/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab2f8bab7fe12ec43a6536f6c286e2069fee679c123e1beb1313111365e81c1e->leave($__internal_ab2f8bab7fe12ec43a6536f6c286e2069fee679c123e1beb1313111365e81c1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf445c6b704e8c248f296231cdbbd72ccb45c39b2989a7f92c728af86519d6e9 = $this->env->getExtension("native_profiler");
        $__internal_cf445c6b704e8c248f296231cdbbd72ccb45c39b2989a7f92c728af86519d6e9->enter($__internal_cf445c6b704e8c248f296231cdbbd72ccb45c39b2989a7f92c728af86519d6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etablissement edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("etablissement_index");
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
        
        $__internal_cf445c6b704e8c248f296231cdbbd72ccb45c39b2989a7f92c728af86519d6e9->leave($__internal_cf445c6b704e8c248f296231cdbbd72ccb45c39b2989a7f92c728af86519d6e9_prof);

    }

    public function getTemplateName()
    {
        return "etablissement/edit.html.twig";
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
/*     <h1>Etablissement edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('etablissement_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
