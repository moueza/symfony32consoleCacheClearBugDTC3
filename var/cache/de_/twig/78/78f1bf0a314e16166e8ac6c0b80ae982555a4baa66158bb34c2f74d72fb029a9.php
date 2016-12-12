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
        $__internal_6f87336d7165b890272f0cb05c3ebd5072c97a81d6a6356c6112072aab16737b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f87336d7165b890272f0cb05c3ebd5072c97a81d6a6356c6112072aab16737b->enter($__internal_6f87336d7165b890272f0cb05c3ebd5072c97a81d6a6356c6112072aab16737b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9fabdab7193eb0d8e509ba79146de8c97f49086f79583b3a642af698797cda10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fabdab7193eb0d8e509ba79146de8c97f49086f79583b3a642af698797cda10->enter($__internal_9fabdab7193eb0d8e509ba79146de8c97f49086f79583b3a642af698797cda10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6f87336d7165b890272f0cb05c3ebd5072c97a81d6a6356c6112072aab16737b->leave($__internal_6f87336d7165b890272f0cb05c3ebd5072c97a81d6a6356c6112072aab16737b_prof);

        
        $__internal_9fabdab7193eb0d8e509ba79146de8c97f49086f79583b3a642af698797cda10->leave($__internal_9fabdab7193eb0d8e509ba79146de8c97f49086f79583b3a642af698797cda10_prof);

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
