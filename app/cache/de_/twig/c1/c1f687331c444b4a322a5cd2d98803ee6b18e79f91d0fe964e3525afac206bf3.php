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
        $__internal_ba6af75873ddba71054f510f84b85af256b95c98518508a763b8e1510d41f630 = $this->env->getExtension("native_profiler");
        $__internal_ba6af75873ddba71054f510f84b85af256b95c98518508a763b8e1510d41f630->enter($__internal_ba6af75873ddba71054f510f84b85af256b95c98518508a763b8e1510d41f630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ba6af75873ddba71054f510f84b85af256b95c98518508a763b8e1510d41f630->leave($__internal_ba6af75873ddba71054f510f84b85af256b95c98518508a763b8e1510d41f630_prof);

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
