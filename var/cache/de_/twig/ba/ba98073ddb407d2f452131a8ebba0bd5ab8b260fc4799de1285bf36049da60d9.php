<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8c647dc3fe76bc6399839bfa0f6da327a8ed977d04d3757ac7ca5a7a6ae90a51 extends Twig_Template
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
        $__internal_8ba7cca5a265bcf0eaa3eee250fc064696a32105f2bc3c598490a7f632bf3cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba7cca5a265bcf0eaa3eee250fc064696a32105f2bc3c598490a7f632bf3cd4->enter($__internal_8ba7cca5a265bcf0eaa3eee250fc064696a32105f2bc3c598490a7f632bf3cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4f5235bd1fa97fa0625fca5e2e93a8f912f759387f22f72e0ef336754ec24f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5235bd1fa97fa0625fca5e2e93a8f912f759387f22f72e0ef336754ec24f17->enter($__internal_4f5235bd1fa97fa0625fca5e2e93a8f912f759387f22f72e0ef336754ec24f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8ba7cca5a265bcf0eaa3eee250fc064696a32105f2bc3c598490a7f632bf3cd4->leave($__internal_8ba7cca5a265bcf0eaa3eee250fc064696a32105f2bc3c598490a7f632bf3cd4_prof);

        
        $__internal_4f5235bd1fa97fa0625fca5e2e93a8f912f759387f22f72e0ef336754ec24f17->leave($__internal_4f5235bd1fa97fa0625fca5e2e93a8f912f759387f22f72e0ef336754ec24f17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
