<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_fdc04299d519bd7e81c133995d0f9cb785e114e7b40295a076995c03ccd24da2 extends Twig_Template
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
        $__internal_93696e8732d0d13e7044e3e23cf9410bcd8700ca13d3257b17cc843fbf93c65b = $this->env->getExtension("native_profiler");
        $__internal_93696e8732d0d13e7044e3e23cf9410bcd8700ca13d3257b17cc843fbf93c65b->enter($__internal_93696e8732d0d13e7044e3e23cf9410bcd8700ca13d3257b17cc843fbf93c65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_93696e8732d0d13e7044e3e23cf9410bcd8700ca13d3257b17cc843fbf93c65b->leave($__internal_93696e8732d0d13e7044e3e23cf9410bcd8700ca13d3257b17cc843fbf93c65b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
