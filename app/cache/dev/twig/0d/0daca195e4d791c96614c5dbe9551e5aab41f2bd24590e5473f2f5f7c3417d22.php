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
        $__internal_c6e3e6359ca9e0563a083e16bc47fd324b4bfd4f777f05a45671892d43a4182f = $this->env->getExtension("native_profiler");
        $__internal_c6e3e6359ca9e0563a083e16bc47fd324b4bfd4f777f05a45671892d43a4182f->enter($__internal_c6e3e6359ca9e0563a083e16bc47fd324b4bfd4f777f05a45671892d43a4182f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6e3e6359ca9e0563a083e16bc47fd324b4bfd4f777f05a45671892d43a4182f->leave($__internal_c6e3e6359ca9e0563a083e16bc47fd324b4bfd4f777f05a45671892d43a4182f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da9d994c471953d78e514e6f0933e649a338669636ed71364da470f16d8e5d78 = $this->env->getExtension("native_profiler");
        $__internal_da9d994c471953d78e514e6f0933e649a338669636ed71364da470f16d8e5d78->enter($__internal_da9d994c471953d78e514e6f0933e649a338669636ed71364da470f16d8e5d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_da9d994c471953d78e514e6f0933e649a338669636ed71364da470f16d8e5d78->leave($__internal_da9d994c471953d78e514e6f0933e649a338669636ed71364da470f16d8e5d78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4188db3ae97f850a6bb9ca89b055a0d63d8025e4dd9e45711a5acb0c623baa8 = $this->env->getExtension("native_profiler");
        $__internal_f4188db3ae97f850a6bb9ca89b055a0d63d8025e4dd9e45711a5acb0c623baa8->enter($__internal_f4188db3ae97f850a6bb9ca89b055a0d63d8025e4dd9e45711a5acb0c623baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f4188db3ae97f850a6bb9ca89b055a0d63d8025e4dd9e45711a5acb0c623baa8->leave($__internal_f4188db3ae97f850a6bb9ca89b055a0d63d8025e4dd9e45711a5acb0c623baa8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea2861c55988f2d1e1e5fa90b448da276777774743dbae8fc8bb083fee176678 = $this->env->getExtension("native_profiler");
        $__internal_ea2861c55988f2d1e1e5fa90b448da276777774743dbae8fc8bb083fee176678->enter($__internal_ea2861c55988f2d1e1e5fa90b448da276777774743dbae8fc8bb083fee176678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ea2861c55988f2d1e1e5fa90b448da276777774743dbae8fc8bb083fee176678->leave($__internal_ea2861c55988f2d1e1e5fa90b448da276777774743dbae8fc8bb083fee176678_prof);

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
