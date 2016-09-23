<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_aeb049a4768e91d6e4962cc728b1876ed3ad4d26adde85d9e42c8144543d7fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_3fadfeaff2f0528ea25c74d077c5900942c8f658ed520e8e625e0571c619538b = $this->env->getExtension("native_profiler");
        $__internal_3fadfeaff2f0528ea25c74d077c5900942c8f658ed520e8e625e0571c619538b->enter($__internal_3fadfeaff2f0528ea25c74d077c5900942c8f658ed520e8e625e0571c619538b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fadfeaff2f0528ea25c74d077c5900942c8f658ed520e8e625e0571c619538b->leave($__internal_3fadfeaff2f0528ea25c74d077c5900942c8f658ed520e8e625e0571c619538b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e705ba090b39c3401095f05d24b96572a702ba216108fad5d95cb6d19b154e25 = $this->env->getExtension("native_profiler");
        $__internal_e705ba090b39c3401095f05d24b96572a702ba216108fad5d95cb6d19b154e25->enter($__internal_e705ba090b39c3401095f05d24b96572a702ba216108fad5d95cb6d19b154e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e705ba090b39c3401095f05d24b96572a702ba216108fad5d95cb6d19b154e25->leave($__internal_e705ba090b39c3401095f05d24b96572a702ba216108fad5d95cb6d19b154e25_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
