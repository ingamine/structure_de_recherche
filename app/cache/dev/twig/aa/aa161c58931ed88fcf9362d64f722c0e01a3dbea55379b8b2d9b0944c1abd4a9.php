<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_cb82d43291c9ab15dd416530e5f17f55f4120c0780d69e63fe816bbb02d7f2a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39bcb6703571e4b5a3499a0e03d06dc02e0ca8246d38a5656b2ee42e79fdaf6e = $this->env->getExtension("native_profiler");
        $__internal_39bcb6703571e4b5a3499a0e03d06dc02e0ca8246d38a5656b2ee42e79fdaf6e->enter($__internal_39bcb6703571e4b5a3499a0e03d06dc02e0ca8246d38a5656b2ee42e79fdaf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_39bcb6703571e4b5a3499a0e03d06dc02e0ca8246d38a5656b2ee42e79fdaf6e->leave($__internal_39bcb6703571e4b5a3499a0e03d06dc02e0ca8246d38a5656b2ee42e79fdaf6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
