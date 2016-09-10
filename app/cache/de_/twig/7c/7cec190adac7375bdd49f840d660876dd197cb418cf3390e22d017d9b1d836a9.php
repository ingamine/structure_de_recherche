<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3af4264efbdce72ee355e25eec5d791adfe3b1fcb364ee3aadfb077c2e641af7 extends Twig_Template
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
        $__internal_e825686e645832f0196d2a8f4876989d5c987d53fbe7d884e8b992a3d00c78c4 = $this->env->getExtension("native_profiler");
        $__internal_e825686e645832f0196d2a8f4876989d5c987d53fbe7d884e8b992a3d00c78c4->enter($__internal_e825686e645832f0196d2a8f4876989d5c987d53fbe7d884e8b992a3d00c78c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e825686e645832f0196d2a8f4876989d5c987d53fbe7d884e8b992a3d00c78c4->leave($__internal_e825686e645832f0196d2a8f4876989d5c987d53fbe7d884e8b992a3d00c78c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
