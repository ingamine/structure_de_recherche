<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0bf1346829caea441564d12ff9b9bf307547efed91f7e5b44e8a89ddf6e58509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca64a2f47ce38d74e16051d68bcd58c2756d5b39150ed9a84028f09a4bb9137c = $this->env->getExtension("native_profiler");
        $__internal_ca64a2f47ce38d74e16051d68bcd58c2756d5b39150ed9a84028f09a4bb9137c->enter($__internal_ca64a2f47ce38d74e16051d68bcd58c2756d5b39150ed9a84028f09a4bb9137c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ca64a2f47ce38d74e16051d68bcd58c2756d5b39150ed9a84028f09a4bb9137c->leave($__internal_ca64a2f47ce38d74e16051d68bcd58c2756d5b39150ed9a84028f09a4bb9137c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f920641b664d7f1847b33bf863011bbbdea478d4448ee37ece9044fdeb671c20 = $this->env->getExtension("native_profiler");
        $__internal_f920641b664d7f1847b33bf863011bbbdea478d4448ee37ece9044fdeb671c20->enter($__internal_f920641b664d7f1847b33bf863011bbbdea478d4448ee37ece9044fdeb671c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f920641b664d7f1847b33bf863011bbbdea478d4448ee37ece9044fdeb671c20->leave($__internal_f920641b664d7f1847b33bf863011bbbdea478d4448ee37ece9044fdeb671c20_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
