<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_083c5e26d3c15ab56bdcedf83a767c6a394074d8726cb70eb68955acbfe30803 extends Twig_Template
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
        $__internal_5c523f67709d8d2f0d001c6c10b6b529eb3eff11593bb55b97d0ce16ff9e44b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c523f67709d8d2f0d001c6c10b6b529eb3eff11593bb55b97d0ce16ff9e44b9->enter($__internal_5c523f67709d8d2f0d001c6c10b6b529eb3eff11593bb55b97d0ce16ff9e44b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_787f196c44d8365c70a6d6c824b4f742275bd11dbfea92c44271098526da7989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787f196c44d8365c70a6d6c824b4f742275bd11dbfea92c44271098526da7989->enter($__internal_787f196c44d8365c70a6d6c824b4f742275bd11dbfea92c44271098526da7989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5c523f67709d8d2f0d001c6c10b6b529eb3eff11593bb55b97d0ce16ff9e44b9->leave($__internal_5c523f67709d8d2f0d001c6c10b6b529eb3eff11593bb55b97d0ce16ff9e44b9_prof);

        
        $__internal_787f196c44d8365c70a6d6c824b4f742275bd11dbfea92c44271098526da7989->leave($__internal_787f196c44d8365c70a6d6c824b4f742275bd11dbfea92c44271098526da7989_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
