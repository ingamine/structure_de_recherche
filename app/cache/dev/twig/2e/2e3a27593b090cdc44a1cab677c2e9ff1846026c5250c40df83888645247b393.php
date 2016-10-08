<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_8553eb10527e86f84c9cb83469d1b8b111b252a6f6a34a54da098fed7ea8f1d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_37ed9209b96e0a495be50916c1859e54e1c401ba167e84af0af4946e1475e9bb = $this->env->getExtension("native_profiler");
        $__internal_37ed9209b96e0a495be50916c1859e54e1c401ba167e84af0af4946e1475e9bb->enter($__internal_37ed9209b96e0a495be50916c1859e54e1c401ba167e84af0af4946e1475e9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ed9209b96e0a495be50916c1859e54e1c401ba167e84af0af4946e1475e9bb->leave($__internal_37ed9209b96e0a495be50916c1859e54e1c401ba167e84af0af4946e1475e9bb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b2297a4e4579411594348e4d54bff666e2722fc22026bfd65e9ad241e7abd94 = $this->env->getExtension("native_profiler");
        $__internal_9b2297a4e4579411594348e4d54bff666e2722fc22026bfd65e9ad241e7abd94->enter($__internal_9b2297a4e4579411594348e4d54bff666e2722fc22026bfd65e9ad241e7abd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9b2297a4e4579411594348e4d54bff666e2722fc22026bfd65e9ad241e7abd94->leave($__internal_9b2297a4e4579411594348e4d54bff666e2722fc22026bfd65e9ad241e7abd94_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
