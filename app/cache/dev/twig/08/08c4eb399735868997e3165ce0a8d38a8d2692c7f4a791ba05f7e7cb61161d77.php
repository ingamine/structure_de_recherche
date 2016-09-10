<?php

/* media/index.html.twig */
class __TwigTemplate_8222e9db4220e4b47172e157a69cd11389569bcd316ab9ea4d427d48be86ed5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "media/index.html.twig", 1);
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
        $__internal_229463e668a3d1dd9d4b5bf0b7d9fd502b9baa929a30c32fea1a4d8bb4bcd20a = $this->env->getExtension("native_profiler");
        $__internal_229463e668a3d1dd9d4b5bf0b7d9fd502b9baa929a30c32fea1a4d8bb4bcd20a->enter($__internal_229463e668a3d1dd9d4b5bf0b7d9fd502b9baa929a30c32fea1a4d8bb4bcd20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229463e668a3d1dd9d4b5bf0b7d9fd502b9baa929a30c32fea1a4d8bb4bcd20a->leave($__internal_229463e668a3d1dd9d4b5bf0b7d9fd502b9baa929a30c32fea1a4d8bb4bcd20a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aab56448f07d9b0206f39567f6d137942e5c7f658dcf5d6dbe22e7e153f8057b = $this->env->getExtension("native_profiler");
        $__internal_aab56448f07d9b0206f39567f6d137942e5c7f658dcf5d6dbe22e7e153f8057b->enter($__internal_aab56448f07d9b0206f39567f6d137942e5c7f658dcf5d6dbe22e7e153f8057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aab56448f07d9b0206f39567f6d137942e5c7f658dcf5d6dbe22e7e153f8057b->leave($__internal_aab56448f07d9b0206f39567f6d137942e5c7f658dcf5d6dbe22e7e153f8057b_prof);

    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        $__internal_9549b0c80b1cca848e47ee1d6368d0d7157087613347b12b136777289e3a4c90 = $this->env->getExtension("native_profiler");
        $__internal_9549b0c80b1cca848e47ee1d6368d0d7157087613347b12b136777289e3a4c90->enter($__internal_9549b0c80b1cca848e47ee1d6368d0d7157087613347b12b136777289e3a4c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_9549b0c80b1cca848e47ee1d6368d0d7157087613347b12b136777289e3a4c90->leave($__internal_9549b0c80b1cca848e47ee1d6368d0d7157087613347b12b136777289e3a4c90_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_859ba99805d0d8e5efd97470ce78543e4e6d0f3b4cc8b57d68e74903f6bc9dd2 = $this->env->getExtension("native_profiler");
        $__internal_859ba99805d0d8e5efd97470ce78543e4e6d0f3b4cc8b57d68e74903f6bc9dd2->enter($__internal_859ba99805d0d8e5efd97470ce78543e4e6d0f3b4cc8b57d68e74903f6bc9dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_859ba99805d0d8e5efd97470ce78543e4e6d0f3b4cc8b57d68e74903f6bc9dd2->leave($__internal_859ba99805d0d8e5efd97470ce78543e4e6d0f3b4cc8b57d68e74903f6bc9dd2_prof);

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
