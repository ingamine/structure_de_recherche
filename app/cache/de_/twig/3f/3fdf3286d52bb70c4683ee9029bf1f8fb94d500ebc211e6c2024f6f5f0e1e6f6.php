<?php

/* etablissement/index.html.twig */
class __TwigTemplate_b818e2d52490bada9963f995c1c34acaa47fe17808915ddfeef4d2245b4d7a8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "etablissement/index.html.twig", 1);
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
        $__internal_4a22abd91579933981a259ca0e8f4cd1f013b8a1ae40a29c4ca4398cc6695451 = $this->env->getExtension("native_profiler");
        $__internal_4a22abd91579933981a259ca0e8f4cd1f013b8a1ae40a29c4ca4398cc6695451->enter($__internal_4a22abd91579933981a259ca0e8f4cd1f013b8a1ae40a29c4ca4398cc6695451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etablissement/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a22abd91579933981a259ca0e8f4cd1f013b8a1ae40a29c4ca4398cc6695451->leave($__internal_4a22abd91579933981a259ca0e8f4cd1f013b8a1ae40a29c4ca4398cc6695451_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93017c30a5379992fa0d513882bae2177c2e9d7658301d732e5c5434a222c73c = $this->env->getExtension("native_profiler");
        $__internal_93017c30a5379992fa0d513882bae2177c2e9d7658301d732e5c5434a222c73c->enter($__internal_93017c30a5379992fa0d513882bae2177c2e9d7658301d732e5c5434a222c73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etablissement list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
              
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etablissements"]) ? $context["etablissements"] : $this->getContext($context, "etablissements")));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etablissement_show", array("id" => $this->getAttribute($context["etablissement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["etablissement"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["etablissement"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["etablissement"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["etablissement"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etablissement_show", array("id" => $this->getAttribute($context["etablissement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etablissement_edit", array("id" => $this->getAttribute($context["etablissement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("etablissement_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_93017c30a5379992fa0d513882bae2177c2e9d7658301d732e5c5434a222c73c->leave($__internal_93017c30a5379992fa0d513882bae2177c2e9d7658301d732e5c5434a222c73c_prof);

    }

    public function getTemplateName()
    {
        return "etablissement/index.html.twig";
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
/*     <h1>Etablissement list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*               */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for etablissement in etablissements %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('etablissement_show', { 'id': etablissement.id }) }}">{{ etablissement.id }}</a></td>*/
/*                 <td>{{ etablissement.name }}</td>*/
/*                 <td>{% if etablissement.created %}{{ etablissement.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if etablissement.updated %}{{ etablissement.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('etablissement_show', { 'id': etablissement.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('etablissement_edit', { 'id': etablissement.id }) }}">edit</a>*/
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
/*             <a href="{{ path('etablissement_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
