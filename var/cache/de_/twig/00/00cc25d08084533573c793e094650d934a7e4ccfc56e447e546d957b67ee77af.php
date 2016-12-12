<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_05df047184e4785d4cd18dc0cd190470ac7181e2abe31e0e8bb84410d5831618 extends Twig_Template
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
        $__internal_371f39bbe09eac125540945109904e9c6dcf25c0a876ec636a9e9e7ec601c7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371f39bbe09eac125540945109904e9c6dcf25c0a876ec636a9e9e7ec601c7ab->enter($__internal_371f39bbe09eac125540945109904e9c6dcf25c0a876ec636a9e9e7ec601c7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_574f12691b78c84c29ac653220940b42655701113132c77a2cebd75b58b9d0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574f12691b78c84c29ac653220940b42655701113132c77a2cebd75b58b9d0bb->enter($__internal_574f12691b78c84c29ac653220940b42655701113132c77a2cebd75b58b9d0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_371f39bbe09eac125540945109904e9c6dcf25c0a876ec636a9e9e7ec601c7ab->leave($__internal_371f39bbe09eac125540945109904e9c6dcf25c0a876ec636a9e9e7ec601c7ab_prof);

        
        $__internal_574f12691b78c84c29ac653220940b42655701113132c77a2cebd75b58b9d0bb->leave($__internal_574f12691b78c84c29ac653220940b42655701113132c77a2cebd75b58b9d0bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
