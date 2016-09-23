<?php

/* :structure:new.html.twig */
class __TwigTemplate_f6294165d749bc7dfcb0e2ed3175ff1faf55891adf148f8fc39c8551d1b4b647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":structure:new.html.twig", 1);
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
        $__internal_0461fd5339993ba5767988ea46d2fc735471e457bb59de623ea414b436274774 = $this->env->getExtension("native_profiler");
        $__internal_0461fd5339993ba5767988ea46d2fc735471e457bb59de623ea414b436274774->enter($__internal_0461fd5339993ba5767988ea46d2fc735471e457bb59de623ea414b436274774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":structure:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0461fd5339993ba5767988ea46d2fc735471e457bb59de623ea414b436274774->leave($__internal_0461fd5339993ba5767988ea46d2fc735471e457bb59de623ea414b436274774_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98e6a86ab1ef7d8475557a8fd40e2c509642189f2e7afd887d0c963e695152f5 = $this->env->getExtension("native_profiler");
        $__internal_98e6a86ab1ef7d8475557a8fd40e2c509642189f2e7afd887d0c963e695152f5->enter($__internal_98e6a86ab1ef7d8475557a8fd40e2c509642189f2e7afd887d0c963e695152f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Structure creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("structure_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_98e6a86ab1ef7d8475557a8fd40e2c509642189f2e7afd887d0c963e695152f5->leave($__internal_98e6a86ab1ef7d8475557a8fd40e2c509642189f2e7afd887d0c963e695152f5_prof);

    }

    public function getTemplateName()
    {
        return ":structure:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>Structure creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('structure_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
