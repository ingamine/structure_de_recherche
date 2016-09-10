<?php

/* :media:edit.html.twig */
class __TwigTemplate_4ca726fdb5c145f1ce2b4fb03981411cf9556a4611bdb5e0d6c31c827add8f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":media:edit.html.twig", 1);
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
        $__internal_cecad35ee21a8f6f207d9ae91172b9b2f50a02ab754051d570b8d5c329f3ce10 = $this->env->getExtension("native_profiler");
        $__internal_cecad35ee21a8f6f207d9ae91172b9b2f50a02ab754051d570b8d5c329f3ce10->enter($__internal_cecad35ee21a8f6f207d9ae91172b9b2f50a02ab754051d570b8d5c329f3ce10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":media:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cecad35ee21a8f6f207d9ae91172b9b2f50a02ab754051d570b8d5c329f3ce10->leave($__internal_cecad35ee21a8f6f207d9ae91172b9b2f50a02ab754051d570b8d5c329f3ce10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd7afd1387b4451a4c2014e20e33f62f84caebdd0733020fa28d9c7d47175498 = $this->env->getExtension("native_profiler");
        $__internal_bd7afd1387b4451a4c2014e20e33f62f84caebdd0733020fa28d9c7d47175498->enter($__internal_bd7afd1387b4451a4c2014e20e33f62f84caebdd0733020fa28d9c7d47175498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd7afd1387b4451a4c2014e20e33f62f84caebdd0733020fa28d9c7d47175498->leave($__internal_bd7afd1387b4451a4c2014e20e33f62f84caebdd0733020fa28d9c7d47175498_prof);

    }

    public function getTemplateName()
    {
        return ":media:edit.html.twig";
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
