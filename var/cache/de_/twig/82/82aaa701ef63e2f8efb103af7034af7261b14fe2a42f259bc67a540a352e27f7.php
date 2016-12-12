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
        $__internal_60a7889ee39030e74ab350613983453a4e7719cd6bbb8b7230ab72266e70d184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a7889ee39030e74ab350613983453a4e7719cd6bbb8b7230ab72266e70d184->enter($__internal_60a7889ee39030e74ab350613983453a4e7719cd6bbb8b7230ab72266e70d184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_26c6402a6fa97365251e22cc08a035b19aa643deb4040ef2d6ce254d5283cea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c6402a6fa97365251e22cc08a035b19aa643deb4040ef2d6ce254d5283cea6->enter($__internal_26c6402a6fa97365251e22cc08a035b19aa643deb4040ef2d6ce254d5283cea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_60a7889ee39030e74ab350613983453a4e7719cd6bbb8b7230ab72266e70d184->leave($__internal_60a7889ee39030e74ab350613983453a4e7719cd6bbb8b7230ab72266e70d184_prof);

        
        $__internal_26c6402a6fa97365251e22cc08a035b19aa643deb4040ef2d6ce254d5283cea6->leave($__internal_26c6402a6fa97365251e22cc08a035b19aa643deb4040ef2d6ce254d5283cea6_prof);

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
