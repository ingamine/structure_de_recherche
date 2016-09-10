<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1d458bbdf54945a8f79f9753cb670741d620a2f97e7a7d4344c829a6a64758f9 extends Twig_Template
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
        $__internal_f1cdf9746d7c97657f9e996cfb9fa5ce191087154b9f2783641ddb96dab181c1 = $this->env->getExtension("native_profiler");
        $__internal_f1cdf9746d7c97657f9e996cfb9fa5ce191087154b9f2783641ddb96dab181c1->enter($__internal_f1cdf9746d7c97657f9e996cfb9fa5ce191087154b9f2783641ddb96dab181c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f1cdf9746d7c97657f9e996cfb9fa5ce191087154b9f2783641ddb96dab181c1->leave($__internal_f1cdf9746d7c97657f9e996cfb9fa5ce191087154b9f2783641ddb96dab181c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
