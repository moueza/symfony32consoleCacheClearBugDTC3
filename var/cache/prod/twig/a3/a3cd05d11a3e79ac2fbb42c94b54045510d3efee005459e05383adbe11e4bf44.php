<?php

/* @OCUser/Matchh/matchsview.html.twig */
class __TwigTemplate_56816c097d9e34fe8985a4c2affbf3137ebcb46ddbfc191dc1578c3b7de7ae9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCPlatformBundle:Default:layout.html.twig", "@OCUser/Matchh/matchsview.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "


    <h3>Les matchs</h3>


    <div class=\"well\">
        Participent :

        <ul>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMatchs"]) ? $context["listMatchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
            // line 19
            echo "                <li>

                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "emailone", array()), "html", null, true);
            echo "
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "emailtwo", array()), "html", null, true);
            echo "

                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "beginningDate", array()), "d:m:Y"), "html", null, true);
            echo "

                    ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["match"], "beginningTime", array()), "H:i:s"), "html", null, true);
            echo "

                    ";
            // line 28
            echo " 

                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "score1j1", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "score1j2", array()), "html", null, true);
            echo " 
                    ";
            // line 31
            if ($this->getAttribute($context["match"], "isScore1tie", array())) {
                // line 32
                echo "                        Tie
                    ";
            } else {
                // line 34
                echo "                        Non tie
                    ";
            }
            // line 36
            echo "


                    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "score2j1", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "score2j2", array()), "html", null, true);
            echo " 
                    ";
            // line 40
            if ($this->getAttribute($context["match"], "isScore2tie", array())) {
                // line 41
                echo "                        Tie
                    ";
            } else {
                // line 43
                echo "                        Non tie
                    ";
            }
            // line 45
            echo "


                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "score3j1", array()), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "score3j2", array()), "html", null, true);
            echo "
                    ";
            // line 49
            if ($this->getAttribute($context["match"], "isScore3tie", array())) {
                // line 50
                echo "                        Tie
                    ";
            } else {
                // line 52
                echo "                        Non tie
                    ";
            }
            // line 53
            echo "  
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </ul>


        <a href='http://moueza.esy.es/m/'>Home DTC3</a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@OCUser/Matchh/matchsview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  132 => 53,  128 => 52,  124 => 50,  122 => 49,  116 => 48,  111 => 45,  107 => 43,  103 => 41,  101 => 40,  95 => 39,  90 => 36,  86 => 34,  82 => 32,  80 => 31,  74 => 30,  70 => 28,  65 => 26,  60 => 24,  55 => 22,  51 => 21,  47 => 19,  43 => 18,  31 => 8,  28 => 7,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OCUser/Matchh/matchsview.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Matchh/matchsview.html.twig");
    }
}
