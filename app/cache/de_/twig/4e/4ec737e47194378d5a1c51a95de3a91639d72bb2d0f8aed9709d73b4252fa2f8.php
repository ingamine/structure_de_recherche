<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_20521cb2062ccaa2a46426ae6a55287bc458774961e629ae67996a2d7b902673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_ea74e361b684362944ced1ca83c96388940a5d36eb4e9a69e1bf3ee0b8c66e39 = $this->env->getExtension("native_profiler");
        $__internal_ea74e361b684362944ced1ca83c96388940a5d36eb4e9a69e1bf3ee0b8c66e39->enter($__internal_ea74e361b684362944ced1ca83c96388940a5d36eb4e9a69e1bf3ee0b8c66e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea74e361b684362944ced1ca83c96388940a5d36eb4e9a69e1bf3ee0b8c66e39->leave($__internal_ea74e361b684362944ced1ca83c96388940a5d36eb4e9a69e1bf3ee0b8c66e39_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f8ae9b7319213e08c500f947baf01025cfeca0c13e80bc252b1c09819b81533 = $this->env->getExtension("native_profiler");
        $__internal_5f8ae9b7319213e08c500f947baf01025cfeca0c13e80bc252b1c09819b81533->enter($__internal_5f8ae9b7319213e08c500f947baf01025cfeca0c13e80bc252b1c09819b81533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5f8ae9b7319213e08c500f947baf01025cfeca0c13e80bc252b1c09819b81533->leave($__internal_5f8ae9b7319213e08c500f947baf01025cfeca0c13e80bc252b1c09819b81533_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
