<?php

/* UserBundle:Resources:layout.html.twig */
class __TwigTemplate_14d39dea78338e9dbc46e4e92502ec5ae9b44f535ccfab8468b9d0b4fb84b3a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "UserBundle:Resources:layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82ea9973ba0a55d6be603f3c8dd0641385c618878eda3aedca5231e3dc93069e = $this->env->getExtension("native_profiler");
        $__internal_82ea9973ba0a55d6be603f3c8dd0641385c618878eda3aedca5231e3dc93069e->enter($__internal_82ea9973ba0a55d6be603f3c8dd0641385c618878eda3aedca5231e3dc93069e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resources:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ea9973ba0a55d6be603f3c8dd0641385c618878eda3aedca5231e3dc93069e->leave($__internal_82ea9973ba0a55d6be603f3c8dd0641385c618878eda3aedca5231e3dc93069e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0a3f12ffc3cedf2472e17c74f20f6d6c94ceba73d2c5ddf72535233bed46022 = $this->env->getExtension("native_profiler");
        $__internal_c0a3f12ffc3cedf2472e17c74f20f6d6c94ceba73d2c5ddf72535233bed46022->enter($__internal_c0a3f12ffc3cedf2472e17c74f20f6d6c94ceba73d2c5ddf72535233bed46022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div>
";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            // line 13
            echo " |
<a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
</a>
";
        } else {
            // line 18
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            // line 19
            echo "</a>
";
        }
        // line 21
        echo "</div>
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 23
            echo "<div class=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<div>
";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "</div>
";
        
        $__internal_c0a3f12ffc3cedf2472e17c74f20f6d6c94ceba73d2c5ddf72535233bed46022->leave($__internal_c0a3f12ffc3cedf2472e17c74f20f6d6c94ceba73d2c5ddf72535233bed46022_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5463569b396ed48dd6c3bc19a6786b1511f32e77a4a1832587f325ce583a914 = $this->env->getExtension("native_profiler");
        $__internal_e5463569b396ed48dd6c3bc19a6786b1511f32e77a4a1832587f325ce583a914->enter($__internal_e5463569b396ed48dd6c3bc19a6786b1511f32e77a4a1832587f325ce583a914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 29
        echo "    
    
";
        
        $__internal_e5463569b396ed48dd6c3bc19a6786b1511f32e77a4a1832587f325ce583a914->leave($__internal_e5463569b396ed48dd6c3bc19a6786b1511f32e77a4a1832587f325ce583a914_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resources:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 29,  104 => 28,  96 => 32,  94 => 28,  91 => 27,  82 => 24,  77 => 23,  73 => 22,  70 => 21,  66 => 19,  61 => 18,  55 => 15,  51 => 14,  48 => 13,  46 => 12,  44 => 11,  41 => 10,  35 => 6,  11 => 3,);
    }
}
/* {# src/Sdz/UserBundle/Resources/views/layout.html.twig #}*/
/* {# On étend notre layout à nous #}*/
/* {% extends "::layout.html.twig" %}*/
/* {# Dans notre layout, il faut définir le block body #}*/
/* */
/* {% block body %}*/
/* {# On y place le contenu du layout par défaut de FOSUB :*/
/* https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/views/layout.html.twig*/
/* #}*/
/* <div>*/
/* {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* {{ 'layout.logged_in_as'|trans({'%username%': app.user.username},*/
/* 'FOSUserBundle') }} |*/
/* <a href="{{ path('fos_user_security_logout') }}">*/
/* {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/* </a>*/
/* {% else %}*/
/* <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({},*/
/* 'FOSUserBundle') }}</a>*/
/* {% endif %}*/
/* </div>*/
/* {% for key, message in app.session.getFlashes() %}*/
/* <div class="{{ key }}">*/
/* {{ message|trans({}, 'FOSUserBundle') }}*/
/* </div>*/
/* {% endfor %}*/
/* <div>*/
/* {% block fos_user_content %}*/
/*     */
/*     */
/* {% endblock fos_user_content %}*/
/* </div>*/
/* {% endblock %}*/
