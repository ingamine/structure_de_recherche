<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_cb5930af0324e5fe7bbaf6729a4ac5a202c9cf01f79aa2e2de5558863537f408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_471eabaa157473b2884cbd1a92866fbe2f11db81619717b4ad01823e04bf906d = $this->env->getExtension("native_profiler");
        $__internal_471eabaa157473b2884cbd1a92866fbe2f11db81619717b4ad01823e04bf906d->enter($__internal_471eabaa157473b2884cbd1a92866fbe2f11db81619717b4ad01823e04bf906d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_471eabaa157473b2884cbd1a92866fbe2f11db81619717b4ad01823e04bf906d->leave($__internal_471eabaa157473b2884cbd1a92866fbe2f11db81619717b4ad01823e04bf906d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8c80478e8f8b7349543da5e21a7e54948e8d140dbd1363588c0dfc3aaf5081e9 = $this->env->getExtension("native_profiler");
        $__internal_8c80478e8f8b7349543da5e21a7e54948e8d140dbd1363588c0dfc3aaf5081e9->enter($__internal_8c80478e8f8b7349543da5e21a7e54948e8d140dbd1363588c0dfc3aaf5081e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8c80478e8f8b7349543da5e21a7e54948e8d140dbd1363588c0dfc3aaf5081e9->leave($__internal_8c80478e8f8b7349543da5e21a7e54948e8d140dbd1363588c0dfc3aaf5081e9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6820d2445e0b894c4fb808b919ba11e7c7a272172268567acda9f6dddedf4a90 = $this->env->getExtension("native_profiler");
        $__internal_6820d2445e0b894c4fb808b919ba11e7c7a272172268567acda9f6dddedf4a90->enter($__internal_6820d2445e0b894c4fb808b919ba11e7c7a272172268567acda9f6dddedf4a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6820d2445e0b894c4fb808b919ba11e7c7a272172268567acda9f6dddedf4a90->leave($__internal_6820d2445e0b894c4fb808b919ba11e7c7a272172268567acda9f6dddedf4a90_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b4a8b7182907cf68cca0af39960219c8bcc2ab2bbf7f2ad164ff570fd956efb7 = $this->env->getExtension("native_profiler");
        $__internal_b4a8b7182907cf68cca0af39960219c8bcc2ab2bbf7f2ad164ff570fd956efb7->enter($__internal_b4a8b7182907cf68cca0af39960219c8bcc2ab2bbf7f2ad164ff570fd956efb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b4a8b7182907cf68cca0af39960219c8bcc2ab2bbf7f2ad164ff570fd956efb7->leave($__internal_b4a8b7182907cf68cca0af39960219c8bcc2ab2bbf7f2ad164ff570fd956efb7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
