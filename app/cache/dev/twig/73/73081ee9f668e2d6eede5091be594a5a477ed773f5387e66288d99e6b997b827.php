<?php

/* :structure:show.html.twig */
class __TwigTemplate_7aa860fe781e61f040b8eed2e035ae68417dc3887244d7908416ded38ed534d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":structure:show.html.twig", 1);
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
        $__internal_33d3225ca3bb8a75e8aaf14b3fc2f58727d5a94373d7b45b182cda2aa7803954 = $this->env->getExtension("native_profiler");
        $__internal_33d3225ca3bb8a75e8aaf14b3fc2f58727d5a94373d7b45b182cda2aa7803954->enter($__internal_33d3225ca3bb8a75e8aaf14b3fc2f58727d5a94373d7b45b182cda2aa7803954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":structure:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33d3225ca3bb8a75e8aaf14b3fc2f58727d5a94373d7b45b182cda2aa7803954->leave($__internal_33d3225ca3bb8a75e8aaf14b3fc2f58727d5a94373d7b45b182cda2aa7803954_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbefc70cbbad49bbad11553218ffe4260ad74427cbf9bba1100924e7e664cf64 = $this->env->getExtension("native_profiler");
        $__internal_fbefc70cbbad49bbad11553218ffe4260ad74427cbf9bba1100924e7e664cf64->enter($__internal_fbefc70cbbad49bbad11553218ffe4260ad74427cbf9bba1100924e7e664cf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Structure</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomchef</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "nomChef", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenomchef</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "prenomChef", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cinchef</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "cinChef", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Universite</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "universite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Website</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "webSite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "dateCreation", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 42
        if ($this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("structure_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("structure_edit", array("id" => $this->getAttribute((isset($context["structure"]) ? $context["structure"] : $this->getContext($context, "structure")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fbefc70cbbad49bbad11553218ffe4260ad74427cbf9bba1100924e7e664cf64->leave($__internal_fbefc70cbbad49bbad11553218ffe4260ad74427cbf9bba1100924e7e664cf64_prof);

    }

    public function getTemplateName()
    {
        return ":structure:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 62,  140 => 60,  134 => 57,  128 => 54,  115 => 46,  106 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>Structure</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ structure.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ structure.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomchef</th>*/
/*                 <td>{{ structure.nomChef }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenomchef</th>*/
/*                 <td>{{ structure.prenomChef }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cinchef</th>*/
/*                 <td>{{ structure.cinChef }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Universite</th>*/
/*                 <td>{{ structure.universite }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Website</th>*/
/*                 <td>{{ structure.webSite }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datecreation</th>*/
/*                 <td>{% if structure.dateCreation %}{{ structure.dateCreation|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{% if structure.created %}{{ structure.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if structure.updated %}{{ structure.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('structure_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('structure_edit', { 'id': structure.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
