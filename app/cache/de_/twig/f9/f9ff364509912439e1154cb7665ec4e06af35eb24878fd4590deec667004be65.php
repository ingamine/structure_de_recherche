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
        $__internal_917ab037c589658d35bb61429bcd527f7da6e5eabc3d8798963c0b4b628b3d48 = $this->env->getExtension("native_profiler");
        $__internal_917ab037c589658d35bb61429bcd527f7da6e5eabc3d8798963c0b4b628b3d48->enter($__internal_917ab037c589658d35bb61429bcd527f7da6e5eabc3d8798963c0b4b628b3d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_917ab037c589658d35bb61429bcd527f7da6e5eabc3d8798963c0b4b628b3d48->leave($__internal_917ab037c589658d35bb61429bcd527f7da6e5eabc3d8798963c0b4b628b3d48_prof);

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
