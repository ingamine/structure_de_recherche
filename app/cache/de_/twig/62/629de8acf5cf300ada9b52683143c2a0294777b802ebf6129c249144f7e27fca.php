<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_74b29c714f68ba34764ab4575d06d6320adc6dfc58c9b3a7afe0bdf9898c3d30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5fcf74c9c16f2e9bd43878a2f756dca68149367f7269d13e9858dc4f9d0b9031 = $this->env->getExtension("native_profiler");
        $__internal_5fcf74c9c16f2e9bd43878a2f756dca68149367f7269d13e9858dc4f9d0b9031->enter($__internal_5fcf74c9c16f2e9bd43878a2f756dca68149367f7269d13e9858dc4f9d0b9031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fcf74c9c16f2e9bd43878a2f756dca68149367f7269d13e9858dc4f9d0b9031->leave($__internal_5fcf74c9c16f2e9bd43878a2f756dca68149367f7269d13e9858dc4f9d0b9031_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f674d646d911fe8faf70d4929ac62f27eb08692419b6b041d7f893192aec150f = $this->env->getExtension("native_profiler");
        $__internal_f674d646d911fe8faf70d4929ac62f27eb08692419b6b041d7f893192aec150f->enter($__internal_f674d646d911fe8faf70d4929ac62f27eb08692419b6b041d7f893192aec150f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f674d646d911fe8faf70d4929ac62f27eb08692419b6b041d7f893192aec150f->leave($__internal_f674d646d911fe8faf70d4929ac62f27eb08692419b6b041d7f893192aec150f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
