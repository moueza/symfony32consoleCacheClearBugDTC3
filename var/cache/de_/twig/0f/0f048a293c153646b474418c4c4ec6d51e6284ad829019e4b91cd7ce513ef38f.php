<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b5fa16348afc5b8545b052f0bf678f4e5e9b262b5c2282a9c02546ca5f0965c2 extends Twig_Template
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
        $__internal_dc337a9e17a3bc699aff395b6b9b7f3f4e4e7eccb141f96001f1a4555ef9dcf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc337a9e17a3bc699aff395b6b9b7f3f4e4e7eccb141f96001f1a4555ef9dcf7->enter($__internal_dc337a9e17a3bc699aff395b6b9b7f3f4e4e7eccb141f96001f1a4555ef9dcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_18088fb6738ff74cc5b7eeaea07e5dc50e0d595e51964be78e1d8d50eff2a165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18088fb6738ff74cc5b7eeaea07e5dc50e0d595e51964be78e1d8d50eff2a165->enter($__internal_18088fb6738ff74cc5b7eeaea07e5dc50e0d595e51964be78e1d8d50eff2a165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_dc337a9e17a3bc699aff395b6b9b7f3f4e4e7eccb141f96001f1a4555ef9dcf7->leave($__internal_dc337a9e17a3bc699aff395b6b9b7f3f4e4e7eccb141f96001f1a4555ef9dcf7_prof);

        
        $__internal_18088fb6738ff74cc5b7eeaea07e5dc50e0d595e51964be78e1d8d50eff2a165->leave($__internal_18088fb6738ff74cc5b7eeaea07e5dc50e0d595e51964be78e1d8d50eff2a165_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
