<?php

/* :soutenance:new.html.twig */
class __TwigTemplate_059585c78936a93fe32e79a76dda302d511415da884f928baf5932d3806cf2a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":soutenance:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5539207792acadab638a257355e141c62c85b5ea73a9e030a5e6e3c035840a66 = $this->env->getExtension("native_profiler");
        $__internal_5539207792acadab638a257355e141c62c85b5ea73a9e030a5e6e3c035840a66->enter($__internal_5539207792acadab638a257355e141c62c85b5ea73a9e030a5e6e3c035840a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":soutenance:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5539207792acadab638a257355e141c62c85b5ea73a9e030a5e6e3c035840a66->leave($__internal_5539207792acadab638a257355e141c62c85b5ea73a9e030a5e6e3c035840a66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1913e3b77e48bebc688b9eff5c2cde11b3df41e2cfa4e919a9bfbd1df430f68 = $this->env->getExtension("native_profiler");
        $__internal_e1913e3b77e48bebc688b9eff5c2cde11b3df41e2cfa4e919a9bfbd1df430f68->enter($__internal_e1913e3b77e48bebc688b9eff5c2cde11b3df41e2cfa4e919a9bfbd1df430f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Soutenance creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("soutenance_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e1913e3b77e48bebc688b9eff5c2cde11b3df41e2cfa4e919a9bfbd1df430f68->leave($__internal_e1913e3b77e48bebc688b9eff5c2cde11b3df41e2cfa4e919a9bfbd1df430f68_prof);

    }

    public function getTemplateName()
    {
        return ":soutenance:new.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Soutenance creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('soutenance_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
