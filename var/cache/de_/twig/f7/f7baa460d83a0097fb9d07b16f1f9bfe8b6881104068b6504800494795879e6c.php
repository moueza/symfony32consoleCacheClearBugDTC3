<?php

/* @OCUser/Matchh/matchsview.html.twig */
class __TwigTemplate_63abe508dfa2543867c4d94fcdb5be504a150cb84ea3e001143de594e0466856 extends Twig_Template
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
        $__internal_38c164563e5bf35a217991cc75d622a7f46709edaea6d5d928f387a9e7f7bb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c164563e5bf35a217991cc75d622a7f46709edaea6d5d928f387a9e7f7bb32->enter($__internal_38c164563e5bf35a217991cc75d622a7f46709edaea6d5d928f387a9e7f7bb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Matchh/matchsview.html.twig"));

        $__internal_aabcd8727bc57fd8be41f92fb8839f508403616cd4629aeb9f06f082a0fc2029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabcd8727bc57fd8be41f92fb8839f508403616cd4629aeb9f06f082a0fc2029->enter($__internal_aabcd8727bc57fd8be41f92fb8839f508403616cd4629aeb9f06f082a0fc2029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCUser/Matchh/matchsview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c164563e5bf35a217991cc75d622a7f46709edaea6d5d928f387a9e7f7bb32->leave($__internal_38c164563e5bf35a217991cc75d622a7f46709edaea6d5d928f387a9e7f7bb32_prof);

        
        $__internal_aabcd8727bc57fd8be41f92fb8839f508403616cd4629aeb9f06f082a0fc2029->leave($__internal_aabcd8727bc57fd8be41f92fb8839f508403616cd4629aeb9f06f082a0fc2029_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7655845ffa1a499256a0fce0f8d058947dd453c213fa6b0e531b5d07c0b9f679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7655845ffa1a499256a0fce0f8d058947dd453c213fa6b0e531b5d07c0b9f679->enter($__internal_7655845ffa1a499256a0fce0f8d058947dd453c213fa6b0e531b5d07c0b9f679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bc60b1b69a74021147194f0c9b995130936563c1e9fa4ad2b14d910f950ad73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc60b1b69a74021147194f0c9b995130936563c1e9fa4ad2b14d910f950ad73->enter($__internal_5bc60b1b69a74021147194f0c9b995130936563c1e9fa4ad2b14d910f950ad73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "


    <h3>Les matchs</h3>


    <div class=\"well\">
        Participent :

        <ul>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMatchs"]) ? $context["listMatchs"] : $this->getContext($context, "listMatchs")));
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
        
        $__internal_5bc60b1b69a74021147194f0c9b995130936563c1e9fa4ad2b14d910f950ad73->leave($__internal_5bc60b1b69a74021147194f0c9b995130936563c1e9fa4ad2b14d910f950ad73_prof);

        
        $__internal_7655845ffa1a499256a0fce0f8d058947dd453c213fa6b0e531b5d07c0b9f679->leave($__internal_7655845ffa1a499256a0fce0f8d058947dd453c213fa6b0e531b5d07c0b9f679_prof);

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
        return array (  158 => 56,  150 => 53,  146 => 52,  142 => 50,  140 => 49,  134 => 48,  129 => 45,  125 => 43,  121 => 41,  119 => 40,  113 => 39,  108 => 36,  104 => 34,  100 => 32,  98 => 31,  92 => 30,  88 => 28,  83 => 26,  78 => 24,  73 => 22,  69 => 21,  65 => 19,  61 => 18,  49 => 8,  40 => 7,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"OCPlatformBundle:Default:layout.html.twig\" %}




{% block body %}



    <h3>Les matchs</h3>


    <div class=\"well\">
        Participent :

        <ul>
            {% for match in listMatchs %}
                <li>

                    {{match.emailone}}
                    {{match.emailtwo}}

                    {{match.beginningDate|date('d:m:Y')}}

                    {{match.beginningTime|date('H:i:s')}}

                    {#match.joueur1}}  VS  {{match.joueur2#} 

                    {{match.score1j1}}  {{match.score1j2}} 
                    {% if match.isScore1tie%}
                        Tie
                    {% else %}
                        Non tie
                    {% endif %}



                    {{match.score2j1}}  {{match.score2j2}} 
                    {% if match.isScore2tie %}
                        Tie
                    {% else %}
                        Non tie
                    {% endif %}



                    {{ match.score3j1}}  {{match.score3j2}}
                    {% if match.isScore3tie %}
                        Tie
                    {% else %}
                        Non tie
                    {% endif %}  
                </li>
            {% endfor %}
        </ul>


        <a href='http://moueza.esy.es/m/'>Home DTC3</a>
    </div>

{% endblock %}


", "@OCUser/Matchh/matchsview.html.twig", "/var/www/html/symfony32consoleCacheClearBugDTC3/src/OC/UserBundle/Resources/views/Matchh/matchsview.html.twig");
    }
}
