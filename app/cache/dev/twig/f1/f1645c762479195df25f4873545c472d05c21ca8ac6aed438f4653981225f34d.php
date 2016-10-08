<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1ba60870a9438237db95daad76b39961a0eec743e5707341a6a4ee75a8e72793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b96c96fd5ca8759e2c56618cbebd903ad8a940186e07402a64062db45227cf87 = $this->env->getExtension("native_profiler");
        $__internal_b96c96fd5ca8759e2c56618cbebd903ad8a940186e07402a64062db45227cf87->enter($__internal_b96c96fd5ca8759e2c56618cbebd903ad8a940186e07402a64062db45227cf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b96c96fd5ca8759e2c56618cbebd903ad8a940186e07402a64062db45227cf87->leave($__internal_b96c96fd5ca8759e2c56618cbebd903ad8a940186e07402a64062db45227cf87_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_504fb320983b778957bb63021396ad9cbb6885c9ee792a3f19e499ba9a2a6e6a = $this->env->getExtension("native_profiler");
        $__internal_504fb320983b778957bb63021396ad9cbb6885c9ee792a3f19e499ba9a2a6e6a->enter($__internal_504fb320983b778957bb63021396ad9cbb6885c9ee792a3f19e499ba9a2a6e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_504fb320983b778957bb63021396ad9cbb6885c9ee792a3f19e499ba9a2a6e6a->leave($__internal_504fb320983b778957bb63021396ad9cbb6885c9ee792a3f19e499ba9a2a6e6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d907c9c046694ded3c05e7e7d254c8cb6a921b04866f008e2ddd4129f07bef2c = $this->env->getExtension("native_profiler");
        $__internal_d907c9c046694ded3c05e7e7d254c8cb6a921b04866f008e2ddd4129f07bef2c->enter($__internal_d907c9c046694ded3c05e7e7d254c8cb6a921b04866f008e2ddd4129f07bef2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d907c9c046694ded3c05e7e7d254c8cb6a921b04866f008e2ddd4129f07bef2c->leave($__internal_d907c9c046694ded3c05e7e7d254c8cb6a921b04866f008e2ddd4129f07bef2c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3a2da656293f81068adbcef2d02ab49da14698a35786ebcc9e6c3b36afbdbee = $this->env->getExtension("native_profiler");
        $__internal_b3a2da656293f81068adbcef2d02ab49da14698a35786ebcc9e6c3b36afbdbee->enter($__internal_b3a2da656293f81068adbcef2d02ab49da14698a35786ebcc9e6c3b36afbdbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3a2da656293f81068adbcef2d02ab49da14698a35786ebcc9e6c3b36afbdbee->leave($__internal_b3a2da656293f81068adbcef2d02ab49da14698a35786ebcc9e6c3b36afbdbee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
