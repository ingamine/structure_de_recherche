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
        $__internal_42bfda12e3844b0851484d08c3f7d34994449457b45a0c50b90be5559a5a5584 = $this->env->getExtension("native_profiler");
        $__internal_42bfda12e3844b0851484d08c3f7d34994449457b45a0c50b90be5559a5a5584->enter($__internal_42bfda12e3844b0851484d08c3f7d34994449457b45a0c50b90be5559a5a5584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_42bfda12e3844b0851484d08c3f7d34994449457b45a0c50b90be5559a5a5584->leave($__internal_42bfda12e3844b0851484d08c3f7d34994449457b45a0c50b90be5559a5a5584_prof);

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
