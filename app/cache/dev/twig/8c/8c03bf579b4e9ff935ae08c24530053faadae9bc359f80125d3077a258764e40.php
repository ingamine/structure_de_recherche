<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1212e4bc8abff09f3eb89c421e858b9165b1c195a7682d1c3f1b8df7409448be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_7fcf60704211f8485eb8ae727c1a272758a0f3282f389cb0bc7a49b35a2829c6 = $this->env->getExtension("native_profiler");
        $__internal_7fcf60704211f8485eb8ae727c1a272758a0f3282f389cb0bc7a49b35a2829c6->enter($__internal_7fcf60704211f8485eb8ae727c1a272758a0f3282f389cb0bc7a49b35a2829c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fcf60704211f8485eb8ae727c1a272758a0f3282f389cb0bc7a49b35a2829c6->leave($__internal_7fcf60704211f8485eb8ae727c1a272758a0f3282f389cb0bc7a49b35a2829c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d4c8aaecc71ada4b8df70e6a0ddf1ea50dbaf957ed971da2bb36ef876369531 = $this->env->getExtension("native_profiler");
        $__internal_7d4c8aaecc71ada4b8df70e6a0ddf1ea50dbaf957ed971da2bb36ef876369531->enter($__internal_7d4c8aaecc71ada4b8df70e6a0ddf1ea50dbaf957ed971da2bb36ef876369531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7d4c8aaecc71ada4b8df70e6a0ddf1ea50dbaf957ed971da2bb36ef876369531->leave($__internal_7d4c8aaecc71ada4b8df70e6a0ddf1ea50dbaf957ed971da2bb36ef876369531_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_69aa515f3f953a8b5433786dd4da27928e348432ccabaa7bd5cac51e9cf1f74e = $this->env->getExtension("native_profiler");
        $__internal_69aa515f3f953a8b5433786dd4da27928e348432ccabaa7bd5cac51e9cf1f74e->enter($__internal_69aa515f3f953a8b5433786dd4da27928e348432ccabaa7bd5cac51e9cf1f74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_69aa515f3f953a8b5433786dd4da27928e348432ccabaa7bd5cac51e9cf1f74e->leave($__internal_69aa515f3f953a8b5433786dd4da27928e348432ccabaa7bd5cac51e9cf1f74e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a2f9fc26dd4a6619ddae2b1815b33113330396defb23ac29c11752a7c1c4f66 = $this->env->getExtension("native_profiler");
        $__internal_3a2f9fc26dd4a6619ddae2b1815b33113330396defb23ac29c11752a7c1c4f66->enter($__internal_3a2f9fc26dd4a6619ddae2b1815b33113330396defb23ac29c11752a7c1c4f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3a2f9fc26dd4a6619ddae2b1815b33113330396defb23ac29c11752a7c1c4f66->leave($__internal_3a2f9fc26dd4a6619ddae2b1815b33113330396defb23ac29c11752a7c1c4f66_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
