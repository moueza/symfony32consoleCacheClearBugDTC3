<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_16c52b50b7916eb2d6e6527435409844fb45f2e5f63db876607671bacf573010 extends Twig_Template
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
        $__internal_11fc37191c1e968ac8e3279634cdf07d62bedcf854d2e1a272e54201f2aeb019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fc37191c1e968ac8e3279634cdf07d62bedcf854d2e1a272e54201f2aeb019->enter($__internal_11fc37191c1e968ac8e3279634cdf07d62bedcf854d2e1a272e54201f2aeb019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6f661d46e0b6de940e88091e86777c32a981c8d2fcd7ba74e2f8c1025dc86d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f661d46e0b6de940e88091e86777c32a981c8d2fcd7ba74e2f8c1025dc86d29->enter($__internal_6f661d46e0b6de940e88091e86777c32a981c8d2fcd7ba74e2f8c1025dc86d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_11fc37191c1e968ac8e3279634cdf07d62bedcf854d2e1a272e54201f2aeb019->leave($__internal_11fc37191c1e968ac8e3279634cdf07d62bedcf854d2e1a272e54201f2aeb019_prof);

        
        $__internal_6f661d46e0b6de940e88091e86777c32a981c8d2fcd7ba74e2f8c1025dc86d29->leave($__internal_6f661d46e0b6de940e88091e86777c32a981c8d2fcd7ba74e2f8c1025dc86d29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
