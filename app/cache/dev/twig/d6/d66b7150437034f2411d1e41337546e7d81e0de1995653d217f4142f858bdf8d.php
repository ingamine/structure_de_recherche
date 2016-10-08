<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9969d99f726e3f21745d2b8211cdc23fede1738f45bb15614a4968e8c32b29a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_7a28b474a287c8f9caa1c8f2b886e164078e33052adc5b10c7a50df4801cf1b4 = $this->env->getExtension("native_profiler");
        $__internal_7a28b474a287c8f9caa1c8f2b886e164078e33052adc5b10c7a50df4801cf1b4->enter($__internal_7a28b474a287c8f9caa1c8f2b886e164078e33052adc5b10c7a50df4801cf1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a28b474a287c8f9caa1c8f2b886e164078e33052adc5b10c7a50df4801cf1b4->leave($__internal_7a28b474a287c8f9caa1c8f2b886e164078e33052adc5b10c7a50df4801cf1b4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_459b23664db6a1c9992982a245865a2ededcad38f33e5c413e0885f235371f74 = $this->env->getExtension("native_profiler");
        $__internal_459b23664db6a1c9992982a245865a2ededcad38f33e5c413e0885f235371f74->enter($__internal_459b23664db6a1c9992982a245865a2ededcad38f33e5c413e0885f235371f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_459b23664db6a1c9992982a245865a2ededcad38f33e5c413e0885f235371f74->leave($__internal_459b23664db6a1c9992982a245865a2ededcad38f33e5c413e0885f235371f74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
