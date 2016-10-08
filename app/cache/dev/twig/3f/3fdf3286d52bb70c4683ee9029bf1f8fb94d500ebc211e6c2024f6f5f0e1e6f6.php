<?php

/* etablissement/index.html.twig */
class __TwigTemplate_b818e2d52490bada9963f995c1c34acaa47fe17808915ddfeef4d2245b4d7a8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "etablissement/index.html.twig", 1);
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
        $__internal_d95108a47b64b7872f4ea1cc5f3883efa4042b5d0a72b96d8a29f156bfa0f3fc = $this->env->getExtension("native_profiler");
        $__internal_d95108a47b64b7872f4ea1cc5f3883efa4042b5d0a72b96d8a29f156bfa0f3fc->enter($__internal_d95108a47b64b7872f4ea1cc5f3883efa4042b5d0a72b96d8a29f156bfa0f3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etablissement/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95108a47b64b7872f4ea1cc5f3883efa4042b5d0a72b96d8a29f156bfa0f3fc->leave($__internal_d95108a47b64b7872f4ea1cc5f3883efa4042b5d0a72b96d8a29f156bfa0f3fc_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_631e7a33ebc2f8b3f7bc19cfec557a53c54df3d9f5025afc314f526284a5113a = $this->env->getExtension("native_profiler");
        $__internal_631e7a33ebc2f8b3f7bc19cfec557a53c54df3d9f5025afc314f526284a5113a->enter($__internal_631e7a33ebc2f8b3f7bc19cfec557a53c54df3d9f5025afc314f526284a5113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 
  
  <!-- DataTables -->
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\"> 
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
          
     <!-- jQuery 2.2.3 -->
    <!-- DataTables -->
 

    
  ";
        
        $__internal_631e7a33ebc2f8b3f7bc19cfec557a53c54df3d9f5025afc314f526284a5113a->leave($__internal_631e7a33ebc2f8b3f7bc19cfec557a53c54df3d9f5025afc314f526284a5113a_prof);

    }

    // line 18
    public function block_js($context, array $blocks = array())
    {
        $__internal_a5a96e555d477facc028ba060f95882b4787df09b9d39f2f9db2dd6df58ce6c8 = $this->env->getExtension("native_profiler");
        $__internal_a5a96e555d477facc028ba060f95882b4787df09b9d39f2f9db2dd6df58ce6c8->enter($__internal_a5a96e555d477facc028ba060f95882b4787df09b9d39f2f9db2dd6df58ce6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 19
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
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
        
        $__internal_a5a96e555d477facc028ba060f95882b4787df09b9d39f2f9db2dd6df58ce6c8->leave($__internal_a5a96e555d477facc028ba060f95882b4787df09b9d39f2f9db2dd6df58ce6c8_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_92864f66129fcb9704a51337c4dea2863026132f14a540c930ae7296084178aa = $this->env->getExtension("native_profiler");
        $__internal_92864f66129fcb9704a51337c4dea2863026132f14a540c930ae7296084178aa->enter($__internal_92864f66129fcb9704a51337c4dea2863026132f14a540c930ae7296084178aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    
    <div class=\"box\">
          <div class=\"box-header\">
              <h3 class=\"box-title\">Liste des etablissements </h3>
          </div>
          <div class=\"box-body\">
              <div id=\"example1_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                  
                  
                  
                  
                  <div class=\"row\">
                      <div class=\"col-sm-12\">
                          <table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
                              <thead>
                                  <tr role=\"row\">
                                      <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 246px;\" aria-label=\"ID: activate to sort column descending\" aria-sort=\"ascending\">ID</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"Name: activate to sort column ascending\">Name</th>
                                      
                                     
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 154px;\" aria-label=\"Actions: activate to sort column ascending\">Action</th>
                                  </tr>
                             
        </thead>
        <tbody>
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["etablissements"]) ? $context["etablissements"] : $this->getContext($context, "etablissements")));
        foreach ($context['_seq'] as $context["_key"] => $context["etablissement"]) {
            // line 65
            echo "            <tr>
                <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etablissement_show", array("id" => $this->getAttribute($context["etablissement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["etablissement"], "name", array()), "html", null, true);
            echo "</td>
                
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etablissement_show", array("id" => $this->getAttribute($context["etablissement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etablissement_edit", array("id" => $this->getAttribute($context["etablissement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etablissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        <tfoot>
                                  <tr>
                                      <th rowspan=\"1\" colspan=\"1\">ID</th>
                                      <th rowspan=\"1\" colspan=\"1\">Name</th>
                                      
                                     
                                      <th rowspan=\"1\" colspan=\"1\">Actions</th>
                                  </tr>
        </tfoot>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("etablissement_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_92864f66129fcb9704a51337c4dea2863026132f14a540c930ae7296084178aa->leave($__internal_92864f66129fcb9704a51337c4dea2863026132f14a540c930ae7296084178aa_prof);

    }

    public function getTemplateName()
    {
        return "etablissement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 95,  176 => 81,  164 => 75,  158 => 72,  150 => 67,  144 => 66,  141 => 65,  137 => 64,  110 => 39,  104 => 38,  80 => 20,  75 => 19,  69 => 18,  54 => 9,  50 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
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
/*  */
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
/*     */
/*     <div class="box">*/
/*           <div class="box-header">*/
/*               <h3 class="box-title">Liste des etablissements </h3>*/
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
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="Name: activate to sort column ascending">Name</th>*/
/*                                       */
/*                                      */
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;" aria-label="Actions: activate to sort column ascending">Action</th>*/
/*                                   </tr>*/
/*                              */
/*         </thead>*/
/*         <tbody>*/
/*         {% for etablissement in etablissements %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('etablissement_show', { 'id': etablissement.id }) }}">{{ etablissement.id }}</a></td>*/
/*                 <td>{{ etablissement.name }}</td>*/
/*                 */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('etablissement_show', { 'id': etablissement.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('etablissement_edit', { 'id': etablissement.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         <tfoot>*/
/*                                   <tr>*/
/*                                       <th rowspan="1" colspan="1">ID</th>*/
/*                                       <th rowspan="1" colspan="1">Name</th>*/
/*                                       */
/*                                      */
/*                                       <th rowspan="1" colspan="1">Actions</th>*/
/*                                   </tr>*/
/*         </tfoot>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('etablissement_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
