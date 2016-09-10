<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bf3ea402e81ad7d9d85b73a4acaad9ad17e1e4bb5c061ee63b9d912c986ae1cc extends Twig_Template
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
        $__internal_31e3ed05f071e53b59d2228a411fc47721dccbe69f5eac8f0c539f3af31293d8 = $this->env->getExtension("native_profiler");
        $__internal_31e3ed05f071e53b59d2228a411fc47721dccbe69f5eac8f0c539f3af31293d8->enter($__internal_31e3ed05f071e53b59d2228a411fc47721dccbe69f5eac8f0c539f3af31293d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_31e3ed05f071e53b59d2228a411fc47721dccbe69f5eac8f0c539f3af31293d8->leave($__internal_31e3ed05f071e53b59d2228a411fc47721dccbe69f5eac8f0c539f3af31293d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
