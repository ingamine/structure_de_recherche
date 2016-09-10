<?php

/* :user:index.html.twig */
class __TwigTemplate_4764a6f091544b6c28ec8c46b10363d509b05ca792cf2e03ac8d5acccd39043a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":user:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'js' => array($this, 'block_js'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f9a67c62a98c24da3c31a8e3344f4dfc5d77e5a1174f76a000a8f9051005f5b = $this->env->getExtension("native_profiler");
        $__internal_7f9a67c62a98c24da3c31a8e3344f4dfc5d77e5a1174f76a000a8f9051005f5b->enter($__internal_7f9a67c62a98c24da3c31a8e3344f4dfc5d77e5a1174f76a000a8f9051005f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f9a67c62a98c24da3c31a8e3344f4dfc5d77e5a1174f76a000a8f9051005f5b->leave($__internal_7f9a67c62a98c24da3c31a8e3344f4dfc5d77e5a1174f76a000a8f9051005f5b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6c96efb450c599a6b18a79582befd8f13481b46fad5dfd01f4c538fd0d6ca4c = $this->env->getExtension("native_profiler");
        $__internal_b6c96efb450c599a6b18a79582befd8f13481b46fad5dfd01f4c538fd0d6ca4c->enter($__internal_b6c96efb450c599a6b18a79582befd8f13481b46fad5dfd01f4c538fd0d6ca4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    <

    
  ";
        
        $__internal_b6c96efb450c599a6b18a79582befd8f13481b46fad5dfd01f4c538fd0d6ca4c->leave($__internal_b6c96efb450c599a6b18a79582befd8f13481b46fad5dfd01f4c538fd0d6ca4c_prof);

    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        $__internal_096f4ce3f3de5df5a4f4f2551c834d0365b92b9150aa42be9d9f8d1530bdf1d4 = $this->env->getExtension("native_profiler");
        $__internal_096f4ce3f3de5df5a4f4f2551c834d0365b92b9150aa42be9d9f8d1530bdf1d4->enter($__internal_096f4ce3f3de5df5a4f4f2551c834d0365b92b9150aa42be9d9f8d1530bdf1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_096f4ce3f3de5df5a4f4f2551c834d0365b92b9150aa42be9d9f8d1530bdf1d4->leave($__internal_096f4ce3f3de5df5a4f4f2551c834d0365b92b9150aa42be9d9f8d1530bdf1d4_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_2be1155b0003e3931dc4f9c3f6849175c989a5d75f8500e93033b46db4b54374 = $this->env->getExtension("native_profiler");
        $__internal_2be1155b0003e3931dc4f9c3f6849175c989a5d75f8500e93033b46db4b54374->enter($__internal_2be1155b0003e3931dc4f9c3f6849175c989a5d75f8500e93033b46db4b54374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" style=\"width: 154px;\" aria-label=\"Actions: activate to sort column ascending\">Action</th>
                                  </tr>
                              </thead>
                           <tbody>
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 68
            echo "                                <tr>
                                    <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                                    
                                    <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                    
                                    <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "grade", array()), "html", null, true);
            echo "</td>
                                    

                                    <td>
                                            <ul>
                                                <li>
                                                    <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 84
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
        // line 90
        echo "                            </tbody>
                              <tfoot>
                                  <tr>
                                      <th rowspan=\"1\" colspan=\"1\">ID</th>
                                      <th rowspan=\"1\" colspan=\"1\">Name</th>
                                      <th rowspan=\"1\" colspan=\"1\">Lastname</th>
                                      <th rowspan=\"1\" colspan=\"1\">Email</th>
                                      <th rowspan=\"1\" colspan=\"1\">Grade</th>
                                      <th rowspan=\"1\" colspan=\"1\">Actions</th>
                                  </tr>
                              </tfoot>
                          </table>   
                            
                                        
    <ul>
        <li>
            <a href=\"";
        // line 106
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
        
        $__internal_2be1155b0003e3931dc4f9c3f6849175c989a5d75f8500e93033b46db4b54374->leave($__internal_2be1155b0003e3931dc4f9c3f6849175c989a5d75f8500e93033b46db4b54374_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 106,  192 => 90,  180 => 84,  174 => 81,  165 => 75,  160 => 73,  155 => 71,  151 => 70,  145 => 69,  142 => 68,  138 => 67,  110 => 41,  104 => 40,  80 => 22,  75 => 21,  69 => 20,  54 => 11,  50 => 10,  42 => 6,  36 => 5,  11 => 1,);
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
/*     <*/
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
/* {% block content %}*/
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
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="Lastname: activate to sort column ascending">Name</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 301px;" aria-label="Lastname: activate to sort column ascending">LastName</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 268px;" aria-label="Email: activate to sort column ascending">Email</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 212px;" aria-label="Grade: activate to sort column ascending">Grade</th>*/
/*                                       <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 154px;" aria-label="Actions: activate to sort column ascending">Action</th>*/
/*                                   </tr>*/
/*                               </thead>*/
/*                            <tbody>*/
/*                             {% for user in users %}*/
/*                                 <tr>*/
/*                                     <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                                     <td>{{ user.name }}</td>*/
/*                                     <td>{{ user.lastName }}</td>*/
/*                                     */
/*                                     <td>{{ user.email }}</td>*/
/*                                     */
/*                                     <td>{{ user.grade }}</td>*/
/*                                     */
/* */
/*                                     <td>*/
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
/*                               <tfoot>*/
/*                                   <tr>*/
/*                                       <th rowspan="1" colspan="1">ID</th>*/
/*                                       <th rowspan="1" colspan="1">Name</th>*/
/*                                       <th rowspan="1" colspan="1">Lastname</th>*/
/*                                       <th rowspan="1" colspan="1">Email</th>*/
/*                                       <th rowspan="1" colspan="1">Grade</th>*/
/*                                       <th rowspan="1" colspan="1">Actions</th>*/
/*                                   </tr>*/
/*                               </tfoot>*/
/*                           </table>   */
/*                             */
/*                                         */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_new') }}" >Create a new entry</a>*/
/*                       */
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
/*   */
/*        */
/* {#*/
/* */
/*     <h1>User list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Lastname</th>*/
/*                 <th>Gender</th>*/
/*                 <th>Birthday</th>*/
/*                 <th>Birthplace</th>*/
/*                 <th>Email</th>*/
/*                 <th>Phonenumber</th>*/
/*                 <th>Grade</th>*/
/*                 <th>Profile</th>*/
/*                 <th>Documentid</th>*/
/*                 <th>Photoid</th>*/
/*                 <th>Directeur</th>*/
/*                 <th>Codirecteur</th>*/
/*                 <th>Effectue</th>*/
/*                 <th>Mediaid</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                 <td>{{ user.name }}</td>*/
/*                 <td>{{ user.lastName }}</td>*/
/*                 <td>{{ user.gender }}</td>*/
/*                 <td>{% if user.birthday %}{{ user.birthday|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ user.birthPlace }}</td>*/
/*                 <td>{{ user.email }}</td>*/
/*                 <td>{{ user.phoneNumber }}</td>*/
/*                 <td>{{ user.grade }}</td>*/
/*                 <td>{{ user.profile }}</td>*/
/*                 <td>{{ user.documentId }}</td>*/
/*                 <td>{{ user.photoId }}</td>*/
/*                 <td>{% if user.directeur %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if user.coDirecteur %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if user.effectue %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ user.mediaId }}</td>*/
/*                 <td>{% if user.created %}{{ user.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if user.updated %}{{ user.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 */
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('user_show', { 'id': user.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('user_edit', { 'id': user.id }) }}">edit</a>*/
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
/*             <a href="{{ path('user_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>      */
/* */
/* #}*/
/* {% endblock %}*/
/* */
