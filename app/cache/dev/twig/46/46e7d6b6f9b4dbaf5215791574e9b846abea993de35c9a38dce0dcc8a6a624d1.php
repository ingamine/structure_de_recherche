<?php

/* user/show.html.twig */
class __TwigTemplate_6f13b4c7c3a56c062520ea1563b02d2b45ebd9cde7c1e00652c7a4fb59d73d23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "user/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72c409f5d23a0101d5eb86077fc4d5e965ef63c657acca2300766814acc3691a = $this->env->getExtension("native_profiler");
        $__internal_72c409f5d23a0101d5eb86077fc4d5e965ef63c657acca2300766814acc3691a->enter($__internal_72c409f5d23a0101d5eb86077fc4d5e965ef63c657acca2300766814acc3691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c409f5d23a0101d5eb86077fc4d5e965ef63c657acca2300766814acc3691a->leave($__internal_72c409f5d23a0101d5eb86077fc4d5e965ef63c657acca2300766814acc3691a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ec23f12e2300c74eb94188ca639a4a5c4dae6475517b089b3ae5e6425f1804f = $this->env->getExtension("native_profiler");
        $__internal_6ec23f12e2300c74eb94188ca639a4a5c4dae6475517b089b3ae5e6425f1804f->enter($__internal_6ec23f12e2300c74eb94188ca639a4a5c4dae6475517b089b3ae5e6425f1804f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthday", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthday", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                       
            </tr>
            <tr>
                <th>Birthplace</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "birthPlace", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phoneNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Grade</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "grade", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Profile</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "profile", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Documentid</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "documentId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photoid</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "photoId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Directeur</th>
                <td>";
        // line 59
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "directeur", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Codirecteur</th>
                <td>";
        // line 63
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "coDirecteur", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Effectue</th>
                <td>";
        // line 67
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "effectue", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Mediaid</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mediaId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 75
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 79
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
           
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 93
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6ec23f12e2300c74eb94188ca639a4a5c4dae6475517b089b3ae5e6425f1804f->leave($__internal_6ec23f12e2300c74eb94188ca639a4a5c4dae6475517b089b3ae5e6425f1804f_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 95,  209 => 93,  203 => 90,  197 => 87,  184 => 79,  175 => 75,  168 => 71,  157 => 67,  146 => 63,  135 => 59,  128 => 55,  121 => 51,  114 => 47,  107 => 43,  100 => 39,  93 => 35,  86 => 31,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block content %}*/
/*     <h1>User</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ user.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ user.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <td>{{ user.lastName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Gender</th>*/
/*                 <td>{{ user.gender }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Birthday</th>*/
/*                 <td>{% if user.birthday %}{{ user.birthday|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                        */
/*             </tr>*/
/*             <tr>*/
/*                 <th>Birthplace</th>*/
/*                 <td>{{ user.birthPlace }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ user.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phonenumber</th>*/
/*                 <td>{{ user.phoneNumber }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Grade</th>*/
/*                 <td>{{ user.grade }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Profile</th>*/
/*                 <td>{{ user.profile }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Documentid</th>*/
/*                 <td>{{ user.documentId }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Photoid</th>*/
/*                 <td>{{ user.photoId }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Directeur</th>*/
/*                 <td>{% if user.directeur %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Codirecteur</th>*/
/*                 <td>{% if user.coDirecteur %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Effectue</th>*/
/*                 <td>{% if user.effectue %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Mediaid</th>*/
/*                 <td>{{ user.mediaId }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{% if user.created %}{{ user.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if user.updated %}{{ user.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*            */
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('user_edit', { 'id': user.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
