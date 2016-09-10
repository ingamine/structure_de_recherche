<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_116c94f3e36785cedefe9f5d1ead318a14e885139e0b4c7d09cad9b3e843f6ea extends Twig_Template
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
        $__internal_939b20d7fb2fc3be2454bd72bebe572ad15baec1271139e3d4b061e4e10e9d08 = $this->env->getExtension("native_profiler");
        $__internal_939b20d7fb2fc3be2454bd72bebe572ad15baec1271139e3d4b061e4e10e9d08->enter($__internal_939b20d7fb2fc3be2454bd72bebe572ad15baec1271139e3d4b061e4e10e9d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_939b20d7fb2fc3be2454bd72bebe572ad15baec1271139e3d4b061e4e10e9d08->leave($__internal_939b20d7fb2fc3be2454bd72bebe572ad15baec1271139e3d4b061e4e10e9d08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
