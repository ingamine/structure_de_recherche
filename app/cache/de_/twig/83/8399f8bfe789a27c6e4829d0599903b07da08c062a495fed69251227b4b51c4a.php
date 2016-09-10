<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_648cf9a4a65ea7330b6cfacdac85dc234d452400913400f5ef6b4a1148ff0386 extends Twig_Template
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
        $__internal_5d27d6f99fd31af049e105f0698f098a749bdfce312955cb277bde84eec15286 = $this->env->getExtension("native_profiler");
        $__internal_5d27d6f99fd31af049e105f0698f098a749bdfce312955cb277bde84eec15286->enter($__internal_5d27d6f99fd31af049e105f0698f098a749bdfce312955cb277bde84eec15286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5d27d6f99fd31af049e105f0698f098a749bdfce312955cb277bde84eec15286->leave($__internal_5d27d6f99fd31af049e105f0698f098a749bdfce312955cb277bde84eec15286_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
