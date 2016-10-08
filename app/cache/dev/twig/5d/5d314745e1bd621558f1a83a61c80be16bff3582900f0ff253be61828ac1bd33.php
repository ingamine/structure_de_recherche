<?php

/* structure/edit.html.twig */
class __TwigTemplate_be35a6c1efbbf4019bb870da9c3065dab32186be24b0353bdfb2173f102ebdae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "structure/edit.html.twig", 1);
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
        $__internal_00ee46edcc714ae4c7c4d03eee2c74c7b9d7ef9453a19d623646ad6c1d827fa7 = $this->env->getExtension("native_profiler");
        $__internal_00ee46edcc714ae4c7c4d03eee2c74c7b9d7ef9453a19d623646ad6c1d827fa7->enter($__internal_00ee46edcc714ae4c7c4d03eee2c74c7b9d7ef9453a19d623646ad6c1d827fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "structure/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ee46edcc714ae4c7c4d03eee2c74c7b9d7ef9453a19d623646ad6c1d827fa7->leave($__internal_00ee46edcc714ae4c7c4d03eee2c74c7b9d7ef9453a19d623646ad6c1d827fa7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a36ff2e40cc1baa693f8c4992405d991cc5c02089b21a040c49ce3d187fd9bf = $this->env->getExtension("native_profiler");
        $__internal_4a36ff2e40cc1baa693f8c4992405d991cc5c02089b21a040c49ce3d187fd9bf->enter($__internal_4a36ff2e40cc1baa693f8c4992405d991cc5c02089b21a040c49ce3d187fd9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Structure edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("structure_index");
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
        
        $__internal_4a36ff2e40cc1baa693f8c4992405d991cc5c02089b21a040c49ce3d187fd9bf->leave($__internal_4a36ff2e40cc1baa693f8c4992405d991cc5c02089b21a040c49ce3d187fd9bf_prof);

    }

    public function getTemplateName()
    {
        return "structure/edit.html.twig";
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
/*     <h1>Structure edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('structure_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
