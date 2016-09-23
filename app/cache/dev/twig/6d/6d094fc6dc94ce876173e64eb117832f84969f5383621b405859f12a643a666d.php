<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f5cf3a20dce0a9ef16055be7208b625994bbb4f55573d2371ebeecdfa46a35ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_088898356822d8b952ecd2e6e261e79c24fb6fb1adca2b8994d2d37616a861a3 = $this->env->getExtension("native_profiler");
        $__internal_088898356822d8b952ecd2e6e261e79c24fb6fb1adca2b8994d2d37616a861a3->enter($__internal_088898356822d8b952ecd2e6e261e79c24fb6fb1adca2b8994d2d37616a861a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_088898356822d8b952ecd2e6e261e79c24fb6fb1adca2b8994d2d37616a861a3->leave($__internal_088898356822d8b952ecd2e6e261e79c24fb6fb1adca2b8994d2d37616a861a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bb62586367315b3b4a3e43956ce9c4737d8ed1f29e71c319e55c014f194d94b = $this->env->getExtension("native_profiler");
        $__internal_3bb62586367315b3b4a3e43956ce9c4737d8ed1f29e71c319e55c014f194d94b->enter($__internal_3bb62586367315b3b4a3e43956ce9c4737d8ed1f29e71c319e55c014f194d94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3bb62586367315b3b4a3e43956ce9c4737d8ed1f29e71c319e55c014f194d94b->leave($__internal_3bb62586367315b3b4a3e43956ce9c4737d8ed1f29e71c319e55c014f194d94b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_893c736e47a4c5845218f27681bfbf5e581f291ee4abfdf20e56a1882c700ca4 = $this->env->getExtension("native_profiler");
        $__internal_893c736e47a4c5845218f27681bfbf5e581f291ee4abfdf20e56a1882c700ca4->enter($__internal_893c736e47a4c5845218f27681bfbf5e581f291ee4abfdf20e56a1882c700ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_893c736e47a4c5845218f27681bfbf5e581f291ee4abfdf20e56a1882c700ca4->leave($__internal_893c736e47a4c5845218f27681bfbf5e581f291ee4abfdf20e56a1882c700ca4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
