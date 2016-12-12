<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_13a3449839b4e59e6298c974931b227c9d2a20a2f6341779f65e4356f3111860 extends Twig_Template
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
        $__internal_d0c5ea7029c9f33312441b0ad9ad44ab9085a2843068e079aeafcf2c318e7e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c5ea7029c9f33312441b0ad9ad44ab9085a2843068e079aeafcf2c318e7e40->enter($__internal_d0c5ea7029c9f33312441b0ad9ad44ab9085a2843068e079aeafcf2c318e7e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_98930fe584b9e4cd2b3646b6a5dd7be453db963831a9c605f822a1478ee09037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98930fe584b9e4cd2b3646b6a5dd7be453db963831a9c605f822a1478ee09037->enter($__internal_98930fe584b9e4cd2b3646b6a5dd7be453db963831a9c605f822a1478ee09037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d0c5ea7029c9f33312441b0ad9ad44ab9085a2843068e079aeafcf2c318e7e40->leave($__internal_d0c5ea7029c9f33312441b0ad9ad44ab9085a2843068e079aeafcf2c318e7e40_prof);

        
        $__internal_98930fe584b9e4cd2b3646b6a5dd7be453db963831a9c605f822a1478ee09037->leave($__internal_98930fe584b9e4cd2b3646b6a5dd7be453db963831a9c605f822a1478ee09037_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
