<?php

/* :these:index.html.twig */
class __TwigTemplate_520c910a1cd2276a1167150df2a17b0e2281ca7e820b6cc195eae270a7d28c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":these:index.html.twig", 1);
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
        $__internal_7c254df2be67ad229d95619d313388a1efcd1752118bbef084215e7c212e4efb = $this->env->getExtension("native_profiler");
        $__internal_7c254df2be67ad229d95619d313388a1efcd1752118bbef084215e7c212e4efb->enter($__internal_7c254df2be67ad229d95619d313388a1efcd1752118bbef084215e7c212e4efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":these:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c254df2be67ad229d95619d313388a1efcd1752118bbef084215e7c212e4efb->leave($__internal_7c254df2be67ad229d95619d313388a1efcd1752118bbef084215e7c212e4efb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3582a774bcbf09389095f2c4c2b05f2cae3840f7df94926c1158067554e5f41 = $this->env->getExtension("native_profiler");
        $__internal_b3582a774bcbf09389095f2c4c2b05f2cae3840f7df94926c1158067554e5f41->enter($__internal_b3582a774bcbf09389095f2c4c2b05f2cae3840f7df94926c1158067554e5f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b3582a774bcbf09389095f2c4c2b05f2cae3840f7df94926c1158067554e5f41->leave($__internal_b3582a774bcbf09389095f2c4c2b05f2cae3840f7df94926c1158067554e5f41_prof);

    }

    public function getTemplateName()
    {
        return ":these:index.html.twig";
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
