<?php

/* :groupes:edit.html.twig */
class __TwigTemplate_29d6a49a2e52d5f99f2b80d64555451c1788ad9780dfb6a7d66a46549ec67e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":groupes:edit.html.twig", 1);
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
        $__internal_292e360e1726874bebcdfc6afa79642d55f52165a728bc5bf60e328f85ac650a = $this->env->getExtension("native_profiler");
        $__internal_292e360e1726874bebcdfc6afa79642d55f52165a728bc5bf60e328f85ac650a->enter($__internal_292e360e1726874bebcdfc6afa79642d55f52165a728bc5bf60e328f85ac650a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":groupes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_292e360e1726874bebcdfc6afa79642d55f52165a728bc5bf60e328f85ac650a->leave($__internal_292e360e1726874bebcdfc6afa79642d55f52165a728bc5bf60e328f85ac650a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a569d5cd34246474d56a2c54efe9a0f648e2fe9d9fe0f7a971c4320036d263a = $this->env->getExtension("native_profiler");
        $__internal_7a569d5cd34246474d56a2c54efe9a0f648e2fe9d9fe0f7a971c4320036d263a->enter($__internal_7a569d5cd34246474d56a2c54efe9a0f648e2fe9d9fe0f7a971c4320036d263a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Groupes edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("groupes_index");
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
        
        $__internal_7a569d5cd34246474d56a2c54efe9a0f648e2fe9d9fe0f7a971c4320036d263a->leave($__internal_7a569d5cd34246474d56a2c54efe9a0f648e2fe9d9fe0f7a971c4320036d263a_prof);

    }

    public function getTemplateName()
    {
        return ":groupes:edit.html.twig";
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
/*     <h1>Groupes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('groupes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
