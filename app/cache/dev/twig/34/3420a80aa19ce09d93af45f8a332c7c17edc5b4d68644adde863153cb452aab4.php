<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_38bdbca88712afd7cdd57cf266c7324f1fafc4d72576d3a499fa4a6416b69324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_129d51819ee3f3390bb17c5607bdd2a6bd9f84a30b3b8b7b558c7fba41edb790 = $this->env->getExtension("native_profiler");
        $__internal_129d51819ee3f3390bb17c5607bdd2a6bd9f84a30b3b8b7b558c7fba41edb790->enter($__internal_129d51819ee3f3390bb17c5607bdd2a6bd9f84a30b3b8b7b558c7fba41edb790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_129d51819ee3f3390bb17c5607bdd2a6bd9f84a30b3b8b7b558c7fba41edb790->leave($__internal_129d51819ee3f3390bb17c5607bdd2a6bd9f84a30b3b8b7b558c7fba41edb790_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c169e2348d4a3845e2c4862652a6b10f8863c2fa006bddded46ae04e88883bc9 = $this->env->getExtension("native_profiler");
        $__internal_c169e2348d4a3845e2c4862652a6b10f8863c2fa006bddded46ae04e88883bc9->enter($__internal_c169e2348d4a3845e2c4862652a6b10f8863c2fa006bddded46ae04e88883bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c169e2348d4a3845e2c4862652a6b10f8863c2fa006bddded46ae04e88883bc9->leave($__internal_c169e2348d4a3845e2c4862652a6b10f8863c2fa006bddded46ae04e88883bc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
