<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_61c4969f004f5043870255e916085710203f17a651f72d69dd583ee709b47481 extends Twig_Template
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
        $__internal_788f22c5c75f41952e65be8bd9d853c24d122bd4b2e377dfde961eee22f2b720 = $this->env->getExtension("native_profiler");
        $__internal_788f22c5c75f41952e65be8bd9d853c24d122bd4b2e377dfde961eee22f2b720->enter($__internal_788f22c5c75f41952e65be8bd9d853c24d122bd4b2e377dfde961eee22f2b720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_788f22c5c75f41952e65be8bd9d853c24d122bd4b2e377dfde961eee22f2b720->leave($__internal_788f22c5c75f41952e65be8bd9d853c24d122bd4b2e377dfde961eee22f2b720_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
