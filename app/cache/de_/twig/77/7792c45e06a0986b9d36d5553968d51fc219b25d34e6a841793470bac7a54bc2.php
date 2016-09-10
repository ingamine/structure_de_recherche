<?php

/* media/show.html.twig */
class __TwigTemplate_b4756278d874cb71ab7633ad6269e7c244ca4e77d4c5476e4d4ed14702f742ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "media/show.html.twig", 1);
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
        $__internal_ec2319b71d6240df7b2aa6619caf42669b1bf4790527ff2244d5b80f8adde7f2 = $this->env->getExtension("native_profiler");
        $__internal_ec2319b71d6240df7b2aa6619caf42669b1bf4790527ff2244d5b80f8adde7f2->enter($__internal_ec2319b71d6240df7b2aa6619caf42669b1bf4790527ff2244d5b80f8adde7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec2319b71d6240df7b2aa6619caf42669b1bf4790527ff2244d5b80f8adde7f2->leave($__internal_ec2319b71d6240df7b2aa6619caf42669b1bf4790527ff2244d5b80f8adde7f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_074523e52d3554d52ae65d4f9071ae13e1d98352786f27b4af7a55f3fbb92371 = $this->env->getExtension("native_profiler");
        $__internal_074523e52d3554d52ae65d4f9071ae13e1d98352786f27b4af7a55f3fbb92371->enter($__internal_074523e52d3554d52ae65d4f9071ae13e1d98352786f27b4af7a55f3fbb92371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_074523e52d3554d52ae65d4f9071ae13e1d98352786f27b4af7a55f3fbb92371->leave($__internal_074523e52d3554d52ae65d4f9071ae13e1d98352786f27b4af7a55f3fbb92371_prof);

    }

    public function getTemplateName()
    {
        return "media/show.html.twig";
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
