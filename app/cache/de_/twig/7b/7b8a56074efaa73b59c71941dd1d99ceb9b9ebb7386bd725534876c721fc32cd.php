<?php

/* :productionscientifique:edit.html.twig */
class __TwigTemplate_5960ce892c19985d5b5b8a231622cc05c0f6fb00fc440de70adcb6adcad75801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":productionscientifique:edit.html.twig", 1);
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
        $__internal_8bdeb38b2b5cf59b1bc0b22714b8c8d326fd3d531af88e792735c7dd6a02f388 = $this->env->getExtension("native_profiler");
        $__internal_8bdeb38b2b5cf59b1bc0b22714b8c8d326fd3d531af88e792735c7dd6a02f388->enter($__internal_8bdeb38b2b5cf59b1bc0b22714b8c8d326fd3d531af88e792735c7dd6a02f388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":productionscientifique:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bdeb38b2b5cf59b1bc0b22714b8c8d326fd3d531af88e792735c7dd6a02f388->leave($__internal_8bdeb38b2b5cf59b1bc0b22714b8c8d326fd3d531af88e792735c7dd6a02f388_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97986b295b5c3c23e3f2f3277851aaaa3116b0f617a180b3afaf3d35755c6a29 = $this->env->getExtension("native_profiler");
        $__internal_97986b295b5c3c23e3f2f3277851aaaa3116b0f617a180b3afaf3d35755c6a29->enter($__internal_97986b295b5c3c23e3f2f3277851aaaa3116b0f617a180b3afaf3d35755c6a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ProductionScientifique edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("productionscientifique_index");
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
        
        $__internal_97986b295b5c3c23e3f2f3277851aaaa3116b0f617a180b3afaf3d35755c6a29->leave($__internal_97986b295b5c3c23e3f2f3277851aaaa3116b0f617a180b3afaf3d35755c6a29_prof);

    }

    public function getTemplateName()
    {
        return ":productionscientifique:edit.html.twig";
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
/*     <h1>ProductionScientifique edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('productionscientifique_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
