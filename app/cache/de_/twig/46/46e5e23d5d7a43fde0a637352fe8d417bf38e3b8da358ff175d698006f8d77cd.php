<?php

/* mastere/show.html.twig */
class __TwigTemplate_154a8cc4c8a39c7dfb27f45cf07ccc6e23a600f847536cd3be772df96eb9f1fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mastere/show.html.twig", 1);
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
        $__internal_2a9e0e424407314ad568d7005b8d71cd5d50a6acfbe3e1ce4b1fd13a840cf452 = $this->env->getExtension("native_profiler");
        $__internal_2a9e0e424407314ad568d7005b8d71cd5d50a6acfbe3e1ce4b1fd13a840cf452->enter($__internal_2a9e0e424407314ad568d7005b8d71cd5d50a6acfbe3e1ce4b1fd13a840cf452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mastere/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9e0e424407314ad568d7005b8d71cd5d50a6acfbe3e1ce4b1fd13a840cf452->leave($__internal_2a9e0e424407314ad568d7005b8d71cd5d50a6acfbe3e1ce4b1fd13a840cf452_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a311274b7747fc5609e73b131edb3c243abce574bc8c2d6584aa4f0a3a858de1 = $this->env->getExtension("native_profiler");
        $__internal_a311274b7747fc5609e73b131edb3c243abce574bc8c2d6584aa4f0a3a858de1->enter($__internal_a311274b7747fc5609e73b131edb3c243abce574bc8c2d6584aa4f0a3a858de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Mastere</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mastere"]) ? $context["mastere"] : $this->getContext($context, "mastere")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mastere"]) ? $context["mastere"] : $this->getContext($context, "mastere")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstdateregistered</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["mastere"]) ? $context["mastere"] : $this->getContext($context, "mastere")), "firstDateRegistered", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mastere"]) ? $context["mastere"] : $this->getContext($context, "mastere")), "firstDateRegistered", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["mastere"]) ? $context["mastere"] : $this->getContext($context, "mastere")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mastere"]) ? $context["mastere"] : $this->getContext($context, "mastere")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
           
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("mastere_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mastere_edit", array("id" => $this->getAttribute((isset($context["mastere"]) ? $context["mastere"] : $this->getContext($context, "mastere")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a311274b7747fc5609e73b131edb3c243abce574bc8c2d6584aa4f0a3a858de1->leave($__internal_a311274b7747fc5609e73b131edb3c243abce574bc8c2d6584aa4f0a3a858de1_prof);

    }

    public function getTemplateName()
    {
        return "mastere/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 38,  96 => 36,  90 => 33,  84 => 30,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Mastere</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ mastere.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ mastere.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstdateregistered</th>*/
/*                 <td>{% if mastere.firstDateRegistered %}{{ mastere.firstDateRegistered|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if mastere.updated %}{{ mastere.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*            */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('mastere_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('mastere_edit', { 'id': mastere.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
