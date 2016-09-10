<?php

/* :media:index.html.twig */
class __TwigTemplate_7cad8179fd3f5e65e0a2f263ab24f636e19b3fdb9dc74e99ffa87349dbb63d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":media:index.html.twig", 1);
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
        $__internal_5387fa45339ea30bf5bb51fab147490333a0d6d8f86654c46a8760c30a6710e0 = $this->env->getExtension("native_profiler");
        $__internal_5387fa45339ea30bf5bb51fab147490333a0d6d8f86654c46a8760c30a6710e0->enter($__internal_5387fa45339ea30bf5bb51fab147490333a0d6d8f86654c46a8760c30a6710e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":media:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5387fa45339ea30bf5bb51fab147490333a0d6d8f86654c46a8760c30a6710e0->leave($__internal_5387fa45339ea30bf5bb51fab147490333a0d6d8f86654c46a8760c30a6710e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de1fb7ca54c461ff327e15164bee926970f0c03920305eb26f5e8e65e09640b5 = $this->env->getExtension("native_profiler");
        $__internal_de1fb7ca54c461ff327e15164bee926970f0c03920305eb26f5e8e65e09640b5->enter($__internal_de1fb7ca54c461ff327e15164bee926970f0c03920305eb26f5e8e65e09640b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Media list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Filename</th>
                <th>Path</th>
                <th>Created</th>
                <th>Updated</th>
              
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")));
        foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "fileName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "path", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["medium"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["medium"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["medium"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["medium"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
               
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_edit", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("media_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_de1fb7ca54c461ff327e15164bee926970f0c03920305eb26f5e8e65e09640b5->leave($__internal_de1fb7ca54c461ff327e15164bee926970f0c03920305eb26f5e8e65e09640b5_prof);

    }

    public function getTemplateName()
    {
        return ":media:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  112 => 39,  100 => 33,  94 => 30,  84 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Media list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Filename</th>*/
/*                 <th>Path</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*               */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for medium in media %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('media_show', { 'id': medium.id }) }}">{{ medium.id }}</a></td>*/
/*                 <td>{{ medium.fileName }}</td>*/
/*                 <td>{{ medium.path }}</td>*/
/*                 <td>{% if medium.created %}{{ medium.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if medium.updated %}{{ medium.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('media_show', { 'id': medium.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('media_edit', { 'id': medium.id }) }}">edit</a>*/
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
/*             <a href="{{ path('media_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
