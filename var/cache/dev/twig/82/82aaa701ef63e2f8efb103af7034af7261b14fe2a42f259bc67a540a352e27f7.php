<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b60d08dddd832a0898df67b4d9182f85cfefeb4cf3e198e74da1e9467d5bd4f3 extends Twig_Template
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
        $__internal_94b3d836032349fc7d0c90d34bbb874eada93ede5992ca1bc98702b51a0ede7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b3d836032349fc7d0c90d34bbb874eada93ede5992ca1bc98702b51a0ede7b->enter($__internal_94b3d836032349fc7d0c90d34bbb874eada93ede5992ca1bc98702b51a0ede7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f14f0fd77f60ae2b82f7a7fe55c2bc070413ba5fa33625a23da205d21da78e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14f0fd77f60ae2b82f7a7fe55c2bc070413ba5fa33625a23da205d21da78e4f->enter($__internal_f14f0fd77f60ae2b82f7a7fe55c2bc070413ba5fa33625a23da205d21da78e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_94b3d836032349fc7d0c90d34bbb874eada93ede5992ca1bc98702b51a0ede7b->leave($__internal_94b3d836032349fc7d0c90d34bbb874eada93ede5992ca1bc98702b51a0ede7b_prof);

        
        $__internal_f14f0fd77f60ae2b82f7a7fe55c2bc070413ba5fa33625a23da205d21da78e4f->leave($__internal_f14f0fd77f60ae2b82f7a7fe55c2bc070413ba5fa33625a23da205d21da78e4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
