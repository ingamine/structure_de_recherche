<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_16280641e94f411b1f92a179a9e8b0545eef442882105f8db06e8377a3a1fc09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_5991ca385f73d94b6c62414881394a8c88f62e2fb1828e2f969928c5ca90ac60 = $this->env->getExtension("native_profiler");
        $__internal_5991ca385f73d94b6c62414881394a8c88f62e2fb1828e2f969928c5ca90ac60->enter($__internal_5991ca385f73d94b6c62414881394a8c88f62e2fb1828e2f969928c5ca90ac60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5991ca385f73d94b6c62414881394a8c88f62e2fb1828e2f969928c5ca90ac60->leave($__internal_5991ca385f73d94b6c62414881394a8c88f62e2fb1828e2f969928c5ca90ac60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7245c5c2740c2680bb3a307725308a9cf04c5290405e27a983d0c853fa82d1c = $this->env->getExtension("native_profiler");
        $__internal_d7245c5c2740c2680bb3a307725308a9cf04c5290405e27a983d0c853fa82d1c->enter($__internal_d7245c5c2740c2680bb3a307725308a9cf04c5290405e27a983d0c853fa82d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d7245c5c2740c2680bb3a307725308a9cf04c5290405e27a983d0c853fa82d1c->leave($__internal_d7245c5c2740c2680bb3a307725308a9cf04c5290405e27a983d0c853fa82d1c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
