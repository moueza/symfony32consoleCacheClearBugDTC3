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
        $__internal_597b5e5861d1896504a7b39554103c7758bdcd71aee6564cd003ac8c0aff2b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_597b5e5861d1896504a7b39554103c7758bdcd71aee6564cd003ac8c0aff2b70->enter($__internal_597b5e5861d1896504a7b39554103c7758bdcd71aee6564cd003ac8c0aff2b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_92a75185ad21c4b7894a3c685bd47e3a0b7ac8306e8339a7731dc989538f8ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a75185ad21c4b7894a3c685bd47e3a0b7ac8306e8339a7731dc989538f8ee1->enter($__internal_92a75185ad21c4b7894a3c685bd47e3a0b7ac8306e8339a7731dc989538f8ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_597b5e5861d1896504a7b39554103c7758bdcd71aee6564cd003ac8c0aff2b70->leave($__internal_597b5e5861d1896504a7b39554103c7758bdcd71aee6564cd003ac8c0aff2b70_prof);

        
        $__internal_92a75185ad21c4b7894a3c685bd47e3a0b7ac8306e8339a7731dc989538f8ee1->leave($__internal_92a75185ad21c4b7894a3c685bd47e3a0b7ac8306e8339a7731dc989538f8ee1_prof);

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
