<?php

/* user/new.html.twig */
class __TwigTemplate_6128afbc4c447d3ee008bad45dc1d55b8592c6d7be384f45f93482bc99ae5f00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LgmBundle::layout.html.twig", "user/new.html.twig", 1);
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
        $__internal_0a4bb1d0c5b35d2facb33fd7aa268f07ed5ecddf41995f6eeb300c3e283dd73f = $this->env->getExtension("native_profiler");
        $__internal_0a4bb1d0c5b35d2facb33fd7aa268f07ed5ecddf41995f6eeb300c3e283dd73f->enter($__internal_0a4bb1d0c5b35d2facb33fd7aa268f07ed5ecddf41995f6eeb300c3e283dd73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4bb1d0c5b35d2facb33fd7aa268f07ed5ecddf41995f6eeb300c3e283dd73f->leave($__internal_0a4bb1d0c5b35d2facb33fd7aa268f07ed5ecddf41995f6eeb300c3e283dd73f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d16e4722aa82acb066a36e19b901d17b12df8e0126347fa707ce86a1723a83b6 = $this->env->getExtension("native_profiler");
        $__internal_d16e4722aa82acb066a36e19b901d17b12df8e0126347fa707ce86a1723a83b6->enter($__internal_d16e4722aa82acb066a36e19b901d17b12df8e0126347fa707ce86a1723a83b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d16e4722aa82acb066a36e19b901d17b12df8e0126347fa707ce86a1723a83b6->leave($__internal_d16e4722aa82acb066a36e19b901d17b12df8e0126347fa707ce86a1723a83b6_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
