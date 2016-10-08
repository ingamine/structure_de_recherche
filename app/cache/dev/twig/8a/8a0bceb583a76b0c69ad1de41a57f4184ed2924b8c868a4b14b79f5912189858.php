<?php

/* :productionscientifique:index.html.twig */
class __TwigTemplate_bea65cf00f23eeeb19daa7d65469d9ca5883f5468f80358fffe91a6821ca12a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":productionscientifique:index.html.twig", 1);
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
        $__internal_e3c547380dc969978750aa26621701a705ba3a3acd5b3e25cf50376d5ad7779d = $this->env->getExtension("native_profiler");
        $__internal_e3c547380dc969978750aa26621701a705ba3a3acd5b3e25cf50376d5ad7779d->enter($__internal_e3c547380dc969978750aa26621701a705ba3a3acd5b3e25cf50376d5ad7779d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":productionscientifique:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c547380dc969978750aa26621701a705ba3a3acd5b3e25cf50376d5ad7779d->leave($__internal_e3c547380dc969978750aa26621701a705ba3a3acd5b3e25cf50376d5ad7779d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_acd397b79babc0ec9b62492e5088be862b14f27673a043a8b19e035def72e53e = $this->env->getExtension("native_profiler");
        $__internal_acd397b79babc0ec9b62492e5088be862b14f27673a043a8b19e035def72e53e->enter($__internal_acd397b79babc0ec9b62492e5088be862b14f27673a043a8b19e035def72e53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ProductionScientifique list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Type</th>
                <th>Datepublication</th>
                <th>Auteur</th>
                <th>Nbauteur</th>
                <th>Nomjournal</th>
                <th>Nomcongres</th>
                <th>Edition</th>
                <th>Isbn</th>
                <th>Indexe</th>
                <th>Indexfactor</th>
                <th>Created</th>
                <th>Updated</th>
             
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productionScientifiques"]) ? $context["productionScientifiques"] : $this->getContext($context, "productionScientifiques")));
        foreach ($context['_seq'] as $context["_key"] => $context["productionScientifique"]) {
            // line 29
            echo "            <tr>
                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productionscientifique_show", array("id" => $this->getAttribute($context["productionScientifique"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["productionScientifique"], "datePublication", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["productionScientifique"], "datePublication", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "nbAuteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "nomJournal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "nomCongres", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "edition", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "isbn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "indexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["productionScientifique"], "indexFactor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["productionScientifique"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["productionScientifique"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 43
            if ($this->getAttribute($context["productionScientifique"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["productionScientifique"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productionscientifique_show", array("id" => $this->getAttribute($context["productionScientifique"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productionscientifique_edit", array("id" => $this->getAttribute($context["productionScientifique"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productionScientifique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("productionscientifique_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_acd397b79babc0ec9b62492e5088be862b14f27673a043a8b19e035def72e53e->leave($__internal_acd397b79babc0ec9b62492e5088be862b14f27673a043a8b19e035def72e53e_prof);

    }

    public function getTemplateName()
    {
        return ":productionscientifique:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 62,  159 => 57,  147 => 51,  141 => 48,  131 => 43,  125 => 42,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  87 => 33,  83 => 32,  79 => 31,  73 => 30,  70 => 29,  66 => 28,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>ProductionScientifique list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Type</th>*/
/*                 <th>Datepublication</th>*/
/*                 <th>Auteur</th>*/
/*                 <th>Nbauteur</th>*/
/*                 <th>Nomjournal</th>*/
/*                 <th>Nomcongres</th>*/
/*                 <th>Edition</th>*/
/*                 <th>Isbn</th>*/
/*                 <th>Indexe</th>*/
/*                 <th>Indexfactor</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*              */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for productionScientifique in productionScientifiques %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('productionscientifique_show', { 'id': productionScientifique.id }) }}">{{ productionScientifique.id }}</a></td>*/
/*                 <td>{{ productionScientifique.title }}</td>*/
/*                 <td>{{ productionScientifique.type }}</td>*/
/*                 <td>{% if productionScientifique.datePublication %}{{ productionScientifique.datePublication|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ productionScientifique.auteur }}</td>*/
/*                 <td>{{ productionScientifique.nbAuteur }}</td>*/
/*                 <td>{{ productionScientifique.nomJournal }}</td>*/
/*                 <td>{{ productionScientifique.nomCongres }}</td>*/
/*                 <td>{{ productionScientifique.edition }}</td>*/
/*                 <td>{{ productionScientifique.isbn }}</td>*/
/*                 <td>{{ productionScientifique.indexe }}</td>*/
/*                 <td>{{ productionScientifique.indexFactor }}</td>*/
/*                 <td>{% if productionScientifique.created %}{{ productionScientifique.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if productionScientifique.updated %}{{ productionScientifique.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('productionscientifique_show', { 'id': productionScientifique.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('productionscientifique_edit', { 'id': productionScientifique.id }) }}">edit</a>*/
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
/*             <a href="{{ path('productionscientifique_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
