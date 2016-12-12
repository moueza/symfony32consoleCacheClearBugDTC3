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
        $__internal_bd0ce98caf7f012ccb42b8104b1d8c69004e4e5e693fe96c7b6665a6696171c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0ce98caf7f012ccb42b8104b1d8c69004e4e5e693fe96c7b6665a6696171c0->enter($__internal_bd0ce98caf7f012ccb42b8104b1d8c69004e4e5e693fe96c7b6665a6696171c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a6c381cc48a93647b46a3b5af16abbec6341c2535ef4b2c6ef31d6ceb5d075b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c381cc48a93647b46a3b5af16abbec6341c2535ef4b2c6ef31d6ceb5d075b2->enter($__internal_a6c381cc48a93647b46a3b5af16abbec6341c2535ef4b2c6ef31d6ceb5d075b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bd0ce98caf7f012ccb42b8104b1d8c69004e4e5e693fe96c7b6665a6696171c0->leave($__internal_bd0ce98caf7f012ccb42b8104b1d8c69004e4e5e693fe96c7b6665a6696171c0_prof);

        
        $__internal_a6c381cc48a93647b46a3b5af16abbec6341c2535ef4b2c6ef31d6ceb5d075b2->leave($__internal_a6c381cc48a93647b46a3b5af16abbec6341c2535ef4b2c6ef31d6ceb5d075b2_prof);

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
