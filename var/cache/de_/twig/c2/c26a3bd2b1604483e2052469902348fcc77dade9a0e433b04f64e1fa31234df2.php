<?php

/* @OCUser/Inscription/inscription.html.twig */
class __TwigTemplate_8eadc1da1dd4328cc464ed919fa1d9572d9a4eb649bb3e07ea1b1770749f5d3e extends Twig_Template
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
        $__internal_5b616558f56b87d4187f83a23534dbd61ec6c45883d317423bf37b1c8f03c2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b616558f56b87d4187f83a23534dbd61ec6c45883d317423bf37b1c8f03c2e1->enter($__internal_5b616558f56b87d4187f83a23534dbd61ec6c45883d317423bf37b1c8f03c2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscription.html.twig"));

        $__internal_af5cbcf1e6d710eadd60f437c6ed2bf6022f6973f48b6bf5c1deddad2e34a098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5cbcf1e6d710eadd60f437c6ed2bf6022f6973f48b6bf5c1deddad2e34a098->enter($__internal_af5cbcf1e6d710eadd60f437c6ed2bf6022f6973f48b6bf5c1deddad2e34a098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Inscription/inscription.html.twig"));

        // line 1
        echo "<body>
    <h3>Formulaire d'inscription</h3>


    <div class=\"well\">

        ";
        // line 8
        echo "
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        ";
        // line 11
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        <div class=\"form-group\">
            ";
        // line 17
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "*"));
        echo "
            ";
        // line 19
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 22
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>


        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isPseudoOVS", array()), 'row');
        echo "
        <div class=\"form-group\">
            ";
        // line 30
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isPseudoOVS", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "*"));
        echo "
            ";
        // line 32
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isPseudoOVS", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 35
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isPseudoOVS", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>


        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        <div class=\"form-group\">
            ";
        // line 43
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "*"));
        echo "
            ";
        // line 45
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 48
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>


        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
        <div class=\"form-group\">
            ";
        // line 56
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "*"));
        echo "
            ";
        // line 58
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 61
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>


        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_femme", array()), 'row');
        echo "
        <div class=\"form-group\">
            ";
        // line 69
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_femme", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "*"));
        echo "
            ";
        // line 71
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_femme", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 74
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_femme", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>





        ";
        // line 85
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


        ";
        // line 89
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "




        ";
        // line 95
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
</body>";
        
        $__internal_5b616558f56b87d4187f83a23534dbd61ec6c45883d317423bf37b1c8f03c2e1->leave($__internal_5b616558f56b87d4187f83a23534dbd61ec6c45883d317423bf37b1c8f03c2e1_prof);

        
        $__internal_af5cbcf1e6d710eadd60f437c6ed2bf6022f6973f48b6bf5c1deddad2e34a098->leave($__internal_af5cbcf1e6d710eadd60f437c6ed2bf6022f6973f48b6bf5c1deddad2e34a098_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Inscription/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 95,  182 => 89,  175 => 85,  163 => 74,  157 => 71,  152 => 69,  147 => 66,  138 => 61,  132 => 58,  127 => 56,  122 => 53,  113 => 48,  107 => 45,  102 => 43,  97 => 40,  88 => 35,  82 => 32,  77 => 30,  72 => 27,  63 => 22,  57 => 19,  52 => 17,  47 => 14,  40 => 11,  36 => 9,  33 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<body>
    <h3>Formulaire d'inscription</h3>


    <div class=\"well\">

        {# form(form) }#}

        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
        {# Les erreurs générales du formulaire. #}
        {{ form_errors(form) }}


        {{ form_row(form.username) }}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.username, \"*\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.username) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>


        {{ form_row(form.isPseudoOVS) }}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.isPseudoOVS, \"*\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.isPseudoOVS) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.isPseudoOVS, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>


        {{ form_row(form.email) }}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.email, \"*\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.email) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>


        {{ form_row(form.password) }}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.password, \"*\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.password) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>


        {{ form_row(form.is_femme) }}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.is_femme, \"*\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.is_femme) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.is_femme, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>





        {# Génération automatique des champs pas encore écrits.
           Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
           et tous les champs cachés (type « hidden »). #}
        {{ form_rest(form) }}


        {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
        {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}




        {# Fermeture de la balise <form> du formulaire HTML #}
        {{ form_end(form) }}

    </div>
</body>", "@OCUser/Inscription/inscription.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Inscription/inscription.html.twig");
    }
}
