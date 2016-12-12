<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f2aa716c7c5f78d18a10af468fe600236bcbe59dafe84dc54d04f2cbbb09188e extends Twig_Template
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
        $__internal_e66e0bc8c8d4e66e8d3c631dbab80196d4bac92070930a650a75c60a1507a52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66e0bc8c8d4e66e8d3c631dbab80196d4bac92070930a650a75c60a1507a52c->enter($__internal_e66e0bc8c8d4e66e8d3c631dbab80196d4bac92070930a650a75c60a1507a52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_12a2fb68665eecc0ad430bc81cea43fc7bc87a1b21425c1d372b06fe47574069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a2fb68665eecc0ad430bc81cea43fc7bc87a1b21425c1d372b06fe47574069->enter($__internal_12a2fb68665eecc0ad430bc81cea43fc7bc87a1b21425c1d372b06fe47574069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e66e0bc8c8d4e66e8d3c631dbab80196d4bac92070930a650a75c60a1507a52c->leave($__internal_e66e0bc8c8d4e66e8d3c631dbab80196d4bac92070930a650a75c60a1507a52c_prof);

        
        $__internal_12a2fb68665eecc0ad430bc81cea43fc7bc87a1b21425c1d372b06fe47574069->leave($__internal_12a2fb68665eecc0ad430bc81cea43fc7bc87a1b21425c1d372b06fe47574069_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
