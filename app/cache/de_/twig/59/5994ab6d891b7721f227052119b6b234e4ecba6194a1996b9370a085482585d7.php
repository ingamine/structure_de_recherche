<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_c163a6afc7d6ad9e5c302c36b0cdbb57536ca1faa8f1e21e8d61fd6cdd82d85f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_177537acda5c28a92d69c61a37d51664ab70be2ea7cd3136771ccc5195804213 = $this->env->getExtension("native_profiler");
        $__internal_177537acda5c28a92d69c61a37d51664ab70be2ea7cd3136771ccc5195804213->enter($__internal_177537acda5c28a92d69c61a37d51664ab70be2ea7cd3136771ccc5195804213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_177537acda5c28a92d69c61a37d51664ab70be2ea7cd3136771ccc5195804213->leave($__internal_177537acda5c28a92d69c61a37d51664ab70be2ea7cd3136771ccc5195804213_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25ae0a74152b6c8992f0df59bb464799ea8b76861727cd30a210c21d1752603f = $this->env->getExtension("native_profiler");
        $__internal_25ae0a74152b6c8992f0df59bb464799ea8b76861727cd30a210c21d1752603f->enter($__internal_25ae0a74152b6c8992f0df59bb464799ea8b76861727cd30a210c21d1752603f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_25ae0a74152b6c8992f0df59bb464799ea8b76861727cd30a210c21d1752603f->leave($__internal_25ae0a74152b6c8992f0df59bb464799ea8b76861727cd30a210c21d1752603f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
