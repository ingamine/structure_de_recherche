<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_685231f96e27aa2df446a01eb5d7e11a064f5a258478b6f314316c0e6b4e3f35 extends Twig_Template
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
        $__internal_d466d18a336122fa3cdb848dee299b0c8777793badb83398f35e69e473bbe77f = $this->env->getExtension("native_profiler");
        $__internal_d466d18a336122fa3cdb848dee299b0c8777793badb83398f35e69e473bbe77f->enter($__internal_d466d18a336122fa3cdb848dee299b0c8777793badb83398f35e69e473bbe77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d466d18a336122fa3cdb848dee299b0c8777793badb83398f35e69e473bbe77f->leave($__internal_d466d18a336122fa3cdb848dee299b0c8777793badb83398f35e69e473bbe77f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
