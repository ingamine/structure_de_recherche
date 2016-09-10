<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_79e441acf22f23e60131fca35ca2ee5c7d4be2413c66673027e963aa699805a3 extends Twig_Template
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
        $__internal_4285fb1a1376d76487b02cc65b71ea9efd9c9968b7dcd1e8d7393c41ffc86d6b = $this->env->getExtension("native_profiler");
        $__internal_4285fb1a1376d76487b02cc65b71ea9efd9c9968b7dcd1e8d7393c41ffc86d6b->enter($__internal_4285fb1a1376d76487b02cc65b71ea9efd9c9968b7dcd1e8d7393c41ffc86d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4285fb1a1376d76487b02cc65b71ea9efd9c9968b7dcd1e8d7393c41ffc86d6b->leave($__internal_4285fb1a1376d76487b02cc65b71ea9efd9c9968b7dcd1e8d7393c41ffc86d6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
