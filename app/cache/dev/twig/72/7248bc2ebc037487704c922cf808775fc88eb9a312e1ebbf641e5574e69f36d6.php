<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_19f6bb4fce0315cca61e337d41189f2acf1043e20dac1cae507c3e7395a5bcc4 extends Twig_Template
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
        $__internal_57719573be27f397392a395c40dd3d0b80e088eb7343466159f89c7401c6a604 = $this->env->getExtension("native_profiler");
        $__internal_57719573be27f397392a395c40dd3d0b80e088eb7343466159f89c7401c6a604->enter($__internal_57719573be27f397392a395c40dd3d0b80e088eb7343466159f89c7401c6a604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_57719573be27f397392a395c40dd3d0b80e088eb7343466159f89c7401c6a604->leave($__internal_57719573be27f397392a395c40dd3d0b80e088eb7343466159f89c7401c6a604_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0d056be4efe3f39f0c39c5c73ceb914b96bd664949f1b2d2f625b21ad36c74d1 = $this->env->getExtension("native_profiler");
        $__internal_0d056be4efe3f39f0c39c5c73ceb914b96bd664949f1b2d2f625b21ad36c74d1->enter($__internal_0d056be4efe3f39f0c39c5c73ceb914b96bd664949f1b2d2f625b21ad36c74d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0d056be4efe3f39f0c39c5c73ceb914b96bd664949f1b2d2f625b21ad36c74d1->leave($__internal_0d056be4efe3f39f0c39c5c73ceb914b96bd664949f1b2d2f625b21ad36c74d1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5301408636f8a024a034bcfd8e942d0084980c7d432c68969827a01ca832ab6c = $this->env->getExtension("native_profiler");
        $__internal_5301408636f8a024a034bcfd8e942d0084980c7d432c68969827a01ca832ab6c->enter($__internal_5301408636f8a024a034bcfd8e942d0084980c7d432c68969827a01ca832ab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5301408636f8a024a034bcfd8e942d0084980c7d432c68969827a01ca832ab6c->leave($__internal_5301408636f8a024a034bcfd8e942d0084980c7d432c68969827a01ca832ab6c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c3a4b5c80c3205b50e5dbe0a8ded368698f988a9b0da7556146e706587b89be7 = $this->env->getExtension("native_profiler");
        $__internal_c3a4b5c80c3205b50e5dbe0a8ded368698f988a9b0da7556146e706587b89be7->enter($__internal_c3a4b5c80c3205b50e5dbe0a8ded368698f988a9b0da7556146e706587b89be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c3a4b5c80c3205b50e5dbe0a8ded368698f988a9b0da7556146e706587b89be7->leave($__internal_c3a4b5c80c3205b50e5dbe0a8ded368698f988a9b0da7556146e706587b89be7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
