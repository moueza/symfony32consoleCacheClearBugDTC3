<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8f4edfd7c699a67ca1a7ebdecae963e1b29b917bee72d01b01dfe291ad6477c1 extends Twig_Template
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
        $__internal_eda0ff5826b21a59f7c3375f5a08275b351190a299993d7c90b3bb8a30847dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda0ff5826b21a59f7c3375f5a08275b351190a299993d7c90b3bb8a30847dde->enter($__internal_eda0ff5826b21a59f7c3375f5a08275b351190a299993d7c90b3bb8a30847dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1bef6c01cb8922fed4903d03ae56e4b632df228043b6e37c424b8775b22d21f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bef6c01cb8922fed4903d03ae56e4b632df228043b6e37c424b8775b22d21f6->enter($__internal_1bef6c01cb8922fed4903d03ae56e4b632df228043b6e37c424b8775b22d21f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_eda0ff5826b21a59f7c3375f5a08275b351190a299993d7c90b3bb8a30847dde->leave($__internal_eda0ff5826b21a59f7c3375f5a08275b351190a299993d7c90b3bb8a30847dde_prof);

        
        $__internal_1bef6c01cb8922fed4903d03ae56e4b632df228043b6e37c424b8775b22d21f6->leave($__internal_1bef6c01cb8922fed4903d03ae56e4b632df228043b6e37c424b8775b22d21f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
