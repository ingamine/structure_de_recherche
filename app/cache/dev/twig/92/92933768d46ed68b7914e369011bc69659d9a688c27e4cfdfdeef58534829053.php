<?php

/* :user:new.html.twig */
class __TwigTemplate_dc2b475f62dc0e3a1d70490064bcad129f4eea9cf9cea9c17eebea107de62cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LgmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72a7895851c0c97a902b624a97968301de9ffd9b11b949fb900ef96ecb186299 = $this->env->getExtension("native_profiler");
        $__internal_72a7895851c0c97a902b624a97968301de9ffd9b11b949fb900ef96ecb186299->enter($__internal_72a7895851c0c97a902b624a97968301de9ffd9b11b949fb900ef96ecb186299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a7895851c0c97a902b624a97968301de9ffd9b11b949fb900ef96ecb186299->leave($__internal_72a7895851c0c97a902b624a97968301de9ffd9b11b949fb900ef96ecb186299_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b27e384e0731df71d12ec71cccf736131e1f7ad7143806b7b0a3177f660ffb66 = $this->env->getExtension("native_profiler");
        $__internal_b27e384e0731df71d12ec71cccf736131e1f7ad7143806b7b0a3177f660ffb66->enter($__internal_b27e384e0731df71d12ec71cccf736131e1f7ad7143806b7b0a3177f660ffb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b27e384e0731df71d12ec71cccf736131e1f7ad7143806b7b0a3177f660ffb66->leave($__internal_b27e384e0731df71d12ec71cccf736131e1f7ad7143806b7b0a3177f660ffb66_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends('LgmBundle::layout.html.twig') %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
