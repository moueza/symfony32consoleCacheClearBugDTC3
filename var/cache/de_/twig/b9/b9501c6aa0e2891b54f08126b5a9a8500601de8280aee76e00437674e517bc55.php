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
        $__internal_d658965e6cfcb55bddba9faba38d769ebe7739f53a241e2973c05636d60f6d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d658965e6cfcb55bddba9faba38d769ebe7739f53a241e2973c05636d60f6d22->enter($__internal_d658965e6cfcb55bddba9faba38d769ebe7739f53a241e2973c05636d60f6d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_03f74d2b12a7a8988ed99cc32be466fb6bc2a657ebe2638255171fc281417853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f74d2b12a7a8988ed99cc32be466fb6bc2a657ebe2638255171fc281417853->enter($__internal_03f74d2b12a7a8988ed99cc32be466fb6bc2a657ebe2638255171fc281417853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d658965e6cfcb55bddba9faba38d769ebe7739f53a241e2973c05636d60f6d22->leave($__internal_d658965e6cfcb55bddba9faba38d769ebe7739f53a241e2973c05636d60f6d22_prof);

        
        $__internal_03f74d2b12a7a8988ed99cc32be466fb6bc2a657ebe2638255171fc281417853->leave($__internal_03f74d2b12a7a8988ed99cc32be466fb6bc2a657ebe2638255171fc281417853_prof);

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
