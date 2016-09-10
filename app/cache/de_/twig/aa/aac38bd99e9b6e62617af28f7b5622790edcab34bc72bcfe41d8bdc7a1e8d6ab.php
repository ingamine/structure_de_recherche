<?php

/* media/edit.html.twig */
class __TwigTemplate_3e8f6c907e8afaec52ff6278079df0cacabc2d67b8a315ee8bfff34bdfc5ef82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "media/edit.html.twig", 1);
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
        $__internal_03351faa612070331183c940dce879a4571acdbfd7fdfe1c9709c6c7cdb0b1a1 = $this->env->getExtension("native_profiler");
        $__internal_03351faa612070331183c940dce879a4571acdbfd7fdfe1c9709c6c7cdb0b1a1->enter($__internal_03351faa612070331183c940dce879a4571acdbfd7fdfe1c9709c6c7cdb0b1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03351faa612070331183c940dce879a4571acdbfd7fdfe1c9709c6c7cdb0b1a1->leave($__internal_03351faa612070331183c940dce879a4571acdbfd7fdfe1c9709c6c7cdb0b1a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e5c3935bb86badc42f4f0496f3894251cf35f9c2bd466633aa6001276affc70 = $this->env->getExtension("native_profiler");
        $__internal_4e5c3935bb86badc42f4f0496f3894251cf35f9c2bd466633aa6001276affc70->enter($__internal_4e5c3935bb86badc42f4f0496f3894251cf35f9c2bd466633aa6001276affc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Media edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("media_index");
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
        
        $__internal_4e5c3935bb86badc42f4f0496f3894251cf35f9c2bd466633aa6001276affc70->leave($__internal_4e5c3935bb86badc42f4f0496f3894251cf35f9c2bd466633aa6001276affc70_prof);

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
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
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
