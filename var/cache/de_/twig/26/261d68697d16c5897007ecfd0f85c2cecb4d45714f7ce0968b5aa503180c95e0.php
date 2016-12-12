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
        $__internal_d87ed82cfec3858af128be5f70df08de35850ea9d8b26e642d7100db090a3346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87ed82cfec3858af128be5f70df08de35850ea9d8b26e642d7100db090a3346->enter($__internal_d87ed82cfec3858af128be5f70df08de35850ea9d8b26e642d7100db090a3346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1d27f6e0410f54d486fc818328d09b1a4ff1dcf41066882e3bdce92ab0583e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d27f6e0410f54d486fc818328d09b1a4ff1dcf41066882e3bdce92ab0583e55->enter($__internal_1d27f6e0410f54d486fc818328d09b1a4ff1dcf41066882e3bdce92ab0583e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_d87ed82cfec3858af128be5f70df08de35850ea9d8b26e642d7100db090a3346->leave($__internal_d87ed82cfec3858af128be5f70df08de35850ea9d8b26e642d7100db090a3346_prof);

        
        $__internal_1d27f6e0410f54d486fc818328d09b1a4ff1dcf41066882e3bdce92ab0583e55->leave($__internal_1d27f6e0410f54d486fc818328d09b1a4ff1dcf41066882e3bdce92ab0583e55_prof);

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
