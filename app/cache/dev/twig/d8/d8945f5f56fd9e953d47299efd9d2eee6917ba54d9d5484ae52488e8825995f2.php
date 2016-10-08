<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_0e3a8eea2ba5b15ddd90840f3768e432d044aa2cc84cdfd4541a62564584e414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_9e078a5c4016e90955eada2c20d57000e985b4f1b7068fab2b7f57aedce89a9c = $this->env->getExtension("native_profiler");
        $__internal_9e078a5c4016e90955eada2c20d57000e985b4f1b7068fab2b7f57aedce89a9c->enter($__internal_9e078a5c4016e90955eada2c20d57000e985b4f1b7068fab2b7f57aedce89a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e078a5c4016e90955eada2c20d57000e985b4f1b7068fab2b7f57aedce89a9c->leave($__internal_9e078a5c4016e90955eada2c20d57000e985b4f1b7068fab2b7f57aedce89a9c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1c40a2004ab5f5775e31a689f8cc3888c9f819a3ef582c0ec0f6fb5b0003268 = $this->env->getExtension("native_profiler");
        $__internal_e1c40a2004ab5f5775e31a689f8cc3888c9f819a3ef582c0ec0f6fb5b0003268->enter($__internal_e1c40a2004ab5f5775e31a689f8cc3888c9f819a3ef582c0ec0f6fb5b0003268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e1c40a2004ab5f5775e31a689f8cc3888c9f819a3ef582c0ec0f6fb5b0003268->leave($__internal_e1c40a2004ab5f5775e31a689f8cc3888c9f819a3ef582c0ec0f6fb5b0003268_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
