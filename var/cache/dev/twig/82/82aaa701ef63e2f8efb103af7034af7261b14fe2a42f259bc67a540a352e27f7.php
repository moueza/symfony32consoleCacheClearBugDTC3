<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b60d08dddd832a0898df67b4d9182f85cfefeb4cf3e198e74da1e9467d5bd4f3 extends Twig_Template
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
        $__internal_2a3af4299bc8b4939353ec38d2957030cd30e8dc6f441a6ae40b14a53a4d2015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3af4299bc8b4939353ec38d2957030cd30e8dc6f441a6ae40b14a53a4d2015->enter($__internal_2a3af4299bc8b4939353ec38d2957030cd30e8dc6f441a6ae40b14a53a4d2015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2b5ca397eda9d631cf9c9dfae7c39aa74878e6b4070090fe76ca3f50ea90f0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5ca397eda9d631cf9c9dfae7c39aa74878e6b4070090fe76ca3f50ea90f0f0->enter($__internal_2b5ca397eda9d631cf9c9dfae7c39aa74878e6b4070090fe76ca3f50ea90f0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2a3af4299bc8b4939353ec38d2957030cd30e8dc6f441a6ae40b14a53a4d2015->leave($__internal_2a3af4299bc8b4939353ec38d2957030cd30e8dc6f441a6ae40b14a53a4d2015_prof);

        
        $__internal_2b5ca397eda9d631cf9c9dfae7c39aa74878e6b4070090fe76ca3f50ea90f0f0->leave($__internal_2b5ca397eda9d631cf9c9dfae7c39aa74878e6b4070090fe76ca3f50ea90f0f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
