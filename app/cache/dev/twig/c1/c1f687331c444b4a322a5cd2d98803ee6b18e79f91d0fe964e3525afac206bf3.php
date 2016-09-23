<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e91d9b02806f8a1d3a8c0a6830b39b3080aae996e19b3e1306c03a2e9c388fe9 extends Twig_Template
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
        $__internal_aa2cefd0232f514beeee7c7467efc9bd0914930e3507ab25ce71fa6cf4a8a64c = $this->env->getExtension("native_profiler");
        $__internal_aa2cefd0232f514beeee7c7467efc9bd0914930e3507ab25ce71fa6cf4a8a64c->enter($__internal_aa2cefd0232f514beeee7c7467efc9bd0914930e3507ab25ce71fa6cf4a8a64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_aa2cefd0232f514beeee7c7467efc9bd0914930e3507ab25ce71fa6cf4a8a64c->leave($__internal_aa2cefd0232f514beeee7c7467efc9bd0914930e3507ab25ce71fa6cf4a8a64c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
