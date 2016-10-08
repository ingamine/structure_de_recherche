<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_da7ee6a475905b1de1c33ae7bcf920a654843c445fca2bcac025f96ba01cbe49 extends Twig_Template
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
        $__internal_91903cfb331c72d9401c251ca628e8e5671fc3637f8997245a484498efdc0f80 = $this->env->getExtension("native_profiler");
        $__internal_91903cfb331c72d9401c251ca628e8e5671fc3637f8997245a484498efdc0f80->enter($__internal_91903cfb331c72d9401c251ca628e8e5671fc3637f8997245a484498efdc0f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_91903cfb331c72d9401c251ca628e8e5671fc3637f8997245a484498efdc0f80->leave($__internal_91903cfb331c72d9401c251ca628e8e5671fc3637f8997245a484498efdc0f80_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
