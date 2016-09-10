<?php

/* mastere/index.html.twig */
class __TwigTemplate_57eae505f2dbef08b4f52b5e52dba1e73a3ab03d615906a238cc6dc0404cd335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "mastere/index.html.twig", 1);
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
        $__internal_5d2065f16951bf9e6e1030f6562491b134b988de057e531ea81a27ff8791d704 = $this->env->getExtension("native_profiler");
        $__internal_5d2065f16951bf9e6e1030f6562491b134b988de057e531ea81a27ff8791d704->enter($__internal_5d2065f16951bf9e6e1030f6562491b134b988de057e531ea81a27ff8791d704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mastere/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d2065f16951bf9e6e1030f6562491b134b988de057e531ea81a27ff8791d704->leave($__internal_5d2065f16951bf9e6e1030f6562491b134b988de057e531ea81a27ff8791d704_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2f8bd282aebd96527d5bcfb4c953d74b597bb6daa5bf9fdf70ff779d1423afa = $this->env->getExtension("native_profiler");
        $__internal_c2f8bd282aebd96527d5bcfb4c953d74b597bb6daa5bf9fdf70ff779d1423afa->enter($__internal_c2f8bd282aebd96527d5bcfb4c953d74b597bb6daa5bf9fdf70ff779d1423afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c2f8bd282aebd96527d5bcfb4c953d74b597bb6daa5bf9fdf70ff779d1423afa->leave($__internal_c2f8bd282aebd96527d5bcfb4c953d74b597bb6daa5bf9fdf70ff779d1423afa_prof);

    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        $__internal_98b6148cae62fc33c5c0a302dcfedfe5ac25af3bf3f5c1f6c18df43269880537 = $this->env->getExtension("native_profiler");
        $__internal_98b6148cae62fc33c5c0a302dcfedfe5ac25af3bf3f5c1f6c18df43269880537->enter($__internal_98b6148cae62fc33c5c0a302dcfedfe5ac25af3bf3f5c1f6c18df43269880537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_98b6148cae62fc33c5c0a302dcfedfe5ac25af3bf3f5c1f6c18df43269880537->leave($__internal_98b6148cae62fc33c5c0a302dcfedfe5ac25af3bf3f5c1f6c18df43269880537_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_b541fa3556c54bfbcc91419c0915ea74be76c820bd8e981e6042d06c54583afc = $this->env->getExtension("native_profiler");
        $__internal_b541fa3556c54bfbcc91419c0915ea74be76c820bd8e981e6042d06c54583afc->enter($__internal_b541fa3556c54bfbcc91419c0915ea74be76c820bd8e981e6042d06c54583afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b541fa3556c54bfbcc91419c0915ea74be76c820bd8e981e6042d06c54583afc->leave($__internal_b541fa3556c54bfbcc91419c0915ea74be76c820bd8e981e6042d06c54583afc_prof);

    }

    public function getTemplateName()
    {
        return "mastere/index.html.twig";
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
