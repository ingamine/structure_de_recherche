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
        $__internal_64bb1a5c928960551ed2ee273d5c6dd800369800002bd4f01404988ce2dbced9 = $this->env->getExtension("native_profiler");
        $__internal_64bb1a5c928960551ed2ee273d5c6dd800369800002bd4f01404988ce2dbced9->enter($__internal_64bb1a5c928960551ed2ee273d5c6dd800369800002bd4f01404988ce2dbced9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64bb1a5c928960551ed2ee273d5c6dd800369800002bd4f01404988ce2dbced9->leave($__internal_64bb1a5c928960551ed2ee273d5c6dd800369800002bd4f01404988ce2dbced9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0daaf3855cf1fc2e8cac78a34b5454ed644675d0e1edb522f950da954a76a89 = $this->env->getExtension("native_profiler");
        $__internal_c0daaf3855cf1fc2e8cac78a34b5454ed644675d0e1edb522f950da954a76a89->enter($__internal_c0daaf3855cf1fc2e8cac78a34b5454ed644675d0e1edb522f950da954a76a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c0daaf3855cf1fc2e8cac78a34b5454ed644675d0e1edb522f950da954a76a89->leave($__internal_c0daaf3855cf1fc2e8cac78a34b5454ed644675d0e1edb522f950da954a76a89_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_084e875e776a4370b969be7e1a2d24cacb77d5febca8e40155b65dc629e090a2 = $this->env->getExtension("native_profiler");
        $__internal_084e875e776a4370b969be7e1a2d24cacb77d5febca8e40155b65dc629e090a2->enter($__internal_084e875e776a4370b969be7e1a2d24cacb77d5febca8e40155b65dc629e090a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_084e875e776a4370b969be7e1a2d24cacb77d5febca8e40155b65dc629e090a2->leave($__internal_084e875e776a4370b969be7e1a2d24cacb77d5febca8e40155b65dc629e090a2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4dd827fc0875617f16c1d4a02120553d4e17e8ea031ffc742d4552a658abad6 = $this->env->getExtension("native_profiler");
        $__internal_c4dd827fc0875617f16c1d4a02120553d4e17e8ea031ffc742d4552a658abad6->enter($__internal_c4dd827fc0875617f16c1d4a02120553d4e17e8ea031ffc742d4552a658abad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c4dd827fc0875617f16c1d4a02120553d4e17e8ea031ffc742d4552a658abad6->leave($__internal_c4dd827fc0875617f16c1d4a02120553d4e17e8ea031ffc742d4552a658abad6_prof);

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
