<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dc25c429ce19b0d0292d8042af385ccf27243015a34293953fa063202c7667a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4d9b6fb8ed840f956cf09f78ae4118a3fbd8ae030b0ee8d9ff282907479a8ba = $this->env->getExtension("native_profiler");
        $__internal_d4d9b6fb8ed840f956cf09f78ae4118a3fbd8ae030b0ee8d9ff282907479a8ba->enter($__internal_d4d9b6fb8ed840f956cf09f78ae4118a3fbd8ae030b0ee8d9ff282907479a8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d9b6fb8ed840f956cf09f78ae4118a3fbd8ae030b0ee8d9ff282907479a8ba->leave($__internal_d4d9b6fb8ed840f956cf09f78ae4118a3fbd8ae030b0ee8d9ff282907479a8ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aee6c4b1050d7103429dd2fae762bd96aefe7c7c31623230e4af390eab65b3fc = $this->env->getExtension("native_profiler");
        $__internal_aee6c4b1050d7103429dd2fae762bd96aefe7c7c31623230e4af390eab65b3fc->enter($__internal_aee6c4b1050d7103429dd2fae762bd96aefe7c7c31623230e4af390eab65b3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_aee6c4b1050d7103429dd2fae762bd96aefe7c7c31623230e4af390eab65b3fc->leave($__internal_aee6c4b1050d7103429dd2fae762bd96aefe7c7c31623230e4af390eab65b3fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_60abc73558c82fcc6d7f194630e897a399155ca393f31f88db8b19a7fae4828d = $this->env->getExtension("native_profiler");
        $__internal_60abc73558c82fcc6d7f194630e897a399155ca393f31f88db8b19a7fae4828d->enter($__internal_60abc73558c82fcc6d7f194630e897a399155ca393f31f88db8b19a7fae4828d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_60abc73558c82fcc6d7f194630e897a399155ca393f31f88db8b19a7fae4828d->leave($__internal_60abc73558c82fcc6d7f194630e897a399155ca393f31f88db8b19a7fae4828d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
