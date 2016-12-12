<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b37901052a51eebf86b6073601e0f05b0ba965f0f494cce4b6813f29b630c489 extends Twig_Template
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
        $__internal_842e496b59c2b9a92d546347984970d869e5c6be2668e154e827e78e84923f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842e496b59c2b9a92d546347984970d869e5c6be2668e154e827e78e84923f32->enter($__internal_842e496b59c2b9a92d546347984970d869e5c6be2668e154e827e78e84923f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_eda776c9a9afd3cdce3020e4c48900c7fafd37a86f12fc08b47536ca291a901d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda776c9a9afd3cdce3020e4c48900c7fafd37a86f12fc08b47536ca291a901d->enter($__internal_eda776c9a9afd3cdce3020e4c48900c7fafd37a86f12fc08b47536ca291a901d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_842e496b59c2b9a92d546347984970d869e5c6be2668e154e827e78e84923f32->leave($__internal_842e496b59c2b9a92d546347984970d869e5c6be2668e154e827e78e84923f32_prof);

        
        $__internal_eda776c9a9afd3cdce3020e4c48900c7fafd37a86f12fc08b47536ca291a901d->leave($__internal_eda776c9a9afd3cdce3020e4c48900c7fafd37a86f12fc08b47536ca291a901d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
