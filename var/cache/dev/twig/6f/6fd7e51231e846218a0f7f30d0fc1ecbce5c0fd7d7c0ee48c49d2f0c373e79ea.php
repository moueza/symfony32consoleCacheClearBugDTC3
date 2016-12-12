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
        $__internal_8575c74ca4aab99403846a0195888ef9340a2c316714f7c71495eac1e26f1da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8575c74ca4aab99403846a0195888ef9340a2c316714f7c71495eac1e26f1da3->enter($__internal_8575c74ca4aab99403846a0195888ef9340a2c316714f7c71495eac1e26f1da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_716e9cee7b76a5781b2fd3676d7d191b1442da28b18c3c8c750be4c8f0ce3dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716e9cee7b76a5781b2fd3676d7d191b1442da28b18c3c8c750be4c8f0ce3dc2->enter($__internal_716e9cee7b76a5781b2fd3676d7d191b1442da28b18c3c8c750be4c8f0ce3dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8575c74ca4aab99403846a0195888ef9340a2c316714f7c71495eac1e26f1da3->leave($__internal_8575c74ca4aab99403846a0195888ef9340a2c316714f7c71495eac1e26f1da3_prof);

        
        $__internal_716e9cee7b76a5781b2fd3676d7d191b1442da28b18c3c8c750be4c8f0ce3dc2->leave($__internal_716e9cee7b76a5781b2fd3676d7d191b1442da28b18c3c8c750be4c8f0ce3dc2_prof);

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
