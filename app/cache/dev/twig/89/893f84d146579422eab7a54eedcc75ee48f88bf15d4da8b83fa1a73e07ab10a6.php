<?php

/* habilitation/edit.html.twig */
class __TwigTemplate_07f6ed5a92519e0739f1a4ea8ddc92fb51f2088834c582b0b06abfa81048dd27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "habilitation/edit.html.twig", 1);
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
        $__internal_2fc94b0ca631c72bcd71a0518a1c34c26e692e5db3aadea02407a46d5fd68d2a = $this->env->getExtension("native_profiler");
        $__internal_2fc94b0ca631c72bcd71a0518a1c34c26e692e5db3aadea02407a46d5fd68d2a->enter($__internal_2fc94b0ca631c72bcd71a0518a1c34c26e692e5db3aadea02407a46d5fd68d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "habilitation/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fc94b0ca631c72bcd71a0518a1c34c26e692e5db3aadea02407a46d5fd68d2a->leave($__internal_2fc94b0ca631c72bcd71a0518a1c34c26e692e5db3aadea02407a46d5fd68d2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4fa8549fd88d012aa12e974960ddc4e9402a131a435faf33a7b342a31164fa1 = $this->env->getExtension("native_profiler");
        $__internal_d4fa8549fd88d012aa12e974960ddc4e9402a131a435faf33a7b342a31164fa1->enter($__internal_d4fa8549fd88d012aa12e974960ddc4e9402a131a435faf33a7b342a31164fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Habilitation edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("habilitation_index");
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
        
        $__internal_d4fa8549fd88d012aa12e974960ddc4e9402a131a435faf33a7b342a31164fa1->leave($__internal_d4fa8549fd88d012aa12e974960ddc4e9402a131a435faf33a7b342a31164fa1_prof);

    }

    public function getTemplateName()
    {
        return "habilitation/edit.html.twig";
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
/*     <h1>Habilitation edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('habilitation_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
