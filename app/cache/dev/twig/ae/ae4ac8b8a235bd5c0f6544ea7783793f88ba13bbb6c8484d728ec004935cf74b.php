<?php

/* user/index.html.twig */
class __TwigTemplate_ccca3831da101c5451e7900e866ce443b55498cb5fb460ad03c7f18db93efb71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a706cd34bb11e8012c22a0b4e7f3d977ea67d1a4e490fd0a0598671d2bf7104d = $this->env->getExtension("native_profiler");
        $__internal_a706cd34bb11e8012c22a0b4e7f3d977ea67d1a4e490fd0a0598671d2bf7104d->enter($__internal_a706cd34bb11e8012c22a0b4e7f3d977ea67d1a4e490fd0a0598671d2bf7104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a706cd34bb11e8012c22a0b4e7f3d977ea67d1a4e490fd0a0598671d2bf7104d->leave($__internal_a706cd34bb11e8012c22a0b4e7f3d977ea67d1a4e490fd0a0598671d2bf7104d_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d71d5a4972fd5a83f405761e946d5cf1c871d7727fac0cfb5a3d6300c7c827e4 = $this->env->getExtension("native_profiler");
        $__internal_d71d5a4972fd5a83f405761e946d5cf1c871d7727fac0cfb5a3d6300c7c827e4->enter($__internal_d71d5a4972fd5a83f405761e946d5cf1c871d7727fac0cfb5a3d6300c7c827e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "


    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\"> 
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">

    <!-- jQuery 2.2.3 -->
    <!-- DataTables -->



";
        
        $__internal_d71d5a4972fd5a83f405761e946d5cf1c871d7727fac0cfb5a3d6300c7c827e4->leave($__internal_d71d5a4972fd5a83f405761e946d5cf1c871d7727fac0cfb5a3d6300c7c827e4_prof);

    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        $__internal_437a0965b14fdc30ef46fc01496b48e2a4eb1e3826a3ee27ee7902621e5380b1 = $this->env->getExtension("native_profiler");
        $__internal_437a0965b14fdc30ef46fc01496b48e2a4eb1e3826a3ee27ee7902621e5380b1->enter($__internal_437a0965b14fdc30ef46fc01496b48e2a4eb1e3826a3ee27ee7902621e5380b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 21
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$(\"#example1\").DataTable();
            \$('#example2').DataTable({
                \"paging\": true,
                \"lengthChange\": false,
                \"searching\": false,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": false
            });
        });
    </script>


";
        
        $__internal_437a0965b14fdc30ef46fc01496b48e2a4eb1e3826a3ee27ee7902621e5380b1->leave($__internal_437a0965b14fdc30ef46fc01496b48e2a4eb1e3826a3ee27ee7902621e5380b1_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ef2d9349fcda63912a0450d43fb90cc9e637b0987544f18ef4ccf00a27b1b1e = $this->env->getExtension("native_profiler");
        $__internal_1ef2d9349fcda63912a0450d43fb90cc9e637b0987544f18ef4ccf00a27b1b1e->enter($__internal_1ef2d9349fcda63912a0450d43fb90cc9e637b0987544f18ef4ccf00a27b1b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "

    <div class=\"box\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">Liste des Chercheurs LGM</h3>
        </div>
        <div class=\"box-body\">
            <div id=\"example1_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">




                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
                            <thead>
                                <tr role=\"row\">
                                    <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 246px;\" aria-label=\"ID: activate to sort column descending\" aria-sort=\"ascending\">ID</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"Lastname: activate to sort column ascending\">Name</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"Lastname: activate to sort column ascending\">LastName</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 268px;\" aria-label=\"Email: activate to sort column ascending\">Email</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 212px;\" aria-label=\"Grade: activate to sort column ascending\">Grade</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 212px;\" aria-label=\"These: activate to sort column ascending\">These</th>

                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 212px;\" aria-label=\"Directeur: activate to sort column ascending\">Directeur</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 212px;\" aria-label=\"Codirecteur: activate to sort column ascending\">Codirecteur</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 212px;\" aria-label=\"Effectue: activate to sort column ascending\">Effectue</th>

                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 154px;\" aria-label=\"Actions: activate to sort column ascending\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 74
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>

                                        <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>

                                        <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "grade", array()), "html", null, true);
            echo "</td>

                                        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "These", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["unTag"]) {
                // line 84
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $context["unTag"], "html", null, true);
                echo "</td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unTag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "
                                        <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Directeur", array()), "html", null, true);
            echo "</td>

                                        <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Codirecteur", array()), "html", null, true);
            echo "</td>

                                        <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "Effectue", array()), "html", null, true);
            echo "</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan=\"1\" colspan=\"1\">ID</th>
                                    <th rowspan=\"1\" colspan=\"1\">Name</th>
                                    <th rowspan=\"1\" colspan=\"1\">Lastname</th>
                                    <th rowspan=\"1\" colspan=\"1\">Email</th>
                                    <th rowspan=\"1\" colspan=\"1\">Grade</th>
                                    <th rowspan=\"1\" colspan=\"1\">These</th>

                                    <th rowspan=\"1\" colspan=\"1\">Directeur</th>
                                    <th rowspan=\"1\" colspan=\"1\">Codirecteur</th>
                                    <th rowspan=\"1\" colspan=\"1\">Effectue</th>

                                    <th rowspan=\"1\" colspan=\"1\">Actions</th>
                                </tr>
                            </tfoot>
                        </table>   


                        <ul>
                            <li>
                                <a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" >Create a new entry</a>

                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>



    </div>


    ";
        
        $__internal_1ef2d9349fcda63912a0450d43fb90cc9e637b0987544f18ef4ccf00a27b1b1e->leave($__internal_1ef2d9349fcda63912a0450d43fb90cc9e637b0987544f18ef4ccf00a27b1b1e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 127,  228 => 105,  216 => 99,  210 => 96,  202 => 91,  197 => 89,  192 => 87,  189 => 86,  180 => 84,  176 => 83,  171 => 81,  166 => 79,  161 => 77,  157 => 76,  151 => 75,  148 => 74,  144 => 73,  110 => 41,  104 => 40,  80 => 22,  75 => 21,  69 => 20,  54 => 11,  50 => 10,  42 => 6,  36 => 5,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/* */
/*     <!-- DataTables -->*/
/*     <link rel="stylesheet" href="{{ asset('public/plugins/datatables/dataTables.bootstrap.css')}}"> */
/*     <link rel="stylesheet" href="{{ asset('public/dist/css/skins/_all-skins.min.css')}}">*/
/* */
/*     <!-- jQuery 2.2.3 -->*/
/*     <!-- DataTables -->*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     <script src="{{ asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>*/
/*     <script src="{{ asset('public/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>*/
/*     <script>*/
/*         $(function () {*/
/*             $("#example1").DataTable();*/
/*             $('#example2').DataTable({*/
/*                 "paging": true,*/
/*                 "lengthChange": false,*/
/*                 "searching": false,*/
/*                 "ordering": true,*/
/*                 "info": true,*/
/*                 "autoWidth": false*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <div class="box">*/
/*         <div class="box-header">*/
/*             <h3 class="box-title">Liste des Chercheurs LGM</h3>*/
/*         </div>*/
/*         <div class="box-body">*/
/*             <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">*/
/* */
/* */
/* */
/* */
/*                 <div class="row">*/
/*                     <div class="col-sm-12">*/
/*                         <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">*/
/*                             <thead>*/
/*                                 <tr role="row">*/
/*                                     <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 246px;" aria-label="ID: activate to sort column descending" aria-sort="ascending">ID</th>*/
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="Lastname: activate to sort column ascending">Name</th>*/
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="Lastname: activate to sort column ascending">LastName</th>*/
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 268px;" aria-label="Email: activate to sort column ascending">Email</th>*/
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 212px;" aria-label="Grade: activate to sort column ascending">Grade</th>*/
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 212px;" aria-label="These: activate to sort column ascending">These</th>*/
/* */
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 212px;" aria-label="Directeur: activate to sort column ascending">Directeur</th>*/
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 212px;" aria-label="Codirecteur: activate to sort column ascending">Codirecteur</th>*/
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 212px;" aria-label="Effectue: activate to sort column ascending">Effectue</th>*/
/* */
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;" aria-label="Actions: activate to sort column ascending">Action</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for user in users %}*/
/*                                     <tr>*/
/*                                         <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                                         <td>{{ user.name }}</td>*/
/*                                         <td>{{ user.lastName }}</td>*/
/* */
/*                                         <td>{{ user.email }}</td>*/
/* */
/*                                         <td>{{ user.grade }}</td>*/
/* */
/*                                         {% for unTag in user.These %}*/
/*                                             <td>{{ unTag }}</td>*/
/*                                         {% endfor %}*/
/* */
/*                                         <td>{{ user.Directeur }}</td>*/
/* */
/*                                         <td>{{ user.Codirecteur }}</td>*/
/* */
/*                                         <td>{{ user.Effectue }}</td>*/
/* */
/*                                         <td>*/
/*                                             <ul>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('user_show', { 'id': user.id }) }}">show</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('user_edit', { 'id': user.id }) }}">edit</a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                             <tfoot>*/
/*                                 <tr>*/
/*                                     <th rowspan="1" colspan="1">ID</th>*/
/*                                     <th rowspan="1" colspan="1">Name</th>*/
/*                                     <th rowspan="1" colspan="1">Lastname</th>*/
/*                                     <th rowspan="1" colspan="1">Email</th>*/
/*                                     <th rowspan="1" colspan="1">Grade</th>*/
/*                                     <th rowspan="1" colspan="1">These</th>*/
/* */
/*                                     <th rowspan="1" colspan="1">Directeur</th>*/
/*                                     <th rowspan="1" colspan="1">Codirecteur</th>*/
/*                                     <th rowspan="1" colspan="1">Effectue</th>*/
/* */
/*                                     <th rowspan="1" colspan="1">Actions</th>*/
/*                                 </tr>*/
/*                             </tfoot>*/
/*                         </table>   */
/* */
/* */
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('user_new') }}" >Create a new entry</a>*/
/* */
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/*     {#*/
/*     */
/*         <h1>User list</h1>*/
/*     */
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Name</th>*/
/*                     <th>Lastname</th>*/
/*                     <th>Gender</th>*/
/*                     <th>Birthday</th>*/
/*                     <th>Birthplace</th>*/
/*                     <th>Email</th>*/
/*                     <th>Phonenumber</th>*/
/*                     <th>Grade</th>*/
/*                     <th>Profile</th>*/
/*                     <th>Documentid</th>*/
/*                     <th>Photoid</th>*/
/*                     <th>Directeur</th>*/
/*                     <th>Codirecteur</th>*/
/*                     <th>Effectue</th>*/
/*                     <th>Mediaid</th>*/
/*                     <th>Created</th>*/
/*                     <th>Updated</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for user in users %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                     <td>{{ user.name }}</td>*/
/*                     <td>{{ user.lastName }}</td>*/
/*                     <td>{{ user.gender }}</td>*/
/*                     <td>{% if user.birthday %}{{ user.birthday|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{{ user.birthPlace }}</td>*/
/*                     <td>{{ user.email }}</td>*/
/*                     <td>{{ user.phoneNumber }}</td>*/
/*                     <td>{{ user.grade }}</td>*/
/*                     <td>{{ user.profile }}</td>*/
/*                     <td>{{ user.documentId }}</td>*/
/*                     <td>{{ user.photoId }}</td>*/
/*                     <td>{% if user.directeur %}Yes{% else %}No{% endif %}</td>*/
/*                     <td>{% if user.coDirecteur %}Yes{% else %}No{% endif %}</td>*/
/*                     <td>{% if user.effectue %}Yes{% else %}No{% endif %}</td>*/
/*                     <td>{{ user.mediaId }}</td>*/
/*                     <td>{% if user.created %}{{ user.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{% if user.updated %}{{ user.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     */
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('user_show', { 'id': user.id }) }}">show</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('user_edit', { 'id': user.id }) }}">edit</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     */
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('user_new') }}">Create a new entry</a>*/
/*             </li>*/
/*         </ul>      */
/*     */
/*     #}*/
/* {% endblock %}*/
/* */
