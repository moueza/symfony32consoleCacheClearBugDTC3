<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_99d32c8bc8dabb7ef17730fbafe84a0dc5e1ffc15ed455185271c7f201eb9d29 extends Twig_Template
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
        $__internal_072107b96941e19e44636eb2519f509d3b95ff1889195ddc86f07a60a8d44a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072107b96941e19e44636eb2519f509d3b95ff1889195ddc86f07a60a8d44a5c->enter($__internal_072107b96941e19e44636eb2519f509d3b95ff1889195ddc86f07a60a8d44a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4834b689978a0f498c745b3f28b6489a60b2d197f80fbb0b20ebfac9c2d58645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4834b689978a0f498c745b3f28b6489a60b2d197f80fbb0b20ebfac9c2d58645->enter($__internal_4834b689978a0f498c745b3f28b6489a60b2d197f80fbb0b20ebfac9c2d58645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_072107b96941e19e44636eb2519f509d3b95ff1889195ddc86f07a60a8d44a5c->leave($__internal_072107b96941e19e44636eb2519f509d3b95ff1889195ddc86f07a60a8d44a5c_prof);

        
        $__internal_4834b689978a0f498c745b3f28b6489a60b2d197f80fbb0b20ebfac9c2d58645->leave($__internal_4834b689978a0f498c745b3f28b6489a60b2d197f80fbb0b20ebfac9c2d58645_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
