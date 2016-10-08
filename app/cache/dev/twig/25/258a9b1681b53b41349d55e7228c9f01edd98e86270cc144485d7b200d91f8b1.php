<?php

/* :mastere:edit.html.twig */
class __TwigTemplate_082c44d12aa946577b04d17cb0b545c8934feca8f30ff08272cd2ee2660e2e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":mastere:edit.html.twig", 1);
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
        $__internal_08a9a6f74a8151ed566234770127934157886a6cc733b76743feae6ea9e90456 = $this->env->getExtension("native_profiler");
        $__internal_08a9a6f74a8151ed566234770127934157886a6cc733b76743feae6ea9e90456->enter($__internal_08a9a6f74a8151ed566234770127934157886a6cc733b76743feae6ea9e90456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mastere:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a9a6f74a8151ed566234770127934157886a6cc733b76743feae6ea9e90456->leave($__internal_08a9a6f74a8151ed566234770127934157886a6cc733b76743feae6ea9e90456_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1dc7136cef6f0e2df2c7556f8d4fce9589384d7abd63b970775cf146f6a51acb = $this->env->getExtension("native_profiler");
        $__internal_1dc7136cef6f0e2df2c7556f8d4fce9589384d7abd63b970775cf146f6a51acb->enter($__internal_1dc7136cef6f0e2df2c7556f8d4fce9589384d7abd63b970775cf146f6a51acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1dc7136cef6f0e2df2c7556f8d4fce9589384d7abd63b970775cf146f6a51acb->leave($__internal_1dc7136cef6f0e2df2c7556f8d4fce9589384d7abd63b970775cf146f6a51acb_prof);

    }

    public function getTemplateName()
    {
        return ":mastere:edit.html.twig";
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
