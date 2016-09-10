<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ac1cf285aa4f51c62985abf11077beb996dcb7d2657ede251bb7340a1ddc939a extends Twig_Template
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
        $__internal_67a53580ad4bf0e3b9a1767e27100de831f3121e69bc1ee5da20a1a5af2f3756 = $this->env->getExtension("native_profiler");
        $__internal_67a53580ad4bf0e3b9a1767e27100de831f3121e69bc1ee5da20a1a5af2f3756->enter($__internal_67a53580ad4bf0e3b9a1767e27100de831f3121e69bc1ee5da20a1a5af2f3756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_67a53580ad4bf0e3b9a1767e27100de831f3121e69bc1ee5da20a1a5af2f3756->leave($__internal_67a53580ad4bf0e3b9a1767e27100de831f3121e69bc1ee5da20a1a5af2f3756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
