<?php

/* :researchteam:show.html.twig */
class __TwigTemplate_5fd8fc0b5524080f795f1e0f4605c3c786dbec5488938a3273e58d6623dd69ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":researchteam:show.html.twig", 1);
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
        $__internal_a8c88f7f77482295f6a207ee2e1dee5219844c39dce8fd8fc777ce8329052a8d = $this->env->getExtension("native_profiler");
        $__internal_a8c88f7f77482295f6a207ee2e1dee5219844c39dce8fd8fc777ce8329052a8d->enter($__internal_a8c88f7f77482295f6a207ee2e1dee5219844c39dce8fd8fc777ce8329052a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":researchteam:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c88f7f77482295f6a207ee2e1dee5219844c39dce8fd8fc777ce8329052a8d->leave($__internal_a8c88f7f77482295f6a207ee2e1dee5219844c39dce8fd8fc777ce8329052a8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e581823382879eff01396e68d8f32d3a9520cbab071904f3cbb816a0a5988417 = $this->env->getExtension("native_profiler");
        $__internal_e581823382879eff01396e68d8f32d3a9520cbab071904f3cbb816a0a5988417->enter($__internal_e581823382879eff01396e68d8f32d3a9520cbab071904f3cbb816a0a5988417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ResearchTeam</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["researchTeam"]) ? $context["researchTeam"] : $this->getContext($context, "researchTeam")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["researchTeam"]) ? $context["researchTeam"] : $this->getContext($context, "researchTeam")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Productionindex</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["researchTeam"]) ? $context["researchTeam"] : $this->getContext($context, "researchTeam")), "productionIndex", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["researchTeam"]) ? $context["researchTeam"] : $this->getContext($context, "researchTeam")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["researchTeam"]) ? $context["researchTeam"] : $this->getContext($context, "researchTeam")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["researchTeam"]) ? $context["researchTeam"] : $this->getContext($context, "researchTeam")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["researchTeam"]) ? $context["researchTeam"] : $this->getContext($context, "researchTeam")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("researchteam_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("researchteam_edit", array("id" => $this->getAttribute((isset($context["researchTeam"]) ? $context["researchTeam"] : $this->getContext($context, "researchTeam")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e581823382879eff01396e68d8f32d3a9520cbab071904f3cbb816a0a5988417->leave($__internal_e581823382879eff01396e68d8f32d3a9520cbab071904f3cbb816a0a5988417_prof);

    }

    public function getTemplateName()
    {
        return ":researchteam:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 42,  103 => 40,  97 => 37,  91 => 34,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>ResearchTeam</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ researchTeam.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ researchTeam.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Productionindex</th>*/
/*                 <td>{{ researchTeam.productionIndex }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{% if researchTeam.created %}{{ researchTeam.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if researchTeam.updated %}{{ researchTeam.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('researchteam_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('researchteam_edit', { 'id': researchTeam.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
