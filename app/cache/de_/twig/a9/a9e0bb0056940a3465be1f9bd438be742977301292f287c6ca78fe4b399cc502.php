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
        $__internal_1a64e859e2cd75cc27655cc5919d4d7fbe9b610c6db9bdef703200daf8f65c40 = $this->env->getExtension("native_profiler");
        $__internal_1a64e859e2cd75cc27655cc5919d4d7fbe9b610c6db9bdef703200daf8f65c40->enter($__internal_1a64e859e2cd75cc27655cc5919d4d7fbe9b610c6db9bdef703200daf8f65c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a64e859e2cd75cc27655cc5919d4d7fbe9b610c6db9bdef703200daf8f65c40->leave($__internal_1a64e859e2cd75cc27655cc5919d4d7fbe9b610c6db9bdef703200daf8f65c40_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa86ad270277de2b7b069558ec9b3cf3eb760b76e4a244c6615a3d4f5dfe8615 = $this->env->getExtension("native_profiler");
        $__internal_fa86ad270277de2b7b069558ec9b3cf3eb760b76e4a244c6615a3d4f5dfe8615->enter($__internal_fa86ad270277de2b7b069558ec9b3cf3eb760b76e4a244c6615a3d4f5dfe8615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fa86ad270277de2b7b069558ec9b3cf3eb760b76e4a244c6615a3d4f5dfe8615->leave($__internal_fa86ad270277de2b7b069558ec9b3cf3eb760b76e4a244c6615a3d4f5dfe8615_prof);

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
