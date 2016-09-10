<?php

/* @Lgm/data.html.twig */
class __TwigTemplate_67311dbc4aec864cea005cc79d747320a01fcc3007c2df02ff025f7ad9a43dd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'table' => array($this, 'block_table'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_122335d8612ceeb58823781f9c43cd530cafdbe97406c35390456e61d4801d2e = $this->env->getExtension("native_profiler");
        $__internal_122335d8612ceeb58823781f9c43cd530cafdbe97406c35390456e61d4801d2e->enter($__internal_122335d8612ceeb58823781f9c43cd530cafdbe97406c35390456e61d4801d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Lgm/data.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- DataTables -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

 
  <!-- Left side column. contains the logo and sidebar -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
        <li><a href=\"#\">Tables</a></li>
        <li class=\"active\">Data tables</li>
      </ol>
    </section>

    
    ";
        // line 53
        $this->displayBlock('table', $context, $blocks);
        // line 54
        echo "    
    
            
 
  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- DataTables -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- SlimScroll -->
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<!-- page script -->
<script>
  \$(function () {
    \$(\"#example1\").DataTable();
      \"paging\": true,
      \"lengthChange\": false,
      \"searching\": false,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false
    });
  });
</script>
</body>
</html>
";
        
        $__internal_122335d8612ceeb58823781f9c43cd530cafdbe97406c35390456e61d4801d2e->leave($__internal_122335d8612ceeb58823781f9c43cd530cafdbe97406c35390456e61d4801d2e_prof);

    }

    // line 53
    public function block_table($context, array $blocks = array())
    {
        $__internal_3d3627d0e78a7d637e22f8ed998c042c8658a46d230b56186f359c7fc7beef4f = $this->env->getExtension("native_profiler");
        $__internal_3d3627d0e78a7d637e22f8ed998c042c8658a46d230b56186f359c7fc7beef4f->enter($__internal_3d3627d0e78a7d637e22f8ed998c042c8658a46d230b56186f359c7fc7beef4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_3d3627d0e78a7d637e22f8ed998c042c8658a46d230b56186f359c7fc7beef4f->leave($__internal_3d3627d0e78a7d637e22f8ed998c042c8658a46d230b56186f359c7fc7beef4f_prof);

    }

    public function getTemplateName()
    {
        return "@Lgm/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 53,  141 => 81,  136 => 79,  131 => 77,  126 => 75,  121 => 73,  117 => 72,  112 => 70,  107 => 68,  91 => 54,  89 => 53,  54 => 21,  48 => 18,  43 => 16,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <title>AdminLTE 2 | Data Tables</title>*/
/*   <!-- Tell the browser to be responsive to screen width -->*/
/*   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*   <!-- Bootstrap 3.3.6 -->*/
/*   <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css')}}">*/
/*   <!-- Font Awesome -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*   <!-- Ionicons -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">*/
/*   <!-- DataTables -->*/
/*   <link rel="stylesheet" href="{{ asset('public/plugins/datatables/dataTables.bootstrap.css')}}">*/
/*   <!-- Theme style -->*/
/*   <link rel="stylesheet" href="{{ asset('public/dist/css/AdminLTE.min.css')}}">*/
/*   <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*        folder instead of downloading all of them to reduce the load. -->*/
/*   <link rel="stylesheet" href="{{ asset('public/dist/css/skins/_all-skins.min.css')}}">*/
/* */
/*   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*   <!--[if lt IE 9]>*/
/*   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*   <![endif]-->*/
/* </head>*/
/* <body class="hold-transition skin-blue sidebar-mini">*/
/* <div class="wrapper">*/
/* */
/*  */
/*   <!-- Left side column. contains the logo and sidebar -->*/
/*  */
/* */
/*   <!-- Content Wrapper. Contains page content -->*/
/*   <div class="content-wrapper">*/
/*     <!-- Content Header (Page header) -->*/
/*     <section class="content-header">*/
/*       <h1>*/
/*         Data Tables*/
/*         <small>advanced tables</small>*/
/*       </h1>*/
/*       <ol class="breadcrumb">*/
/*         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*         <li><a href="#">Tables</a></li>*/
/*         <li class="active">Data tables</li>*/
/*       </ol>*/
/*     </section>*/
/* */
/*     */
/*     {% block table %}{% endblock %}*/
/*     */
/*     */
/*             */
/*  */
/*   <!-- Control Sidebar -->*/
/*   */
/*   <!-- /.control-sidebar -->*/
/*   <!-- Add the sidebar's background. This div must be placed*/
/*        immediately after the control sidebar -->*/
/*   <div class="control-sidebar-bg"></div>*/
/* </div>*/
/* <!-- ./wrapper -->*/
/* */
/* <!-- jQuery 2.2.3 -->*/
/* <script src="{{ asset('public/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>*/
/* <!-- Bootstrap 3.3.6 -->*/
/* <script src="{{ asset('public/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* <!-- DataTables -->*/
/* <script src="{{ asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>*/
/* <script src="{{ asset('public/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>*/
/* <!-- SlimScroll -->*/
/* <script src="{{ asset('public/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>*/
/* <!-- FastClick -->*/
/* <script src="{{ asset('public/plugins/fastclick/fastclick.js')}}"></script>*/
/* <!-- AdminLTE App -->*/
/* <script src="{{ asset('public/dist/js/app.min.js')}}"></script>*/
/* <!-- AdminLTE for demo purposes -->*/
/* <script src="{{ asset('public/dist/js/demo.js')}}"></script>*/
/* <!-- page script -->*/
/* <script>*/
/*   $(function () {*/
/*     $("#example1").DataTable();*/
/*       "paging": true,*/
/*       "lengthChange": false,*/
/*       "searching": false,*/
/*       "ordering": true,*/
/*       "info": true,*/
/*       "autoWidth": false*/
/*     });*/
/*   });*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
