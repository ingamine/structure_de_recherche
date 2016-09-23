<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2ee8f0e759666d8ebbc2ee0c29ba2683d31b316bb1dc5bf0d7ba822fe5256684 extends Twig_Template
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
        $__internal_2ecea26f6668078b06ae54bf2920a42e4cc92746279d399d84b0876592b8121b = $this->env->getExtension("native_profiler");
        $__internal_2ecea26f6668078b06ae54bf2920a42e4cc92746279d399d84b0876592b8121b->enter($__internal_2ecea26f6668078b06ae54bf2920a42e4cc92746279d399d84b0876592b8121b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2ecea26f6668078b06ae54bf2920a42e4cc92746279d399d84b0876592b8121b->leave($__internal_2ecea26f6668078b06ae54bf2920a42e4cc92746279d399d84b0876592b8121b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
