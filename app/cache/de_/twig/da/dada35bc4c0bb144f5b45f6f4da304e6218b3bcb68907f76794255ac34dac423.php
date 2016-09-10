<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_ca5bfe2d24ee7f6c29d3f61b4ea74c3ce66224c7740da1032ee7e59531a1e274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_bbf1797bb43e4c059ff3843b29b874f77f7b85d0d1beebfbc53d62d1806832bb = $this->env->getExtension("native_profiler");
        $__internal_bbf1797bb43e4c059ff3843b29b874f77f7b85d0d1beebfbc53d62d1806832bb->enter($__internal_bbf1797bb43e4c059ff3843b29b874f77f7b85d0d1beebfbc53d62d1806832bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbf1797bb43e4c059ff3843b29b874f77f7b85d0d1beebfbc53d62d1806832bb->leave($__internal_bbf1797bb43e4c059ff3843b29b874f77f7b85d0d1beebfbc53d62d1806832bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e641339e4f4d275b1e1ef2f77e69277f388353fde8521bf90ce23758d61d0f36 = $this->env->getExtension("native_profiler");
        $__internal_e641339e4f4d275b1e1ef2f77e69277f388353fde8521bf90ce23758d61d0f36->enter($__internal_e641339e4f4d275b1e1ef2f77e69277f388353fde8521bf90ce23758d61d0f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_e641339e4f4d275b1e1ef2f77e69277f388353fde8521bf90ce23758d61d0f36->leave($__internal_e641339e4f4d275b1e1ef2f77e69277f388353fde8521bf90ce23758d61d0f36_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
