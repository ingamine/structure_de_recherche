<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_163cbd37ee745927a2210659680a897352a25b4a7d634115ab8b0de28db15f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_f5caf6f139d5b8e519388f28052d424488901087501f65297b4e25d422526498 = $this->env->getExtension("native_profiler");
        $__internal_f5caf6f139d5b8e519388f28052d424488901087501f65297b4e25d422526498->enter($__internal_f5caf6f139d5b8e519388f28052d424488901087501f65297b4e25d422526498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5caf6f139d5b8e519388f28052d424488901087501f65297b4e25d422526498->leave($__internal_f5caf6f139d5b8e519388f28052d424488901087501f65297b4e25d422526498_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d99ff6e5bc062b8e6eb6f7aa80dd01a03937c6df988f1518254a89dd9c3e85a1 = $this->env->getExtension("native_profiler");
        $__internal_d99ff6e5bc062b8e6eb6f7aa80dd01a03937c6df988f1518254a89dd9c3e85a1->enter($__internal_d99ff6e5bc062b8e6eb6f7aa80dd01a03937c6df988f1518254a89dd9c3e85a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d99ff6e5bc062b8e6eb6f7aa80dd01a03937c6df988f1518254a89dd9c3e85a1->leave($__internal_d99ff6e5bc062b8e6eb6f7aa80dd01a03937c6df988f1518254a89dd9c3e85a1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
