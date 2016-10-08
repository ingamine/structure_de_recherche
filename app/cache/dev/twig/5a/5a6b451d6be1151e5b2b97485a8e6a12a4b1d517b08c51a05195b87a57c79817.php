<?php

/* :groupes:new.html.twig */
class __TwigTemplate_190e41b15f435db4156a385bb78d28b54bc22303bd3a025044b5bd65bb0d1e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":groupes:new.html.twig", 1);
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
        $__internal_67993ed16d1c8ce7b96c909a446d34e1deef0c1f6b072c6a9cf9ea777426b5ff = $this->env->getExtension("native_profiler");
        $__internal_67993ed16d1c8ce7b96c909a446d34e1deef0c1f6b072c6a9cf9ea777426b5ff->enter($__internal_67993ed16d1c8ce7b96c909a446d34e1deef0c1f6b072c6a9cf9ea777426b5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":groupes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67993ed16d1c8ce7b96c909a446d34e1deef0c1f6b072c6a9cf9ea777426b5ff->leave($__internal_67993ed16d1c8ce7b96c909a446d34e1deef0c1f6b072c6a9cf9ea777426b5ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e677f50a6c7fa02871b4ec05c4ca9f6d2fe686f44bf0e533e6c663e5a1eb9dc7 = $this->env->getExtension("native_profiler");
        $__internal_e677f50a6c7fa02871b4ec05c4ca9f6d2fe686f44bf0e533e6c663e5a1eb9dc7->enter($__internal_e677f50a6c7fa02871b4ec05c4ca9f6d2fe686f44bf0e533e6c663e5a1eb9dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Groupes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("groupes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e677f50a6c7fa02871b4ec05c4ca9f6d2fe686f44bf0e533e6c663e5a1eb9dc7->leave($__internal_e677f50a6c7fa02871b4ec05c4ca9f6d2fe686f44bf0e533e6c663e5a1eb9dc7_prof);

    }

    public function getTemplateName()
    {
        return ":groupes:new.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Groupes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('groupes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
