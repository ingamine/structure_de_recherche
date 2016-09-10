<?php

/* :habilitation:index.html.twig */
class __TwigTemplate_a3d0a831da2c59aed33024430059a3c2ca8cec058c44a2f3d59e0d74d0db8a62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":habilitation:index.html.twig", 1);
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
        $__internal_6aac1f0c36c9eb795a252b448a7656fcf670694b37e04dfd0eafbb943078ce0c = $this->env->getExtension("native_profiler");
        $__internal_6aac1f0c36c9eb795a252b448a7656fcf670694b37e04dfd0eafbb943078ce0c->enter($__internal_6aac1f0c36c9eb795a252b448a7656fcf670694b37e04dfd0eafbb943078ce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":habilitation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aac1f0c36c9eb795a252b448a7656fcf670694b37e04dfd0eafbb943078ce0c->leave($__internal_6aac1f0c36c9eb795a252b448a7656fcf670694b37e04dfd0eafbb943078ce0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffebaba81223528f95683f8d8c57fb343eac55fca1695a7ff9963c426a842f6f = $this->env->getExtension("native_profiler");
        $__internal_ffebaba81223528f95683f8d8c57fb343eac55fca1695a7ff9963c426a842f6f->enter($__internal_ffebaba81223528f95683f8d8c57fb343eac55fca1695a7ff9963c426a842f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Habilitation list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Firstdateregistered</th>
                <th>Directeur</th>
                <th>Created</th>
                <th>Updated</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habilitations"]) ? $context["habilitations"] : $this->getContext($context, "habilitations")));
        foreach ($context['_seq'] as $context["_key"] => $context["habilitation"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habilitation_show", array("id" => $this->getAttribute($context["habilitation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["habilitation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["habilitation"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["habilitation"], "firstDateRegistered", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["habilitation"], "firstDateRegistered", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["habilitation"], "directeur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["habilitation"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["habilitation"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["habilitation"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["habilitation"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
             
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habilitation_show", array("id" => $this->getAttribute($context["habilitation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habilitation_edit", array("id" => $this->getAttribute($context["habilitation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilitation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("habilitation_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_ffebaba81223528f95683f8d8c57fb343eac55fca1695a7ff9963c426a842f6f->leave($__internal_ffebaba81223528f95683f8d8c57fb343eac55fca1695a7ff9963c426a842f6f_prof);

    }

    public function getTemplateName()
    {
        return ":habilitation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  119 => 41,  107 => 35,  101 => 32,  91 => 27,  85 => 26,  81 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Habilitation list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Firstdateregistered</th>*/
/*                 <th>Directeur</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*                */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for habilitation in habilitations %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('habilitation_show', { 'id': habilitation.id }) }}">{{ habilitation.id }}</a></td>*/
/*                 <td>{{ habilitation.title }}</td>*/
/*                 <td>{% if habilitation.firstDateRegistered %}{{ habilitation.firstDateRegistered|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ habilitation.directeur }}</td>*/
/*                 <td>{% if habilitation.created %}{{ habilitation.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if habilitation.updated %}{{ habilitation.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*              */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('habilitation_show', { 'id': habilitation.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('habilitation_edit', { 'id': habilitation.id }) }}">edit</a>*/
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
/*             <a href="{{ path('habilitation_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
