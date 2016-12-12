<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_928b65361d976b567f694af5f7337a0c3a855e3669ed393679b0f7fb05e6f7d3 extends Twig_Template
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
        $__internal_20b6bcaf4b1355f4b0eed09e449f2d017a1bdd059a421957af75b49f70dc3106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b6bcaf4b1355f4b0eed09e449f2d017a1bdd059a421957af75b49f70dc3106->enter($__internal_20b6bcaf4b1355f4b0eed09e449f2d017a1bdd059a421957af75b49f70dc3106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9d2ffc359ad21d2dd7aa12ca3bbcfb3f341942ca60bb3cc075625f6ccbd68f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2ffc359ad21d2dd7aa12ca3bbcfb3f341942ca60bb3cc075625f6ccbd68f0d->enter($__internal_9d2ffc359ad21d2dd7aa12ca3bbcfb3f341942ca60bb3cc075625f6ccbd68f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_20b6bcaf4b1355f4b0eed09e449f2d017a1bdd059a421957af75b49f70dc3106->leave($__internal_20b6bcaf4b1355f4b0eed09e449f2d017a1bdd059a421957af75b49f70dc3106_prof);

        
        $__internal_9d2ffc359ad21d2dd7aa12ca3bbcfb3f341942ca60bb3cc075625f6ccbd68f0d->leave($__internal_9d2ffc359ad21d2dd7aa12ca3bbcfb3f341942ca60bb3cc075625f6ccbd68f0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
