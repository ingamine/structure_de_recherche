<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_dc55037ec77e531d0724005d1c522ff955dce29f317af56f41bc707a49ac9cc2 extends Twig_Template
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
        $__internal_8c6b763371b8126fff2fdfaedcbd59430a422d3f29c4582d0496c87a514a5fb4 = $this->env->getExtension("native_profiler");
        $__internal_8c6b763371b8126fff2fdfaedcbd59430a422d3f29c4582d0496c87a514a5fb4->enter($__internal_8c6b763371b8126fff2fdfaedcbd59430a422d3f29c4582d0496c87a514a5fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8c6b763371b8126fff2fdfaedcbd59430a422d3f29c4582d0496c87a514a5fb4->leave($__internal_8c6b763371b8126fff2fdfaedcbd59430a422d3f29c4582d0496c87a514a5fb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
