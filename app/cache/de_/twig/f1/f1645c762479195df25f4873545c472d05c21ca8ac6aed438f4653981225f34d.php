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
        $__internal_48f9e1dc820d87873c0b72b7073b99646f59bcdbb0f6bafb5f04621d01828657 = $this->env->getExtension("native_profiler");
        $__internal_48f9e1dc820d87873c0b72b7073b99646f59bcdbb0f6bafb5f04621d01828657->enter($__internal_48f9e1dc820d87873c0b72b7073b99646f59bcdbb0f6bafb5f04621d01828657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48f9e1dc820d87873c0b72b7073b99646f59bcdbb0f6bafb5f04621d01828657->leave($__internal_48f9e1dc820d87873c0b72b7073b99646f59bcdbb0f6bafb5f04621d01828657_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d9b6b361612393d25f465e0861d41f3d9bc50ef89d2a18414db252841e274a6 = $this->env->getExtension("native_profiler");
        $__internal_9d9b6b361612393d25f465e0861d41f3d9bc50ef89d2a18414db252841e274a6->enter($__internal_9d9b6b361612393d25f465e0861d41f3d9bc50ef89d2a18414db252841e274a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d9b6b361612393d25f465e0861d41f3d9bc50ef89d2a18414db252841e274a6->leave($__internal_9d9b6b361612393d25f465e0861d41f3d9bc50ef89d2a18414db252841e274a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c66b70e5247b1b5d68603321b92523762ebd6a0d1c0683232653ff96343a1faa = $this->env->getExtension("native_profiler");
        $__internal_c66b70e5247b1b5d68603321b92523762ebd6a0d1c0683232653ff96343a1faa->enter($__internal_c66b70e5247b1b5d68603321b92523762ebd6a0d1c0683232653ff96343a1faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c66b70e5247b1b5d68603321b92523762ebd6a0d1c0683232653ff96343a1faa->leave($__internal_c66b70e5247b1b5d68603321b92523762ebd6a0d1c0683232653ff96343a1faa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e81abd112c9b914506dc5da25ad9994a2610980708234d555f2b70edd405af0 = $this->env->getExtension("native_profiler");
        $__internal_4e81abd112c9b914506dc5da25ad9994a2610980708234d555f2b70edd405af0->enter($__internal_4e81abd112c9b914506dc5da25ad9994a2610980708234d555f2b70edd405af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e81abd112c9b914506dc5da25ad9994a2610980708234d555f2b70edd405af0->leave($__internal_4e81abd112c9b914506dc5da25ad9994a2610980708234d555f2b70edd405af0_prof);

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
