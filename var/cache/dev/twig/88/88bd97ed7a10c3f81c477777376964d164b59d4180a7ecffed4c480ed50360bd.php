<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3d83cc7f4a67640cf4366d51d8c47dccbb3ab825c9be740072656ff100b56b62 extends Twig_Template
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
        $__internal_06aa96f7a4cea7498655d37946a2b3dbf7f81acec4114e788a9ee613551af0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06aa96f7a4cea7498655d37946a2b3dbf7f81acec4114e788a9ee613551af0c1->enter($__internal_06aa96f7a4cea7498655d37946a2b3dbf7f81acec4114e788a9ee613551af0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_43df2150f3d9ac0357e080a149277b361fddfe28b78a23d3698db557458a9448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43df2150f3d9ac0357e080a149277b361fddfe28b78a23d3698db557458a9448->enter($__internal_43df2150f3d9ac0357e080a149277b361fddfe28b78a23d3698db557458a9448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_06aa96f7a4cea7498655d37946a2b3dbf7f81acec4114e788a9ee613551af0c1->leave($__internal_06aa96f7a4cea7498655d37946a2b3dbf7f81acec4114e788a9ee613551af0c1_prof);

        
        $__internal_43df2150f3d9ac0357e080a149277b361fddfe28b78a23d3698db557458a9448->leave($__internal_43df2150f3d9ac0357e080a149277b361fddfe28b78a23d3698db557458a9448_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
