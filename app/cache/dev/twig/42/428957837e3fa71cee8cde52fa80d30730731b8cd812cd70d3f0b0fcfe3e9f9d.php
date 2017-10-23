<?php

/* EcoJobCandidatBundle:Candidat:mycandidatures.html.twig */
class __TwigTemplate_fe4f888b0ee21697412524b2dee05ed8b215b67d457d45d192d05876b3f34baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:mycandidatures.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec0f2fc8aeaf8999f8b0559a458954f515fac937fc3beab814227f45ee64decf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0f2fc8aeaf8999f8b0559a458954f515fac937fc3beab814227f45ee64decf->enter($__internal_ec0f2fc8aeaf8999f8b0559a458954f515fac937fc3beab814227f45ee64decf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:mycandidatures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec0f2fc8aeaf8999f8b0559a458954f515fac937fc3beab814227f45ee64decf->leave($__internal_ec0f2fc8aeaf8999f8b0559a458954f515fac937fc3beab814227f45ee64decf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_318df93b9b4769cb74d72be51eee16dc73bfa2d2b420e272323f64c34597e720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318df93b9b4769cb74d72be51eee16dc73bfa2d2b420e272323f64c34597e720->enter($__internal_318df93b9b4769cb74d72be51eee16dc73bfa2d2b420e272323f64c34597e720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_318df93b9b4769cb74d72be51eee16dc73bfa2d2b420e272323f64c34597e720->leave($__internal_318df93b9b4769cb74d72be51eee16dc73bfa2d2b420e272323f64c34597e720_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_a7677ac7c2406e9f2fb3a2bf9cde7751854411e4f564398717d8c6265246412c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7677ac7c2406e9f2fb3a2bf9cde7751854411e4f564398717d8c6265246412c->enter($__internal_a7677ac7c2406e9f2fb3a2bf9cde7751854411e4f564398717d8c6265246412c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_a7677ac7c2406e9f2fb3a2bf9cde7751854411e4f564398717d8c6265246412c->leave($__internal_a7677ac7c2406e9f2fb3a2bf9cde7751854411e4f564398717d8c6265246412c_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_208129caad8698ed61030d5c05e0ca7109532f6489a5ed69023224d7ef94ee42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208129caad8698ed61030d5c05e0ca7109532f6489a5ed69023224d7ef94ee42->enter($__internal_208129caad8698ed61030d5c05e0ca7109532f6489a5ed69023224d7ef94ee42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Les offres de mes candidatures ";
        
        $__internal_208129caad8698ed61030d5c05e0ca7109532f6489a5ed69023224d7ef94ee42->leave($__internal_208129caad8698ed61030d5c05e0ca7109532f6489a5ed69023224d7ef94ee42_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_419734007cf421a8ac9a29d5740ef757f894cfab992fe362be3012db167d44c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419734007cf421a8ac9a29d5740ef757f894cfab992fe362be3012db167d44c7->enter($__internal_419734007cf421a8ac9a29d5740ef757f894cfab992fe362be3012db167d44c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 10
        echo "    <div class=\"latest_news\">
        <div class=\"title7\">Liste de mes candidatures</div>
        ";
        // line 12
        if ( !twig_test_empty(($context["candidatures"] ?? $this->getContext($context, "candidatures")))) {
            // line 13
            echo "            Total ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["candidatures"] ?? $this->getContext($context, "candidatures"))), "html", null, true);
            echo "
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["candidatures"] ?? $this->getContext($context, "candidatures")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 15
                echo "                <div class=\"news1\">
                    <div class=\"txt2\"><a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_anonymous_offre_integralite", array("id" => $this->getAttribute($this->getAttribute($context["candidature"], "offre", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["candidature"], "offre", array()), "titre", array()), "html", null, true);
                echo "</a></div>

                    <div class=\"txt3\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["candidature"], "offre", array()), "contenu", array()), "html", null, true);
                echo "</div>
                    <div class=\"pull-right\">
                        <div class=\"txt3\"><a href=\"\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["candidature"], "offre", array()), "recruteur", array()), "username", array()), "html", null, true);
                echo "</a></div>
                        <span>";
                // line 21
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["candidature"], "datecandidature", array())), "html", null, true);
                echo "</span>
                    </div>

                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_cancel_postuled", array("id" => $this->getAttribute($context["candidature"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-warning\">Annuler ma candidature</a>
                </div>
                <hr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        } else {
            // line 29
            echo "            aucune offre postulé
        ";
        }
        // line 31
        echo "
    </div>
    </div>


";
        
        $__internal_419734007cf421a8ac9a29d5740ef757f894cfab992fe362be3012db167d44c7->leave($__internal_419734007cf421a8ac9a29d5740ef757f894cfab992fe362be3012db167d44c7_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:mycandidatures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 31,  132 => 29,  129 => 28,  119 => 24,  113 => 21,  109 => 20,  104 => 18,  97 => 16,  94 => 15,  90 => 14,  85 => 13,  83 => 12,  79 => 10,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobCandidatBundle::layout.html.twig\"%}

{% block title %} Mes offres{% endblock %}

{% block content_title %} Candidat {% endblock %}

{% block content_stitle %} Les offres de mes candidatures {% endblock %}

{% block scontent %}
    <div class=\"latest_news\">
        <div class=\"title7\">Liste de mes candidatures</div>
        {% if candidatures is not empty %}
            Total {{ candidatures|length }}
            {% for candidature in candidatures %}
                <div class=\"news1\">
                    <div class=\"txt2\"><a href=\"{{ path('eco_job_anonymous_offre_integralite',{ 'id': candidature.offre.id }) }}\">{{candidature.offre.titre}}</a></div>

                    <div class=\"txt3\">{{candidature.offre.contenu}}</div>
                    <div class=\"pull-right\">
                        <div class=\"txt3\"><a href=\"\">{{candidature.offre.recruteur.username}}</a></div>
                        <span>{{candidature.datecandidature | date}}</span>
                    </div>

                    <a href=\"{{ path('eco_job_candidat_cancel_postuled',{'id':candidature.id}) }}\" class=\"btn btn-default btn-warning\">Annuler ma candidature</a>
                </div>
                <hr>
            {% endfor %}
        {% else %}
            aucune offre postulé
        {%endif %}

    </div>
    </div>


{% endblock %}


", "EcoJobCandidatBundle:Candidat:mycandidatures.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/mycandidatures.html.twig");
    }
}
