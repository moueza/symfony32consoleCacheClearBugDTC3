<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_76e61b315397e6bbaa5a08fe26fbd4b0f52c5d35e281c2cec8ce42034285cc22 extends Twig_Template
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
        $__internal_bd64613da9985c314b62d23e9c29e5e7d7c1bb84e5afe8926d0716d38d9cc802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd64613da9985c314b62d23e9c29e5e7d7c1bb84e5afe8926d0716d38d9cc802->enter($__internal_bd64613da9985c314b62d23e9c29e5e7d7c1bb84e5afe8926d0716d38d9cc802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7ee95010255fdb983aeb39a55d0cf148da8625955a7633587bc9f494f1634b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee95010255fdb983aeb39a55d0cf148da8625955a7633587bc9f494f1634b9c->enter($__internal_7ee95010255fdb983aeb39a55d0cf148da8625955a7633587bc9f494f1634b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bd64613da9985c314b62d23e9c29e5e7d7c1bb84e5afe8926d0716d38d9cc802->leave($__internal_bd64613da9985c314b62d23e9c29e5e7d7c1bb84e5afe8926d0716d38d9cc802_prof);

        
        $__internal_7ee95010255fdb983aeb39a55d0cf148da8625955a7633587bc9f494f1634b9c->leave($__internal_7ee95010255fdb983aeb39a55d0cf148da8625955a7633587bc9f494f1634b9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
