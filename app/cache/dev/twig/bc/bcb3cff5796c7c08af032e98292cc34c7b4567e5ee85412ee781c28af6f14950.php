<?php

/* groupes/new.html.twig */
class __TwigTemplate_48870f158d341813ea1ff7ac5e00d7b30f2928ad4ccaf78ae0655ad942199a75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "groupes/new.html.twig", 1);
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
        $__internal_6796951a6aec49996e9a3eed4bbc9f2cb3dce9933232db3d4695bdcbe5cc59b0 = $this->env->getExtension("native_profiler");
        $__internal_6796951a6aec49996e9a3eed4bbc9f2cb3dce9933232db3d4695bdcbe5cc59b0->enter($__internal_6796951a6aec49996e9a3eed4bbc9f2cb3dce9933232db3d4695bdcbe5cc59b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "groupes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6796951a6aec49996e9a3eed4bbc9f2cb3dce9933232db3d4695bdcbe5cc59b0->leave($__internal_6796951a6aec49996e9a3eed4bbc9f2cb3dce9933232db3d4695bdcbe5cc59b0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa8d795795f0ef3d84dc8a69c7696750cc206a02744dccc0c05b6677dd50297e = $this->env->getExtension("native_profiler");
        $__internal_aa8d795795f0ef3d84dc8a69c7696750cc206a02744dccc0c05b6677dd50297e->enter($__internal_aa8d795795f0ef3d84dc8a69c7696750cc206a02744dccc0c05b6677dd50297e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa8d795795f0ef3d84dc8a69c7696750cc206a02744dccc0c05b6677dd50297e->leave($__internal_aa8d795795f0ef3d84dc8a69c7696750cc206a02744dccc0c05b6677dd50297e_prof);

    }

    public function getTemplateName()
    {
        return "groupes/new.html.twig";
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
