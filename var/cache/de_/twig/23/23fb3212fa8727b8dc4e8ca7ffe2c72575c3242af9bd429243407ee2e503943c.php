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
        $__internal_382b42e29d1d54a7a62db5eb6d878a66ca7988e9b6486ca1345c76b142e6c390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382b42e29d1d54a7a62db5eb6d878a66ca7988e9b6486ca1345c76b142e6c390->enter($__internal_382b42e29d1d54a7a62db5eb6d878a66ca7988e9b6486ca1345c76b142e6c390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_504a5a783ce553a3fd6ab195cd4fdd4404d15ed680431e8c6bbd451cdd443ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504a5a783ce553a3fd6ab195cd4fdd4404d15ed680431e8c6bbd451cdd443ef4->enter($__internal_504a5a783ce553a3fd6ab195cd4fdd4404d15ed680431e8c6bbd451cdd443ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_382b42e29d1d54a7a62db5eb6d878a66ca7988e9b6486ca1345c76b142e6c390->leave($__internal_382b42e29d1d54a7a62db5eb6d878a66ca7988e9b6486ca1345c76b142e6c390_prof);

        
        $__internal_504a5a783ce553a3fd6ab195cd4fdd4404d15ed680431e8c6bbd451cdd443ef4->leave($__internal_504a5a783ce553a3fd6ab195cd4fdd4404d15ed680431e8c6bbd451cdd443ef4_prof);

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
