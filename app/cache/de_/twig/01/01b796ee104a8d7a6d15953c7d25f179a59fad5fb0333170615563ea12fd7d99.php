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
        $__internal_f9a18499b8b2076051caf39fc932adfe797b02b792b4fb93a9a1288416f4906e = $this->env->getExtension("native_profiler");
        $__internal_f9a18499b8b2076051caf39fc932adfe797b02b792b4fb93a9a1288416f4906e->enter($__internal_f9a18499b8b2076051caf39fc932adfe797b02b792b4fb93a9a1288416f4906e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9a18499b8b2076051caf39fc932adfe797b02b792b4fb93a9a1288416f4906e->leave($__internal_f9a18499b8b2076051caf39fc932adfe797b02b792b4fb93a9a1288416f4906e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0e78c18416c2ead0cef1adbcada368bfc9453b0e485287ea1b360d44a0ce632 = $this->env->getExtension("native_profiler");
        $__internal_c0e78c18416c2ead0cef1adbcada368bfc9453b0e485287ea1b360d44a0ce632->enter($__internal_c0e78c18416c2ead0cef1adbcada368bfc9453b0e485287ea1b360d44a0ce632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c0e78c18416c2ead0cef1adbcada368bfc9453b0e485287ea1b360d44a0ce632->leave($__internal_c0e78c18416c2ead0cef1adbcada368bfc9453b0e485287ea1b360d44a0ce632_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0995ff996fecffddbe1dc20eff3509c224768e0646976bd9c1f405f0750c6f4 = $this->env->getExtension("native_profiler");
        $__internal_c0995ff996fecffddbe1dc20eff3509c224768e0646976bd9c1f405f0750c6f4->enter($__internal_c0995ff996fecffddbe1dc20eff3509c224768e0646976bd9c1f405f0750c6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0995ff996fecffddbe1dc20eff3509c224768e0646976bd9c1f405f0750c6f4->leave($__internal_c0995ff996fecffddbe1dc20eff3509c224768e0646976bd9c1f405f0750c6f4_prof);

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
