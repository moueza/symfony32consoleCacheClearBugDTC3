<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7523740042894085c30d6fd3c3108f26c2220b12406f79b342f40bc78e4baad extends Twig_Template
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
        $__internal_c3cedbd8dc64e5e98151b7c788e8c412774820888aedf4e3a80605cd480af6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3cedbd8dc64e5e98151b7c788e8c412774820888aedf4e3a80605cd480af6cf->enter($__internal_c3cedbd8dc64e5e98151b7c788e8c412774820888aedf4e3a80605cd480af6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6268b9ccd5979f1951b7e8b303394f22ad8a06dacafb2ce1bad119b00d5041bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6268b9ccd5979f1951b7e8b303394f22ad8a06dacafb2ce1bad119b00d5041bc->enter($__internal_6268b9ccd5979f1951b7e8b303394f22ad8a06dacafb2ce1bad119b00d5041bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c3cedbd8dc64e5e98151b7c788e8c412774820888aedf4e3a80605cd480af6cf->leave($__internal_c3cedbd8dc64e5e98151b7c788e8c412774820888aedf4e3a80605cd480af6cf_prof);

        
        $__internal_6268b9ccd5979f1951b7e8b303394f22ad8a06dacafb2ce1bad119b00d5041bc->leave($__internal_6268b9ccd5979f1951b7e8b303394f22ad8a06dacafb2ce1bad119b00d5041bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
