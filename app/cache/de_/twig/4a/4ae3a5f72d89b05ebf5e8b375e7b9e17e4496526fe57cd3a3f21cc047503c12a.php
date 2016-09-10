<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_7932d8f7f32ee6fb543d03cc7b4d9d43f08a3af7ae097a6711b2875c42fdd4cd extends Twig_Template
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
        $__internal_fa024253aad3308eb87ebef3df7a7bc29dd17a67b5b222fc84d0c1a69f73e53e = $this->env->getExtension("native_profiler");
        $__internal_fa024253aad3308eb87ebef3df7a7bc29dd17a67b5b222fc84d0c1a69f73e53e->enter($__internal_fa024253aad3308eb87ebef3df7a7bc29dd17a67b5b222fc84d0c1a69f73e53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fa024253aad3308eb87ebef3df7a7bc29dd17a67b5b222fc84d0c1a69f73e53e->leave($__internal_fa024253aad3308eb87ebef3df7a7bc29dd17a67b5b222fc84d0c1a69f73e53e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_005adf10c994440e3534a4e74d231d7e524974e11eb300b48c6a97e42a58d00e = $this->env->getExtension("native_profiler");
        $__internal_005adf10c994440e3534a4e74d231d7e524974e11eb300b48c6a97e42a58d00e->enter($__internal_005adf10c994440e3534a4e74d231d7e524974e11eb300b48c6a97e42a58d00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_005adf10c994440e3534a4e74d231d7e524974e11eb300b48c6a97e42a58d00e->leave($__internal_005adf10c994440e3534a4e74d231d7e524974e11eb300b48c6a97e42a58d00e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_49187ca530cbc2503cf902da4fea33905f5389a48ad27541b6cbfe23b46f9ce9 = $this->env->getExtension("native_profiler");
        $__internal_49187ca530cbc2503cf902da4fea33905f5389a48ad27541b6cbfe23b46f9ce9->enter($__internal_49187ca530cbc2503cf902da4fea33905f5389a48ad27541b6cbfe23b46f9ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_49187ca530cbc2503cf902da4fea33905f5389a48ad27541b6cbfe23b46f9ce9->leave($__internal_49187ca530cbc2503cf902da4fea33905f5389a48ad27541b6cbfe23b46f9ce9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_75eba178ccb4bd570754b2646022069d92df4427b14d3b64c4503cefa84b29d2 = $this->env->getExtension("native_profiler");
        $__internal_75eba178ccb4bd570754b2646022069d92df4427b14d3b64c4503cefa84b29d2->enter($__internal_75eba178ccb4bd570754b2646022069d92df4427b14d3b64c4503cefa84b29d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_75eba178ccb4bd570754b2646022069d92df4427b14d3b64c4503cefa84b29d2->leave($__internal_75eba178ccb4bd570754b2646022069d92df4427b14d3b64c4503cefa84b29d2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
