<?php

/* researchteam/edit.html.twig */
class __TwigTemplate_b5f6c62aa1b6dc351e716e7449c2f8e0f85cb2e3a4e84a72f6847b3e1484631e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "researchteam/edit.html.twig", 1);
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
        $__internal_319d66a8c81a188ee62ba24bfa8aa1ef4f75ea30701aa0a00610a098f1b63bce = $this->env->getExtension("native_profiler");
        $__internal_319d66a8c81a188ee62ba24bfa8aa1ef4f75ea30701aa0a00610a098f1b63bce->enter($__internal_319d66a8c81a188ee62ba24bfa8aa1ef4f75ea30701aa0a00610a098f1b63bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "researchteam/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319d66a8c81a188ee62ba24bfa8aa1ef4f75ea30701aa0a00610a098f1b63bce->leave($__internal_319d66a8c81a188ee62ba24bfa8aa1ef4f75ea30701aa0a00610a098f1b63bce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be2aaab99a8462cab387cce573b118120a6f36cdb24d14071051752b2f34178f = $this->env->getExtension("native_profiler");
        $__internal_be2aaab99a8462cab387cce573b118120a6f36cdb24d14071051752b2f34178f->enter($__internal_be2aaab99a8462cab387cce573b118120a6f36cdb24d14071051752b2f34178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ResearchTeam edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("researchteam_index");
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
        
        $__internal_be2aaab99a8462cab387cce573b118120a6f36cdb24d14071051752b2f34178f->leave($__internal_be2aaab99a8462cab387cce573b118120a6f36cdb24d14071051752b2f34178f_prof);

    }

    public function getTemplateName()
    {
        return "researchteam/edit.html.twig";
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
/*     <h1>ResearchTeam edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('researchteam_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
