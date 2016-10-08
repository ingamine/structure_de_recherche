<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7e76b84552270c8a4ef8c71b84b6dce73aaddc265913280616fa28c56f8da8b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8af03255a08c0863432c1a4bcf4000c943023f507d4054fe758273897426fcc9 = $this->env->getExtension("native_profiler");
        $__internal_8af03255a08c0863432c1a4bcf4000c943023f507d4054fe758273897426fcc9->enter($__internal_8af03255a08c0863432c1a4bcf4000c943023f507d4054fe758273897426fcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8af03255a08c0863432c1a4bcf4000c943023f507d4054fe758273897426fcc9->leave($__internal_8af03255a08c0863432c1a4bcf4000c943023f507d4054fe758273897426fcc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_007c3951f69bf3d3a833453ad0d87321187c89dd189a85d6b7dc16946a83cf5d = $this->env->getExtension("native_profiler");
        $__internal_007c3951f69bf3d3a833453ad0d87321187c89dd189a85d6b7dc16946a83cf5d->enter($__internal_007c3951f69bf3d3a833453ad0d87321187c89dd189a85d6b7dc16946a83cf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_007c3951f69bf3d3a833453ad0d87321187c89dd189a85d6b7dc16946a83cf5d->leave($__internal_007c3951f69bf3d3a833453ad0d87321187c89dd189a85d6b7dc16946a83cf5d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
