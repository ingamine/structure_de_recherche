<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_36e6c9c46287f662589deff939664b4ab8b305b3b15099db4cee5a6068c2188c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b2e72394f4beb8f11054bd36ee320bb4916c989c6b5b2efb1bdd600aee7ab662 = $this->env->getExtension("native_profiler");
        $__internal_b2e72394f4beb8f11054bd36ee320bb4916c989c6b5b2efb1bdd600aee7ab662->enter($__internal_b2e72394f4beb8f11054bd36ee320bb4916c989c6b5b2efb1bdd600aee7ab662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2e72394f4beb8f11054bd36ee320bb4916c989c6b5b2efb1bdd600aee7ab662->leave($__internal_b2e72394f4beb8f11054bd36ee320bb4916c989c6b5b2efb1bdd600aee7ab662_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_559c582905454d5bcdbdec2683dc5c36fd911470656c774ccb6b9c4c08aac41e = $this->env->getExtension("native_profiler");
        $__internal_559c582905454d5bcdbdec2683dc5c36fd911470656c774ccb6b9c4c08aac41e->enter($__internal_559c582905454d5bcdbdec2683dc5c36fd911470656c774ccb6b9c4c08aac41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_559c582905454d5bcdbdec2683dc5c36fd911470656c774ccb6b9c4c08aac41e->leave($__internal_559c582905454d5bcdbdec2683dc5c36fd911470656c774ccb6b9c4c08aac41e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
