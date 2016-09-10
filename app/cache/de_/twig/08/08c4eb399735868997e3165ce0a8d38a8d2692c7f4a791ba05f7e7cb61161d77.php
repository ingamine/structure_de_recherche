<?php

/* media/index.html.twig */
class __TwigTemplate_8222e9db4220e4b47172e157a69cd11389569bcd316ab9ea4d427d48be86ed5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "media/index.html.twig", 1);
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
        $__internal_a03d8f88758cc18c7f17f623e3443710cf1c92b188224d616a1192ee5fcaee44 = $this->env->getExtension("native_profiler");
        $__internal_a03d8f88758cc18c7f17f623e3443710cf1c92b188224d616a1192ee5fcaee44->enter($__internal_a03d8f88758cc18c7f17f623e3443710cf1c92b188224d616a1192ee5fcaee44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03d8f88758cc18c7f17f623e3443710cf1c92b188224d616a1192ee5fcaee44->leave($__internal_a03d8f88758cc18c7f17f623e3443710cf1c92b188224d616a1192ee5fcaee44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a7a1357cf4e657da0c543a826503a995adc5e7308ef1c70e704f5e0f38f260f = $this->env->getExtension("native_profiler");
        $__internal_1a7a1357cf4e657da0c543a826503a995adc5e7308ef1c70e704f5e0f38f260f->enter($__internal_1a7a1357cf4e657da0c543a826503a995adc5e7308ef1c70e704f5e0f38f260f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a7a1357cf4e657da0c543a826503a995adc5e7308ef1c70e704f5e0f38f260f->leave($__internal_1a7a1357cf4e657da0c543a826503a995adc5e7308ef1c70e704f5e0f38f260f_prof);

    }

    public function getTemplateName()
    {
        return "media/index.html.twig";
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
