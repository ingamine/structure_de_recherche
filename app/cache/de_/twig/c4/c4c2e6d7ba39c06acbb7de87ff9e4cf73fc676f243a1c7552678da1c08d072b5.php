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
        $__internal_86963b31fbb33f85e60ab464d92e788fa23fd3fece6069070e5f0d9d36d13303 = $this->env->getExtension("native_profiler");
        $__internal_86963b31fbb33f85e60ab464d92e788fa23fd3fece6069070e5f0d9d36d13303->enter($__internal_86963b31fbb33f85e60ab464d92e788fa23fd3fece6069070e5f0d9d36d13303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86963b31fbb33f85e60ab464d92e788fa23fd3fece6069070e5f0d9d36d13303->leave($__internal_86963b31fbb33f85e60ab464d92e788fa23fd3fece6069070e5f0d9d36d13303_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0adec1498e6105a1de515333b27864e3c4fc49ede1f433267b300081e2ad868 = $this->env->getExtension("native_profiler");
        $__internal_f0adec1498e6105a1de515333b27864e3c4fc49ede1f433267b300081e2ad868->enter($__internal_f0adec1498e6105a1de515333b27864e3c4fc49ede1f433267b300081e2ad868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f0adec1498e6105a1de515333b27864e3c4fc49ede1f433267b300081e2ad868->leave($__internal_f0adec1498e6105a1de515333b27864e3c4fc49ede1f433267b300081e2ad868_prof);

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
