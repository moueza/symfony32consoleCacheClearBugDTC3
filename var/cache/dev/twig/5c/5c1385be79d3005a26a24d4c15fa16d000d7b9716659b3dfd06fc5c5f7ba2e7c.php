<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_171717644e7a301d325108976286d53aebb33aec152d92a608afbffc7a177153 extends Twig_Template
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
        $__internal_1c52c0708ec7048a11c35a9eab3e2b4c309a7dc998aeec0aeee54717b76c316c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c52c0708ec7048a11c35a9eab3e2b4c309a7dc998aeec0aeee54717b76c316c->enter($__internal_1c52c0708ec7048a11c35a9eab3e2b4c309a7dc998aeec0aeee54717b76c316c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_08b8665ce88260f61bf410c084f86db3f277d029fe376cedcd2690ffd9404195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b8665ce88260f61bf410c084f86db3f277d029fe376cedcd2690ffd9404195->enter($__internal_08b8665ce88260f61bf410c084f86db3f277d029fe376cedcd2690ffd9404195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1c52c0708ec7048a11c35a9eab3e2b4c309a7dc998aeec0aeee54717b76c316c->leave($__internal_1c52c0708ec7048a11c35a9eab3e2b4c309a7dc998aeec0aeee54717b76c316c_prof);

        
        $__internal_08b8665ce88260f61bf410c084f86db3f277d029fe376cedcd2690ffd9404195->leave($__internal_08b8665ce88260f61bf410c084f86db3f277d029fe376cedcd2690ffd9404195_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
