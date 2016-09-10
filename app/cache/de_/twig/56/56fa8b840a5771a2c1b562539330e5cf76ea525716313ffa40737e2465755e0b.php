<?php

/* these/index.html.twig */
class __TwigTemplate_8a3ca8430a6a9db4ba65e40cfd9cafce9b8cd43873b919bbce897a2fff2bcff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "these/index.html.twig", 1);
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
        $__internal_edd44a2355cdbab0fc4d06568d5fa50e14014167e807b20f4f63d41264e4cc2a = $this->env->getExtension("native_profiler");
        $__internal_edd44a2355cdbab0fc4d06568d5fa50e14014167e807b20f4f63d41264e4cc2a->enter($__internal_edd44a2355cdbab0fc4d06568d5fa50e14014167e807b20f4f63d41264e4cc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "these/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edd44a2355cdbab0fc4d06568d5fa50e14014167e807b20f4f63d41264e4cc2a->leave($__internal_edd44a2355cdbab0fc4d06568d5fa50e14014167e807b20f4f63d41264e4cc2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd8d825abf80efdfad671174dbf6a6aa261fb84286fcea7beb81c935e6d39bed = $this->env->getExtension("native_profiler");
        $__internal_cd8d825abf80efdfad671174dbf6a6aa261fb84286fcea7beb81c935e6d39bed->enter($__internal_cd8d825abf80efdfad671174dbf6a6aa261fb84286fcea7beb81c935e6d39bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>These list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Firstdateregistered</th>
                <th>Updated</th>
              
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theses"]) ? $context["theses"] : $this->getContext($context, "theses")));
        foreach ($context['_seq'] as $context["_key"] => $context["these"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("these_show", array("id" => $this->getAttribute($context["these"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["these"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["these"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["these"], "firstDateRegistered", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["these"], "firstDateRegistered", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["these"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["these"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
               
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("these_show", array("id" => $this->getAttribute($context["these"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("these_edit", array("id" => $this->getAttribute($context["these"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['these'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("these_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_cd8d825abf80efdfad671174dbf6a6aa261fb84286fcea7beb81c935e6d39bed->leave($__internal_cd8d825abf80efdfad671174dbf6a6aa261fb84286fcea7beb81c935e6d39bed_prof);

    }

    public function getTemplateName()
    {
        return "these/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  107 => 37,  95 => 31,  89 => 28,  79 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>These list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Firstdateregistered</th>*/
/*                 <th>Updated</th>*/
/*               */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for these in theses %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('these_show', { 'id': these.id }) }}">{{ these.id }}</a></td>*/
/*                 <td>{{ these.title }}</td>*/
/*                 <td>{% if these.firstDateRegistered %}{{ these.firstDateRegistered|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if these.updated %}{{ these.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('these_show', { 'id': these.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('these_edit', { 'id': these.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('these_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
