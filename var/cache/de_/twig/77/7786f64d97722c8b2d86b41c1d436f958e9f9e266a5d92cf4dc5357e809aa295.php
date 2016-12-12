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
        $__internal_a2304504d1d9de4a11ec8a6f3b5218de7ea4a98a68addafe73b6c564c275dd82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2304504d1d9de4a11ec8a6f3b5218de7ea4a98a68addafe73b6c564c275dd82->enter($__internal_a2304504d1d9de4a11ec8a6f3b5218de7ea4a98a68addafe73b6c564c275dd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_91b10634b5981b3534dc7b9c04811cbf3aa2d8938ed5b976f2c39487392ff89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b10634b5981b3534dc7b9c04811cbf3aa2d8938ed5b976f2c39487392ff89e->enter($__internal_91b10634b5981b3534dc7b9c04811cbf3aa2d8938ed5b976f2c39487392ff89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a2304504d1d9de4a11ec8a6f3b5218de7ea4a98a68addafe73b6c564c275dd82->leave($__internal_a2304504d1d9de4a11ec8a6f3b5218de7ea4a98a68addafe73b6c564c275dd82_prof);

        
        $__internal_91b10634b5981b3534dc7b9c04811cbf3aa2d8938ed5b976f2c39487392ff89e->leave($__internal_91b10634b5981b3534dc7b9c04811cbf3aa2d8938ed5b976f2c39487392ff89e_prof);

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
