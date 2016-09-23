<?php

/* :mastere:index.html.twig */
class __TwigTemplate_4f5d8a958755545457a8bb19f7fe2324f8a374ba838a6e7100bd24f270767e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":mastere:index.html.twig", 1);
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
        $__internal_46d9bee9abd73469bdf744b535b2a3db2cfbf805f4b74a85413416b9a7f146e9 = $this->env->getExtension("native_profiler");
        $__internal_46d9bee9abd73469bdf744b535b2a3db2cfbf805f4b74a85413416b9a7f146e9->enter($__internal_46d9bee9abd73469bdf744b535b2a3db2cfbf805f4b74a85413416b9a7f146e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mastere:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46d9bee9abd73469bdf744b535b2a3db2cfbf805f4b74a85413416b9a7f146e9->leave($__internal_46d9bee9abd73469bdf744b535b2a3db2cfbf805f4b74a85413416b9a7f146e9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21d37349ac9bb67b5a35c6281727f50311c631338dd956bee9edc64a8717335c = $this->env->getExtension("native_profiler");
        $__internal_21d37349ac9bb67b5a35c6281727f50311c631338dd956bee9edc64a8717335c->enter($__internal_21d37349ac9bb67b5a35c6281727f50311c631338dd956bee9edc64a8717335c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_21d37349ac9bb67b5a35c6281727f50311c631338dd956bee9edc64a8717335c->leave($__internal_21d37349ac9bb67b5a35c6281727f50311c631338dd956bee9edc64a8717335c_prof);

    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        $__internal_9cd3b02038ad458c66cc010292f500f8232f5beb3cf524f4ced7bcfa8eddd554 = $this->env->getExtension("native_profiler");
        $__internal_9cd3b02038ad458c66cc010292f500f8232f5beb3cf524f4ced7bcfa8eddd554->enter($__internal_9cd3b02038ad458c66cc010292f500f8232f5beb3cf524f4ced7bcfa8eddd554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_9cd3b02038ad458c66cc010292f500f8232f5beb3cf524f4ced7bcfa8eddd554->leave($__internal_9cd3b02038ad458c66cc010292f500f8232f5beb3cf524f4ced7bcfa8eddd554_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_b59862c3f5f9d11d99d3c01ee58178dd66239f12fff58796c7e6bb1c47134fa6 = $this->env->getExtension("native_profiler");
        $__internal_b59862c3f5f9d11d99d3c01ee58178dd66239f12fff58796c7e6bb1c47134fa6->enter($__internal_b59862c3f5f9d11d99d3c01ee58178dd66239f12fff58796c7e6bb1c47134fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    
<div class=\"box\">
          <div class=\"box-header\">
              <h3 class=\"box-title\">Liste des MAstères LGM</h3>
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
                                      
                                     
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 154px;\" aria-label=\"Actions: activate to sort column ascending\">Action</th>
                                  </tr>
                              </thead>
                           <tbody>
                               

           
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["masteres"]) ? $context["masteres"] : $this->getContext($context, "masteres")));
        foreach ($context['_seq'] as $context["_key"] => $context["mastere"]) {
            // line 70
            echo "            <tr>
                <td><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mastere_show", array("id" => $this->getAttribute($context["mastere"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mastere"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["mastere"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            if ($this->getAttribute($context["mastere"], "firstDateRegistered", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mastere"], "firstDateRegistered", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                 
               
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mastere_show", array("id" => $this->getAttribute($context["mastere"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mastere_edit", array("id" => $this->getAttribute($context["mastere"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mastere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </tbody>
         <tfoot>
                                  <tr>
                                      <th rowspan=\"1\" colspan=\"1\">ID</th>
                                      <th rowspan=\"1\" colspan=\"1\">Title</th>
                                      <th rowspan=\"1\" colspan=\"1\">Firstdateregistered</th>
                                     
                                     
                                      <th rowspan=\"1\" colspan=\"1\">Actions</th>
                                  </tr>
                              </tfoot>
                          </table>   
                            
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("mastere_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
            </div>
                  </div>
                  
              </div>
          </div>
        
        
 
      </div>
";
        
        $__internal_b59862c3f5f9d11d99d3c01ee58178dd66239f12fff58796c7e6bb1c47134fa6->leave($__internal_b59862c3f5f9d11d99d3c01ee58178dd66239f12fff58796c7e6bb1c47134fa6_prof);

    }

    public function getTemplateName()
    {
        return ":mastere:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 105,  186 => 88,  174 => 82,  168 => 79,  157 => 73,  153 => 72,  147 => 71,  144 => 70,  140 => 69,  110 => 41,  104 => 40,  80 => 22,  75 => 21,  69 => 20,  54 => 11,  50 => 10,  42 => 6,  36 => 5,  11 => 1,);
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
/* <div class="box">*/
/*           <div class="box-header">*/
/*               <h3 class="box-title">Liste des MAstères LGM</h3>*/
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
/*                                       */
/*                                      */
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;" aria-label="Actions: activate to sort column ascending">Action</th>*/
/*                                   </tr>*/
/*                               </thead>*/
/*                            <tbody>*/
/*                                */
/* */
/*            */
/*         {% for mastere in masteres %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('mastere_show', { 'id': mastere.id }) }}">{{ mastere.id }}</a></td>*/
/*                 <td>{{ mastere.title }}</td>*/
/*                 <td>{% if mastere.firstDateRegistered %}{{ mastere.firstDateRegistered|date('Y-m-d') }}{% endif %}</td>*/
/*                  */
/*                */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('mastere_show', { 'id': mastere.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('mastere_edit', { 'id': mastere.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*          <tfoot>*/
/*                                   <tr>*/
/*                                       <th rowspan="1" colspan="1">ID</th>*/
/*                                       <th rowspan="1" colspan="1">Title</th>*/
/*                                       <th rowspan="1" colspan="1">Firstdateregistered</th>*/
/*                                      */
/*                                      */
/*                                       <th rowspan="1" colspan="1">Actions</th>*/
/*                                   </tr>*/
/*                               </tfoot>*/
/*                           </table>   */
/*                             */
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('mastere_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*             </div>*/
/*                   </div>*/
/*                   */
/*               </div>*/
/*           </div>*/
/*         */
/*         */
/*  */
/*       </div>*/
/* {% endblock %}*/
/* */
