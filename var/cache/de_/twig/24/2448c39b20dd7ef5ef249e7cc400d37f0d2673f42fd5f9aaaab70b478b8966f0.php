<?php

/* @OCUser/Matchh/matchform.html.twig */
class __TwigTemplate_b7d54ab48a9ec61d4d1222383d94bbb9f6c85c7fd52e30543f7038d9d94161d9 extends Twig_Template
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
        $__internal_13555019df1acaaca7b70e4d62c89d30f822a9609158ad73c8be8fadd281a1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13555019df1acaaca7b70e4d62c89d30f822a9609158ad73c8be8fadd281a1f0->enter($__internal_13555019df1acaaca7b70e4d62c89d30f822a9609158ad73c8be8fadd281a1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Matchh/matchform.html.twig"));

        $__internal_1f6d8cf787288ed00f014e7eb29e7033c2b6a65938478fe768a9e9331816e966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6d8cf787288ed00f014e7eb29e7033c2b6a65938478fe768a9e9331816e966->enter($__internal_1f6d8cf787288ed00f014e7eb29e7033c2b6a65938478fe768a9e9331816e966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Matchh/matchform.html.twig"));

        // line 1
        echo "<body>
    <h3>Saisie d'un match</h3>

    <div class=\"well\">
        *=obligé
    </div>

    <div class=\"well\">

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 13
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


        <div class=\"form-group\">
            ";
        // line 18
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beginningDate", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date du match : *"));
        echo "
            ";
        // line 20
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beginningDate", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 23
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beginningDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 29
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beginningTime", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Heure de début du match : *"));
        echo "
            ";
        // line 31
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beginningTime", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 34
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beginningTime", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>




        ";
        // line 42
        echo "        <div class=\"form-group\">
            ";
        // line 44
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailone", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Joueur1=joueur qui fait la saisie du formulaire : *"));
        echo "
            ";
        // line 46
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailone", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 49
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 54
        echo "        <div class=\"form-group\">
            ";
        // line 56
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailtwo", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Joueur2 : *"));
        echo "
            ";
        // line 58
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailtwo", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 61
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailtwo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>



        ";
        // line 68
        echo "        <div class=\"form-group\">
            ";
        // line 70
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score1j1", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "score1j1 : *"));
        echo "
            ";
        // line 72
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score1j1", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 75
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score1j1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 80
        echo "        <div class=\"form-group\">
            ";
        // line 82
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score1j2", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "score1j2 : *"));
        echo "
            ";
        // line 84
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score1j2", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 87
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score1j2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        ";
        // line 91
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isScore1tie", array()), 'row');
        echo "
        ";
        // line 93
        echo "        <div class=\"form-group\">
            ";
        // line 95
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score2j1", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "score2j1 : *"));
        echo "
            ";
        // line 97
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score2j1", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 100
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score2j1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 105
        echo "        <div class=\"form-group\">
            ";
        // line 107
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score2j2", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "score2j2 : *"));
        echo "
            ";
        // line 109
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score2j2", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 112
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score2j2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        ";
        // line 116
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isScore2tie", array()), 'row');
        echo "
        ";
        // line 118
        echo "
        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score3j1", array()), 'row');
        echo "
        ";
        // line 121
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "score3j2", array()), 'row');
        echo "

        ";
        // line 124
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isScore3tie", array()), 'row');
        echo "
        ";
        // line 126
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endTime", array()), 'row');
        echo "


        ";
        // line 130
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "


        ";
        // line 136
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


        ";
        // line 140
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
</body>";
        
        $__internal_13555019df1acaaca7b70e4d62c89d30f822a9609158ad73c8be8fadd281a1f0->leave($__internal_13555019df1acaaca7b70e4d62c89d30f822a9609158ad73c8be8fadd281a1f0_prof);

        
        $__internal_1f6d8cf787288ed00f014e7eb29e7033c2b6a65938478fe768a9e9331816e966->leave($__internal_1f6d8cf787288ed00f014e7eb29e7033c2b6a65938478fe768a9e9331816e966_prof);

    }

    public function getTemplateName()
    {
        return "@OCUser/Matchh/matchform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 140,  265 => 136,  258 => 130,  251 => 126,  246 => 124,  240 => 121,  236 => 119,  233 => 118,  228 => 116,  221 => 112,  215 => 109,  210 => 107,  207 => 105,  199 => 100,  193 => 97,  188 => 95,  185 => 93,  180 => 91,  173 => 87,  167 => 84,  162 => 82,  159 => 80,  151 => 75,  145 => 72,  140 => 70,  137 => 68,  127 => 61,  121 => 58,  116 => 56,  113 => 54,  105 => 49,  99 => 46,  94 => 44,  91 => 42,  80 => 34,  74 => 31,  69 => 29,  60 => 23,  54 => 20,  49 => 18,  41 => 13,  36 => 10,  25 => 1,);
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
    <h3>Saisie d'un match</h3>

    <div class=\"well\">
        *=obligé
    </div>

    <div class=\"well\">

        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

        {# Les erreurs générales du formulaire. #}
        {{ form_errors(form) }}


        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.beginningDate, \"Date du match : *\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.beginningDate) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.beginningDate, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.beginningTime, \"Heure de début du match : *\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.beginningTime) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.beginningTime, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>




        {# Génération manuelle et éclatée : #}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.emailone, \"Joueur1=joueur qui fait la saisie du formulaire : *\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.emailone) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.emailone, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        {# Génération manuelle et éclatée : #}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.emailtwo, \"Joueur2 : *\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.emailtwo) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.emailtwo, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>



        {# Génération du label + error + widget pour un champ. #}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.score1j1, \"score1j1 : *\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.score1j1) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.score1j1, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        {# Génération du label + error + widget pour un champ. #}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.score1j2, \"score1j2 : *\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.score1j2) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.score1j2, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Génération du label + error + widget pour un champ. #}
        {{ form_row(form.isScore1tie) }}
        {# Génération du label + error + widget pour un champ. #}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.score2j1, \"score2j1 : *\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.score2j1) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.score2j1, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        {# Génération du label + error + widget pour un champ. #}
        <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.score2j2, \"score2j2 : *\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.score2j2) }}
            <div class=\"col-sm-10\">
                {# Génération de l'input. #}
                {{ form_widget(form.score2j2, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>
        {# Génération du label + error + widget pour un champ. #}
        {{ form_row(form.isScore2tie) }}
        {# Génération du label + error + widget pour un champ. #}

        {{ form_row(form.score3j1) }}
        {# Génération du label + error + widget pour un champ. #}
        {{ form_row(form.score3j2) }}

        {# Génération du label + error + widget pour un champ. #}
        {{ form_row(form.isScore3tie) }}
        {# Génération du label + error + widget pour un champ. #}
        {{ form_row(form.endTime) }}


        {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
        {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}


        {# Génération automatique des champs pas encore écrits.
           Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
           et tous les champs cachés (type « hidden »). #}
        {{ form_rest(form) }}


        {# Fermeture de la balise <form> du formulaire HTML #}
        {{ form_end(form) }}

    </div>
</body>", "@OCUser/Matchh/matchform.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Matchh/matchform.html.twig");
    }
}
