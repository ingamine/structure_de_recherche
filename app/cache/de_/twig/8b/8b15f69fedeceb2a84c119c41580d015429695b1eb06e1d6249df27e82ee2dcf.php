<?php

/* :habilitation:show.html.twig */
class __TwigTemplate_5d0531892a5239aace7aac4ae8ddd451b05263fc326f60ead4909758b47f2821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":habilitation:show.html.twig", 1);
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
        $__internal_9915eebfeae89d46fd5d7812679ad8779ad317ac88ba8025da46eee3bad9066b = $this->env->getExtension("native_profiler");
        $__internal_9915eebfeae89d46fd5d7812679ad8779ad317ac88ba8025da46eee3bad9066b->enter($__internal_9915eebfeae89d46fd5d7812679ad8779ad317ac88ba8025da46eee3bad9066b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":habilitation:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9915eebfeae89d46fd5d7812679ad8779ad317ac88ba8025da46eee3bad9066b->leave($__internal_9915eebfeae89d46fd5d7812679ad8779ad317ac88ba8025da46eee3bad9066b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e0c63f99995bfa6715eec47e63fa5bd6df18eb5978ec5bb8f910792e81be8e0 = $this->env->getExtension("native_profiler");
        $__internal_2e0c63f99995bfa6715eec47e63fa5bd6df18eb5978ec5bb8f910792e81be8e0->enter($__internal_2e0c63f99995bfa6715eec47e63fa5bd6df18eb5978ec5bb8f910792e81be8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Habilitation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["habilitation"]) ? $context["habilitation"] : $this->getContext($context, "habilitation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["habilitation"]) ? $context["habilitation"] : $this->getContext($context, "habilitation")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstdateregistered</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["habilitation"]) ? $context["habilitation"] : $this->getContext($context, "habilitation")), "firstDateRegistered", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["habilitation"]) ? $context["habilitation"] : $this->getContext($context, "habilitation")), "firstDateRegistered", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Directeur</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["habilitation"]) ? $context["habilitation"] : $this->getContext($context, "habilitation")), "directeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["habilitation"]) ? $context["habilitation"] : $this->getContext($context, "habilitation")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["habilitation"]) ? $context["habilitation"] : $this->getContext($context, "habilitation")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["habilitation"]) ? $context["habilitation"] : $this->getContext($context, "habilitation")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["habilitation"]) ? $context["habilitation"] : $this->getContext($context, "habilitation")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
           
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("habilitation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habilitation_edit", array("id" => $this->getAttribute((isset($context["habilitation"]) ? $context["habilitation"] : $this->getContext($context, "habilitation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2e0c63f99995bfa6715eec47e63fa5bd6df18eb5978ec5bb8f910792e81be8e0->leave($__internal_2e0c63f99995bfa6715eec47e63fa5bd6df18eb5978ec5bb8f910792e81be8e0_prof);

    }

    public function getTemplateName()
    {
        return ":habilitation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  112 => 44,  106 => 41,  100 => 38,  87 => 30,  78 => 26,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Habilitation</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ habilitation.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ habilitation.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstdateregistered</th>*/
/*                 <td>{% if habilitation.firstDateRegistered %}{{ habilitation.firstDateRegistered|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Directeur</th>*/
/*                 <td>{{ habilitation.directeur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{% if habilitation.created %}{{ habilitation.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if habilitation.updated %}{{ habilitation.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*            */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('habilitation_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('habilitation_edit', { 'id': habilitation.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
