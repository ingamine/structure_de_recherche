<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7e76b84552270c8a4ef8c71b84b6dce73aaddc265913280616fa28c56f8da8b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4ba4165310a5a87c8d4be3de0f27e3d81ef0dd866fc76ab6e6818daba80c510f = $this->env->getExtension("native_profiler");
        $__internal_4ba4165310a5a87c8d4be3de0f27e3d81ef0dd866fc76ab6e6818daba80c510f->enter($__internal_4ba4165310a5a87c8d4be3de0f27e3d81ef0dd866fc76ab6e6818daba80c510f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba4165310a5a87c8d4be3de0f27e3d81ef0dd866fc76ab6e6818daba80c510f->leave($__internal_4ba4165310a5a87c8d4be3de0f27e3d81ef0dd866fc76ab6e6818daba80c510f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56dd6aa43dc6a3038d042ffc430f73ac20e6c972894ec08867c9ea24248dde15 = $this->env->getExtension("native_profiler");
        $__internal_56dd6aa43dc6a3038d042ffc430f73ac20e6c972894ec08867c9ea24248dde15->enter($__internal_56dd6aa43dc6a3038d042ffc430f73ac20e6c972894ec08867c9ea24248dde15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_56dd6aa43dc6a3038d042ffc430f73ac20e6c972894ec08867c9ea24248dde15->leave($__internal_56dd6aa43dc6a3038d042ffc430f73ac20e6c972894ec08867c9ea24248dde15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
