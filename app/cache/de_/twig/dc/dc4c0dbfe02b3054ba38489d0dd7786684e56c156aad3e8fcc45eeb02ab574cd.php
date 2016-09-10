<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e32264a27d359323f48b1bf794117adda1da885017f4029c8ddb161972d3162a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_5fafc497a364f03e19e6cbcc0b7ca264cbf97e27589a69638bc46e0f23e5cfc1 = $this->env->getExtension("native_profiler");
        $__internal_5fafc497a364f03e19e6cbcc0b7ca264cbf97e27589a69638bc46e0f23e5cfc1->enter($__internal_5fafc497a364f03e19e6cbcc0b7ca264cbf97e27589a69638bc46e0f23e5cfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fafc497a364f03e19e6cbcc0b7ca264cbf97e27589a69638bc46e0f23e5cfc1->leave($__internal_5fafc497a364f03e19e6cbcc0b7ca264cbf97e27589a69638bc46e0f23e5cfc1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11a935b0d0f54e1f3729de53dcda2350454f058fe4775dede65da4d41504cae3 = $this->env->getExtension("native_profiler");
        $__internal_11a935b0d0f54e1f3729de53dcda2350454f058fe4775dede65da4d41504cae3->enter($__internal_11a935b0d0f54e1f3729de53dcda2350454f058fe4775dede65da4d41504cae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_11a935b0d0f54e1f3729de53dcda2350454f058fe4775dede65da4d41504cae3->leave($__internal_11a935b0d0f54e1f3729de53dcda2350454f058fe4775dede65da4d41504cae3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
