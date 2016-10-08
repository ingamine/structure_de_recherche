<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_dba0e245bc110b242df04b9159d9c5b280d7daa58af5915549411d26cacf5f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_fc9c737cb3e25f3baec268ba8500a26d498a86cf1aede61a92f4616b9bf7a568 = $this->env->getExtension("native_profiler");
        $__internal_fc9c737cb3e25f3baec268ba8500a26d498a86cf1aede61a92f4616b9bf7a568->enter($__internal_fc9c737cb3e25f3baec268ba8500a26d498a86cf1aede61a92f4616b9bf7a568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9c737cb3e25f3baec268ba8500a26d498a86cf1aede61a92f4616b9bf7a568->leave($__internal_fc9c737cb3e25f3baec268ba8500a26d498a86cf1aede61a92f4616b9bf7a568_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97938a036389ad66d63b9843fe8d209f34dd4c08b7c92c218d912cacb9241af5 = $this->env->getExtension("native_profiler");
        $__internal_97938a036389ad66d63b9843fe8d209f34dd4c08b7c92c218d912cacb9241af5->enter($__internal_97938a036389ad66d63b9843fe8d209f34dd4c08b7c92c218d912cacb9241af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_97938a036389ad66d63b9843fe8d209f34dd4c08b7c92c218d912cacb9241af5->leave($__internal_97938a036389ad66d63b9843fe8d209f34dd4c08b7c92c218d912cacb9241af5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
