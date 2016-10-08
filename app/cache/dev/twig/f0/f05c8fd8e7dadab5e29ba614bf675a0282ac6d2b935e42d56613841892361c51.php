<?php

/* :media:index.html.twig */
class __TwigTemplate_7cad8179fd3f5e65e0a2f263ab24f636e19b3fdb9dc74e99ffa87349dbb63d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":media:index.html.twig", 1);
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
        $__internal_9fedc20c589b18bda7da41b5e32a31f8e0e3abe69c029f0001e2b3ba8d90e453 = $this->env->getExtension("native_profiler");
        $__internal_9fedc20c589b18bda7da41b5e32a31f8e0e3abe69c029f0001e2b3ba8d90e453->enter($__internal_9fedc20c589b18bda7da41b5e32a31f8e0e3abe69c029f0001e2b3ba8d90e453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":media:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fedc20c589b18bda7da41b5e32a31f8e0e3abe69c029f0001e2b3ba8d90e453->leave($__internal_9fedc20c589b18bda7da41b5e32a31f8e0e3abe69c029f0001e2b3ba8d90e453_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2166bda959f5e3513d62ca0025acd6ab598227632f3c420283fb5718aa7924d0 = $this->env->getExtension("native_profiler");
        $__internal_2166bda959f5e3513d62ca0025acd6ab598227632f3c420283fb5718aa7924d0->enter($__internal_2166bda959f5e3513d62ca0025acd6ab598227632f3c420283fb5718aa7924d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2166bda959f5e3513d62ca0025acd6ab598227632f3c420283fb5718aa7924d0->leave($__internal_2166bda959f5e3513d62ca0025acd6ab598227632f3c420283fb5718aa7924d0_prof);

    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        $__internal_3d260519e34861fb40bf6a9f3fdca6165451c2842d2af6b3ae10efdfe663d0e2 = $this->env->getExtension("native_profiler");
        $__internal_3d260519e34861fb40bf6a9f3fdca6165451c2842d2af6b3ae10efdfe663d0e2->enter($__internal_3d260519e34861fb40bf6a9f3fdca6165451c2842d2af6b3ae10efdfe663d0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_3d260519e34861fb40bf6a9f3fdca6165451c2842d2af6b3ae10efdfe663d0e2->leave($__internal_3d260519e34861fb40bf6a9f3fdca6165451c2842d2af6b3ae10efdfe663d0e2_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_12e2c25aef2b40de5ac2cb3353e866466ade80627a05fcfdb77047de264307e3 = $this->env->getExtension("native_profiler");
        $__internal_12e2c25aef2b40de5ac2cb3353e866466ade80627a05fcfdb77047de264307e3->enter($__internal_12e2c25aef2b40de5ac2cb3353e866466ade80627a05fcfdb77047de264307e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"fileName: activate to sort column ascending\">fileName</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"path: activate to sort column ascending\">path</th>
                                      
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 154px;\" aria-label=\"Actions: activate to sort column ascending\">Action</th>
                                  </tr>
                              </thead>
        <tbody>
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")));
        foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
            // line 67
            echo "            <tr>
                <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "fileName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["medium"], "path", array()), "html", null, true);
            echo "</td>
                
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("media_show", array("id" => $this->getAttribute($context["medium"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 78
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
        // line 84
        echo "        </tbody>
        <tfoot>
            <tr>
                <th rowspan=\"1\" colspan=\"1\">ID</th>
                <th rowspan=\"1\" colspan=\"1\">fileName</th>
                <th rowspan=\"1\" colspan=\"1\">path</th>
                
                <th rowspan=\"1\" colspan=\"1\">Actions</th>
            </tr>
        </tfoot>
        
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("media_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
            
             </div>
                  </div>
                  
              </div>
          </div>
        
        
 
      </div>
";
        
        $__internal_12e2c25aef2b40de5ac2cb3353e866466ade80627a05fcfdb77047de264307e3->leave($__internal_12e2c25aef2b40de5ac2cb3353e866466ade80627a05fcfdb77047de264307e3_prof);

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
        return array (  197 => 99,  180 => 84,  168 => 78,  162 => 75,  154 => 70,  150 => 69,  144 => 68,  141 => 67,  137 => 66,  110 => 41,  104 => 40,  80 => 22,  75 => 21,  69 => 20,  54 => 11,  50 => 10,  42 => 6,  36 => 5,  11 => 1,);
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
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="fileName: activate to sort column ascending">fileName</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="path: activate to sort column ascending">path</th>*/
/*                                       */
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;" aria-label="Actions: activate to sort column ascending">Action</th>*/
/*                                   </tr>*/
/*                               </thead>*/
/*         <tbody>*/
/*         {% for medium in media %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('media_show', { 'id': medium.id }) }}">{{ medium.id }}</a></td>*/
/*                 <td>{{ medium.fileName }}</td>*/
/*                 <td>{{ medium.path }}</td>*/
/*                 */
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
/*         <tfoot>*/
/*             <tr>*/
/*                 <th rowspan="1" colspan="1">ID</th>*/
/*                 <th rowspan="1" colspan="1">fileName</th>*/
/*                 <th rowspan="1" colspan="1">path</th>*/
/*                 */
/*                 <th rowspan="1" colspan="1">Actions</th>*/
/*             </tr>*/
/*         </tfoot>*/
/*         */
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('media_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/*             */
/*              </div>*/
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
