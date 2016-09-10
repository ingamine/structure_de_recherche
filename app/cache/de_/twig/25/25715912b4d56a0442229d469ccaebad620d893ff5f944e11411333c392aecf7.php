<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_d6fe07c0db7a716b12bef302caa23bfd43cf60ffa652588bac947dbd4aaee2d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8ac888f4530f41028ce73f7d6e2eede0076ff4bdded989beaade179417f0b82 = $this->env->getExtension("native_profiler");
        $__internal_d8ac888f4530f41028ce73f7d6e2eede0076ff4bdded989beaade179417f0b82->enter($__internal_d8ac888f4530f41028ce73f7d6e2eede0076ff4bdded989beaade179417f0b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "
  

<!DOCTYPE html>
 
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
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
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 20
        echo "        </div>

        ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 24
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 25
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 26
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        <div>             
          
        </div>
    </body>
</html>
  ";
        // line 37
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d8ac888f4530f41028ce73f7d6e2eede0076ff4bdded989beaade179417f0b82->leave($__internal_d8ac888f4530f41028ce73f7d6e2eede0076ff4bdded989beaade179417f0b82_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d817839373ebbc0485bf396bdd279f505beadc82952225e258678fc629a10f91 = $this->env->getExtension("native_profiler");
        $__internal_d817839373ebbc0485bf396bdd279f505beadc82952225e258678fc629a10f91->enter($__internal_d817839373ebbc0485bf396bdd279f505beadc82952225e258678fc629a10f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 38
        echo "  ";
        
        $__internal_d817839373ebbc0485bf396bdd279f505beadc82952225e258678fc629a10f91->leave($__internal_d817839373ebbc0485bf396bdd279f505beadc82952225e258678fc629a10f91_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 38,  108 => 37,  100 => 31,  97 => 30,  91 => 29,  82 => 26,  77 => 25,  72 => 24,  67 => 23,  65 => 22,  61 => 20,  53 => 18,  47 => 15,  43 => 14,  38 => 13,  36 => 12,  23 => 1,);
    }
}
/* */
/*   */
/* */
/* <!DOCTYPE html>*/
/*  */
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>             */
/*           */
/*         </div>*/
/*     </body>*/
/* </html>*/
/*   {% block fos_user_content %}*/
/*   {% endblock fos_user_content %}*/
