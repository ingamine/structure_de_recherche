<?php

/* :etablissement:edit.html.twig */
class __TwigTemplate_bdc3740fcd8166c4d39e3b2295846b0185de01e47015d486facaf45d77b62fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":etablissement:edit.html.twig", 1);
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
        $__internal_ce9149edaa0d2a948f2261b3f907f954b894c812b84352f4acb409179601744f = $this->env->getExtension("native_profiler");
        $__internal_ce9149edaa0d2a948f2261b3f907f954b894c812b84352f4acb409179601744f->enter($__internal_ce9149edaa0d2a948f2261b3f907f954b894c812b84352f4acb409179601744f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":etablissement:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce9149edaa0d2a948f2261b3f907f954b894c812b84352f4acb409179601744f->leave($__internal_ce9149edaa0d2a948f2261b3f907f954b894c812b84352f4acb409179601744f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_164c616831529c194d66ecab3918d1ca0ad02e2ab98631c811c0394aa6a819c0 = $this->env->getExtension("native_profiler");
        $__internal_164c616831529c194d66ecab3918d1ca0ad02e2ab98631c811c0394aa6a819c0->enter($__internal_164c616831529c194d66ecab3918d1ca0ad02e2ab98631c811c0394aa6a819c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_164c616831529c194d66ecab3918d1ca0ad02e2ab98631c811c0394aa6a819c0->leave($__internal_164c616831529c194d66ecab3918d1ca0ad02e2ab98631c811c0394aa6a819c0_prof);

    }

    public function getTemplateName()
    {
        return ":etablissement:edit.html.twig";
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
