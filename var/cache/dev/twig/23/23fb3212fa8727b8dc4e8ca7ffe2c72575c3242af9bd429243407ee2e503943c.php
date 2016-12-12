<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_73ea895c3f0bba9dae1b52918831cd597178155d55a8661f8ed01c595c64d34e extends Twig_Template
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
        $__internal_d5ef168673fd5ae8ee074ff60f653bac5dfd86e87eedca602052fae962073a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ef168673fd5ae8ee074ff60f653bac5dfd86e87eedca602052fae962073a5e->enter($__internal_d5ef168673fd5ae8ee074ff60f653bac5dfd86e87eedca602052fae962073a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b64616785df2d0093a3d46cd10e59f766cc40cfd8e89f0df559d44a2d62dd2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64616785df2d0093a3d46cd10e59f766cc40cfd8e89f0df559d44a2d62dd2a0->enter($__internal_b64616785df2d0093a3d46cd10e59f766cc40cfd8e89f0df559d44a2d62dd2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d5ef168673fd5ae8ee074ff60f653bac5dfd86e87eedca602052fae962073a5e->leave($__internal_d5ef168673fd5ae8ee074ff60f653bac5dfd86e87eedca602052fae962073a5e_prof);

        
        $__internal_b64616785df2d0093a3d46cd10e59f766cc40cfd8e89f0df559d44a2d62dd2a0->leave($__internal_b64616785df2d0093a3d46cd10e59f766cc40cfd8e89f0df559d44a2d62dd2a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
