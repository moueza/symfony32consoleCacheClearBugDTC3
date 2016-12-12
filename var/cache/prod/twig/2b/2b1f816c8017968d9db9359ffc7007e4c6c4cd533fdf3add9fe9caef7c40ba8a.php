<?php

/* @OCUser/Matchh/matchform.html.twig */
class __TwigTemplate_5c2b45ab61f3cd3faaadcae5bfa892d4fb3e0bc05bd0ea7a61a09ff7baf3940c extends Twig_Template
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
        // line 1
        echo "<body>
    <h3>Saisie d'un match</h3>

    <div class=\"well\">
        *=obligé
    </div>

    <div class=\"well\">

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 13
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "


        <div class=\"form-group\">
            ";
        // line 18
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "beginningDate", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date du match : *"));
        echo "
            ";
        // line 20
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "beginningDate", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 23
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "beginningDate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 29
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "beginningTime", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Heure de début du match : *"));
        echo "
            ";
        // line 31
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "beginningTime", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 34
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "beginningTime", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>




        ";
        // line 42
        echo "        <div class=\"form-group\">
            ";
        // line 44
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailone", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Joueur1=joueur qui fait la saisie du formulaire : *"));
        echo "
            ";
        // line 46
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailone", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 49
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 54
        echo "        <div class=\"form-group\">
            ";
        // line 56
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailtwo", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Joueur2 : *"));
        echo "
            ";
        // line 58
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailtwo", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 61
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailtwo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>



        ";
        // line 68
        echo "        <div class=\"form-group\">
            ";
        // line 70
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score1j1", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "score1j1 : *"));
        echo "
            ";
        // line 72
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score1j1", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 75
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score1j1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 80
        echo "        <div class=\"form-group\">
            ";
        // line 82
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score1j2", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "score1j2 : *"));
        echo "
            ";
        // line 84
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score1j2", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 87
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score1j2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        ";
        // line 91
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isScore1tie", array()), 'row');
        echo "
        ";
        // line 93
        echo "        <div class=\"form-group\">
            ";
        // line 95
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score2j1", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "score2j1 : *"));
        echo "
            ";
        // line 97
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score2j1", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 100
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score2j1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 105
        echo "        <div class=\"form-group\">
            ";
        // line 107
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score2j2", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "score2j2 : *"));
        echo "
            ";
        // line 109
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score2j2", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
                ";
        // line 112
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score2j2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        ";
        // line 116
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isScore2tie", array()), 'row');
        echo "
        ";
        // line 118
        echo "
        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score3j1", array()), 'row');
        echo "
        ";
        // line 121
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "score3j2", array()), 'row');
        echo "

        ";
        // line 124
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "isScore3tie", array()), 'row');
        echo "
        ";
        // line 126
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "endTime", array()), 'row');
        echo "


        ";
        // line 130
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "


        ";
        // line 136
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "


        ";
        // line 140
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>
</body>";
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
        return array (  266 => 140,  259 => 136,  252 => 130,  245 => 126,  240 => 124,  234 => 121,  230 => 119,  227 => 118,  222 => 116,  215 => 112,  209 => 109,  204 => 107,  201 => 105,  193 => 100,  187 => 97,  182 => 95,  179 => 93,  174 => 91,  167 => 87,  161 => 84,  156 => 82,  153 => 80,  145 => 75,  139 => 72,  134 => 70,  131 => 68,  121 => 61,  115 => 58,  110 => 56,  107 => 54,  99 => 49,  93 => 46,  88 => 44,  85 => 42,  74 => 34,  68 => 31,  63 => 29,  54 => 23,  48 => 20,  43 => 18,  35 => 13,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCUser/Matchh/matchform.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Matchh/matchform.html.twig");
    }
}
