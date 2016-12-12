<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_8a9d0e26519fc043667e91b649520b3a3b9a0b8a28dcd997e93722e41ec8cd6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac654221702d4f84864591af52b295054cf98b97ce37e7375c18c22f0e91f685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac654221702d4f84864591af52b295054cf98b97ce37e7375c18c22f0e91f685->enter($__internal_ac654221702d4f84864591af52b295054cf98b97ce37e7375c18c22f0e91f685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_6c8a8a22653c2b60b26a4c2d4ff0e156b98d8fe4375b6cae1881f1c3b48356e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8a8a22653c2b60b26a4c2d4ff0e156b98d8fe4375b6cae1881f1c3b48356e8->enter($__internal_6c8a8a22653c2b60b26a4c2d4ff0e156b98d8fe4375b6cae1881f1c3b48356e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_ac654221702d4f84864591af52b295054cf98b97ce37e7375c18c22f0e91f685->leave($__internal_ac654221702d4f84864591af52b295054cf98b97ce37e7375c18c22f0e91f685_prof);

        
        $__internal_6c8a8a22653c2b60b26a4c2d4ff0e156b98d8fe4375b6cae1881f1c3b48356e8->leave($__internal_6c8a8a22653c2b60b26a4c2d4ff0e156b98d8fe4375b6cae1881f1c3b48356e8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ddbe4e3972a1a2f1979b5080a2ef18f4a48d4b2d162ac4ec714058e058eaff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ddbe4e3972a1a2f1979b5080a2ef18f4a48d4b2d162ac4ec714058e058eaff9->enter($__internal_3ddbe4e3972a1a2f1979b5080a2ef18f4a48d4b2d162ac4ec714058e058eaff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6faa655e56e3b7c2a9bae63cad048163be323c4974db9357dfbc9ebe522b80b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6faa655e56e3b7c2a9bae63cad048163be323c4974db9357dfbc9ebe522b80b2->enter($__internal_6faa655e56e3b7c2a9bae63cad048163be323c4974db9357dfbc9ebe522b80b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_6faa655e56e3b7c2a9bae63cad048163be323c4974db9357dfbc9ebe522b80b2->leave($__internal_6faa655e56e3b7c2a9bae63cad048163be323c4974db9357dfbc9ebe522b80b2_prof);

        
        $__internal_3ddbe4e3972a1a2f1979b5080a2ef18f4a48d4b2d162ac4ec714058e058eaff9->leave($__internal_3ddbe4e3972a1a2f1979b5080a2ef18f4a48d4b2d162ac4ec714058e058eaff9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4f8e8b9ce6688d02991f7b98890b68c9579a6103ee64f23a4783433faf20fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f8e8b9ce6688d02991f7b98890b68c9579a6103ee64f23a4783433faf20fc0->enter($__internal_b4f8e8b9ce6688d02991f7b98890b68c9579a6103ee64f23a4783433faf20fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d366d5ec5bb7d7165cdbdc0bc51f332fd963f0539fd085663e8ea38c892aa176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d366d5ec5bb7d7165cdbdc0bc51f332fd963f0539fd085663e8ea38c892aa176->enter($__internal_d366d5ec5bb7d7165cdbdc0bc51f332fd963f0539fd085663e8ea38c892aa176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_d366d5ec5bb7d7165cdbdc0bc51f332fd963f0539fd085663e8ea38c892aa176->leave($__internal_d366d5ec5bb7d7165cdbdc0bc51f332fd963f0539fd085663e8ea38c892aa176_prof);

        
        $__internal_b4f8e8b9ce6688d02991f7b98890b68c9579a6103ee64f23a4783433faf20fc0->leave($__internal_b4f8e8b9ce6688d02991f7b98890b68c9579a6103ee64f23a4783433faf20fc0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bdfb52b4b314ed3caab4b7b3f0f59f47c159102b2cc49d67695068acdc9da31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bdfb52b4b314ed3caab4b7b3f0f59f47c159102b2cc49d67695068acdc9da31->enter($__internal_2bdfb52b4b314ed3caab4b7b3f0f59f47c159102b2cc49d67695068acdc9da31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d6028fa212997a797a065880efcf2407f73b124d96ed29ed42e173f389960c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6028fa212997a797a065880efcf2407f73b124d96ed29ed42e173f389960c8->enter($__internal_0d6028fa212997a797a065880efcf2407f73b124d96ed29ed42e173f389960c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_0d6028fa212997a797a065880efcf2407f73b124d96ed29ed42e173f389960c8->leave($__internal_0d6028fa212997a797a065880efcf2407f73b124d96ed29ed42e173f389960c8_prof);

        
        $__internal_2bdfb52b4b314ed3caab4b7b3f0f59f47c159102b2cc49d67695068acdc9da31->leave($__internal_2bdfb52b4b314ed3caab4b7b3f0f59f47c159102b2cc49d67695068acdc9da31_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3eb23d2b208bf9838c33123b9104526da0335d49f5d220a318d8395f13fad12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb23d2b208bf9838c33123b9104526da0335d49f5d220a318d8395f13fad12d->enter($__internal_3eb23d2b208bf9838c33123b9104526da0335d49f5d220a318d8395f13fad12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b2157089063233de915f3a64a95b1f0a06e0778fac43c93db440cd8a9832efd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2157089063233de915f3a64a95b1f0a06e0778fac43c93db440cd8a9832efd9->enter($__internal_b2157089063233de915f3a64a95b1f0a06e0778fac43c93db440cd8a9832efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_b2157089063233de915f3a64a95b1f0a06e0778fac43c93db440cd8a9832efd9->leave($__internal_b2157089063233de915f3a64a95b1f0a06e0778fac43c93db440cd8a9832efd9_prof);

        
        $__internal_3eb23d2b208bf9838c33123b9104526da0335d49f5d220a318d8395f13fad12d->leave($__internal_3eb23d2b208bf9838c33123b9104526da0335d49f5d220a318d8395f13fad12d_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
