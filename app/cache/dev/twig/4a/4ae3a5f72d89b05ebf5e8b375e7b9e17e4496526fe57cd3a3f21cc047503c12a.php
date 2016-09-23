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
        $__internal_3b55fe3c3bf79c92ced6bbe1b1e7f2db6fb3de997e4d6e82854dc5f37aa02301 = $this->env->getExtension("native_profiler");
        $__internal_3b55fe3c3bf79c92ced6bbe1b1e7f2db6fb3de997e4d6e82854dc5f37aa02301->enter($__internal_3b55fe3c3bf79c92ced6bbe1b1e7f2db6fb3de997e4d6e82854dc5f37aa02301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3b55fe3c3bf79c92ced6bbe1b1e7f2db6fb3de997e4d6e82854dc5f37aa02301->leave($__internal_3b55fe3c3bf79c92ced6bbe1b1e7f2db6fb3de997e4d6e82854dc5f37aa02301_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bc776ff6a9f260a2da152cc8b82089d51b71b9c8a9da19c4cbbe0bc442ed72c6 = $this->env->getExtension("native_profiler");
        $__internal_bc776ff6a9f260a2da152cc8b82089d51b71b9c8a9da19c4cbbe0bc442ed72c6->enter($__internal_bc776ff6a9f260a2da152cc8b82089d51b71b9c8a9da19c4cbbe0bc442ed72c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bc776ff6a9f260a2da152cc8b82089d51b71b9c8a9da19c4cbbe0bc442ed72c6->leave($__internal_bc776ff6a9f260a2da152cc8b82089d51b71b9c8a9da19c4cbbe0bc442ed72c6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4de72855ddab699340fd05a3e1e6c6489aabaef766e2a712bdf48a335596d17d = $this->env->getExtension("native_profiler");
        $__internal_4de72855ddab699340fd05a3e1e6c6489aabaef766e2a712bdf48a335596d17d->enter($__internal_4de72855ddab699340fd05a3e1e6c6489aabaef766e2a712bdf48a335596d17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4de72855ddab699340fd05a3e1e6c6489aabaef766e2a712bdf48a335596d17d->leave($__internal_4de72855ddab699340fd05a3e1e6c6489aabaef766e2a712bdf48a335596d17d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ad32bfa75090f6862ba3eeba5c6f93fcda106f42b0ea2eb5c92a903d28d5aafb = $this->env->getExtension("native_profiler");
        $__internal_ad32bfa75090f6862ba3eeba5c6f93fcda106f42b0ea2eb5c92a903d28d5aafb->enter($__internal_ad32bfa75090f6862ba3eeba5c6f93fcda106f42b0ea2eb5c92a903d28d5aafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ad32bfa75090f6862ba3eeba5c6f93fcda106f42b0ea2eb5c92a903d28d5aafb->leave($__internal_ad32bfa75090f6862ba3eeba5c6f93fcda106f42b0ea2eb5c92a903d28d5aafb_prof);

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
