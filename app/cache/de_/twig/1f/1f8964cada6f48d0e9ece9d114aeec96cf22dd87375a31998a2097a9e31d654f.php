<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_43a8368ef0203c1100190df8f217479cc68de5e7d2599314fac93c3eeef68ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_036fbb63e1d8c1dc85ab59ea00b0334ca242dc696e915342f21c390baf1f6d97 = $this->env->getExtension("native_profiler");
        $__internal_036fbb63e1d8c1dc85ab59ea00b0334ca242dc696e915342f21c390baf1f6d97->enter($__internal_036fbb63e1d8c1dc85ab59ea00b0334ca242dc696e915342f21c390baf1f6d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_036fbb63e1d8c1dc85ab59ea00b0334ca242dc696e915342f21c390baf1f6d97->leave($__internal_036fbb63e1d8c1dc85ab59ea00b0334ca242dc696e915342f21c390baf1f6d97_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8b6bafaf82dcac527a1342a682f490808f6de01ceab2e64ae353c277a301be3 = $this->env->getExtension("native_profiler");
        $__internal_f8b6bafaf82dcac527a1342a682f490808f6de01ceab2e64ae353c277a301be3->enter($__internal_f8b6bafaf82dcac527a1342a682f490808f6de01ceab2e64ae353c277a301be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_f8b6bafaf82dcac527a1342a682f490808f6de01ceab2e64ae353c277a301be3->leave($__internal_f8b6bafaf82dcac527a1342a682f490808f6de01ceab2e64ae353c277a301be3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
