<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_955f0f0deae0e32f0885d26b2a422f0b37a90c070030028ad64047fa8b1b25e9 extends Twig_Template
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
        $__internal_404149585aa6ee3368d0a432f9ee4720b9d564d8ec3b4f7072f2745aa316a7f4 = $this->env->getExtension("native_profiler");
        $__internal_404149585aa6ee3368d0a432f9ee4720b9d564d8ec3b4f7072f2745aa316a7f4->enter($__internal_404149585aa6ee3368d0a432f9ee4720b9d564d8ec3b4f7072f2745aa316a7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_404149585aa6ee3368d0a432f9ee4720b9d564d8ec3b4f7072f2745aa316a7f4->leave($__internal_404149585aa6ee3368d0a432f9ee4720b9d564d8ec3b4f7072f2745aa316a7f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
