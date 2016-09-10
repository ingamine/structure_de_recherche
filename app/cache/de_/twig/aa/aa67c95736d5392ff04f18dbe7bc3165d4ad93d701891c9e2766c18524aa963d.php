<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b8cd78b2b0b681e4e7428a5854e4012ea7a5915d9613200fc65ce5b0ab759fee extends Twig_Template
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
        $__internal_9389f8d4c85d29816443605cea3453c30f5b2045f21b187def26ae811878054b = $this->env->getExtension("native_profiler");
        $__internal_9389f8d4c85d29816443605cea3453c30f5b2045f21b187def26ae811878054b->enter($__internal_9389f8d4c85d29816443605cea3453c30f5b2045f21b187def26ae811878054b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9389f8d4c85d29816443605cea3453c30f5b2045f21b187def26ae811878054b->leave($__internal_9389f8d4c85d29816443605cea3453c30f5b2045f21b187def26ae811878054b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
