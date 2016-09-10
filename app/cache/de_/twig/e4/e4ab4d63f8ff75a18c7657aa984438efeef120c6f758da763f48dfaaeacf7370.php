<?php

/* :structure:new.html.twig */
class __TwigTemplate_f6294165d749bc7dfcb0e2ed3175ff1faf55891adf148f8fc39c8551d1b4b647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":structure:new.html.twig", 1);
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
        $__internal_743c00d40772f48c4421eaedc657e80014469355a41ea2a428edb1b2b4e21d32 = $this->env->getExtension("native_profiler");
        $__internal_743c00d40772f48c4421eaedc657e80014469355a41ea2a428edb1b2b4e21d32->enter($__internal_743c00d40772f48c4421eaedc657e80014469355a41ea2a428edb1b2b4e21d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":structure:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_743c00d40772f48c4421eaedc657e80014469355a41ea2a428edb1b2b4e21d32->leave($__internal_743c00d40772f48c4421eaedc657e80014469355a41ea2a428edb1b2b4e21d32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd9104c433ab724b9fae2eb1e5e0a7c11a56cbf884a02455e757256d7378c063 = $this->env->getExtension("native_profiler");
        $__internal_cd9104c433ab724b9fae2eb1e5e0a7c11a56cbf884a02455e757256d7378c063->enter($__internal_cd9104c433ab724b9fae2eb1e5e0a7c11a56cbf884a02455e757256d7378c063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Structure creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("structure_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cd9104c433ab724b9fae2eb1e5e0a7c11a56cbf884a02455e757256d7378c063->leave($__internal_cd9104c433ab724b9fae2eb1e5e0a7c11a56cbf884a02455e757256d7378c063_prof);

    }

    public function getTemplateName()
    {
        return ":structure:new.html.twig";
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
/*     <h1>Structure creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('structure_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
