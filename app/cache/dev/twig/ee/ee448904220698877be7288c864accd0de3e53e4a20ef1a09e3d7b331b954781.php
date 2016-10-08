<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5904907d9cbefb257d0f15a308826fdadc2de5550e0677f0b44df879e4b1d29c extends Twig_Template
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
        $__internal_8a33ccc55eb68793c7a70b05f1264b2d3e73906cc58a8e6b3dd62e72d0354c15 = $this->env->getExtension("native_profiler");
        $__internal_8a33ccc55eb68793c7a70b05f1264b2d3e73906cc58a8e6b3dd62e72d0354c15->enter($__internal_8a33ccc55eb68793c7a70b05f1264b2d3e73906cc58a8e6b3dd62e72d0354c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8a33ccc55eb68793c7a70b05f1264b2d3e73906cc58a8e6b3dd62e72d0354c15->leave($__internal_8a33ccc55eb68793c7a70b05f1264b2d3e73906cc58a8e6b3dd62e72d0354c15_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8bcd2ff8794dc857e0fa3338663c6894f2ef96576d57c70bfe1e66614d5ee191 = $this->env->getExtension("native_profiler");
        $__internal_8bcd2ff8794dc857e0fa3338663c6894f2ef96576d57c70bfe1e66614d5ee191->enter($__internal_8bcd2ff8794dc857e0fa3338663c6894f2ef96576d57c70bfe1e66614d5ee191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8bcd2ff8794dc857e0fa3338663c6894f2ef96576d57c70bfe1e66614d5ee191->leave($__internal_8bcd2ff8794dc857e0fa3338663c6894f2ef96576d57c70bfe1e66614d5ee191_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d189fecd369350637b6ebb0b0ef8c4f1b668debc46602ead32ec28b57c0755eb = $this->env->getExtension("native_profiler");
        $__internal_d189fecd369350637b6ebb0b0ef8c4f1b668debc46602ead32ec28b57c0755eb->enter($__internal_d189fecd369350637b6ebb0b0ef8c4f1b668debc46602ead32ec28b57c0755eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d189fecd369350637b6ebb0b0ef8c4f1b668debc46602ead32ec28b57c0755eb->leave($__internal_d189fecd369350637b6ebb0b0ef8c4f1b668debc46602ead32ec28b57c0755eb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_20f0795edec2b54d54755bea44d597620e391249aa9e0fef07f85b49e211f522 = $this->env->getExtension("native_profiler");
        $__internal_20f0795edec2b54d54755bea44d597620e391249aa9e0fef07f85b49e211f522->enter($__internal_20f0795edec2b54d54755bea44d597620e391249aa9e0fef07f85b49e211f522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_20f0795edec2b54d54755bea44d597620e391249aa9e0fef07f85b49e211f522->leave($__internal_20f0795edec2b54d54755bea44d597620e391249aa9e0fef07f85b49e211f522_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
