<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_68ebc69af17fafc222e1ebcdb5b4fe0708c669ee2451e16ffc1a2b15c2dc9dee extends Twig_Template
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
        $__internal_37beee13b4e4f57dcbfaf2ffd08d1deda668f9389b7d91f408740327570cee8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37beee13b4e4f57dcbfaf2ffd08d1deda668f9389b7d91f408740327570cee8c->enter($__internal_37beee13b4e4f57dcbfaf2ffd08d1deda668f9389b7d91f408740327570cee8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1540e0dee265b075fe3f7b62df836f73a54552802302db38dcbd784b10a640c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1540e0dee265b075fe3f7b62df836f73a54552802302db38dcbd784b10a640c3->enter($__internal_1540e0dee265b075fe3f7b62df836f73a54552802302db38dcbd784b10a640c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_37beee13b4e4f57dcbfaf2ffd08d1deda668f9389b7d91f408740327570cee8c->leave($__internal_37beee13b4e4f57dcbfaf2ffd08d1deda668f9389b7d91f408740327570cee8c_prof);

        
        $__internal_1540e0dee265b075fe3f7b62df836f73a54552802302db38dcbd784b10a640c3->leave($__internal_1540e0dee265b075fe3f7b62df836f73a54552802302db38dcbd784b10a640c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
