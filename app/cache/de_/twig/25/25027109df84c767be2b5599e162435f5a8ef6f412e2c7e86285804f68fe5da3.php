<?php

/* :mastere:index.html.twig */
class __TwigTemplate_4f5d8a958755545457a8bb19f7fe2324f8a374ba838a6e7100bd24f270767e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":mastere:index.html.twig", 1);
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
        $__internal_cb188ed3e979c254402b6e1890b66c39d58d3a3494c75d2b44a8a2a9cd426586 = $this->env->getExtension("native_profiler");
        $__internal_cb188ed3e979c254402b6e1890b66c39d58d3a3494c75d2b44a8a2a9cd426586->enter($__internal_cb188ed3e979c254402b6e1890b66c39d58d3a3494c75d2b44a8a2a9cd426586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mastere:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb188ed3e979c254402b6e1890b66c39d58d3a3494c75d2b44a8a2a9cd426586->leave($__internal_cb188ed3e979c254402b6e1890b66c39d58d3a3494c75d2b44a8a2a9cd426586_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27908cf6b076b9223a32d182e7040b25645139e7c890b1772f04a926182c0309 = $this->env->getExtension("native_profiler");
        $__internal_27908cf6b076b9223a32d182e7040b25645139e7c890b1772f04a926182c0309->enter($__internal_27908cf6b076b9223a32d182e7040b25645139e7c890b1772f04a926182c0309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Mastere list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["masteres"]) ? $context["masteres"] : $this->getContext($context, "masteres")));
        foreach ($context['_seq'] as $context["_key"] => $context["mastere"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mastere_show", array("id" => $this->getAttribute($context["mastere"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mastere"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["mastere"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["mastere"], "firstDateRegistered", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mastere"], "firstDateRegistered", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["mastere"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mastere"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
               
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mastere_show", array("id" => $this->getAttribute($context["mastere"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mastere_edit", array("id" => $this->getAttribute($context["mastere"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mastere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("mastere_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_27908cf6b076b9223a32d182e7040b25645139e7c890b1772f04a926182c0309->leave($__internal_27908cf6b076b9223a32d182e7040b25645139e7c890b1772f04a926182c0309_prof);

    }

    public function getTemplateName()
    {
        return ":mastere:index.html.twig";
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
/*     <h1>Mastere list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Firstdateregistered</th>*/
/*                 <th>Updated</th>*/
/*                */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for mastere in masteres %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('mastere_show', { 'id': mastere.id }) }}">{{ mastere.id }}</a></td>*/
/*                 <td>{{ mastere.title }}</td>*/
/*                 <td>{% if mastere.firstDateRegistered %}{{ mastere.firstDateRegistered|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if mastere.updated %}{{ mastere.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('mastere_show', { 'id': mastere.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('mastere_edit', { 'id': mastere.id }) }}">edit</a>*/
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
/*             <a href="{{ path('mastere_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
