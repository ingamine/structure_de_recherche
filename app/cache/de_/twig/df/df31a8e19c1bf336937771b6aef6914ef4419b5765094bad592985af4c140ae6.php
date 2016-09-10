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
        $__internal_a0e87a3d115c4177a880e546aed5ec1bc106275f7874cd5e012d274f2904e32e = $this->env->getExtension("native_profiler");
        $__internal_a0e87a3d115c4177a880e546aed5ec1bc106275f7874cd5e012d274f2904e32e->enter($__internal_a0e87a3d115c4177a880e546aed5ec1bc106275f7874cd5e012d274f2904e32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0e87a3d115c4177a880e546aed5ec1bc106275f7874cd5e012d274f2904e32e->leave($__internal_a0e87a3d115c4177a880e546aed5ec1bc106275f7874cd5e012d274f2904e32e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c769a1855742237344646cc785ac73995d976e2c057d72871e671b78aa341ab0 = $this->env->getExtension("native_profiler");
        $__internal_c769a1855742237344646cc785ac73995d976e2c057d72871e671b78aa341ab0->enter($__internal_c769a1855742237344646cc785ac73995d976e2c057d72871e671b78aa341ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c769a1855742237344646cc785ac73995d976e2c057d72871e671b78aa341ab0->leave($__internal_c769a1855742237344646cc785ac73995d976e2c057d72871e671b78aa341ab0_prof);

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
