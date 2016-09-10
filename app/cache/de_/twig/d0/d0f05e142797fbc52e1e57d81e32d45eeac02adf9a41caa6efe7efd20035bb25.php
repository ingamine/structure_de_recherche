<?php

/* :soutenance:edit.html.twig */
class __TwigTemplate_caadaf6da8189b2b7710d081486380155bd5abbaa560b7047ba1de940e5e3cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":soutenance:edit.html.twig", 1);
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
        $__internal_b810737becf109a7edcde21a735cb91b4c5bea1f007e947b9fad328e1467ec35 = $this->env->getExtension("native_profiler");
        $__internal_b810737becf109a7edcde21a735cb91b4c5bea1f007e947b9fad328e1467ec35->enter($__internal_b810737becf109a7edcde21a735cb91b4c5bea1f007e947b9fad328e1467ec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":soutenance:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b810737becf109a7edcde21a735cb91b4c5bea1f007e947b9fad328e1467ec35->leave($__internal_b810737becf109a7edcde21a735cb91b4c5bea1f007e947b9fad328e1467ec35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2957026316ba162881352d42aafe75d954a188fc1b729ad85e296a3f217be67a = $this->env->getExtension("native_profiler");
        $__internal_2957026316ba162881352d42aafe75d954a188fc1b729ad85e296a3f217be67a->enter($__internal_2957026316ba162881352d42aafe75d954a188fc1b729ad85e296a3f217be67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Soutenance edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("soutenance_index");
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
        
        $__internal_2957026316ba162881352d42aafe75d954a188fc1b729ad85e296a3f217be67a->leave($__internal_2957026316ba162881352d42aafe75d954a188fc1b729ad85e296a3f217be67a_prof);

    }

    public function getTemplateName()
    {
        return ":soutenance:edit.html.twig";
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
/*     <h1>Soutenance edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('soutenance_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
