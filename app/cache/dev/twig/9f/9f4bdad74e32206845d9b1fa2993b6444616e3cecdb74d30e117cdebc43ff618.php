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
        $__internal_86f91edf9c0db1140a752cdf828f7b33f503c68849ad821fc6c73d280d8da47c = $this->env->getExtension("native_profiler");
        $__internal_86f91edf9c0db1140a752cdf828f7b33f503c68849ad821fc6c73d280d8da47c->enter($__internal_86f91edf9c0db1140a752cdf828f7b33f503c68849ad821fc6c73d280d8da47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_86f91edf9c0db1140a752cdf828f7b33f503c68849ad821fc6c73d280d8da47c->leave($__internal_86f91edf9c0db1140a752cdf828f7b33f503c68849ad821fc6c73d280d8da47c_prof);

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
