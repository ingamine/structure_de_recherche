<?php

/* :structure:edit.html.twig */
class __TwigTemplate_57066028d587877e0c77710c4f05271fbc12866f77f2e4535c4f7b0e9b0c9c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":structure:edit.html.twig", 1);
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
        $__internal_464e41b39e022302a399a6797147dfa0f027c4ac6f82a2ef2eff35ec4dfcc429 = $this->env->getExtension("native_profiler");
        $__internal_464e41b39e022302a399a6797147dfa0f027c4ac6f82a2ef2eff35ec4dfcc429->enter($__internal_464e41b39e022302a399a6797147dfa0f027c4ac6f82a2ef2eff35ec4dfcc429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":structure:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_464e41b39e022302a399a6797147dfa0f027c4ac6f82a2ef2eff35ec4dfcc429->leave($__internal_464e41b39e022302a399a6797147dfa0f027c4ac6f82a2ef2eff35ec4dfcc429_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81c822634fdad0a908202bfbb70415e6f982f9dd1759f359279b21734eeb5055 = $this->env->getExtension("native_profiler");
        $__internal_81c822634fdad0a908202bfbb70415e6f982f9dd1759f359279b21734eeb5055->enter($__internal_81c822634fdad0a908202bfbb70415e6f982f9dd1759f359279b21734eeb5055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_81c822634fdad0a908202bfbb70415e6f982f9dd1759f359279b21734eeb5055->leave($__internal_81c822634fdad0a908202bfbb70415e6f982f9dd1759f359279b21734eeb5055_prof);

    }

    public function getTemplateName()
    {
        return ":structure:edit.html.twig";
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
