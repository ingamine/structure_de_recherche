<?php

/* soutenance/show.html.twig */
class __TwigTemplate_8a3c59524478c70eeafa4fb35eb5d7f46c339c1c76f0851e64aef1f5b240f3a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "soutenance/show.html.twig", 1);
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
        $__internal_53181f87cde7a03ba29b9d3c0f317dc0ce98c8a741d9a8b2111182f5c0935333 = $this->env->getExtension("native_profiler");
        $__internal_53181f87cde7a03ba29b9d3c0f317dc0ce98c8a741d9a8b2111182f5c0935333->enter($__internal_53181f87cde7a03ba29b9d3c0f317dc0ce98c8a741d9a8b2111182f5c0935333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "soutenance/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53181f87cde7a03ba29b9d3c0f317dc0ce98c8a741d9a8b2111182f5c0935333->leave($__internal_53181f87cde7a03ba29b9d3c0f317dc0ce98c8a741d9a8b2111182f5c0935333_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_845db738893002fd084a91fdbe0789a5ea4ef0e83b3312576021bb8c8b8d0f28 = $this->env->getExtension("native_profiler");
        $__internal_845db738893002fd084a91fdbe0789a5ea4ef0e83b3312576021bb8c8b8d0f28->enter($__internal_845db738893002fd084a91fdbe0789a5ea4ef0e83b3312576021bb8c8b8d0f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Soutenance</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soutenance"]) ? $context["soutenance"] : $this->getContext($context, "soutenance")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datesout</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["soutenance"]) ? $context["soutenance"] : $this->getContext($context, "soutenance")), "dateSout", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["soutenance"]) ? $context["soutenance"] : $this->getContext($context, "soutenance")), "dateSout", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Mention</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soutenance"]) ? $context["soutenance"] : $this->getContext($context, "soutenance")), "mention", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Jury</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soutenance"]) ? $context["soutenance"] : $this->getContext($context, "soutenance")), "jury", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["soutenance"]) ? $context["soutenance"] : $this->getContext($context, "soutenance")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["soutenance"]) ? $context["soutenance"] : $this->getContext($context, "soutenance")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["soutenance"]) ? $context["soutenance"] : $this->getContext($context, "soutenance")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["soutenance"]) ? $context["soutenance"] : $this->getContext($context, "soutenance")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("soutenance_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soutenance_edit", array("id" => $this->getAttribute((isset($context["soutenance"]) ? $context["soutenance"] : $this->getContext($context, "soutenance")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_845db738893002fd084a91fdbe0789a5ea4ef0e83b3312576021bb8c8b8d0f28->leave($__internal_845db738893002fd084a91fdbe0789a5ea4ef0e83b3312576021bb8c8b8d0f28_prof);

    }

    public function getTemplateName()
    {
        return "soutenance/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  112 => 44,  106 => 41,  100 => 38,  87 => 30,  78 => 26,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>Soutenance</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ soutenance.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datesout</th>*/
/*                 <td>{% if soutenance.dateSout %}{{ soutenance.dateSout|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Mention</th>*/
/*                 <td>{{ soutenance.mention }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Jury</th>*/
/*                 <td>{{ soutenance.jury }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{% if soutenance.created %}{{ soutenance.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if soutenance.updated %}{{ soutenance.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('soutenance_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('soutenance_edit', { 'id': soutenance.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
