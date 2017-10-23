<?php

/* EcoJobAnonymousBundle:Default:result.html.twig */
class __TwigTemplate_8de8ef47051c873a34aaf4074b13c44540e8e790c3297268644479d78c3c9fd0 extends Twig_Template
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
        $__internal_4e362b20b06e2a152fa7448ca69d76285bebd8d0e2551cf319c2a53c903d61c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e362b20b06e2a152fa7448ca69d76285bebd8d0e2551cf319c2a53c903d61c8->enter($__internal_4e362b20b06e2a152fa7448ca69d76285bebd8d0e2551cf319c2a53c903d61c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAnonymousBundle:Default:result.html.twig"));

        // line 1
        echo "<div class=\"col-sm-8\">
    <div class=\"title6\">Résultats </div>   
    ";
        // line 3
        if ( !twig_test_empty(($context["offres"] ?? $this->getContext($context, "offres")))) {
            // line 4
            echo "        Total ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["offres"] ?? $this->getContext($context, "offres"))), "html", null, true);
            echo "       
        ";
            // line 5
            if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
                foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                    // line 7
                    echo "                <div class=\"news1 offre\" offreId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "id", array()), "html", null, true);
                    echo "\">
                    <div class=\"txt2\"><a href=\"#details\">";
                    // line 8
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
                    echo "</a></div>
                    <div class=\"txt3\">";
                    // line 9
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "localisation", array()), "html", null, true);
                    echo "</div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo " 
        ";
            } else {
                // line 13
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
                foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                    // line 14
                    echo "                <div class=\"news1 offre\" offreId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "id", array()), "html", null, true);
                    echo "\">
                    <div class=\"txt1\">12/4/2016</div>
                    <div class=\"txt2\"><a href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_details_2", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
                    echo "</a></div>
                    <div class=\"txt3\">";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
                    echo "</div>
                    ";
                    // line 18
                    if ($this->getAttribute($context["offre"], "added", array())) {
                        // line 19
                        echo "                        <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
                    ";
                    } else {
                        // line 21
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_save", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn-default btn1\">Save</a>
                    ";
                    }
                    // line 23
                    echo "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                                               
        ";
            }
            // line 25
            echo "   
    ";
        } else {
            // line 27
            echo "        aucun résultat 
    ";
        }
        // line 29
        echo "
</div>";
        
        $__internal_4e362b20b06e2a152fa7448ca69d76285bebd8d0e2551cf319c2a53c903d61c8->leave($__internal_4e362b20b06e2a152fa7448ca69d76285bebd8d0e2551cf319c2a53c903d61c8_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAnonymousBundle:Default:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  110 => 27,  106 => 25,  102 => 24,  95 => 23,  89 => 21,  85 => 19,  83 => 18,  79 => 17,  73 => 16,  67 => 14,  62 => 13,  58 => 11,  49 => 9,  45 => 8,  40 => 7,  35 => 6,  33 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-sm-8\">
    <div class=\"title6\">Résultats </div>   
    {% if offres is not empty %}
        Total {{ offres|length }}       
        {% if not app.user %}
            {% for offre in offres %}
                <div class=\"news1 offre\" offreId=\"{{offre.id}}\">
                    <div class=\"txt2\"><a href=\"#details\">{{offre.titre}}</a></div>
                    <div class=\"txt3\">{{offre.localisation}}</div>
                </div>
            {% endfor %} 
        {% else %}
            {% for offre in offres %}
                <div class=\"news1 offre\" offreId=\"{{offre.id}}\">
                    <div class=\"txt1\">12/4/2016</div>
                    <div class=\"txt2\"><a href=\"{{path('eco_job_candidat_offre_details_2',{'id': offre.id})}}\">{{offre.titre}}</a></div>
                    <div class=\"txt3\">{{offre.contenu}}</div>
                    {% if offre.added %}
                        <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
                    {% else %}
                        <a href=\"{{ path('eco_job_candidat_offre_save',{'id': offre.id})}}\" class=\"btn-default btn1\">Save</a>
                    {% endif %}
                </div>
            {% endfor %}                                               
        {% endif %}   
    {% else %}
        aucun résultat 
    {%endif %}

</div>", "EcoJobAnonymousBundle:Default:result.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AnonymousBundle/Resources/views/Default/result.html.twig");
    }
}
