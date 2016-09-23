<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_5df9076f363053b84a276a760efa543e1a5f239828df7c60b8ecdbe000ce8614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_72fea9f86a0348023b3bc9ea8ef0df4fd1a9e3d48f840118f07258df5f26ebe3 = $this->env->getExtension("native_profiler");
        $__internal_72fea9f86a0348023b3bc9ea8ef0df4fd1a9e3d48f840118f07258df5f26ebe3->enter($__internal_72fea9f86a0348023b3bc9ea8ef0df4fd1a9e3d48f840118f07258df5f26ebe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72fea9f86a0348023b3bc9ea8ef0df4fd1a9e3d48f840118f07258df5f26ebe3->leave($__internal_72fea9f86a0348023b3bc9ea8ef0df4fd1a9e3d48f840118f07258df5f26ebe3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c3bd4cee4a79e368ebc71dc30eea3bb1e24056a1c921c29c5ecaa91e15fc870 = $this->env->getExtension("native_profiler");
        $__internal_3c3bd4cee4a79e368ebc71dc30eea3bb1e24056a1c921c29c5ecaa91e15fc870->enter($__internal_3c3bd4cee4a79e368ebc71dc30eea3bb1e24056a1c921c29c5ecaa91e15fc870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3c3bd4cee4a79e368ebc71dc30eea3bb1e24056a1c921c29c5ecaa91e15fc870->leave($__internal_3c3bd4cee4a79e368ebc71dc30eea3bb1e24056a1c921c29c5ecaa91e15fc870_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
