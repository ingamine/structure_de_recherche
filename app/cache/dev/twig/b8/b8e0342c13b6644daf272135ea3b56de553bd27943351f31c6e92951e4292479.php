<?php

/* :researchteam:edit.html.twig */
class __TwigTemplate_3a9056323744f53fe101871c004c3df496f378a0d11996842faca4855728badc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":researchteam:edit.html.twig", 1);
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
        $__internal_f46203e7d452397e661969c606fdcb72d3dd69daf3347521985b49f6516386b7 = $this->env->getExtension("native_profiler");
        $__internal_f46203e7d452397e661969c606fdcb72d3dd69daf3347521985b49f6516386b7->enter($__internal_f46203e7d452397e661969c606fdcb72d3dd69daf3347521985b49f6516386b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":researchteam:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46203e7d452397e661969c606fdcb72d3dd69daf3347521985b49f6516386b7->leave($__internal_f46203e7d452397e661969c606fdcb72d3dd69daf3347521985b49f6516386b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba1bceb020934bd38a298543f7128c243a693637c2f8abd99e3c747664991410 = $this->env->getExtension("native_profiler");
        $__internal_ba1bceb020934bd38a298543f7128c243a693637c2f8abd99e3c747664991410->enter($__internal_ba1bceb020934bd38a298543f7128c243a693637c2f8abd99e3c747664991410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ba1bceb020934bd38a298543f7128c243a693637c2f8abd99e3c747664991410->leave($__internal_ba1bceb020934bd38a298543f7128c243a693637c2f8abd99e3c747664991410_prof);

    }

    public function getTemplateName()
    {
        return ":researchteam:edit.html.twig";
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
