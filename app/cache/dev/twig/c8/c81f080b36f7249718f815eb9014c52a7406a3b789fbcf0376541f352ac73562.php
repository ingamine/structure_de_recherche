<?php

/* :these:index.html.twig */
class __TwigTemplate_520c910a1cd2276a1167150df2a17b0e2281ca7e820b6cc195eae270a7d28c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":these:index.html.twig", 1);
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
        $__internal_4acb87f2876eec8bd29322f4d35b18e05b72547a50539b71ffdf95bc837380a8 = $this->env->getExtension("native_profiler");
        $__internal_4acb87f2876eec8bd29322f4d35b18e05b72547a50539b71ffdf95bc837380a8->enter($__internal_4acb87f2876eec8bd29322f4d35b18e05b72547a50539b71ffdf95bc837380a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":these:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4acb87f2876eec8bd29322f4d35b18e05b72547a50539b71ffdf95bc837380a8->leave($__internal_4acb87f2876eec8bd29322f4d35b18e05b72547a50539b71ffdf95bc837380a8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30479aadbe05802a0b23b8c4c590be1939bed635aac672a7864641989eceb4f9 = $this->env->getExtension("native_profiler");
        $__internal_30479aadbe05802a0b23b8c4c590be1939bed635aac672a7864641989eceb4f9->enter($__internal_30479aadbe05802a0b23b8c4c590be1939bed635aac672a7864641989eceb4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_30479aadbe05802a0b23b8c4c590be1939bed635aac672a7864641989eceb4f9->leave($__internal_30479aadbe05802a0b23b8c4c590be1939bed635aac672a7864641989eceb4f9_prof);

    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        $__internal_942a3bc300faecb7f59989fc185ba1f122a7e0acd53c17dce5c798afe6e1dc85 = $this->env->getExtension("native_profiler");
        $__internal_942a3bc300faecb7f59989fc185ba1f122a7e0acd53c17dce5c798afe6e1dc85->enter($__internal_942a3bc300faecb7f59989fc185ba1f122a7e0acd53c17dce5c798afe6e1dc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_942a3bc300faecb7f59989fc185ba1f122a7e0acd53c17dce5c798afe6e1dc85->leave($__internal_942a3bc300faecb7f59989fc185ba1f122a7e0acd53c17dce5c798afe6e1dc85_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c115579edc8d050630ebf64c4ee03228d4e47dc1cecfaa78605fc23c52f0e7f = $this->env->getExtension("native_profiler");
        $__internal_1c115579edc8d050630ebf64c4ee03228d4e47dc1cecfaa78605fc23c52f0e7f->enter($__internal_1c115579edc8d050630ebf64c4ee03228d4e47dc1cecfaa78605fc23c52f0e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"title: activate to sort column ascending\">title</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"firstDateRegistered: activate to sort column ascending\">firstDateRegistered</th>
                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 268px;\" aria-label=\"updated: activate to sort column ascending\">updated</th>

                                    <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 154px;\" aria-label=\"Actions: activate to sort column ascending\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theses"]) ? $context["theses"] : $this->getContext($context, "theses")));
        foreach ($context['_seq'] as $context["_key"] => $context["these"]) {
            // line 68
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("these_show", array("id" => $this->getAttribute($context["these"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["these"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["these"], "title", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 71
            if ($this->getAttribute($context["these"], "firstDateRegistered", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["these"], "firstDateRegistered", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 72
            if ($this->getAttribute($context["these"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["these"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("these_show", array("id" => $this->getAttribute($context["these"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("these_edit", array("id" => $this->getAttribute($context["these"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['these'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan=\"1\" colspan=\"1\">ID</th>
                                    <th rowspan=\"1\" colspan=\"1\">title</th>
                                    <th rowspan=\"1\" colspan=\"1\">firstDateRegistered</th>
                                    <th rowspan=\"1\" colspan=\"1\">updated</th>


                                    <th rowspan=\"1\" colspan=\"1\">Actions</th>
                                </tr>
                            </tfoot>
                        </table>

                        <ul>
                            <li>
                                <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("these_new");
        echo "\">Create a new entry</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>



    </div>
";
        
        $__internal_1c115579edc8d050630ebf64c4ee03228d4e47dc1cecfaa78605fc23c52f0e7f->leave($__internal_1c115579edc8d050630ebf64c4ee03228d4e47dc1cecfaa78605fc23c52f0e7f_prof);

    }

    public function getTemplateName()
    {
        return ":these:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 102,  189 => 86,  177 => 80,  171 => 77,  161 => 72,  155 => 71,  151 => 70,  145 => 69,  142 => 68,  138 => 67,  110 => 41,  104 => 40,  80 => 22,  75 => 21,  69 => 20,  54 => 11,  50 => 10,  42 => 6,  36 => 5,  11 => 1,);
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
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="title: activate to sort column ascending">title</th>*/
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="firstDateRegistered: activate to sort column ascending">firstDateRegistered</th>*/
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 268px;" aria-label="updated: activate to sort column ascending">updated</th>*/
/* */
/*                                     <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;" aria-label="Actions: activate to sort column ascending">Action</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for these in theses %}*/
/*                                     <tr>*/
/*                                         <td><a href="{{ path('these_show', { 'id': these.id }) }}">{{ these.id }}</a></td>*/
/*                                         <td>{{ these.title }}</td>*/
/*                                         <td>{% if these.firstDateRegistered %}{{ these.firstDateRegistered|date('Y-m-d') }}{% endif %}</td>*/
/*                                         <td>{% if these.updated %}{{ these.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/* */
/*                                         <td>*/
/*                                             <ul>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('these_show', { 'id': these.id }) }}">show</a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('these_edit', { 'id': these.id }) }}">edit</a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                             <tfoot>*/
/*                                 <tr>*/
/*                                     <th rowspan="1" colspan="1">ID</th>*/
/*                                     <th rowspan="1" colspan="1">title</th>*/
/*                                     <th rowspan="1" colspan="1">firstDateRegistered</th>*/
/*                                     <th rowspan="1" colspan="1">updated</th>*/
/* */
/* */
/*                                     <th rowspan="1" colspan="1">Actions</th>*/
/*                                 </tr>*/
/*                             </tfoot>*/
/*                         </table>*/
/* */
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('these_new') }}">Create a new entry</a>*/
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
/* {% endblock %}*/
/* */
