<?php

/* :structure:index.html.twig */
class __TwigTemplate_d1e8b86b871aa0edc7ddcb10927ab3a2fffbce5231c0df2ba5a889a9d107c669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":structure:index.html.twig", 1);
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
        $__internal_063a611b9bea4defc93acc6901a7c52902593668bf9a871a41e43ee03f3d8cb6 = $this->env->getExtension("native_profiler");
        $__internal_063a611b9bea4defc93acc6901a7c52902593668bf9a871a41e43ee03f3d8cb6->enter($__internal_063a611b9bea4defc93acc6901a7c52902593668bf9a871a41e43ee03f3d8cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":structure:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063a611b9bea4defc93acc6901a7c52902593668bf9a871a41e43ee03f3d8cb6->leave($__internal_063a611b9bea4defc93acc6901a7c52902593668bf9a871a41e43ee03f3d8cb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad4164545531dbbf9103adbf26a7451b302e22dc5148841e11b47ba017d08532 = $this->env->getExtension("native_profiler");
        $__internal_ad4164545531dbbf9103adbf26a7451b302e22dc5148841e11b47ba017d08532->enter($__internal_ad4164545531dbbf9103adbf26a7451b302e22dc5148841e11b47ba017d08532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Structure list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Nomchef</th>
                <th>Prenomchef</th>
                <th>Cinchef</th>
                <th>Universite</th>
                <th>Website</th>
                <th>Datecreation</th>
                <th>Created</th>
                <th>Updated</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["structures"]) ? $context["structures"] : $this->getContext($context, "structures")));
        foreach ($context['_seq'] as $context["_key"] => $context["structure"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("structure_show", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "nomChef", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "prenomChef", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "cinChef", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "universite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "webSite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["structure"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["structure"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["structure"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["structure"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["structure"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["structure"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
               
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("structure_show", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("structure_edit", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['structure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("structure_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_ad4164545531dbbf9103adbf26a7451b302e22dc5148841e11b47ba017d08532->leave($__internal_ad4164545531dbbf9103adbf26a7451b302e22dc5148841e11b47ba017d08532_prof);

    }

    public function getTemplateName()
    {
        return ":structure:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  139 => 49,  127 => 43,  121 => 40,  111 => 35,  105 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Structure list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Nomchef</th>*/
/*                 <th>Prenomchef</th>*/
/*                 <th>Cinchef</th>*/
/*                 <th>Universite</th>*/
/*                 <th>Website</th>*/
/*                 <th>Datecreation</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*                */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for structure in structures %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('structure_show', { 'id': structure.id }) }}">{{ structure.id }}</a></td>*/
/*                 <td>{{ structure.name }}</td>*/
/*                 <td>{{ structure.nomChef }}</td>*/
/*                 <td>{{ structure.prenomChef }}</td>*/
/*                 <td>{{ structure.cinChef }}</td>*/
/*                 <td>{{ structure.universite }}</td>*/
/*                 <td>{{ structure.webSite }}</td>*/
/*                 <td>{% if structure.dateCreation %}{{ structure.dateCreation|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if structure.created %}{{ structure.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if structure.updated %}{{ structure.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('structure_show', { 'id': structure.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('structure_edit', { 'id': structure.id }) }}">edit</a>*/
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
/*             <a href="{{ path('structure_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
