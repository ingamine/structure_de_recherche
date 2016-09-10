<?php

/* mastere/edit.html.twig */
class __TwigTemplate_f543a1cac6e6d2ad548a7ff604e5032620f44bb10ac07b160cc9109a50d229e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mastere/edit.html.twig", 1);
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
        $__internal_bdf2ed2903a3de2f3cb5fe03bb937495ba36b3e2b5a9cc704aaf38496368301f = $this->env->getExtension("native_profiler");
        $__internal_bdf2ed2903a3de2f3cb5fe03bb937495ba36b3e2b5a9cc704aaf38496368301f->enter($__internal_bdf2ed2903a3de2f3cb5fe03bb937495ba36b3e2b5a9cc704aaf38496368301f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mastere/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf2ed2903a3de2f3cb5fe03bb937495ba36b3e2b5a9cc704aaf38496368301f->leave($__internal_bdf2ed2903a3de2f3cb5fe03bb937495ba36b3e2b5a9cc704aaf38496368301f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90c7d4736828e15ea9094a11a392319bd642b33b408bb067d3e8b83d2733421b = $this->env->getExtension("native_profiler");
        $__internal_90c7d4736828e15ea9094a11a392319bd642b33b408bb067d3e8b83d2733421b->enter($__internal_90c7d4736828e15ea9094a11a392319bd642b33b408bb067d3e8b83d2733421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90c7d4736828e15ea9094a11a392319bd642b33b408bb067d3e8b83d2733421b->leave($__internal_90c7d4736828e15ea9094a11a392319bd642b33b408bb067d3e8b83d2733421b_prof);

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
/* {% extends 'base.html.twig' %}*/
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
