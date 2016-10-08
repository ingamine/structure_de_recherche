<?php

/* media/new.html.twig */
class __TwigTemplate_ed825818c9ef7cf8065d43b6349360722a208e5b93eb448e8ecf148c7f7d0841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "media/new.html.twig", 1);
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
        $__internal_ff4e97aa5a6e21d2a6af2cbd843a4b6be2a0daf3bda41728820b506df507b329 = $this->env->getExtension("native_profiler");
        $__internal_ff4e97aa5a6e21d2a6af2cbd843a4b6be2a0daf3bda41728820b506df507b329->enter($__internal_ff4e97aa5a6e21d2a6af2cbd843a4b6be2a0daf3bda41728820b506df507b329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff4e97aa5a6e21d2a6af2cbd843a4b6be2a0daf3bda41728820b506df507b329->leave($__internal_ff4e97aa5a6e21d2a6af2cbd843a4b6be2a0daf3bda41728820b506df507b329_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffc777845f962e24f308a825bf6e529631bef7f07ddabc58cb218bdd15413a01 = $this->env->getExtension("native_profiler");
        $__internal_ffc777845f962e24f308a825bf6e529631bef7f07ddabc58cb218bdd15413a01->enter($__internal_ffc777845f962e24f308a825bf6e529631bef7f07ddabc58cb218bdd15413a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Media creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("media_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ffc777845f962e24f308a825bf6e529631bef7f07ddabc58cb218bdd15413a01->leave($__internal_ffc777845f962e24f308a825bf6e529631bef7f07ddabc58cb218bdd15413a01_prof);

    }

    public function getTemplateName()
    {
        return "media/new.html.twig";
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
/*     <h1>Media creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('media_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
