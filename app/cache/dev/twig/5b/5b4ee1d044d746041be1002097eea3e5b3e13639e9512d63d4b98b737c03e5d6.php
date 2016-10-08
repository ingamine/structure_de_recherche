<?php

/* groupes/show.html.twig */
class __TwigTemplate_1342f2db21397819263c449c1a1966c0398778f258550ee7c704a5dca8a8efc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "groupes/show.html.twig", 1);
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
        $__internal_355a421856ae78d038789e58d4f568d8eac8757a5a689c2cafc147f70d106ad6 = $this->env->getExtension("native_profiler");
        $__internal_355a421856ae78d038789e58d4f568d8eac8757a5a689c2cafc147f70d106ad6->enter($__internal_355a421856ae78d038789e58d4f568d8eac8757a5a689c2cafc147f70d106ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "groupes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_355a421856ae78d038789e58d4f568d8eac8757a5a689c2cafc147f70d106ad6->leave($__internal_355a421856ae78d038789e58d4f568d8eac8757a5a689c2cafc147f70d106ad6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b5bb097caaf53ac13f0bc3e14f5efad5594cbfe02132cec5b28d849b6891459 = $this->env->getExtension("native_profiler");
        $__internal_7b5bb097caaf53ac13f0bc3e14f5efad5594cbfe02132cec5b28d849b6891459->enter($__internal_7b5bb097caaf53ac13f0bc3e14f5efad5594cbfe02132cec5b28d849b6891459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Groupes</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("groupes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("groupes_edit", array("id" => $this->getAttribute((isset($context["groupes"]) ? $context["groupes"] : $this->getContext($context, "groupes")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7b5bb097caaf53ac13f0bc3e14f5efad5594cbfe02132cec5b28d849b6891459->leave($__internal_7b5bb097caaf53ac13f0bc3e14f5efad5594cbfe02132cec5b28d849b6891459_prof);

    }

    public function getTemplateName()
    {
        return "groupes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  95 => 35,  89 => 32,  83 => 29,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Groupes</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ groupes.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ groupes.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{% if groupes.created %}{{ groupes.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if groupes.updated %}{{ groupes.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('groupes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('groupes_edit', { 'id': groupes.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
