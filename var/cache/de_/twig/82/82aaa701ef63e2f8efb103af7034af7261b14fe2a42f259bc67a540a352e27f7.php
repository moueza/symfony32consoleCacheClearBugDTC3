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
        $__internal_d5734c43a9deb6944b15e190f1dc2ed61db5132a765c946eaafbf046e701141f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5734c43a9deb6944b15e190f1dc2ed61db5132a765c946eaafbf046e701141f->enter($__internal_d5734c43a9deb6944b15e190f1dc2ed61db5132a765c946eaafbf046e701141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_0da940b4d02e366fa29cc21ed9508655e7223d4f659c7d2797b6bf903d89de12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da940b4d02e366fa29cc21ed9508655e7223d4f659c7d2797b6bf903d89de12->enter($__internal_0da940b4d02e366fa29cc21ed9508655e7223d4f659c7d2797b6bf903d89de12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d5734c43a9deb6944b15e190f1dc2ed61db5132a765c946eaafbf046e701141f->leave($__internal_d5734c43a9deb6944b15e190f1dc2ed61db5132a765c946eaafbf046e701141f_prof);

        
        $__internal_0da940b4d02e366fa29cc21ed9508655e7223d4f659c7d2797b6bf903d89de12->leave($__internal_0da940b4d02e366fa29cc21ed9508655e7223d4f659c7d2797b6bf903d89de12_prof);

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
