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
        $__internal_f4bde90750308cb03a98acabfb4f00009543e53f538ee0422b85c92a22308bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bde90750308cb03a98acabfb4f00009543e53f538ee0422b85c92a22308bad->enter($__internal_f4bde90750308cb03a98acabfb4f00009543e53f538ee0422b85c92a22308bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:mycandidatures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4bde90750308cb03a98acabfb4f00009543e53f538ee0422b85c92a22308bad->leave($__internal_f4bde90750308cb03a98acabfb4f00009543e53f538ee0422b85c92a22308bad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb848a6e5c21343d65af8483ed3ea8b1c9edec3cb2738d1416cbc140beee1ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb848a6e5c21343d65af8483ed3ea8b1c9edec3cb2738d1416cbc140beee1ecb->enter($__internal_bb848a6e5c21343d65af8483ed3ea8b1c9edec3cb2738d1416cbc140beee1ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_bb848a6e5c21343d65af8483ed3ea8b1c9edec3cb2738d1416cbc140beee1ecb->leave($__internal_bb848a6e5c21343d65af8483ed3ea8b1c9edec3cb2738d1416cbc140beee1ecb_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ee5ff441e1b1648ed68e0f6c6133a3ee9ac7be6e1100a5ee651ad48d20224770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5ff441e1b1648ed68e0f6c6133a3ee9ac7be6e1100a5ee651ad48d20224770->enter($__internal_ee5ff441e1b1648ed68e0f6c6133a3ee9ac7be6e1100a5ee651ad48d20224770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_ee5ff441e1b1648ed68e0f6c6133a3ee9ac7be6e1100a5ee651ad48d20224770->leave($__internal_ee5ff441e1b1648ed68e0f6c6133a3ee9ac7be6e1100a5ee651ad48d20224770_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_f142dc905a8c4a7352f38c85928bc34fb875dd9af36d1d35c7825847f2b0f96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f142dc905a8c4a7352f38c85928bc34fb875dd9af36d1d35c7825847f2b0f96e->enter($__internal_f142dc905a8c4a7352f38c85928bc34fb875dd9af36d1d35c7825847f2b0f96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Les offres de mes candidatures ";
        
        $__internal_f142dc905a8c4a7352f38c85928bc34fb875dd9af36d1d35c7825847f2b0f96e->leave($__internal_f142dc905a8c4a7352f38c85928bc34fb875dd9af36d1d35c7825847f2b0f96e_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_911475f35e173ca5b9c8be88dda66321d98f4fb8fb0955d6320de57fb47b0864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911475f35e173ca5b9c8be88dda66321d98f4fb8fb0955d6320de57fb47b0864->enter($__internal_911475f35e173ca5b9c8be88dda66321d98f4fb8fb0955d6320de57fb47b0864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
        
        $__internal_911475f35e173ca5b9c8be88dda66321d98f4fb8fb0955d6320de57fb47b0864->leave($__internal_911475f35e173ca5b9c8be88dda66321d98f4fb8fb0955d6320de57fb47b0864_prof);

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
