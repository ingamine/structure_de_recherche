<?php

/* :these:edit.html.twig */
class __TwigTemplate_4204e88a15f1facdb6361ba8fe3d136afd51d57bc624fda4a7d4936e8f7469c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":these:edit.html.twig", 1);
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
        $__internal_12d34d8b8d87f588b33dd706200c3f84bcbe00df62791084a9442135824cc902 = $this->env->getExtension("native_profiler");
        $__internal_12d34d8b8d87f588b33dd706200c3f84bcbe00df62791084a9442135824cc902->enter($__internal_12d34d8b8d87f588b33dd706200c3f84bcbe00df62791084a9442135824cc902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":these:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12d34d8b8d87f588b33dd706200c3f84bcbe00df62791084a9442135824cc902->leave($__internal_12d34d8b8d87f588b33dd706200c3f84bcbe00df62791084a9442135824cc902_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ead0c09272975c04904924d18d242411f94db30ed156efa1184d9ea63a80432 = $this->env->getExtension("native_profiler");
        $__internal_3ead0c09272975c04904924d18d242411f94db30ed156efa1184d9ea63a80432->enter($__internal_3ead0c09272975c04904924d18d242411f94db30ed156efa1184d9ea63a80432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>These edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("these_index");
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
        
        $__internal_3ead0c09272975c04904924d18d242411f94db30ed156efa1184d9ea63a80432->leave($__internal_3ead0c09272975c04904924d18d242411f94db30ed156efa1184d9ea63a80432_prof);

    }

    public function getTemplateName()
    {
        return ":these:edit.html.twig";
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
/*     <h1>These edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('these_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
