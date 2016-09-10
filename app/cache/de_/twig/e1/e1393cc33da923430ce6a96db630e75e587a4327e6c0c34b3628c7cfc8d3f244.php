<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_da3f80d1b5d48f7727908d8971409e029ffcecdd6ef7bb48d455d5b83d924211 extends Twig_Template
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
        $__internal_02fd896b3a762acde6f59b51fe59594070113aaddb31a20303edb42f6812575f = $this->env->getExtension("native_profiler");
        $__internal_02fd896b3a762acde6f59b51fe59594070113aaddb31a20303edb42f6812575f->enter($__internal_02fd896b3a762acde6f59b51fe59594070113aaddb31a20303edb42f6812575f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_02fd896b3a762acde6f59b51fe59594070113aaddb31a20303edb42f6812575f->leave($__internal_02fd896b3a762acde6f59b51fe59594070113aaddb31a20303edb42f6812575f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
