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
        $__internal_db9285e2a0b0f12b46cb2d630aaa9f8c2e2856a9b0822200c5965a44fea4ce1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9285e2a0b0f12b46cb2d630aaa9f8c2e2856a9b0822200c5965a44fea4ce1f->enter($__internal_db9285e2a0b0f12b46cb2d630aaa9f8c2e2856a9b0822200c5965a44fea4ce1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_25ab632777f1f891b8f039d4468f7677b30855466d5db4f2f37f6e17b25c23d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ab632777f1f891b8f039d4468f7677b30855466d5db4f2f37f6e17b25c23d1->enter($__internal_25ab632777f1f891b8f039d4468f7677b30855466d5db4f2f37f6e17b25c23d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_db9285e2a0b0f12b46cb2d630aaa9f8c2e2856a9b0822200c5965a44fea4ce1f->leave($__internal_db9285e2a0b0f12b46cb2d630aaa9f8c2e2856a9b0822200c5965a44fea4ce1f_prof);

        
        $__internal_25ab632777f1f891b8f039d4468f7677b30855466d5db4f2f37f6e17b25c23d1->leave($__internal_25ab632777f1f891b8f039d4468f7677b30855466d5db4f2f37f6e17b25c23d1_prof);

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
