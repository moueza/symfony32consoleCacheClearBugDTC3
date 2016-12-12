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
        $__internal_c1f05427aa54e9a302efa3633f0e43341dfa54eb6c6277ee89ff9e15c0a82fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f05427aa54e9a302efa3633f0e43341dfa54eb6c6277ee89ff9e15c0a82fe6->enter($__internal_c1f05427aa54e9a302efa3633f0e43341dfa54eb6c6277ee89ff9e15c0a82fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6f9c95cd33edd3304a7be43b7b33d521113fc86c7a49f730f5d4d12eee035604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9c95cd33edd3304a7be43b7b33d521113fc86c7a49f730f5d4d12eee035604->enter($__internal_6f9c95cd33edd3304a7be43b7b33d521113fc86c7a49f730f5d4d12eee035604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c1f05427aa54e9a302efa3633f0e43341dfa54eb6c6277ee89ff9e15c0a82fe6->leave($__internal_c1f05427aa54e9a302efa3633f0e43341dfa54eb6c6277ee89ff9e15c0a82fe6_prof);

        
        $__internal_6f9c95cd33edd3304a7be43b7b33d521113fc86c7a49f730f5d4d12eee035604->leave($__internal_6f9c95cd33edd3304a7be43b7b33d521113fc86c7a49f730f5d4d12eee035604_prof);

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
