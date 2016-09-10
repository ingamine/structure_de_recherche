<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8838625f4dac4a24c3149ee1d6e6d3b751fcae265f8265b61bbb9c672023343c extends Twig_Template
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
        $__internal_587ae63dc6935dcedfca18c1ed6b9e452bbc9aab5559d34655129ce22b3f1e32 = $this->env->getExtension("native_profiler");
        $__internal_587ae63dc6935dcedfca18c1ed6b9e452bbc9aab5559d34655129ce22b3f1e32->enter($__internal_587ae63dc6935dcedfca18c1ed6b9e452bbc9aab5559d34655129ce22b3f1e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_587ae63dc6935dcedfca18c1ed6b9e452bbc9aab5559d34655129ce22b3f1e32->leave($__internal_587ae63dc6935dcedfca18c1ed6b9e452bbc9aab5559d34655129ce22b3f1e32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
