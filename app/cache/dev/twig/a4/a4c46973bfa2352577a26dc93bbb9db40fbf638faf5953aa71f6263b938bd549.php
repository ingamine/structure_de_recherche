<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1209fb3128973b6d952c39b2114f69c51b7d1875b373df5e9b713addf90aaaf1 extends Twig_Template
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
        $__internal_8a68b8ca584e460b7bb51f04b87b9b5d9e8804f9220bb03b1ede2d5f546f7652 = $this->env->getExtension("native_profiler");
        $__internal_8a68b8ca584e460b7bb51f04b87b9b5d9e8804f9220bb03b1ede2d5f546f7652->enter($__internal_8a68b8ca584e460b7bb51f04b87b9b5d9e8804f9220bb03b1ede2d5f546f7652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8a68b8ca584e460b7bb51f04b87b9b5d9e8804f9220bb03b1ede2d5f546f7652->leave($__internal_8a68b8ca584e460b7bb51f04b87b9b5d9e8804f9220bb03b1ede2d5f546f7652_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
