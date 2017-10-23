<?php

/* EcoJobCandidatBundle:Candidat:details2.html.twig */
class __TwigTemplate_8da1f6fe3efcf2fef2a57b8d427a545d4c59db55083f8c4e0afc5bd7eec689ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:details2.html.twig", 1);
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
        $__internal_20514a830972be756817031185a71e2a8495c6806aca313c55897baaece43835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20514a830972be756817031185a71e2a8495c6806aca313c55897baaece43835->enter($__internal_20514a830972be756817031185a71e2a8495c6806aca313c55897baaece43835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:details2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20514a830972be756817031185a71e2a8495c6806aca313c55897baaece43835->leave($__internal_20514a830972be756817031185a71e2a8495c6806aca313c55897baaece43835_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24a13d56f2a7aa531e05d819070fab80e05d78adbf933a57678162f4e6c48c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a13d56f2a7aa531e05d819070fab80e05d78adbf933a57678162f4e6c48c92->enter($__internal_24a13d56f2a7aa531e05d819070fab80e05d78adbf933a57678162f4e6c48c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_24a13d56f2a7aa531e05d819070fab80e05d78adbf933a57678162f4e6c48c92->leave($__internal_24a13d56f2a7aa531e05d819070fab80e05d78adbf933a57678162f4e6c48c92_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_59a3816d43245d016e3f23c04b9222918526074912b5b04f45ce2fdaecace354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a3816d43245d016e3f23c04b9222918526074912b5b04f45ce2fdaecace354->enter($__internal_59a3816d43245d016e3f23c04b9222918526074912b5b04f45ce2fdaecace354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_59a3816d43245d016e3f23c04b9222918526074912b5b04f45ce2fdaecace354->leave($__internal_59a3816d43245d016e3f23c04b9222918526074912b5b04f45ce2fdaecace354_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_d954673de0972536c2aade40236cad5af5459180b1a99377577288578fb1a5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d954673de0972536c2aade40236cad5af5459180b1a99377577288578fb1a5bc->enter($__internal_d954673de0972536c2aade40236cad5af5459180b1a99377577288578fb1a5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_d954673de0972536c2aade40236cad5af5459180b1a99377577288578fb1a5bc->leave($__internal_d954673de0972536c2aade40236cad5af5459180b1a99377577288578fb1a5bc_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_a1f9556a6d1c708841e0a51c9af73e07943a26420367fbed6432defc237d79d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f9556a6d1c708841e0a51c9af73e07943a26420367fbed6432defc237d79d2->enter($__internal_a1f9556a6d1c708841e0a51c9af73e07943a26420367fbed6432defc237d79d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    ";
        // line 10
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "
    <div class=\"latest_news\">
        <div class=\"title7\">Offre numero ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()), "html", null, true);
        echo "</div>
        <div class=\"news1\">
            <div class=\"txt2\"><a href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</a></div>
            <div class=\"txt3\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "contenu", array()), "html", null, true);
        echo "</div>  
            <div class=\"txt3\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "localisation", array()), "html", null, true);
        echo "</div>  
            ";
        // line 17
        if ($this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "added", array())) {
            // line 18
            echo "                <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
            ";
        } else {
            // line 20
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_save", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn1\">Save</a>
            ";
        }
        // line 21
        echo "  
                <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_save", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
        echo "\" class=\"btn-default btn1\">Postuler</a>
                <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_save", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
        echo "\" class=\"btn-default btn1\">Envoyer à quelqu'un</a>
            
        </div>

    </div>



";
        
        $__internal_a1f9556a6d1c708841e0a51c9af73e07943a26420367fbed6432defc237d79d2->leave($__internal_a1f9556a6d1c708841e0a51c9af73e07943a26420367fbed6432defc237d79d2_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:details2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 23,  118 => 22,  115 => 21,  109 => 20,  105 => 18,  103 => 17,  99 => 16,  95 => 15,  91 => 14,  86 => 12,  81 => 10,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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

{% block content_stitle %} Offres d'emploi {% endblock %}

{% block scontent %}   
    {{parent()}}
    <div class=\"latest_news\">
        <div class=\"title7\">Offre numero {{offre.id}}</div>
        <div class=\"news1\">
            <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
            <div class=\"txt3\">{{offre.contenu}}</div>  
            <div class=\"txt3\">{{offre.localisation}}</div>  
            {% if offre.added %}
                <a href=\"#\" class=\"btn-default btn-warning\">Déja sauvegardée</a>
            {% else %}
                <a href=\"{{ path('eco_job_candidat_offre_save',{'id': offre.id})}}\" class=\"btn-default btn1\">Save</a>
            {% endif %}  
                <a href=\"{{ path('eco_job_candidat_offre_save',{'id': offre.id})}}\" class=\"btn-default btn1\">Postuler</a>
                <a href=\"{{ path('eco_job_candidat_offre_save',{'id': offre.id})}}\" class=\"btn-default btn1\">Envoyer à quelqu'un</a>
            
        </div>

    </div>



{% endblock %}      

", "EcoJobCandidatBundle:Candidat:details2.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/details2.html.twig");
    }
}
