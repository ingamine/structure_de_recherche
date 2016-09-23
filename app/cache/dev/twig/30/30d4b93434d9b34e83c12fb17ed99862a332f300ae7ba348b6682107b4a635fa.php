<?php

/* :etablissement:show.html.twig */
class __TwigTemplate_782a241741a0e1351aa7c0a89a47e85348e0bc3940bf2b17c27b8d8927249483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":etablissement:show.html.twig", 1);
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
        $__internal_421fc880ba350e59f5f64efe2b1ab287a880bb4678cf39e88248eff7ad34ad02 = $this->env->getExtension("native_profiler");
        $__internal_421fc880ba350e59f5f64efe2b1ab287a880bb4678cf39e88248eff7ad34ad02->enter($__internal_421fc880ba350e59f5f64efe2b1ab287a880bb4678cf39e88248eff7ad34ad02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":etablissement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_421fc880ba350e59f5f64efe2b1ab287a880bb4678cf39e88248eff7ad34ad02->leave($__internal_421fc880ba350e59f5f64efe2b1ab287a880bb4678cf39e88248eff7ad34ad02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f713d21cc41839fdcc59f0cac1de688a11b4ce89e19504ba3cc2401d60d1c5c8 = $this->env->getExtension("native_profiler");
        $__internal_f713d21cc41839fdcc59f0cac1de688a11b4ce89e19504ba3cc2401d60d1c5c8->enter($__internal_f713d21cc41839fdcc59f0cac1de688a11b4ce89e19504ba3cc2401d60d1c5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Etablissement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etablissement"]) ? $context["etablissement"] : $this->getContext($context, "etablissement")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["etablissement"]) ? $context["etablissement"] : $this->getContext($context, "etablissement")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["etablissement"]) ? $context["etablissement"] : $this->getContext($context, "etablissement")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etablissement"]) ? $context["etablissement"] : $this->getContext($context, "etablissement")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["etablissement"]) ? $context["etablissement"] : $this->getContext($context, "etablissement")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["etablissement"]) ? $context["etablissement"] : $this->getContext($context, "etablissement")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("etablissement_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etablissement_edit", array("id" => $this->getAttribute((isset($context["etablissement"]) ? $context["etablissement"] : $this->getContext($context, "etablissement")), "id", array()))), "html", null, true);
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
        
        $__internal_f713d21cc41839fdcc59f0cac1de688a11b4ce89e19504ba3cc2401d60d1c5c8->leave($__internal_f713d21cc41839fdcc59f0cac1de688a11b4ce89e19504ba3cc2401d60d1c5c8_prof);

    }

    public function getTemplateName()
    {
        return ":etablissement:show.html.twig";
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
/*     <h1>Etablissement</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ etablissement.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ etablissement.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{% if etablissement.created %}{{ etablissement.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if etablissement.updated %}{{ etablissement.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('etablissement_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('etablissement_edit', { 'id': etablissement.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
