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
        $__internal_6b1dfe07d7ded5e601ed694b42ed742efec449a2e216d3bde2b0fe7e99b64ccb = $this->env->getExtension("native_profiler");
        $__internal_6b1dfe07d7ded5e601ed694b42ed742efec449a2e216d3bde2b0fe7e99b64ccb->enter($__internal_6b1dfe07d7ded5e601ed694b42ed742efec449a2e216d3bde2b0fe7e99b64ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6b1dfe07d7ded5e601ed694b42ed742efec449a2e216d3bde2b0fe7e99b64ccb->leave($__internal_6b1dfe07d7ded5e601ed694b42ed742efec449a2e216d3bde2b0fe7e99b64ccb_prof);

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
