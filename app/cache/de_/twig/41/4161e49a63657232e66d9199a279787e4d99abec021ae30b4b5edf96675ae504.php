<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_eb4a09bdfd70af77504129c00cd46fe1574445c29cd7af82e7c3f4190e5165cc extends Twig_Template
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
        $__internal_fb6814b526310be1b8071c4b48a0040accd49b17b87332c12bfb1fc797db17c9 = $this->env->getExtension("native_profiler");
        $__internal_fb6814b526310be1b8071c4b48a0040accd49b17b87332c12bfb1fc797db17c9->enter($__internal_fb6814b526310be1b8071c4b48a0040accd49b17b87332c12bfb1fc797db17c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fb6814b526310be1b8071c4b48a0040accd49b17b87332c12bfb1fc797db17c9->leave($__internal_fb6814b526310be1b8071c4b48a0040accd49b17b87332c12bfb1fc797db17c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
