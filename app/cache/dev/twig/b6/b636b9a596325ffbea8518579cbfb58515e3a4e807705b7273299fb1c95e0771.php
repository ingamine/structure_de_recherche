<?php

/* soutenance/index.html.twig */
class __TwigTemplate_654794f3cef9c528ed6240796d53953f2b00efeab12bea1747bae5815c30f84c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "soutenance/index.html.twig", 1);
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
        $__internal_609d5f1a23aa6c48db1ad0d9cca0345b10a9627ee9c7b48f28b2512461013441 = $this->env->getExtension("native_profiler");
        $__internal_609d5f1a23aa6c48db1ad0d9cca0345b10a9627ee9c7b48f28b2512461013441->enter($__internal_609d5f1a23aa6c48db1ad0d9cca0345b10a9627ee9c7b48f28b2512461013441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "soutenance/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_609d5f1a23aa6c48db1ad0d9cca0345b10a9627ee9c7b48f28b2512461013441->leave($__internal_609d5f1a23aa6c48db1ad0d9cca0345b10a9627ee9c7b48f28b2512461013441_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_179bb3becb22a59578809946ddd86d1c68a57cbe25d8fc1bcfb884da6cbe74f7 = $this->env->getExtension("native_profiler");
        $__internal_179bb3becb22a59578809946ddd86d1c68a57cbe25d8fc1bcfb884da6cbe74f7->enter($__internal_179bb3becb22a59578809946ddd86d1c68a57cbe25d8fc1bcfb884da6cbe74f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_179bb3becb22a59578809946ddd86d1c68a57cbe25d8fc1bcfb884da6cbe74f7->leave($__internal_179bb3becb22a59578809946ddd86d1c68a57cbe25d8fc1bcfb884da6cbe74f7_prof);

    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        $__internal_6c6ac57f6d4cfe0fa15b3d21d74bf82db48781ad25e0118fb73ef81d05dd8d10 = $this->env->getExtension("native_profiler");
        $__internal_6c6ac57f6d4cfe0fa15b3d21d74bf82db48781ad25e0118fb73ef81d05dd8d10->enter($__internal_6c6ac57f6d4cfe0fa15b3d21d74bf82db48781ad25e0118fb73ef81d05dd8d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_6c6ac57f6d4cfe0fa15b3d21d74bf82db48781ad25e0118fb73ef81d05dd8d10->leave($__internal_6c6ac57f6d4cfe0fa15b3d21d74bf82db48781ad25e0118fb73ef81d05dd8d10_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b683f418aa6e598634ff4c0ba6c670e257abd6357e865484f782c94a483e4fa = $this->env->getExtension("native_profiler");
        $__internal_3b683f418aa6e598634ff4c0ba6c670e257abd6357e865484f782c94a483e4fa->enter($__internal_3b683f418aa6e598634ff4c0ba6c670e257abd6357e865484f782c94a483e4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"dateSout: activate to sort column ascending\">dateSout</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 301px;\" aria-label=\"mention: activate to sort column ascending\">mention</th>
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 268px;\" aria-label=\"jury: activate to sort column ascending\">jury</th>
                                      
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 154px;\" aria-label=\"Actions: activate to sort column ascending\">Action</th>
                                  </tr>
                              </thead>
        <tbody>
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["soutenances"]) ? $context["soutenances"] : $this->getContext($context, "soutenances")));
        foreach ($context['_seq'] as $context["_key"] => $context["soutenance"]) {
            // line 68
            echo "            <tr>
                <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soutenance_show", array("id" => $this->getAttribute($context["soutenance"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["soutenance"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 70
            if ($this->getAttribute($context["soutenance"], "dateSout", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["soutenance"], "dateSout", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["soutenance"], "mention", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["soutenance"], "jury", array()), "html", null, true);
            echo "</td>
                
               
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soutenance_show", array("id" => $this->getAttribute($context["soutenance"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soutenance_edit", array("id" => $this->getAttribute($context["soutenance"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['soutenance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </tbody>
        <tfoot>
            <tr>
                <th rowspan=\"1\" colspan=\"1\">ID</th>
                <th rowspan=\"1\" colspan=\"1\">dateSout</th>
                <th rowspan=\"1\" colspan=\"1\">mention</th>
                <th rowspan=\"1\" colspan=\"1\">jury</th>
                
                <th rowspan=\"1\" colspan=\"1\">Actions</th>
            </tr>
        </tfoot>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("soutenance_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
            </div>
                  </div>
                  
              </div>
          </div>
        
        
 
      </div>
";
        
        $__internal_3b683f418aa6e598634ff4c0ba6c670e257abd6357e865484f782c94a483e4fa->leave($__internal_3b683f418aa6e598634ff4c0ba6c670e257abd6357e865484f782c94a483e4fa_prof);

    }

    public function getTemplateName()
    {
        return "soutenance/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 102,  188 => 87,  176 => 81,  170 => 78,  161 => 72,  157 => 71,  151 => 70,  145 => 69,  142 => 68,  138 => 67,  110 => 41,  104 => 40,  80 => 22,  75 => 21,  69 => 20,  54 => 11,  50 => 10,  42 => 6,  36 => 5,  11 => 1,);
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
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="dateSout: activate to sort column ascending">dateSout</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="mention: activate to sort column ascending">mention</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 268px;" aria-label="jury: activate to sort column ascending">jury</th>*/
/*                                       */
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;" aria-label="Actions: activate to sort column ascending">Action</th>*/
/*                                   </tr>*/
/*                               </thead>*/
/*         <tbody>*/
/*         {% for soutenance in soutenances %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('soutenance_show', { 'id': soutenance.id }) }}">{{ soutenance.id }}</a></td>*/
/*                 <td>{% if soutenance.dateSout %}{{ soutenance.dateSout|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ soutenance.mention }}</td>*/
/*                 <td>{{ soutenance.jury }}</td>*/
/*                 */
/*                */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('soutenance_show', { 'id': soutenance.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('soutenance_edit', { 'id': soutenance.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*         <tfoot>*/
/*             <tr>*/
/*                 <th rowspan="1" colspan="1">ID</th>*/
/*                 <th rowspan="1" colspan="1">dateSout</th>*/
/*                 <th rowspan="1" colspan="1">mention</th>*/
/*                 <th rowspan="1" colspan="1">jury</th>*/
/*                 */
/*                 <th rowspan="1" colspan="1">Actions</th>*/
/*             </tr>*/
/*         </tfoot>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('soutenance_new') }}">Create a new entry</a>*/
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
