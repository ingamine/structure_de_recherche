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
        $__internal_d27f7740f4624f9a7262231d774d75ef12a34efbd686f60f0b906be8e1023faa = $this->env->getExtension("native_profiler");
        $__internal_d27f7740f4624f9a7262231d774d75ef12a34efbd686f60f0b906be8e1023faa->enter($__internal_d27f7740f4624f9a7262231d774d75ef12a34efbd686f60f0b906be8e1023faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d27f7740f4624f9a7262231d774d75ef12a34efbd686f60f0b906be8e1023faa->leave($__internal_d27f7740f4624f9a7262231d774d75ef12a34efbd686f60f0b906be8e1023faa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b806cb5ba24679fac999ebb178e1d8a19af025544b61795adcbd475807c0095 = $this->env->getExtension("native_profiler");
        $__internal_0b806cb5ba24679fac999ebb178e1d8a19af025544b61795adcbd475807c0095->enter($__internal_0b806cb5ba24679fac999ebb178e1d8a19af025544b61795adcbd475807c0095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b806cb5ba24679fac999ebb178e1d8a19af025544b61795adcbd475807c0095->leave($__internal_0b806cb5ba24679fac999ebb178e1d8a19af025544b61795adcbd475807c0095_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1a274fe9e508f56541e5ca1552cee395eb723b970489cd2bd944decbbc4b1f4 = $this->env->getExtension("native_profiler");
        $__internal_e1a274fe9e508f56541e5ca1552cee395eb723b970489cd2bd944decbbc4b1f4->enter($__internal_e1a274fe9e508f56541e5ca1552cee395eb723b970489cd2bd944decbbc4b1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1a274fe9e508f56541e5ca1552cee395eb723b970489cd2bd944decbbc4b1f4->leave($__internal_e1a274fe9e508f56541e5ca1552cee395eb723b970489cd2bd944decbbc4b1f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8504e2c3510f06b34615b8092e9261e817484bf244055266a9709f8b7d396d3f = $this->env->getExtension("native_profiler");
        $__internal_8504e2c3510f06b34615b8092e9261e817484bf244055266a9709f8b7d396d3f->enter($__internal_8504e2c3510f06b34615b8092e9261e817484bf244055266a9709f8b7d396d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8504e2c3510f06b34615b8092e9261e817484bf244055266a9709f8b7d396d3f->leave($__internal_8504e2c3510f06b34615b8092e9261e817484bf244055266a9709f8b7d396d3f_prof);

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
