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
        $__internal_a0dee4ce4f250561e5ad7274f93d6e5d617aedd586ceccf44bf1ed236b65e298 = $this->env->getExtension("native_profiler");
        $__internal_a0dee4ce4f250561e5ad7274f93d6e5d617aedd586ceccf44bf1ed236b65e298->enter($__internal_a0dee4ce4f250561e5ad7274f93d6e5d617aedd586ceccf44bf1ed236b65e298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a0dee4ce4f250561e5ad7274f93d6e5d617aedd586ceccf44bf1ed236b65e298->leave($__internal_a0dee4ce4f250561e5ad7274f93d6e5d617aedd586ceccf44bf1ed236b65e298_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4a371d82b1a068a36aa84dc320380dec44afd214407c482f031645e2db126dca = $this->env->getExtension("native_profiler");
        $__internal_4a371d82b1a068a36aa84dc320380dec44afd214407c482f031645e2db126dca->enter($__internal_4a371d82b1a068a36aa84dc320380dec44afd214407c482f031645e2db126dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4a371d82b1a068a36aa84dc320380dec44afd214407c482f031645e2db126dca->leave($__internal_4a371d82b1a068a36aa84dc320380dec44afd214407c482f031645e2db126dca_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a3fd2beb9cee8d48fa4d085081f803511c464f0934e9b4085fdc972f8e0e2271 = $this->env->getExtension("native_profiler");
        $__internal_a3fd2beb9cee8d48fa4d085081f803511c464f0934e9b4085fdc972f8e0e2271->enter($__internal_a3fd2beb9cee8d48fa4d085081f803511c464f0934e9b4085fdc972f8e0e2271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a3fd2beb9cee8d48fa4d085081f803511c464f0934e9b4085fdc972f8e0e2271->leave($__internal_a3fd2beb9cee8d48fa4d085081f803511c464f0934e9b4085fdc972f8e0e2271_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f244c38cd9607f2b31021c2b1cebaa274c6a5a9afdfa060e6c8e98df22a74e87 = $this->env->getExtension("native_profiler");
        $__internal_f244c38cd9607f2b31021c2b1cebaa274c6a5a9afdfa060e6c8e98df22a74e87->enter($__internal_f244c38cd9607f2b31021c2b1cebaa274c6a5a9afdfa060e6c8e98df22a74e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f244c38cd9607f2b31021c2b1cebaa274c6a5a9afdfa060e6c8e98df22a74e87->leave($__internal_f244c38cd9607f2b31021c2b1cebaa274c6a5a9afdfa060e6c8e98df22a74e87_prof);

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
