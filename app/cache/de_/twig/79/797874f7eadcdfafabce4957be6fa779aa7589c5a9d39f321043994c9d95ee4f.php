<?php

/* these/show.html.twig */
class __TwigTemplate_dd823aea3ab9082af09724cc9813b07461c95a8f4f3fd9217c6d76da7dcf6fb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "these/show.html.twig", 1);
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
        $__internal_3ca4e89b4e7e8b0ea353a9c8490e7f05d14859f719d85a2dfd19806c11dbc8b0 = $this->env->getExtension("native_profiler");
        $__internal_3ca4e89b4e7e8b0ea353a9c8490e7f05d14859f719d85a2dfd19806c11dbc8b0->enter($__internal_3ca4e89b4e7e8b0ea353a9c8490e7f05d14859f719d85a2dfd19806c11dbc8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "these/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ca4e89b4e7e8b0ea353a9c8490e7f05d14859f719d85a2dfd19806c11dbc8b0->leave($__internal_3ca4e89b4e7e8b0ea353a9c8490e7f05d14859f719d85a2dfd19806c11dbc8b0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e44344e8a80ca85d3c9c9e968016ec1d9a4f8933da4612914489dc291b0a9f48 = $this->env->getExtension("native_profiler");
        $__internal_e44344e8a80ca85d3c9c9e968016ec1d9a4f8933da4612914489dc291b0a9f48->enter($__internal_e44344e8a80ca85d3c9c9e968016ec1d9a4f8933da4612914489dc291b0a9f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>These</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["these"]) ? $context["these"] : $this->getContext($context, "these")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["these"]) ? $context["these"] : $this->getContext($context, "these")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstdateregistered</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["these"]) ? $context["these"] : $this->getContext($context, "these")), "firstDateRegistered", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["these"]) ? $context["these"] : $this->getContext($context, "these")), "firstDateRegistered", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["these"]) ? $context["these"] : $this->getContext($context, "these")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["these"]) ? $context["these"] : $this->getContext($context, "these")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
           
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("these_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("these_edit", array("id" => $this->getAttribute((isset($context["these"]) ? $context["these"] : $this->getContext($context, "these")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e44344e8a80ca85d3c9c9e968016ec1d9a4f8933da4612914489dc291b0a9f48->leave($__internal_e44344e8a80ca85d3c9c9e968016ec1d9a4f8933da4612914489dc291b0a9f48_prof);

    }

    public function getTemplateName()
    {
        return "these/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 38,  96 => 36,  90 => 33,  84 => 30,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>These</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ these.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ these.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstdateregistered</th>*/
/*                 <td>{% if these.firstDateRegistered %}{{ these.firstDateRegistered|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if these.updated %}{{ these.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*            */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('these_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('these_edit', { 'id': these.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
