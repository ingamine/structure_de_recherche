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
        $__internal_9d9c2853d629dbbe8d6f948af6f03a7bb3e25d094cf965890118b85279a3c78c = $this->env->getExtension("native_profiler");
        $__internal_9d9c2853d629dbbe8d6f948af6f03a7bb3e25d094cf965890118b85279a3c78c->enter($__internal_9d9c2853d629dbbe8d6f948af6f03a7bb3e25d094cf965890118b85279a3c78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9d9c2853d629dbbe8d6f948af6f03a7bb3e25d094cf965890118b85279a3c78c->leave($__internal_9d9c2853d629dbbe8d6f948af6f03a7bb3e25d094cf965890118b85279a3c78c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3d07cd2a1d92e97f6e687c1214421af578a1a1bef051373cca92a85150682dfa = $this->env->getExtension("native_profiler");
        $__internal_3d07cd2a1d92e97f6e687c1214421af578a1a1bef051373cca92a85150682dfa->enter($__internal_3d07cd2a1d92e97f6e687c1214421af578a1a1bef051373cca92a85150682dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3d07cd2a1d92e97f6e687c1214421af578a1a1bef051373cca92a85150682dfa->leave($__internal_3d07cd2a1d92e97f6e687c1214421af578a1a1bef051373cca92a85150682dfa_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_713a7f4a4051a98cd908b19eed16409d75eef4d93575270b0a0c144c4b031cd5 = $this->env->getExtension("native_profiler");
        $__internal_713a7f4a4051a98cd908b19eed16409d75eef4d93575270b0a0c144c4b031cd5->enter($__internal_713a7f4a4051a98cd908b19eed16409d75eef4d93575270b0a0c144c4b031cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_713a7f4a4051a98cd908b19eed16409d75eef4d93575270b0a0c144c4b031cd5->leave($__internal_713a7f4a4051a98cd908b19eed16409d75eef4d93575270b0a0c144c4b031cd5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cd8d1c3c6a81b8b4eba8f3ac3247b602847fda51fafcec3374292dfc1bf171c3 = $this->env->getExtension("native_profiler");
        $__internal_cd8d1c3c6a81b8b4eba8f3ac3247b602847fda51fafcec3374292dfc1bf171c3->enter($__internal_cd8d1c3c6a81b8b4eba8f3ac3247b602847fda51fafcec3374292dfc1bf171c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cd8d1c3c6a81b8b4eba8f3ac3247b602847fda51fafcec3374292dfc1bf171c3->leave($__internal_cd8d1c3c6a81b8b4eba8f3ac3247b602847fda51fafcec3374292dfc1bf171c3_prof);

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
