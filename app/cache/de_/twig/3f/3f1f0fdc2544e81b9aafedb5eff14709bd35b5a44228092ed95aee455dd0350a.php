<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_aaaba4311d2855150532f795d75e34a188627b7977fee6fe97d815279b966a05 extends Twig_Template
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
        $__internal_e85412982ad06d9760c688ba799a965cca2e2855dac0533495921f0833cff85c = $this->env->getExtension("native_profiler");
        $__internal_e85412982ad06d9760c688ba799a965cca2e2855dac0533495921f0833cff85c->enter($__internal_e85412982ad06d9760c688ba799a965cca2e2855dac0533495921f0833cff85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_e85412982ad06d9760c688ba799a965cca2e2855dac0533495921f0833cff85c->leave($__internal_e85412982ad06d9760c688ba799a965cca2e2855dac0533495921f0833cff85c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
