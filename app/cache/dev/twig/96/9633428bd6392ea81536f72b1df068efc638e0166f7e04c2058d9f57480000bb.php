<?php

/* mastere/edit.html.twig */
class __TwigTemplate_f543a1cac6e6d2ad548a7ff604e5032620f44bb10ac07b160cc9109a50d229e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "mastere/edit.html.twig", 1);
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
        $__internal_b5d23556e26144f16885c2cc90809e670e14f60bf13ea0ef633816cd3cacb3ef = $this->env->getExtension("native_profiler");
        $__internal_b5d23556e26144f16885c2cc90809e670e14f60bf13ea0ef633816cd3cacb3ef->enter($__internal_b5d23556e26144f16885c2cc90809e670e14f60bf13ea0ef633816cd3cacb3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mastere/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5d23556e26144f16885c2cc90809e670e14f60bf13ea0ef633816cd3cacb3ef->leave($__internal_b5d23556e26144f16885c2cc90809e670e14f60bf13ea0ef633816cd3cacb3ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed8eb660d56482a8351feedebb39890f564bac3abb12357b70b415e01ffdc113 = $this->env->getExtension("native_profiler");
        $__internal_ed8eb660d56482a8351feedebb39890f564bac3abb12357b70b415e01ffdc113->enter($__internal_ed8eb660d56482a8351feedebb39890f564bac3abb12357b70b415e01ffdc113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Mastere edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("mastere_index");
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
        
        $__internal_ed8eb660d56482a8351feedebb39890f564bac3abb12357b70b415e01ffdc113->leave($__internal_ed8eb660d56482a8351feedebb39890f564bac3abb12357b70b415e01ffdc113_prof);

    }

    public function getTemplateName()
    {
        return "mastere/edit.html.twig";
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
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>Mastere edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('mastere_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
