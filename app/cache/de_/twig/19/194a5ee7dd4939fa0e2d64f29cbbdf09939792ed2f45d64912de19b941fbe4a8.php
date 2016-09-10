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
        $__internal_b5b94237de1b972cd8f655c1382e2fde9adf9f90849982b56c095478124284df = $this->env->getExtension("native_profiler");
        $__internal_b5b94237de1b972cd8f655c1382e2fde9adf9f90849982b56c095478124284df->enter($__internal_b5b94237de1b972cd8f655c1382e2fde9adf9f90849982b56c095478124284df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b5b94237de1b972cd8f655c1382e2fde9adf9f90849982b56c095478124284df->leave($__internal_b5b94237de1b972cd8f655c1382e2fde9adf9f90849982b56c095478124284df_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_652387cae361b9c0fb882e59a5793b3fef24c7412474b7a6286f3af7f87450e8 = $this->env->getExtension("native_profiler");
        $__internal_652387cae361b9c0fb882e59a5793b3fef24c7412474b7a6286f3af7f87450e8->enter($__internal_652387cae361b9c0fb882e59a5793b3fef24c7412474b7a6286f3af7f87450e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_652387cae361b9c0fb882e59a5793b3fef24c7412474b7a6286f3af7f87450e8->leave($__internal_652387cae361b9c0fb882e59a5793b3fef24c7412474b7a6286f3af7f87450e8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d4e1454a96ca0fcbb07d7b324bddd190de4ab3394c48ed78536025b64e1bf415 = $this->env->getExtension("native_profiler");
        $__internal_d4e1454a96ca0fcbb07d7b324bddd190de4ab3394c48ed78536025b64e1bf415->enter($__internal_d4e1454a96ca0fcbb07d7b324bddd190de4ab3394c48ed78536025b64e1bf415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d4e1454a96ca0fcbb07d7b324bddd190de4ab3394c48ed78536025b64e1bf415->leave($__internal_d4e1454a96ca0fcbb07d7b324bddd190de4ab3394c48ed78536025b64e1bf415_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aa51d5d5d5fea3040db782dcb4e8e70f23494a996f12b5b853e0468ff25a58c0 = $this->env->getExtension("native_profiler");
        $__internal_aa51d5d5d5fea3040db782dcb4e8e70f23494a996f12b5b853e0468ff25a58c0->enter($__internal_aa51d5d5d5fea3040db782dcb4e8e70f23494a996f12b5b853e0468ff25a58c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aa51d5d5d5fea3040db782dcb4e8e70f23494a996f12b5b853e0468ff25a58c0->leave($__internal_aa51d5d5d5fea3040db782dcb4e8e70f23494a996f12b5b853e0468ff25a58c0_prof);

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
