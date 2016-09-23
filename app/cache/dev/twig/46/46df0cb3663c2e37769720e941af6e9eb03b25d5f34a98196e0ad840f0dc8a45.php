<?php

/* :etablissement:edit.html.twig */
class __TwigTemplate_bdc3740fcd8166c4d39e3b2295846b0185de01e47015d486facaf45d77b62fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":etablissement:edit.html.twig", 1);
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
        $__internal_f0b78296e7f7892e3339484d5a63ee436eae1cb87a9e18386123305617de6354 = $this->env->getExtension("native_profiler");
        $__internal_f0b78296e7f7892e3339484d5a63ee436eae1cb87a9e18386123305617de6354->enter($__internal_f0b78296e7f7892e3339484d5a63ee436eae1cb87a9e18386123305617de6354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":etablissement:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0b78296e7f7892e3339484d5a63ee436eae1cb87a9e18386123305617de6354->leave($__internal_f0b78296e7f7892e3339484d5a63ee436eae1cb87a9e18386123305617de6354_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fb980ebcbf7dd089e89f1b8dc527ae6f70b8b1182c018012d924ada1645f7b3 = $this->env->getExtension("native_profiler");
        $__internal_1fb980ebcbf7dd089e89f1b8dc527ae6f70b8b1182c018012d924ada1645f7b3->enter($__internal_1fb980ebcbf7dd089e89f1b8dc527ae6f70b8b1182c018012d924ada1645f7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1fb980ebcbf7dd089e89f1b8dc527ae6f70b8b1182c018012d924ada1645f7b3->leave($__internal_1fb980ebcbf7dd089e89f1b8dc527ae6f70b8b1182c018012d924ada1645f7b3_prof);

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
/* {% extends('LgmBundle::layout.html.twig') %}*/
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
