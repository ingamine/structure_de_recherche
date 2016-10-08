<?php

/* groupes/index.html.twig */
class __TwigTemplate_fab2067008abe9969c2df14231bcba20df9a03124e94712ae7fb09844e430cc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "groupes/index.html.twig", 1);
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
        $__internal_2f5cbdfa84642d585aad1dc9885ee17216a0b01ed313849c5c628e09d811860b = $this->env->getExtension("native_profiler");
        $__internal_2f5cbdfa84642d585aad1dc9885ee17216a0b01ed313849c5c628e09d811860b->enter($__internal_2f5cbdfa84642d585aad1dc9885ee17216a0b01ed313849c5c628e09d811860b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "groupes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5cbdfa84642d585aad1dc9885ee17216a0b01ed313849c5c628e09d811860b->leave($__internal_2f5cbdfa84642d585aad1dc9885ee17216a0b01ed313849c5c628e09d811860b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c0c50d21ea0e44c4bb8800f2d2f059efd41f6d8f38e435fa9736c7b10d1ccc8 = $this->env->getExtension("native_profiler");
        $__internal_0c0c50d21ea0e44c4bb8800f2d2f059efd41f6d8f38e435fa9736c7b10d1ccc8->enter($__internal_0c0c50d21ea0e44c4bb8800f2d2f059efd41f6d8f38e435fa9736c7b10d1ccc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Groupes list</h1>

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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("groupes_show", array("id" => $this->getAttribute($context["groupe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["groupe"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["groupe"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["groupe"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["groupe"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("groupes_show", array("id" => $this->getAttribute($context["groupe"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("groupes_edit", array("id" => $this->getAttribute($context["groupe"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("groupes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_0c0c50d21ea0e44c4bb8800f2d2f059efd41f6d8f38e435fa9736c7b10d1ccc8->leave($__internal_0c0c50d21ea0e44c4bb8800f2d2f059efd41f6d8f38e435fa9736c7b10d1ccc8_prof);

    }

    public function getTemplateName()
    {
        return "groupes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  105 => 35,  93 => 29,  87 => 26,  78 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Groupes list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for groupe in groupes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('groupes_show', { 'id': groupe.id }) }}">{{ groupe.id }}</a></td>*/
/*                 <td>{{ groupe.name }}</td>*/
/*                 <td>{% if groupe.created %}{{ groupe.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if groupe.updated %}{{ groupe.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('groupes_show', { 'id': groupe.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('groupes_edit', { 'id': groupe.id }) }}">edit</a>*/
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
/*             <a href="{{ path('groupes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
