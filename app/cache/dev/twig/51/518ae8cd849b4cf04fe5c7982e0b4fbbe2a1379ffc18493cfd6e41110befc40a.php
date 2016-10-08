<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d5bf4092821b991ce34a860f6d48eb4b0468a29ac8c153669fd185fa14f74270 extends Twig_Template
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
        $__internal_9855000ee33271f57f039c41aff1a86300213fdc6709da28ea97cfe97f9919d4 = $this->env->getExtension("native_profiler");
        $__internal_9855000ee33271f57f039c41aff1a86300213fdc6709da28ea97cfe97f9919d4->enter($__internal_9855000ee33271f57f039c41aff1a86300213fdc6709da28ea97cfe97f9919d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9855000ee33271f57f039c41aff1a86300213fdc6709da28ea97cfe97f9919d4->leave($__internal_9855000ee33271f57f039c41aff1a86300213fdc6709da28ea97cfe97f9919d4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6edb728daf17b4c43aebf867ec16704665e41dd485190fb8b6bf5983978b199a = $this->env->getExtension("native_profiler");
        $__internal_6edb728daf17b4c43aebf867ec16704665e41dd485190fb8b6bf5983978b199a->enter($__internal_6edb728daf17b4c43aebf867ec16704665e41dd485190fb8b6bf5983978b199a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6edb728daf17b4c43aebf867ec16704665e41dd485190fb8b6bf5983978b199a->leave($__internal_6edb728daf17b4c43aebf867ec16704665e41dd485190fb8b6bf5983978b199a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
