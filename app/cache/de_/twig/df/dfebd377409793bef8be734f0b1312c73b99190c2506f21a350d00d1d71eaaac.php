<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0601ef76465d23d8113f71a9201bc7bab7e795ecb9f930870b2a7babb13fd53d extends Twig_Template
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
        $__internal_6770b4cf03a45bca3ab8c52bc339824025b215193712b6dbe55d5b01fe44dc34 = $this->env->getExtension("native_profiler");
        $__internal_6770b4cf03a45bca3ab8c52bc339824025b215193712b6dbe55d5b01fe44dc34->enter($__internal_6770b4cf03a45bca3ab8c52bc339824025b215193712b6dbe55d5b01fe44dc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6770b4cf03a45bca3ab8c52bc339824025b215193712b6dbe55d5b01fe44dc34->leave($__internal_6770b4cf03a45bca3ab8c52bc339824025b215193712b6dbe55d5b01fe44dc34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
