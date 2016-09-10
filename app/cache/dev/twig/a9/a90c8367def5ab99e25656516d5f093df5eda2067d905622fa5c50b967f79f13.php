<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4786712133ab3b7bda30ac6346a91b9c880e12bf968d1b54adf88664ede92235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_17eaeea57d26abaa88792ef94bdb633b389e933437a0ef0d250f8174edbf7d33 = $this->env->getExtension("native_profiler");
        $__internal_17eaeea57d26abaa88792ef94bdb633b389e933437a0ef0d250f8174edbf7d33->enter($__internal_17eaeea57d26abaa88792ef94bdb633b389e933437a0ef0d250f8174edbf7d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17eaeea57d26abaa88792ef94bdb633b389e933437a0ef0d250f8174edbf7d33->leave($__internal_17eaeea57d26abaa88792ef94bdb633b389e933437a0ef0d250f8174edbf7d33_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6dad7bcdb3373a6712937e6d636ca1296bea77e20aa78737ba036f5b465fae01 = $this->env->getExtension("native_profiler");
        $__internal_6dad7bcdb3373a6712937e6d636ca1296bea77e20aa78737ba036f5b465fae01->enter($__internal_6dad7bcdb3373a6712937e6d636ca1296bea77e20aa78737ba036f5b465fae01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6dad7bcdb3373a6712937e6d636ca1296bea77e20aa78737ba036f5b465fae01->leave($__internal_6dad7bcdb3373a6712937e6d636ca1296bea77e20aa78737ba036f5b465fae01_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_466b7d9feb7bc183daa7def3e805167f4414d0c2e2587eef42b721090c820fd4 = $this->env->getExtension("native_profiler");
        $__internal_466b7d9feb7bc183daa7def3e805167f4414d0c2e2587eef42b721090c820fd4->enter($__internal_466b7d9feb7bc183daa7def3e805167f4414d0c2e2587eef42b721090c820fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_466b7d9feb7bc183daa7def3e805167f4414d0c2e2587eef42b721090c820fd4->leave($__internal_466b7d9feb7bc183daa7def3e805167f4414d0c2e2587eef42b721090c820fd4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df9755ecd51461243b8beb4778a6e63cf2daea53574196ba5535f6aed933ea9e = $this->env->getExtension("native_profiler");
        $__internal_df9755ecd51461243b8beb4778a6e63cf2daea53574196ba5535f6aed933ea9e->enter($__internal_df9755ecd51461243b8beb4778a6e63cf2daea53574196ba5535f6aed933ea9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df9755ecd51461243b8beb4778a6e63cf2daea53574196ba5535f6aed933ea9e->leave($__internal_df9755ecd51461243b8beb4778a6e63cf2daea53574196ba5535f6aed933ea9e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
