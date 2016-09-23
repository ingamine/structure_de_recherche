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
        $__internal_c7752a06af4d37ac6737a7e2fdcda7ba109a297e2ce324e72ae2bcecedace65d = $this->env->getExtension("native_profiler");
        $__internal_c7752a06af4d37ac6737a7e2fdcda7ba109a297e2ce324e72ae2bcecedace65d->enter($__internal_c7752a06af4d37ac6737a7e2fdcda7ba109a297e2ce324e72ae2bcecedace65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c7752a06af4d37ac6737a7e2fdcda7ba109a297e2ce324e72ae2bcecedace65d->leave($__internal_c7752a06af4d37ac6737a7e2fdcda7ba109a297e2ce324e72ae2bcecedace65d_prof);

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
