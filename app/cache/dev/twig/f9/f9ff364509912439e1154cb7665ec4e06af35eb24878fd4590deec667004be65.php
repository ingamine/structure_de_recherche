<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_79ac89f19af1c6dc50873441ee1de709192a96eae33091164262fbc4da4a33ca extends Twig_Template
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
        $__internal_43c0b8b0ee9f60547614ea8ecffd8b8a1e75ee11cb69ea1876777ef548152063 = $this->env->getExtension("native_profiler");
        $__internal_43c0b8b0ee9f60547614ea8ecffd8b8a1e75ee11cb69ea1876777ef548152063->enter($__internal_43c0b8b0ee9f60547614ea8ecffd8b8a1e75ee11cb69ea1876777ef548152063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_43c0b8b0ee9f60547614ea8ecffd8b8a1e75ee11cb69ea1876777ef548152063->leave($__internal_43c0b8b0ee9f60547614ea8ecffd8b8a1e75ee11cb69ea1876777ef548152063_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
