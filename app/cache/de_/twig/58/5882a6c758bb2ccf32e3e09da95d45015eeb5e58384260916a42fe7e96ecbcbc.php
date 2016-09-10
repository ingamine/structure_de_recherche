<?php

/* :etablissement:new.html.twig */
class __TwigTemplate_1f9ee8afd278eccdd7ca20820f75c646cf926ce3d1fd19c5af9de3ba4001e29f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":etablissement:new.html.twig", 1);
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
        $__internal_4fe8b7b2b842b9e5eeefb3aa46c4b8e8affb4fe104b8d694e3c280c48106314d = $this->env->getExtension("native_profiler");
        $__internal_4fe8b7b2b842b9e5eeefb3aa46c4b8e8affb4fe104b8d694e3c280c48106314d->enter($__internal_4fe8b7b2b842b9e5eeefb3aa46c4b8e8affb4fe104b8d694e3c280c48106314d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":etablissement:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe8b7b2b842b9e5eeefb3aa46c4b8e8affb4fe104b8d694e3c280c48106314d->leave($__internal_4fe8b7b2b842b9e5eeefb3aa46c4b8e8affb4fe104b8d694e3c280c48106314d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7812d9a6226c878e485482d01664e35eedf569534aec2a9b1107ce4f2b8eb71 = $this->env->getExtension("native_profiler");
        $__internal_f7812d9a6226c878e485482d01664e35eedf569534aec2a9b1107ce4f2b8eb71->enter($__internal_f7812d9a6226c878e485482d01664e35eedf569534aec2a9b1107ce4f2b8eb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etablissement creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("etablissement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f7812d9a6226c878e485482d01664e35eedf569534aec2a9b1107ce4f2b8eb71->leave($__internal_f7812d9a6226c878e485482d01664e35eedf569534aec2a9b1107ce4f2b8eb71_prof);

    }

    public function getTemplateName()
    {
        return ":etablissement:new.html.twig";
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
/*     <h1>Etablissement creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('etablissement_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
