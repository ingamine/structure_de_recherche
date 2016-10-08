<?php

/* researchteam/show.html.twig */
class __TwigTemplate_908b93504b7c0ff6ea76fd32f3bb256e264f156deca024585b2e7cacbd0dd906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "researchteam/show.html.twig", 1);
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
        $__internal_66a75f24534df27e70742410625374982156fb53776599c47888dd6dbb0fc474 = $this->env->getExtension("native_profiler");
        $__internal_66a75f24534df27e70742410625374982156fb53776599c47888dd6dbb0fc474->enter($__internal_66a75f24534df27e70742410625374982156fb53776599c47888dd6dbb0fc474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "researchteam/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66a75f24534df27e70742410625374982156fb53776599c47888dd6dbb0fc474->leave($__internal_66a75f24534df27e70742410625374982156fb53776599c47888dd6dbb0fc474_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8e31d2bb32d933e5bf779dc3cb2ee96eec71146467c5e1bc5d664307f25647a = $this->env->getExtension("native_profiler");
        $__internal_e8e31d2bb32d933e5bf779dc3cb2ee96eec71146467c5e1bc5d664307f25647a->enter($__internal_e8e31d2bb32d933e5bf779dc3cb2ee96eec71146467c5e1bc5d664307f25647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e8e31d2bb32d933e5bf779dc3cb2ee96eec71146467c5e1bc5d664307f25647a->leave($__internal_e8e31d2bb32d933e5bf779dc3cb2ee96eec71146467c5e1bc5d664307f25647a_prof);

    }

    public function getTemplateName()
    {
        return "researchteam/show.html.twig";
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
/* {% extends('LgmBundle::layout.html.twig') %}*/
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
