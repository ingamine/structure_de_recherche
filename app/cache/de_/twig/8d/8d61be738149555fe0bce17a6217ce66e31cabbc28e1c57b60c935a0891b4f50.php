<?php

/* habilitation/show.html.twig */
class __TwigTemplate_5235136edb489066f16a10c26935cffc163de3dfa3a221532e39cf6b05891fa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "habilitation/show.html.twig", 1);
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
        $__internal_cebdf95532bd1a021e113c2433d5da6b258f4c4cd719112400fe8fa95fbc0859 = $this->env->getExtension("native_profiler");
        $__internal_cebdf95532bd1a021e113c2433d5da6b258f4c4cd719112400fe8fa95fbc0859->enter($__internal_cebdf95532bd1a021e113c2433d5da6b258f4c4cd719112400fe8fa95fbc0859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "habilitation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebdf95532bd1a021e113c2433d5da6b258f4c4cd719112400fe8fa95fbc0859->leave($__internal_cebdf95532bd1a021e113c2433d5da6b258f4c4cd719112400fe8fa95fbc0859_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ac2f85e5c904219d03ebe59732f4a319ab0de7a654b1212e1c429842d59e3da = $this->env->getExtension("native_profiler");
        $__internal_3ac2f85e5c904219d03ebe59732f4a319ab0de7a654b1212e1c429842d59e3da->enter($__internal_3ac2f85e5c904219d03ebe59732f4a319ab0de7a654b1212e1c429842d59e3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3ac2f85e5c904219d03ebe59732f4a319ab0de7a654b1212e1c429842d59e3da->leave($__internal_3ac2f85e5c904219d03ebe59732f4a319ab0de7a654b1212e1c429842d59e3da_prof);

    }

    public function getTemplateName()
    {
        return "habilitation/show.html.twig";
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
