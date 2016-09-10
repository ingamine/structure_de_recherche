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
        $__internal_73a127c07c6719fc4bc7b9acdd0165435e12c3eeb22d721225d751cf554d2c07 = $this->env->getExtension("native_profiler");
        $__internal_73a127c07c6719fc4bc7b9acdd0165435e12c3eeb22d721225d751cf554d2c07->enter($__internal_73a127c07c6719fc4bc7b9acdd0165435e12c3eeb22d721225d751cf554d2c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73a127c07c6719fc4bc7b9acdd0165435e12c3eeb22d721225d751cf554d2c07->leave($__internal_73a127c07c6719fc4bc7b9acdd0165435e12c3eeb22d721225d751cf554d2c07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51b64b0f162cc23f7a8ea234a3c6351c9f121335df6109d8b2230745c50910b5 = $this->env->getExtension("native_profiler");
        $__internal_51b64b0f162cc23f7a8ea234a3c6351c9f121335df6109d8b2230745c50910b5->enter($__internal_51b64b0f162cc23f7a8ea234a3c6351c9f121335df6109d8b2230745c50910b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_51b64b0f162cc23f7a8ea234a3c6351c9f121335df6109d8b2230745c50910b5->leave($__internal_51b64b0f162cc23f7a8ea234a3c6351c9f121335df6109d8b2230745c50910b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1dde0b819e2b78af0a781f7c2cc8e5348006dd82afc595c53fc80528642c9c1 = $this->env->getExtension("native_profiler");
        $__internal_b1dde0b819e2b78af0a781f7c2cc8e5348006dd82afc595c53fc80528642c9c1->enter($__internal_b1dde0b819e2b78af0a781f7c2cc8e5348006dd82afc595c53fc80528642c9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1dde0b819e2b78af0a781f7c2cc8e5348006dd82afc595c53fc80528642c9c1->leave($__internal_b1dde0b819e2b78af0a781f7c2cc8e5348006dd82afc595c53fc80528642c9c1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dad5c4080b04a9e6f6a2e7e52fc9a8dcfd8fabf137910c8dbe792e97adc9d48a = $this->env->getExtension("native_profiler");
        $__internal_dad5c4080b04a9e6f6a2e7e52fc9a8dcfd8fabf137910c8dbe792e97adc9d48a->enter($__internal_dad5c4080b04a9e6f6a2e7e52fc9a8dcfd8fabf137910c8dbe792e97adc9d48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dad5c4080b04a9e6f6a2e7e52fc9a8dcfd8fabf137910c8dbe792e97adc9d48a->leave($__internal_dad5c4080b04a9e6f6a2e7e52fc9a8dcfd8fabf137910c8dbe792e97adc9d48a_prof);

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
