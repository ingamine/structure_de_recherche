<?php

/* @FOSUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_5afe520440a3932ae1e0d345ccecb8c6b7223e5617d472a9b7ad7005752791e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_994fcb7f6d2a9db76712e866cd103ccc10ae616a34f18c159f4477edc4f4a84e = $this->env->getExtension("native_profiler");
        $__internal_994fcb7f6d2a9db76712e866cd103ccc10ae616a34f18c159f4477edc4f4a84e->enter($__internal_994fcb7f6d2a9db76712e866cd103ccc10ae616a34f18c159f4477edc4f4a84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_994fcb7f6d2a9db76712e866cd103ccc10ae616a34f18c159f4477edc4f4a84e->leave($__internal_994fcb7f6d2a9db76712e866cd103ccc10ae616a34f18c159f4477edc4f4a84e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
