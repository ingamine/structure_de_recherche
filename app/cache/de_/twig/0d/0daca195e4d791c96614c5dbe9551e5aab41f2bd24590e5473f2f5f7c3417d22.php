<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6b62927014b734f0bf1bb8f4296c557d5d6647b02eec9c620d0dffecd91e5300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8891497e7978fcadf38783da79a469b592d4d388146fcd332b1a8aaadf58b951 = $this->env->getExtension("native_profiler");
        $__internal_8891497e7978fcadf38783da79a469b592d4d388146fcd332b1a8aaadf58b951->enter($__internal_8891497e7978fcadf38783da79a469b592d4d388146fcd332b1a8aaadf58b951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8891497e7978fcadf38783da79a469b592d4d388146fcd332b1a8aaadf58b951->leave($__internal_8891497e7978fcadf38783da79a469b592d4d388146fcd332b1a8aaadf58b951_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_330010c672c21a55d1cf3e1b091aaa9424b752402f0d9cec93c3765f83621253 = $this->env->getExtension("native_profiler");
        $__internal_330010c672c21a55d1cf3e1b091aaa9424b752402f0d9cec93c3765f83621253->enter($__internal_330010c672c21a55d1cf3e1b091aaa9424b752402f0d9cec93c3765f83621253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_330010c672c21a55d1cf3e1b091aaa9424b752402f0d9cec93c3765f83621253->leave($__internal_330010c672c21a55d1cf3e1b091aaa9424b752402f0d9cec93c3765f83621253_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_820a2652d0bdcdc7df3262b8f878acb2bf4c726c1fe0fa1983987a0f46743efe = $this->env->getExtension("native_profiler");
        $__internal_820a2652d0bdcdc7df3262b8f878acb2bf4c726c1fe0fa1983987a0f46743efe->enter($__internal_820a2652d0bdcdc7df3262b8f878acb2bf4c726c1fe0fa1983987a0f46743efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_820a2652d0bdcdc7df3262b8f878acb2bf4c726c1fe0fa1983987a0f46743efe->leave($__internal_820a2652d0bdcdc7df3262b8f878acb2bf4c726c1fe0fa1983987a0f46743efe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b805a7942bb228b8f3b4474477a957026f0cc77110cd7870fb9555fa3b5490d = $this->env->getExtension("native_profiler");
        $__internal_0b805a7942bb228b8f3b4474477a957026f0cc77110cd7870fb9555fa3b5490d->enter($__internal_0b805a7942bb228b8f3b4474477a957026f0cc77110cd7870fb9555fa3b5490d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0b805a7942bb228b8f3b4474477a957026f0cc77110cd7870fb9555fa3b5490d->leave($__internal_0b805a7942bb228b8f3b4474477a957026f0cc77110cd7870fb9555fa3b5490d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
