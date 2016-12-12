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
        $__internal_539cd819c7c71fb69279cbdccb3838ff5b8ea3fdf26f4d6e7cf5668ef92797ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539cd819c7c71fb69279cbdccb3838ff5b8ea3fdf26f4d6e7cf5668ef92797ef->enter($__internal_539cd819c7c71fb69279cbdccb3838ff5b8ea3fdf26f4d6e7cf5668ef92797ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_82aea6596cbec4019bd29949c3bc5a1a336b90f69df39be55b32893562eb9fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82aea6596cbec4019bd29949c3bc5a1a336b90f69df39be55b32893562eb9fb1->enter($__internal_82aea6596cbec4019bd29949c3bc5a1a336b90f69df39be55b32893562eb9fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_539cd819c7c71fb69279cbdccb3838ff5b8ea3fdf26f4d6e7cf5668ef92797ef->leave($__internal_539cd819c7c71fb69279cbdccb3838ff5b8ea3fdf26f4d6e7cf5668ef92797ef_prof);

        
        $__internal_82aea6596cbec4019bd29949c3bc5a1a336b90f69df39be55b32893562eb9fb1->leave($__internal_82aea6596cbec4019bd29949c3bc5a1a336b90f69df39be55b32893562eb9fb1_prof);

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
