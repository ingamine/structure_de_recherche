<?php

/* :researchteam:index.html.twig */
class __TwigTemplate_daf653da9b219d4d77a4a5f5e58984f01f400a2085b8a708dd53cc096a72f01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":researchteam:index.html.twig", 1);
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
        $__internal_bba86582d1416c13eb0c92d72239b60a80d02a1d8e1352fe708335ad0039b463 = $this->env->getExtension("native_profiler");
        $__internal_bba86582d1416c13eb0c92d72239b60a80d02a1d8e1352fe708335ad0039b463->enter($__internal_bba86582d1416c13eb0c92d72239b60a80d02a1d8e1352fe708335ad0039b463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":researchteam:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bba86582d1416c13eb0c92d72239b60a80d02a1d8e1352fe708335ad0039b463->leave($__internal_bba86582d1416c13eb0c92d72239b60a80d02a1d8e1352fe708335ad0039b463_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62da8b135f2e1a33cd396b828a8676985d16cbe5d3f90c9c50dafee67be5c7d4 = $this->env->getExtension("native_profiler");
        $__internal_62da8b135f2e1a33cd396b828a8676985d16cbe5d3f90c9c50dafee67be5c7d4->enter($__internal_62da8b135f2e1a33cd396b828a8676985d16cbe5d3f90c9c50dafee67be5c7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ResearchTeam list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Productionindex</th>
                <th>Created</th>
                <th>Updated</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["researchTeams"]) ? $context["researchTeams"] : $this->getContext($context, "researchTeams")));
        foreach ($context['_seq'] as $context["_key"] => $context["researchTeam"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("researchteam_show", array("id" => $this->getAttribute($context["researchTeam"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["researchTeam"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["researchTeam"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["researchTeam"], "productionIndex", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["researchTeam"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["researchTeam"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["researchTeam"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["researchTeam"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
              
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("researchteam_show", array("id" => $this->getAttribute($context["researchTeam"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("researchteam_edit", array("id" => $this->getAttribute($context["researchTeam"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['researchTeam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("researchteam_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_62da8b135f2e1a33cd396b828a8676985d16cbe5d3f90c9c50dafee67be5c7d4->leave($__internal_62da8b135f2e1a33cd396b828a8676985d16cbe5d3f90c9c50dafee67be5c7d4_prof);

    }

    public function getTemplateName()
    {
        return ":researchteam:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  112 => 39,  100 => 33,  94 => 30,  84 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>ResearchTeam list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Productionindex</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*                */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for researchTeam in researchTeams %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('researchteam_show', { 'id': researchTeam.id }) }}">{{ researchTeam.id }}</a></td>*/
/*                 <td>{{ researchTeam.name }}</td>*/
/*                 <td>{{ researchTeam.productionIndex }}</td>*/
/*                 <td>{% if researchTeam.created %}{{ researchTeam.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if researchTeam.updated %}{{ researchTeam.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*               */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('researchteam_show', { 'id': researchTeam.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('researchteam_edit', { 'id': researchTeam.id }) }}">edit</a>*/
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
/*             <a href="{{ path('researchteam_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
