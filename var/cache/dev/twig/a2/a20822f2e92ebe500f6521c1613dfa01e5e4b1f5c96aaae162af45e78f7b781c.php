<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7a6ed0459933bd6095be2233ce5695b0ea2d616467c02e7cd24d66def159b9a0 extends Twig_Template
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
        $__internal_8807e26e22a1cbb9d4b52be0a55de9e65e7049dc0db47c87e7dd4713ad50c501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8807e26e22a1cbb9d4b52be0a55de9e65e7049dc0db47c87e7dd4713ad50c501->enter($__internal_8807e26e22a1cbb9d4b52be0a55de9e65e7049dc0db47c87e7dd4713ad50c501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_51c26ca40109569551992343f25036d21160b3ec2bd8d352f0b3853176d8c9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c26ca40109569551992343f25036d21160b3ec2bd8d352f0b3853176d8c9e5->enter($__internal_51c26ca40109569551992343f25036d21160b3ec2bd8d352f0b3853176d8c9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8807e26e22a1cbb9d4b52be0a55de9e65e7049dc0db47c87e7dd4713ad50c501->leave($__internal_8807e26e22a1cbb9d4b52be0a55de9e65e7049dc0db47c87e7dd4713ad50c501_prof);

        
        $__internal_51c26ca40109569551992343f25036d21160b3ec2bd8d352f0b3853176d8c9e5->leave($__internal_51c26ca40109569551992343f25036d21160b3ec2bd8d352f0b3853176d8c9e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
