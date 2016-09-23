<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b037ef8afb8eb2834db56127d07dba59afb00f34dc6ccf7822d5688eff115a84 extends Twig_Template
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
        $__internal_a7ff342d4ecd0a3406e1558e299ac5950b8139345c0353f8a3a21dd16b33d26b = $this->env->getExtension("native_profiler");
        $__internal_a7ff342d4ecd0a3406e1558e299ac5950b8139345c0353f8a3a21dd16b33d26b->enter($__internal_a7ff342d4ecd0a3406e1558e299ac5950b8139345c0353f8a3a21dd16b33d26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a7ff342d4ecd0a3406e1558e299ac5950b8139345c0353f8a3a21dd16b33d26b->leave($__internal_a7ff342d4ecd0a3406e1558e299ac5950b8139345c0353f8a3a21dd16b33d26b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
