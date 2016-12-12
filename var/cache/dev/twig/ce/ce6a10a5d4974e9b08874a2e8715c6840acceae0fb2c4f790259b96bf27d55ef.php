<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_28e6cd10f34d057a0beab98497d9511feeb7d5b8677a85ca60a7dd8f273a21fc extends Twig_Template
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
        $__internal_b05cd9ade1b221ca9fcefe7db249dc535f0d9ba954865ec1aca2c83389bb111c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05cd9ade1b221ca9fcefe7db249dc535f0d9ba954865ec1aca2c83389bb111c->enter($__internal_b05cd9ade1b221ca9fcefe7db249dc535f0d9ba954865ec1aca2c83389bb111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b6375931c167eb3ab49be109f77a0ed8a95f9ced45d963f14c9ae27d46ca26f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6375931c167eb3ab49be109f77a0ed8a95f9ced45d963f14c9ae27d46ca26f5->enter($__internal_b6375931c167eb3ab49be109f77a0ed8a95f9ced45d963f14c9ae27d46ca26f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b05cd9ade1b221ca9fcefe7db249dc535f0d9ba954865ec1aca2c83389bb111c->leave($__internal_b05cd9ade1b221ca9fcefe7db249dc535f0d9ba954865ec1aca2c83389bb111c_prof);

        
        $__internal_b6375931c167eb3ab49be109f77a0ed8a95f9ced45d963f14c9ae27d46ca26f5->leave($__internal_b6375931c167eb3ab49be109f77a0ed8a95f9ced45d963f14c9ae27d46ca26f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
