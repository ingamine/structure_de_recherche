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
        $__internal_4b54aa55f87e54c36901e5073ec70c9781b993c84c7ef677cf9ed2fe4458a77f = $this->env->getExtension("native_profiler");
        $__internal_4b54aa55f87e54c36901e5073ec70c9781b993c84c7ef677cf9ed2fe4458a77f->enter($__internal_4b54aa55f87e54c36901e5073ec70c9781b993c84c7ef677cf9ed2fe4458a77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b54aa55f87e54c36901e5073ec70c9781b993c84c7ef677cf9ed2fe4458a77f->leave($__internal_4b54aa55f87e54c36901e5073ec70c9781b993c84c7ef677cf9ed2fe4458a77f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0895a003f557947c30faedde162b49b43c2abeef36b13e361f08d2880988e037 = $this->env->getExtension("native_profiler");
        $__internal_0895a003f557947c30faedde162b49b43c2abeef36b13e361f08d2880988e037->enter($__internal_0895a003f557947c30faedde162b49b43c2abeef36b13e361f08d2880988e037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0895a003f557947c30faedde162b49b43c2abeef36b13e361f08d2880988e037->leave($__internal_0895a003f557947c30faedde162b49b43c2abeef36b13e361f08d2880988e037_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_333d039ff6c6b5aa24537e50ddc805dae2fabbcddbe41a93253c8e0c771fa7a5 = $this->env->getExtension("native_profiler");
        $__internal_333d039ff6c6b5aa24537e50ddc805dae2fabbcddbe41a93253c8e0c771fa7a5->enter($__internal_333d039ff6c6b5aa24537e50ddc805dae2fabbcddbe41a93253c8e0c771fa7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_333d039ff6c6b5aa24537e50ddc805dae2fabbcddbe41a93253c8e0c771fa7a5->leave($__internal_333d039ff6c6b5aa24537e50ddc805dae2fabbcddbe41a93253c8e0c771fa7a5_prof);

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
