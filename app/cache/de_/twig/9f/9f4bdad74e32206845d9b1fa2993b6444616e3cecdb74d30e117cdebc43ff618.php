<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4ed1bff9a5cf0cebf950cba20aadfe72d48968f66e757d82268c025ec3be0b32 extends Twig_Template
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
        $__internal_966125a44a94dd03f7aef5f74124f13161e3bacc45d5c5e68e88def5a49d719a = $this->env->getExtension("native_profiler");
        $__internal_966125a44a94dd03f7aef5f74124f13161e3bacc45d5c5e68e88def5a49d719a->enter($__internal_966125a44a94dd03f7aef5f74124f13161e3bacc45d5c5e68e88def5a49d719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_966125a44a94dd03f7aef5f74124f13161e3bacc45d5c5e68e88def5a49d719a->leave($__internal_966125a44a94dd03f7aef5f74124f13161e3bacc45d5c5e68e88def5a49d719a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
