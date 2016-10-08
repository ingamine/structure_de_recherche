<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4c1247a00840e69419bac332201546b130e5488c62b9346534277599a198b927 extends Twig_Template
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
        $__internal_06c7595eeb802da832f12de100645057185f79904cd0d3b313101ddc12e36f21 = $this->env->getExtension("native_profiler");
        $__internal_06c7595eeb802da832f12de100645057185f79904cd0d3b313101ddc12e36f21->enter($__internal_06c7595eeb802da832f12de100645057185f79904cd0d3b313101ddc12e36f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_06c7595eeb802da832f12de100645057185f79904cd0d3b313101ddc12e36f21->leave($__internal_06c7595eeb802da832f12de100645057185f79904cd0d3b313101ddc12e36f21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
