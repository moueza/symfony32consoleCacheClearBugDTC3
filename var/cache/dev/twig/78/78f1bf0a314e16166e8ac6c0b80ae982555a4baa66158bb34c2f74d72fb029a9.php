<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_25c65161d004ec50794a849170338c34132a0bb32e472a9a6fdca51f023bbad2 extends Twig_Template
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
        $__internal_f5dc060868ba670cce5089cb9502644639f7d00bd4b541266c9b6a3514038148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5dc060868ba670cce5089cb9502644639f7d00bd4b541266c9b6a3514038148->enter($__internal_f5dc060868ba670cce5089cb9502644639f7d00bd4b541266c9b6a3514038148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ef9df11bbc307e3f0f4554fa8262586fb3582b7a0a6d10f3046fa91ce1dc6e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9df11bbc307e3f0f4554fa8262586fb3582b7a0a6d10f3046fa91ce1dc6e29->enter($__internal_ef9df11bbc307e3f0f4554fa8262586fb3582b7a0a6d10f3046fa91ce1dc6e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f5dc060868ba670cce5089cb9502644639f7d00bd4b541266c9b6a3514038148->leave($__internal_f5dc060868ba670cce5089cb9502644639f7d00bd4b541266c9b6a3514038148_prof);

        
        $__internal_ef9df11bbc307e3f0f4554fa8262586fb3582b7a0a6d10f3046fa91ce1dc6e29->leave($__internal_ef9df11bbc307e3f0f4554fa8262586fb3582b7a0a6d10f3046fa91ce1dc6e29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
