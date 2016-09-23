<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_ea06fecef23a5e4e99fc940497c6e055e31e510dd20e9c4809b10e22f5c297a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_09e62334dd29f7f561ac35743a4c280ddc64fd05120d352ce84fdbf44383d656 = $this->env->getExtension("native_profiler");
        $__internal_09e62334dd29f7f561ac35743a4c280ddc64fd05120d352ce84fdbf44383d656->enter($__internal_09e62334dd29f7f561ac35743a4c280ddc64fd05120d352ce84fdbf44383d656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e62334dd29f7f561ac35743a4c280ddc64fd05120d352ce84fdbf44383d656->leave($__internal_09e62334dd29f7f561ac35743a4c280ddc64fd05120d352ce84fdbf44383d656_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_829d08521d31c7603aa7963923c23d4f75b0b787cd7f662617f2eaa272fce1ef = $this->env->getExtension("native_profiler");
        $__internal_829d08521d31c7603aa7963923c23d4f75b0b787cd7f662617f2eaa272fce1ef->enter($__internal_829d08521d31c7603aa7963923c23d4f75b0b787cd7f662617f2eaa272fce1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_829d08521d31c7603aa7963923c23d4f75b0b787cd7f662617f2eaa272fce1ef->leave($__internal_829d08521d31c7603aa7963923c23d4f75b0b787cd7f662617f2eaa272fce1ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
