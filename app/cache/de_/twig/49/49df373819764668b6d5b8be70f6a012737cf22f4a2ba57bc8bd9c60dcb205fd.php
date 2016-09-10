<?php

/* :habilitation:edit.html.twig */
class __TwigTemplate_e45ba73f85c2ce7e8e94bd58c8db30f03107b34cca015c1b09ae1fa8555dfe7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":habilitation:edit.html.twig", 1);
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
        $__internal_aa8af620051008e7ce2a62c3307f8793f264c2763ae28edde453d8371cc257a7 = $this->env->getExtension("native_profiler");
        $__internal_aa8af620051008e7ce2a62c3307f8793f264c2763ae28edde453d8371cc257a7->enter($__internal_aa8af620051008e7ce2a62c3307f8793f264c2763ae28edde453d8371cc257a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":habilitation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa8af620051008e7ce2a62c3307f8793f264c2763ae28edde453d8371cc257a7->leave($__internal_aa8af620051008e7ce2a62c3307f8793f264c2763ae28edde453d8371cc257a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ec1edada1070094eb3b062c6967055e17d2f6456365f858d7d2c973821aa255 = $this->env->getExtension("native_profiler");
        $__internal_9ec1edada1070094eb3b062c6967055e17d2f6456365f858d7d2c973821aa255->enter($__internal_9ec1edada1070094eb3b062c6967055e17d2f6456365f858d7d2c973821aa255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Habilitation edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("habilitation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9ec1edada1070094eb3b062c6967055e17d2f6456365f858d7d2c973821aa255->leave($__internal_9ec1edada1070094eb3b062c6967055e17d2f6456365f858d7d2c973821aa255_prof);

    }

    public function getTemplateName()
    {
        return ":habilitation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Habilitation edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('habilitation_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
