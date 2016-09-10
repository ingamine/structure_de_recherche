<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_16280641e94f411b1f92a179a9e8b0545eef442882105f8db06e8377a3a1fc09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a4adfe425a6466ca6ceac68b993ac323cddff63dd1933f2112616d2278877c0 = $this->env->getExtension("native_profiler");
        $__internal_8a4adfe425a6466ca6ceac68b993ac323cddff63dd1933f2112616d2278877c0->enter($__internal_8a4adfe425a6466ca6ceac68b993ac323cddff63dd1933f2112616d2278877c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a4adfe425a6466ca6ceac68b993ac323cddff63dd1933f2112616d2278877c0->leave($__internal_8a4adfe425a6466ca6ceac68b993ac323cddff63dd1933f2112616d2278877c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_031500addafe5f549cdf86986cbcd75ae5477ac8500694d9adcbf20373859b14 = $this->env->getExtension("native_profiler");
        $__internal_031500addafe5f549cdf86986cbcd75ae5477ac8500694d9adcbf20373859b14->enter($__internal_031500addafe5f549cdf86986cbcd75ae5477ac8500694d9adcbf20373859b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_031500addafe5f549cdf86986cbcd75ae5477ac8500694d9adcbf20373859b14->leave($__internal_031500addafe5f549cdf86986cbcd75ae5477ac8500694d9adcbf20373859b14_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
