<?php

/* structure/index.html.twig */
class __TwigTemplate_903c27762556eeba10e1e60cbb51b512dd8d2aed6bccbec144e315b946786cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "structure/index.html.twig", 1);
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
        $__internal_8c4e10c75517b9603be3770ec3031050f63ebb743cd10d6311cac72ed830d7a8 = $this->env->getExtension("native_profiler");
        $__internal_8c4e10c75517b9603be3770ec3031050f63ebb743cd10d6311cac72ed830d7a8->enter($__internal_8c4e10c75517b9603be3770ec3031050f63ebb743cd10d6311cac72ed830d7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "structure/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c4e10c75517b9603be3770ec3031050f63ebb743cd10d6311cac72ed830d7a8->leave($__internal_8c4e10c75517b9603be3770ec3031050f63ebb743cd10d6311cac72ed830d7a8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f59897e5136b3e790ae8ef3b3e075104956ee6d34bf181c8f7128059812de97 = $this->env->getExtension("native_profiler");
        $__internal_6f59897e5136b3e790ae8ef3b3e075104956ee6d34bf181c8f7128059812de97->enter($__internal_6f59897e5136b3e790ae8ef3b3e075104956ee6d34bf181c8f7128059812de97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f59897e5136b3e790ae8ef3b3e075104956ee6d34bf181c8f7128059812de97->leave($__internal_6f59897e5136b3e790ae8ef3b3e075104956ee6d34bf181c8f7128059812de97_prof);

    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        $__internal_62cdf95353525390a54b036fadf5c32921385c46f8a6149e0fd2214f0177d9b3 = $this->env->getExtension("native_profiler");
        $__internal_62cdf95353525390a54b036fadf5c32921385c46f8a6149e0fd2214f0177d9b3->enter($__internal_62cdf95353525390a54b036fadf5c32921385c46f8a6149e0fd2214f0177d9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_62cdf95353525390a54b036fadf5c32921385c46f8a6149e0fd2214f0177d9b3->leave($__internal_62cdf95353525390a54b036fadf5c32921385c46f8a6149e0fd2214f0177d9b3_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bad6421d306a6e39355e094b82ec2c3d35576b30cec3440a79dc9de73ee24ad = $this->env->getExtension("native_profiler");
        $__internal_1bad6421d306a6e39355e094b82ec2c3d35576b30cec3440a79dc9de73ee24ad->enter($__internal_1bad6421d306a6e39355e094b82ec2c3d35576b30cec3440a79dc9de73ee24ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"name: activate to sort column ascending\">name</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"nomChef: activate to sort column ascending\">nomChef</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 268px;\" aria-label=\"prenomChef: activate to sort column ascending\">prenomChef</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 212px;\" aria-label=\"cinChef: activate to sort column ascending\">cinChef</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 212px;\" aria-label=\"universite: activate to sort column ascending\">universite</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 212px;\" aria-label=\"webSite: activate to sort column ascending\">webSite</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 212px;\" aria-label=\"dateCreation: activate to sort column ascending\">dateCreation</th>
                                      
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 154px;\" aria-label=\"Actions: activate to sort column ascending\">Action</th>
                                  </tr>
                              </thead>

        <tbody>
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["structures"]) ? $context["structures"] : $this->getContext($context, "structures")));
        foreach ($context['_seq'] as $context["_key"] => $context["structure"]) {
            // line 73
            echo "            <tr>
                <td><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("structure_show", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "nomChef", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "prenomChef", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "cinChef", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "universite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "webSite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            if ($this->getAttribute($context["structure"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["structure"], "dateCreation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                
               
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("structure_show", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("structure_edit", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['structure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </tbody>
        <tfoot>
                                  <tr>
                                      <th rowspan=\"1\" colspan=\"1\">ID</th>
                                      <th rowspan=\"1\" colspan=\"1\">name</th>
                                      <th rowspan=\"1\" colspan=\"1\">nomChef</th>
                                      <th rowspan=\"1\" colspan=\"1\">prenomChef</th>
                                      <th rowspan=\"1\" colspan=\"1\">cinChef</th>
                                      <th rowspan=\"1\" colspan=\"1\">universite</th>
                                      <th rowspan=\"1\" colspan=\"1\">webSite</th>
                                      <th rowspan=\"1\" colspan=\"1\">dateCreation</th>
                                     
                                      <th rowspan=\"1\" colspan=\"1\">Actions</th>
                                  </tr>
                              </tfoot>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("structure_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
            
            </div>
                  </div>
                  
              </div>
          </div>
        
        
 
      </div>
  
            
";
        
        $__internal_1bad6421d306a6e39355e094b82ec2c3d35576b30cec3440a79dc9de73ee24ad->leave($__internal_1bad6421d306a6e39355e094b82ec2c3d35576b30cec3440a79dc9de73ee24ad_prof);

    }

    public function getTemplateName()
    {
        return "structure/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 115,  209 => 96,  197 => 90,  191 => 87,  180 => 81,  176 => 80,  172 => 79,  168 => 78,  164 => 77,  160 => 76,  156 => 75,  150 => 74,  147 => 73,  143 => 72,  110 => 41,  104 => 40,  80 => 22,  75 => 21,  69 => 20,  54 => 11,  50 => 10,  42 => 6,  36 => 5,  11 => 1,);
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
/*   */
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
/* {% block body %}*/
/* */
/*       */
/*       <div class="box">*/
/*           <div class="box-header">*/
/*               <h3 class="box-title">Liste des Chercheurs LGM</h3>*/
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
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="name: activate to sort column ascending">name</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="nomChef: activate to sort column ascending">nomChef</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 268px;" aria-label="prenomChef: activate to sort column ascending">prenomChef</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 212px;" aria-label="cinChef: activate to sort column ascending">cinChef</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 212px;" aria-label="universite: activate to sort column ascending">universite</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 212px;" aria-label="webSite: activate to sort column ascending">webSite</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 212px;" aria-label="dateCreation: activate to sort column ascending">dateCreation</th>*/
/*                                       */
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;" aria-label="Actions: activate to sort column ascending">Action</th>*/
/*                                   </tr>*/
/*                               </thead>*/
/* */
/*         <tbody>*/
/*         {% for structure in structures %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('structure_show', { 'id': structure.id }) }}">{{ structure.id }}</a></td>*/
/*                 <td>{{ structure.name }}</td>*/
/*                 <td>{{ structure.nomChef }}</td>*/
/*                 <td>{{ structure.prenomChef }}</td>*/
/*                 <td>{{ structure.cinChef }}</td>*/
/*                 <td>{{ structure.universite }}</td>*/
/*                 <td>{{ structure.webSite }}</td>*/
/*                 <td>{% if structure.dateCreation %}{{ structure.dateCreation|date('Y-m-d') }}{% endif %}</td>*/
/*                 */
/*                */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('structure_show', { 'id': structure.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('structure_edit', { 'id': structure.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*         <tfoot>*/
/*                                   <tr>*/
/*                                       <th rowspan="1" colspan="1">ID</th>*/
/*                                       <th rowspan="1" colspan="1">name</th>*/
/*                                       <th rowspan="1" colspan="1">nomChef</th>*/
/*                                       <th rowspan="1" colspan="1">prenomChef</th>*/
/*                                       <th rowspan="1" colspan="1">cinChef</th>*/
/*                                       <th rowspan="1" colspan="1">universite</th>*/
/*                                       <th rowspan="1" colspan="1">webSite</th>*/
/*                                       <th rowspan="1" colspan="1">dateCreation</th>*/
/*                                      */
/*                                       <th rowspan="1" colspan="1">Actions</th>*/
/*                                   </tr>*/
/*                               </tfoot>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('structure_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*             */
/*             </div>*/
/*                   </div>*/
/*                   */
/*               </div>*/
/*           </div>*/
/*         */
/*         */
/*  */
/*       </div>*/
/*   */
/*             */
/* {% endblock %}*/
/* */
