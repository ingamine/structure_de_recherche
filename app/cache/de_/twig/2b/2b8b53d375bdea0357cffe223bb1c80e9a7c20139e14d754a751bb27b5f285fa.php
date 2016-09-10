<?php

/* media/new.html.twig */
class __TwigTemplate_ed825818c9ef7cf8065d43b6349360722a208e5b93eb448e8ecf148c7f7d0841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "media/new.html.twig", 1);
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
        $__internal_b051876904573356a688eeb1a5bad427f70d0fa3504f75e97aa5934bd51253bb = $this->env->getExtension("native_profiler");
        $__internal_b051876904573356a688eeb1a5bad427f70d0fa3504f75e97aa5934bd51253bb->enter($__internal_b051876904573356a688eeb1a5bad427f70d0fa3504f75e97aa5934bd51253bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "media/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b051876904573356a688eeb1a5bad427f70d0fa3504f75e97aa5934bd51253bb->leave($__internal_b051876904573356a688eeb1a5bad427f70d0fa3504f75e97aa5934bd51253bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77a99e246c044f87a4efaecd798f7690954a7dd387d692e04e6a024e17619864 = $this->env->getExtension("native_profiler");
        $__internal_77a99e246c044f87a4efaecd798f7690954a7dd387d692e04e6a024e17619864->enter($__internal_77a99e246c044f87a4efaecd798f7690954a7dd387d692e04e6a024e17619864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_77a99e246c044f87a4efaecd798f7690954a7dd387d692e04e6a024e17619864->leave($__internal_77a99e246c044f87a4efaecd798f7690954a7dd387d692e04e6a024e17619864_prof);

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
/* {% extends 'base.html.twig' %}*/
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
