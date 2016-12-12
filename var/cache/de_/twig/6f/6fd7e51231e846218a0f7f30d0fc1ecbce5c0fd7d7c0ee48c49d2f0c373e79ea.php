<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e71d51fc44277dcd08ec3b48cc56d59e0557e681eb126acb8cbe472937f3ed9d extends Twig_Template
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
        $__internal_70fd725898a049867e728bf3b353b7fad0d666fb0a82dc0c9f55956b0f89f560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fd725898a049867e728bf3b353b7fad0d666fb0a82dc0c9f55956b0f89f560->enter($__internal_70fd725898a049867e728bf3b353b7fad0d666fb0a82dc0c9f55956b0f89f560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4f0a1841804fb1a3680db7285aecfd2d0a36beb23e98f8512db5d0d2f11d218a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0a1841804fb1a3680db7285aecfd2d0a36beb23e98f8512db5d0d2f11d218a->enter($__internal_4f0a1841804fb1a3680db7285aecfd2d0a36beb23e98f8512db5d0d2f11d218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_70fd725898a049867e728bf3b353b7fad0d666fb0a82dc0c9f55956b0f89f560->leave($__internal_70fd725898a049867e728bf3b353b7fad0d666fb0a82dc0c9f55956b0f89f560_prof);

        
        $__internal_4f0a1841804fb1a3680db7285aecfd2d0a36beb23e98f8512db5d0d2f11d218a->leave($__internal_4f0a1841804fb1a3680db7285aecfd2d0a36beb23e98f8512db5d0d2f11d218a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
