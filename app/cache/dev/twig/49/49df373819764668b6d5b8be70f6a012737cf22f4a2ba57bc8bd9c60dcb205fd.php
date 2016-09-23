<?php

/* :habilitation:edit.html.twig */
class __TwigTemplate_e45ba73f85c2ce7e8e94bd58c8db30f03107b34cca015c1b09ae1fa8555dfe7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":habilitation:edit.html.twig", 1);
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
        $__internal_3e69e69b7cc9df03e47a7eb18007bd1eb41f6fd428dfd19e907a098b1ce73aaa = $this->env->getExtension("native_profiler");
        $__internal_3e69e69b7cc9df03e47a7eb18007bd1eb41f6fd428dfd19e907a098b1ce73aaa->enter($__internal_3e69e69b7cc9df03e47a7eb18007bd1eb41f6fd428dfd19e907a098b1ce73aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":habilitation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e69e69b7cc9df03e47a7eb18007bd1eb41f6fd428dfd19e907a098b1ce73aaa->leave($__internal_3e69e69b7cc9df03e47a7eb18007bd1eb41f6fd428dfd19e907a098b1ce73aaa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96dc9756dcd5ae9b7486522b955b730ca64978b2043a2e80fe95b130d5eb93b1 = $this->env->getExtension("native_profiler");
        $__internal_96dc9756dcd5ae9b7486522b955b730ca64978b2043a2e80fe95b130d5eb93b1->enter($__internal_96dc9756dcd5ae9b7486522b955b730ca64978b2043a2e80fe95b130d5eb93b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_96dc9756dcd5ae9b7486522b955b730ca64978b2043a2e80fe95b130d5eb93b1->leave($__internal_96dc9756dcd5ae9b7486522b955b730ca64978b2043a2e80fe95b130d5eb93b1_prof);

    }

    public function getTemplateName()
    {
        return ":habilitation:edit.html.twig";
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
