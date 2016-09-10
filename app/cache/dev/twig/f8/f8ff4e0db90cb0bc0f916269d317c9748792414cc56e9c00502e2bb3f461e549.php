<?php

/* habilitation/index.html.twig */
class __TwigTemplate_f9936a2d48223cd71b8e5096defe5869fd2ab0a3b7311a88e4b36327c61b3381 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "habilitation/index.html.twig", 1);
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
        $__internal_2c40c91c44870e1ffd35148cc3dee74fdc4cabcaeca9edb46b01c2c03c7259af = $this->env->getExtension("native_profiler");
        $__internal_2c40c91c44870e1ffd35148cc3dee74fdc4cabcaeca9edb46b01c2c03c7259af->enter($__internal_2c40c91c44870e1ffd35148cc3dee74fdc4cabcaeca9edb46b01c2c03c7259af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "habilitation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c40c91c44870e1ffd35148cc3dee74fdc4cabcaeca9edb46b01c2c03c7259af->leave($__internal_2c40c91c44870e1ffd35148cc3dee74fdc4cabcaeca9edb46b01c2c03c7259af_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9ea2a9117f2f8f2c5e1cea13d55064d2bebac8c643c4e85a5438566edfa1f4e = $this->env->getExtension("native_profiler");
        $__internal_e9ea2a9117f2f8f2c5e1cea13d55064d2bebac8c643c4e85a5438566edfa1f4e->enter($__internal_e9ea2a9117f2f8f2c5e1cea13d55064d2bebac8c643c4e85a5438566edfa1f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "  ";
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
        
        $__internal_e9ea2a9117f2f8f2c5e1cea13d55064d2bebac8c643c4e85a5438566edfa1f4e->leave($__internal_e9ea2a9117f2f8f2c5e1cea13d55064d2bebac8c643c4e85a5438566edfa1f4e_prof);

    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        $__internal_1c735abb1c13ac84921bd89d64ead191288999618e20cd33dae0dfc76ad8e640 = $this->env->getExtension("native_profiler");
        $__internal_1c735abb1c13ac84921bd89d64ead191288999618e20cd33dae0dfc76ad8e640->enter($__internal_1c735abb1c13ac84921bd89d64ead191288999618e20cd33dae0dfc76ad8e640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 21
        echo "  <script src=\"";
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
        
        $__internal_1c735abb1c13ac84921bd89d64ead191288999618e20cd33dae0dfc76ad8e640->leave($__internal_1c735abb1c13ac84921bd89d64ead191288999618e20cd33dae0dfc76ad8e640_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_c120a35be075eb2bda937cacccdeab1d2eee7ef5b559406862b36f2f190141cd = $this->env->getExtension("native_profiler");
        $__internal_c120a35be075eb2bda937cacccdeab1d2eee7ef5b559406862b36f2f190141cd->enter($__internal_c120a35be075eb2bda937cacccdeab1d2eee7ef5b559406862b36f2f190141cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "      
   <div class=\"box\">
          <div class=\"box-header\">
              <h3 class=\"box-title\">Liste des Habilitations LGM</h3>
          </div>
          <div class=\"box-body\">
              <div id=\"example1_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                  
                  
                  
                  
                  <div class=\"row\">
                      <div class=\"col-sm-12\">
                          <table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
                              <thead>
                                  <tr role=\"row\">
                                      <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 246px;\" aria-label=\"ID: activate to sort column descending\" aria-sort=\"ascending\">ID</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"Title: activate to sort column ascending\">Title</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"Firstdateregistered: activate to sort column ascending\">Firstdateregistered</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 268px;\" aria-label=\"Directeur: activate to sort column ascending\">Directeur</th>
                                     
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 154px;\" aria-label=\"Actions: activate to sort column ascending\">Action</th>
                                  </tr>
                              </thead>
                           <tbody>
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habilitations"]) ? $context["habilitations"] : $this->getContext($context, "habilitations")));
        foreach ($context['_seq'] as $context["_key"] => $context["habilitation"]) {
            // line 67
            echo "            <tr>
                <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habilitation_show", array("id" => $this->getAttribute($context["habilitation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["habilitation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["habilitation"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            if ($this->getAttribute($context["habilitation"], "firstDateRegistered", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["habilitation"], "firstDateRegistered", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["habilitation"], "directeur", array()), "html", null, true);
            echo "</td>
                
                
             
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habilitation_show", array("id" => $this->getAttribute($context["habilitation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("habilitation_edit", array("id" => $this->getAttribute($context["habilitation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilitation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </tbody>
                              <tfoot>
                                  <tr>
                                      <th rowspan=\"1\" colspan=\"1\">ID</th>
                                      <th rowspan=\"1\" colspan=\"1\">Title</th>
                                      <th rowspan=\"1\" colspan=\"1\">Firstdateregistered</th>
                                      <th rowspan=\"1\" colspan=\"1\">Directeur</th>
                                     
                                      <th rowspan=\"1\" colspan=\"1\">Actions</th>
                                  </tr>
                              </tfoot>
                          </table>   
                            
                                        
     <ul>
        <li>
            <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("habilitation_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
                      </div>
                  </div>
                  
              </div>
          </div>
        
        
 
      </div>
     
      
  ";
        // line 164
        echo "    
";
        
        $__internal_c120a35be075eb2bda937cacccdeab1d2eee7ef5b559406862b36f2f190141cd->leave($__internal_c120a35be075eb2bda937cacccdeab1d2eee7ef5b559406862b36f2f190141cd_prof);

    }

    public function getTemplateName()
    {
        return "habilitation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 164,  206 => 103,  188 => 87,  176 => 81,  170 => 78,  160 => 71,  154 => 70,  150 => 69,  144 => 68,  141 => 67,  137 => 66,  110 => 41,  104 => 40,  80 => 22,  75 => 21,  69 => 20,  54 => 11,  50 => 10,  42 => 6,  36 => 5,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* */
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*  */
/*   */
/*   <!-- DataTables -->*/
/*   <link rel="stylesheet" href="{{ asset('public/plugins/datatables/dataTables.bootstrap.css')}}"> */
/*   <link rel="stylesheet" href="{{ asset('public/dist/css/skins/_all-skins.min.css')}}">*/
/*           */
/*      <!-- jQuery 2.2.3 -->*/
/*     <!-- DataTables -->*/
/*    */
/* */
/*     */
/*   {% endblock %}*/
/*   */
/* {% block js %}*/
/*   <script src="{{ asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>*/
/* <script src="{{ asset('public/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>*/
/*     <script>*/
/*   $(function () {*/
/*     $("#example1").DataTable();*/
/*     $('#example2').DataTable({*/
/*       "paging": true,*/
/*       "lengthChange": false,*/
/*       "searching": false,*/
/*       "ordering": true,*/
/*       "info": true,*/
/*       "autoWidth": false*/
/*     });*/
/*   });*/
/* </script>*/
/*     */
/*     */
/*   {% endblock %}*/
/* */
/*   {% block body %}*/
/*       */
/*    <div class="box">*/
/*           <div class="box-header">*/
/*               <h3 class="box-title">Liste des Habilitations LGM</h3>*/
/*           </div>*/
/*           <div class="box-body">*/
/*               <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">*/
/*                   */
/*                   */
/*                   */
/*                   */
/*                   <div class="row">*/
/*                       <div class="col-sm-12">*/
/*                           <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">*/
/*                               <thead>*/
/*                                   <tr role="row">*/
/*                                       <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 246px;" aria-label="ID: activate to sort column descending" aria-sort="ascending">ID</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="Title: activate to sort column ascending">Title</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="Firstdateregistered: activate to sort column ascending">Firstdateregistered</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 268px;" aria-label="Directeur: activate to sort column ascending">Directeur</th>*/
/*                                      */
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;" aria-label="Actions: activate to sort column ascending">Action</th>*/
/*                                   </tr>*/
/*                               </thead>*/
/*                            <tbody>*/
/*         {% for habilitation in habilitations %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('habilitation_show', { 'id': habilitation.id }) }}">{{ habilitation.id }}</a></td>*/
/*                 <td>{{ habilitation.title }}</td>*/
/*                 <td>{% if habilitation.firstDateRegistered %}{{ habilitation.firstDateRegistered|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ habilitation.directeur }}</td>*/
/*                 */
/*                 */
/*              */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('habilitation_show', { 'id': habilitation.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('habilitation_edit', { 'id': habilitation.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*                               <tfoot>*/
/*                                   <tr>*/
/*                                       <th rowspan="1" colspan="1">ID</th>*/
/*                                       <th rowspan="1" colspan="1">Title</th>*/
/*                                       <th rowspan="1" colspan="1">Firstdateregistered</th>*/
/*                                       <th rowspan="1" colspan="1">Directeur</th>*/
/*                                      */
/*                                       <th rowspan="1" colspan="1">Actions</th>*/
/*                                   </tr>*/
/*                               </tfoot>*/
/*                           </table>   */
/*                             */
/*                                         */
/*      <ul>*/
/*         <li>*/
/*             <a href="{{ path('habilitation_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*                       </div>*/
/*                   </div>*/
/*                   */
/*               </div>*/
/*           </div>*/
/*         */
/*         */
/*  */
/*       </div>*/
/*      */
/*       */
/*   {#*/
/*     <h1>Habilitation list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Firstdateregistered</th>*/
/*                 <th>Directeur</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*                */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for habilitation in habilitations %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('habilitation_show', { 'id': habilitation.id }) }}">{{ habilitation.id }}</a></td>*/
/*                 <td>{{ habilitation.title }}</td>*/
/*                 <td>{% if habilitation.firstDateRegistered %}{{ habilitation.firstDateRegistered|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ habilitation.directeur }}</td>*/
/*                 <td>{% if habilitation.created %}{{ habilitation.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if habilitation.updated %}{{ habilitation.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*              */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('habilitation_show', { 'id': habilitation.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('habilitation_edit', { 'id': habilitation.id }) }}">edit</a>*/
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
/*             <a href="{{ path('habilitation_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*     */
/* #}    */
/* {% endblock %}*/
/* */
