<?php

/* media/edit.html.twig */
class __TwigTemplate_3e8f6c907e8afaec52ff6278079df0cacabc2d67b8a315ee8bfff34bdfc5ef82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "media/edit.html.twig", 1);
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
        $__internal_ee55794a7b8dbed4812a33ce50205b342e3974ee93d9c50492a39abd571a5ae9 = $this->env->getExtension("native_profiler");
        $__internal_ee55794a7b8dbed4812a33ce50205b342e3974ee93d9c50492a39abd571a5ae9->enter($__internal_ee55794a7b8dbed4812a33ce50205b342e3974ee93d9c50492a39abd571a5ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee55794a7b8dbed4812a33ce50205b342e3974ee93d9c50492a39abd571a5ae9->leave($__internal_ee55794a7b8dbed4812a33ce50205b342e3974ee93d9c50492a39abd571a5ae9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_526f03fc3f744e2e247f7f8ed9735f37da641fd0d1357889bb526e4fe69a31ab = $this->env->getExtension("native_profiler");
        $__internal_526f03fc3f744e2e247f7f8ed9735f37da641fd0d1357889bb526e4fe69a31ab->enter($__internal_526f03fc3f744e2e247f7f8ed9735f37da641fd0d1357889bb526e4fe69a31ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Media edit</h1>

    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("media_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_526f03fc3f744e2e247f7f8ed9735f37da641fd0d1357889bb526e4fe69a31ab->leave($__internal_526f03fc3f744e2e247f7f8ed9735f37da641fd0d1357889bb526e4fe69a31ab_prof);

    }

    public function getTemplateName()
    {
        return "media/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  66 => 15,  60 => 12,  53 => 8,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* {% block body %}*/
/*     <h1>Media edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('media_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
