<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_28e705f056180ea68eb0655f43f78da599490ebd82844bec379d4e2eca0af02a extends Twig_Template
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
        $__internal_62df07dcdf843b81bfa1e2ed2f34a89dae34dda36151ade8b89f41ace50d0c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62df07dcdf843b81bfa1e2ed2f34a89dae34dda36151ade8b89f41ace50d0c1a->enter($__internal_62df07dcdf843b81bfa1e2ed2f34a89dae34dda36151ade8b89f41ace50d0c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f2dfe0e192920ae2838877a7586ab2e1971f167426ffa38f684d7bbc24fe8c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2dfe0e192920ae2838877a7586ab2e1971f167426ffa38f684d7bbc24fe8c75->enter($__internal_f2dfe0e192920ae2838877a7586ab2e1971f167426ffa38f684d7bbc24fe8c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_62df07dcdf843b81bfa1e2ed2f34a89dae34dda36151ade8b89f41ace50d0c1a->leave($__internal_62df07dcdf843b81bfa1e2ed2f34a89dae34dda36151ade8b89f41ace50d0c1a_prof);

        
        $__internal_f2dfe0e192920ae2838877a7586ab2e1971f167426ffa38f684d7bbc24fe8c75->leave($__internal_f2dfe0e192920ae2838877a7586ab2e1971f167426ffa38f684d7bbc24fe8c75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
