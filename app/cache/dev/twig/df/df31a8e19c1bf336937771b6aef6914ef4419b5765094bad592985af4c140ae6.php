<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_6a9b8833cb877b6953504b6681edc8583589fc4db4615ec9903215a09aad0a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_9682a4262857259514264f23c1f6f529fff3fb7841b33897a4c098d6749a741e = $this->env->getExtension("native_profiler");
        $__internal_9682a4262857259514264f23c1f6f529fff3fb7841b33897a4c098d6749a741e->enter($__internal_9682a4262857259514264f23c1f6f529fff3fb7841b33897a4c098d6749a741e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9682a4262857259514264f23c1f6f529fff3fb7841b33897a4c098d6749a741e->leave($__internal_9682a4262857259514264f23c1f6f529fff3fb7841b33897a4c098d6749a741e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4035cc0d006b6529f3bd66626acd026169f477f9b59700d4d20cde29de178d49 = $this->env->getExtension("native_profiler");
        $__internal_4035cc0d006b6529f3bd66626acd026169f477f9b59700d4d20cde29de178d49->enter($__internal_4035cc0d006b6529f3bd66626acd026169f477f9b59700d4d20cde29de178d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_4035cc0d006b6529f3bd66626acd026169f477f9b59700d4d20cde29de178d49->leave($__internal_4035cc0d006b6529f3bd66626acd026169f477f9b59700d4d20cde29de178d49_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
