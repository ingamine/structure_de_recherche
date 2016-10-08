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
        $__internal_5908175ea97ea48f6f912f412ced83f19be9b5d6231a4648c8e9fc031a624ca7 = $this->env->getExtension("native_profiler");
        $__internal_5908175ea97ea48f6f912f412ced83f19be9b5d6231a4648c8e9fc031a624ca7->enter($__internal_5908175ea97ea48f6f912f412ced83f19be9b5d6231a4648c8e9fc031a624ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5908175ea97ea48f6f912f412ced83f19be9b5d6231a4648c8e9fc031a624ca7->leave($__internal_5908175ea97ea48f6f912f412ced83f19be9b5d6231a4648c8e9fc031a624ca7_prof);

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
