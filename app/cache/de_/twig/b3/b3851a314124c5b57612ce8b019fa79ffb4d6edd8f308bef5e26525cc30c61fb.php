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
        $__internal_835627c2e7134d13049f0b1b4e7c30cacc1369b34c7e14e013359cf45f5bbdaf = $this->env->getExtension("native_profiler");
        $__internal_835627c2e7134d13049f0b1b4e7c30cacc1369b34c7e14e013359cf45f5bbdaf->enter($__internal_835627c2e7134d13049f0b1b4e7c30cacc1369b34c7e14e013359cf45f5bbdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_835627c2e7134d13049f0b1b4e7c30cacc1369b34c7e14e013359cf45f5bbdaf->leave($__internal_835627c2e7134d13049f0b1b4e7c30cacc1369b34c7e14e013359cf45f5bbdaf_prof);

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
