<?php

/* :mastere:show.html.twig */
class __TwigTemplate_836273581aec30b478b7d829f15e8bbe173fe95d30048db75d90e72a8645e712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":mastere:show.html.twig", 1);
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
        $__internal_a66942de28f3e76d1c021cc0cd910b3a4abf4ce0074a4f892f7e1c420f5dcb5d = $this->env->getExtension("native_profiler");
        $__internal_a66942de28f3e76d1c021cc0cd910b3a4abf4ce0074a4f892f7e1c420f5dcb5d->enter($__internal_a66942de28f3e76d1c021cc0cd910b3a4abf4ce0074a4f892f7e1c420f5dcb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mastere:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a66942de28f3e76d1c021cc0cd910b3a4abf4ce0074a4f892f7e1c420f5dcb5d->leave($__internal_a66942de28f3e76d1c021cc0cd910b3a4abf4ce0074a4f892f7e1c420f5dcb5d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1799ca36075b0e92095fdd6f5d31fc02656dd260e58d9fa42d4a129fc7ef2222 = $this->env->getExtension("native_profiler");
        $__internal_1799ca36075b0e92095fdd6f5d31fc02656dd260e58d9fa42d4a129fc7ef2222->enter($__internal_1799ca36075b0e92095fdd6f5d31fc02656dd260e58d9fa42d4a129fc7ef2222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1799ca36075b0e92095fdd6f5d31fc02656dd260e58d9fa42d4a129fc7ef2222->leave($__internal_1799ca36075b0e92095fdd6f5d31fc02656dd260e58d9fa42d4a129fc7ef2222_prof);

    }

    public function getTemplateName()
    {
        return ":mastere:show.html.twig";
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
/* {% extends('LgmBundle::layout.html.twig') %}*/
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
