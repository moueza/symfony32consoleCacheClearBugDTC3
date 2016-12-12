<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_49aaf657b4e6121cc0f23b5f80df065fffb78a7157693ad836bbf18fdde96ba5 extends Twig_Template
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
        $__internal_87b33f2b3f0163023a441863bc21d6cb4c17453b758829269fa4819d386282bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b33f2b3f0163023a441863bc21d6cb4c17453b758829269fa4819d386282bd->enter($__internal_87b33f2b3f0163023a441863bc21d6cb4c17453b758829269fa4819d386282bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e7a754b46d82d83cebcfab3a25b383d36e98c8411a1ed1f6c3f783060944e6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a754b46d82d83cebcfab3a25b383d36e98c8411a1ed1f6c3f783060944e6a2->enter($__internal_e7a754b46d82d83cebcfab3a25b383d36e98c8411a1ed1f6c3f783060944e6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_87b33f2b3f0163023a441863bc21d6cb4c17453b758829269fa4819d386282bd->leave($__internal_87b33f2b3f0163023a441863bc21d6cb4c17453b758829269fa4819d386282bd_prof);

        
        $__internal_e7a754b46d82d83cebcfab3a25b383d36e98c8411a1ed1f6c3f783060944e6a2->leave($__internal_e7a754b46d82d83cebcfab3a25b383d36e98c8411a1ed1f6c3f783060944e6a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
