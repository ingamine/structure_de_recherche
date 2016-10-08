<?php

/* :productionscientifique:show.html.twig */
class __TwigTemplate_4cf522a0a9fab54c83a7b03f22c1a59e4f44ffc789a626ed32ef58f9464499aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":productionscientifique:show.html.twig", 1);
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
        $__internal_391569954c5e68dce9490fde9a9c58b588c3ad103aacf90aab8487782b30435a = $this->env->getExtension("native_profiler");
        $__internal_391569954c5e68dce9490fde9a9c58b588c3ad103aacf90aab8487782b30435a->enter($__internal_391569954c5e68dce9490fde9a9c58b588c3ad103aacf90aab8487782b30435a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":productionscientifique:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_391569954c5e68dce9490fde9a9c58b588c3ad103aacf90aab8487782b30435a->leave($__internal_391569954c5e68dce9490fde9a9c58b588c3ad103aacf90aab8487782b30435a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7594be7edbe732291d9396f7026668a002798cc33fa7df5931e42b94c9de12f0 = $this->env->getExtension("native_profiler");
        $__internal_7594be7edbe732291d9396f7026668a002798cc33fa7df5931e42b94c9de12f0->enter($__internal_7594be7edbe732291d9396f7026668a002798cc33fa7df5931e42b94c9de12f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ProductionScientifique</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datepublication</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "datePublication", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "datePublication", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Auteur</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "auteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbauteur</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "nbAuteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomjournal</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "nomJournal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomcongres</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "nomCongres", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Edition</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "edition", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isbn</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "isbn", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Indexe</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "indexe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Indexfactor</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "indexFactor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 58
        if ($this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 62
        if ($this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("productionscientifique_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("productionscientifique_edit", array("id" => $this->getAttribute((isset($context["productionScientifique"]) ? $context["productionScientifique"] : $this->getContext($context, "productionScientifique")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7594be7edbe732291d9396f7026668a002798cc33fa7df5931e42b94c9de12f0->leave($__internal_7594be7edbe732291d9396f7026668a002798cc33fa7df5931e42b94c9de12f0_prof);

    }

    public function getTemplateName()
    {
        return ":productionscientifique:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 78,  168 => 76,  162 => 73,  156 => 70,  143 => 62,  134 => 58,  127 => 54,  120 => 50,  113 => 46,  106 => 42,  99 => 38,  92 => 34,  85 => 30,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>ProductionScientifique</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ productionScientifique.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ productionScientifique.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ productionScientifique.type }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datepublication</th>*/
/*                 <td>{% if productionScientifique.datePublication %}{{ productionScientifique.datePublication|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Auteur</th>*/
/*                 <td>{{ productionScientifique.auteur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nbauteur</th>*/
/*                 <td>{{ productionScientifique.nbAuteur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomjournal</th>*/
/*                 <td>{{ productionScientifique.nomJournal }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomcongres</th>*/
/*                 <td>{{ productionScientifique.nomCongres }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Edition</th>*/
/*                 <td>{{ productionScientifique.edition }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Isbn</th>*/
/*                 <td>{{ productionScientifique.isbn }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Indexe</th>*/
/*                 <td>{{ productionScientifique.indexe }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Indexfactor</th>*/
/*                 <td>{{ productionScientifique.indexFactor }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{% if productionScientifique.created %}{{ productionScientifique.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if productionScientifique.updated %}{{ productionScientifique.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('productionscientifique_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('productionscientifique_edit', { 'id': productionScientifique.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
