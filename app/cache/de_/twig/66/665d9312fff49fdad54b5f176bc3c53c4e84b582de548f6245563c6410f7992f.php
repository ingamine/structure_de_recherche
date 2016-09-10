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
        $__internal_38cff6ce47eaf28394e06aaf1daca350a2af05e16c7d125de4c13e5fbb09856b = $this->env->getExtension("native_profiler");
        $__internal_38cff6ce47eaf28394e06aaf1daca350a2af05e16c7d125de4c13e5fbb09856b->enter($__internal_38cff6ce47eaf28394e06aaf1daca350a2af05e16c7d125de4c13e5fbb09856b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_38cff6ce47eaf28394e06aaf1daca350a2af05e16c7d125de4c13e5fbb09856b->leave($__internal_38cff6ce47eaf28394e06aaf1daca350a2af05e16c7d125de4c13e5fbb09856b_prof);

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
