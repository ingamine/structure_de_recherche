<?php

/* :media:show.html.twig */
class __TwigTemplate_2ea1894fe74ec5384769a67a9a315d9372603da0e2a075ac27d2fbd0b3315356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":media:show.html.twig", 1);
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
        $__internal_32a6a29a81234fa7893c62eafd0ad71b2a885d635c3d619e5116904e031ff31d = $this->env->getExtension("native_profiler");
        $__internal_32a6a29a81234fa7893c62eafd0ad71b2a885d635c3d619e5116904e031ff31d->enter($__internal_32a6a29a81234fa7893c62eafd0ad71b2a885d635c3d619e5116904e031ff31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":media:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a6a29a81234fa7893c62eafd0ad71b2a885d635c3d619e5116904e031ff31d->leave($__internal_32a6a29a81234fa7893c62eafd0ad71b2a885d635c3d619e5116904e031ff31d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_212d54ec494f5425e8f4ac5e1a27bfcb3557e73e34c5ff7a57eed96e65531ca4 = $this->env->getExtension("native_profiler");
        $__internal_212d54ec494f5425e8f4ac5e1a27bfcb3557e73e34c5ff7a57eed96e65531ca4->enter($__internal_212d54ec494f5425e8f4ac5e1a27bfcb3557e73e34c5ff7a57eed96e65531ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Media</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Filename</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "fileName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("media_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_edit", array("id" => $this->getAttribute((isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "id", array()))), "html", null, true);
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
        
        $__internal_212d54ec494f5425e8f4ac5e1a27bfcb3557e73e34c5ff7a57eed96e65531ca4->leave($__internal_212d54ec494f5425e8f4ac5e1a27bfcb3557e73e34c5ff7a57eed96e65531ca4_prof);

    }

    public function getTemplateName()
    {
        return ":media:show.html.twig";
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
/*     <h1>Media</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ medium.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Filename</th>*/
/*                 <td>{{ medium.fileName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Path</th>*/
/*                 <td>{{ medium.path }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{% if medium.created %}{{ medium.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if medium.updated %}{{ medium.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('media_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('media_edit', { 'id': medium.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
