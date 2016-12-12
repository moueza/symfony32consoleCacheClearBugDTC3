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
        $__internal_a240a9a912151553e344840a0da6356e8029d599b47834f837120b372f61c58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a240a9a912151553e344840a0da6356e8029d599b47834f837120b372f61c58e->enter($__internal_a240a9a912151553e344840a0da6356e8029d599b47834f837120b372f61c58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_db14e48aa2cfa8147b57e04268ceaaa7c38dc61c45c0e6318f1cbb6ee6a0d268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db14e48aa2cfa8147b57e04268ceaaa7c38dc61c45c0e6318f1cbb6ee6a0d268->enter($__internal_db14e48aa2cfa8147b57e04268ceaaa7c38dc61c45c0e6318f1cbb6ee6a0d268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a240a9a912151553e344840a0da6356e8029d599b47834f837120b372f61c58e->leave($__internal_a240a9a912151553e344840a0da6356e8029d599b47834f837120b372f61c58e_prof);

        
        $__internal_db14e48aa2cfa8147b57e04268ceaaa7c38dc61c45c0e6318f1cbb6ee6a0d268->leave($__internal_db14e48aa2cfa8147b57e04268ceaaa7c38dc61c45c0e6318f1cbb6ee6a0d268_prof);

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
