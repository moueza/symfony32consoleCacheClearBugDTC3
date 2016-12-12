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
        $__internal_cb27b3b477e1de62b7d36275f38e3b49366812e76fe653e6f8f36e6fcd058616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb27b3b477e1de62b7d36275f38e3b49366812e76fe653e6f8f36e6fcd058616->enter($__internal_cb27b3b477e1de62b7d36275f38e3b49366812e76fe653e6f8f36e6fcd058616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f47a8d61af0d6fd9870b16249d0432160f96ef470f6f8f24f699263e26a7780d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47a8d61af0d6fd9870b16249d0432160f96ef470f6f8f24f699263e26a7780d->enter($__internal_f47a8d61af0d6fd9870b16249d0432160f96ef470f6f8f24f699263e26a7780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_cb27b3b477e1de62b7d36275f38e3b49366812e76fe653e6f8f36e6fcd058616->leave($__internal_cb27b3b477e1de62b7d36275f38e3b49366812e76fe653e6f8f36e6fcd058616_prof);

        
        $__internal_f47a8d61af0d6fd9870b16249d0432160f96ef470f6f8f24f699263e26a7780d->leave($__internal_f47a8d61af0d6fd9870b16249d0432160f96ef470f6f8f24f699263e26a7780d_prof);

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
