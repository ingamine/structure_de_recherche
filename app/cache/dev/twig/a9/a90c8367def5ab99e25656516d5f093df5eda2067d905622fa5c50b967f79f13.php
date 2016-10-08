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
        $__internal_1d2b2b5d37aebb0a3a908bd468d0bc2cda0370bf75a50cc9ff2c1c03dbf770d8 = $this->env->getExtension("native_profiler");
        $__internal_1d2b2b5d37aebb0a3a908bd468d0bc2cda0370bf75a50cc9ff2c1c03dbf770d8->enter($__internal_1d2b2b5d37aebb0a3a908bd468d0bc2cda0370bf75a50cc9ff2c1c03dbf770d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d2b2b5d37aebb0a3a908bd468d0bc2cda0370bf75a50cc9ff2c1c03dbf770d8->leave($__internal_1d2b2b5d37aebb0a3a908bd468d0bc2cda0370bf75a50cc9ff2c1c03dbf770d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8c5a3528fb33dba305b189d75849ec0fc02d6d269af32a63d31e4ff1ff689de = $this->env->getExtension("native_profiler");
        $__internal_b8c5a3528fb33dba305b189d75849ec0fc02d6d269af32a63d31e4ff1ff689de->enter($__internal_b8c5a3528fb33dba305b189d75849ec0fc02d6d269af32a63d31e4ff1ff689de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8c5a3528fb33dba305b189d75849ec0fc02d6d269af32a63d31e4ff1ff689de->leave($__internal_b8c5a3528fb33dba305b189d75849ec0fc02d6d269af32a63d31e4ff1ff689de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10e3a631fa01bce930b649318adf2164b3430328705ee1cc4966bc2be450ce93 = $this->env->getExtension("native_profiler");
        $__internal_10e3a631fa01bce930b649318adf2164b3430328705ee1cc4966bc2be450ce93->enter($__internal_10e3a631fa01bce930b649318adf2164b3430328705ee1cc4966bc2be450ce93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_10e3a631fa01bce930b649318adf2164b3430328705ee1cc4966bc2be450ce93->leave($__internal_10e3a631fa01bce930b649318adf2164b3430328705ee1cc4966bc2be450ce93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_838bedea227086a40252f7ebec80bf035522fe3737e04c341ee427bec722b1cf = $this->env->getExtension("native_profiler");
        $__internal_838bedea227086a40252f7ebec80bf035522fe3737e04c341ee427bec722b1cf->enter($__internal_838bedea227086a40252f7ebec80bf035522fe3737e04c341ee427bec722b1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_838bedea227086a40252f7ebec80bf035522fe3737e04c341ee427bec722b1cf->leave($__internal_838bedea227086a40252f7ebec80bf035522fe3737e04c341ee427bec722b1cf_prof);

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
