<?php

/* EcoJobCandidatBundle:Candidat:offre.html.twig */
class __TwigTemplate_5a8d7f034e7994a61226cfc2bf0e334e024864929d5aa2e6679de9e0d9bce4fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:offre.html.twig", 1);
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
        $__internal_15e2632139839b0dff2d73d59d6c2c63bf3218ecd63323a8bf9c13b3878798ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e2632139839b0dff2d73d59d6c2c63bf3218ecd63323a8bf9c13b3878798ff->enter($__internal_15e2632139839b0dff2d73d59d6c2c63bf3218ecd63323a8bf9c13b3878798ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:offre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e2632139839b0dff2d73d59d6c2c63bf3218ecd63323a8bf9c13b3878798ff->leave($__internal_15e2632139839b0dff2d73d59d6c2c63bf3218ecd63323a8bf9c13b3878798ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73bd6e1a33e6c7212dbaa5a2b511b7d0cc51c66a1d25665fadec2fda88345f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bd6e1a33e6c7212dbaa5a2b511b7d0cc51c66a1d25665fadec2fda88345f7a->enter($__internal_73bd6e1a33e6c7212dbaa5a2b511b7d0cc51c66a1d25665fadec2fda88345f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_73bd6e1a33e6c7212dbaa5a2b511b7d0cc51c66a1d25665fadec2fda88345f7a->leave($__internal_73bd6e1a33e6c7212dbaa5a2b511b7d0cc51c66a1d25665fadec2fda88345f7a_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_1e0167e7ea0e48dcc03fa816cfe501bcf05e009f7e092a0ae8abf22ce20c3be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0167e7ea0e48dcc03fa816cfe501bcf05e009f7e092a0ae8abf22ce20c3be2->enter($__internal_1e0167e7ea0e48dcc03fa816cfe501bcf05e009f7e092a0ae8abf22ce20c3be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_1e0167e7ea0e48dcc03fa816cfe501bcf05e009f7e092a0ae8abf22ce20c3be2->leave($__internal_1e0167e7ea0e48dcc03fa816cfe501bcf05e009f7e092a0ae8abf22ce20c3be2_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_ed100b73c04273ed674d902e9328c34644d7db301c83ef39aa6be7237f6def62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed100b73c04273ed674d902e9328c34644d7db301c83ef39aa6be7237f6def62->enter($__internal_ed100b73c04273ed674d902e9328c34644d7db301c83ef39aa6be7237f6def62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_ed100b73c04273ed674d902e9328c34644d7db301c83ef39aa6be7237f6def62->leave($__internal_ed100b73c04273ed674d902e9328c34644d7db301c83ef39aa6be7237f6def62_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_6c1656c4792fbcc533ce10deef906ec43b6bd2b27bb90386da165ad704c41294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1656c4792fbcc533ce10deef906ec43b6bd2b27bb90386da165ad704c41294->enter($__internal_6c1656c4792fbcc533ce10deef906ec43b6bd2b27bb90386da165ad704c41294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Offre numero ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()), "html", null, true);
        echo "</div>
        <div class=\"news1\">
            <div class=\"txt2\"><a href=\"#\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</a></div>
            <div class=\"txt3\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "contenu", array()), "html", null, true);
        echo "</div>              
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_delete", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
        echo "\" class=\"btn-default btn3\">Supprimer</a>    
        </div>
        ";
        // line 17
        if ($this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "expired", array())) {
            echo "   
                <div class=\"label label-warning\"> Offre est éxpirer </div>
        ";
        }
        // line 20
        echo "
    </div>

    ";
        // line 23
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_6c1656c4792fbcc533ce10deef906ec43b6bd2b27bb90386da165ad704c41294->leave($__internal_6c1656c4792fbcc533ce10deef906ec43b6bd2b27bb90386da165ad704c41294_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  106 => 20,  100 => 17,  95 => 15,  91 => 14,  87 => 13,  82 => 11,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
    <div class=\"latest_news\">
        <div class=\"title7\">Offre numero {{offre.id}}</div>
        <div class=\"news1\">
            <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
            <div class=\"txt3\">{{offre.contenu}}</div>              
            <a href=\"{{ path('eco_job_candidat_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
        </div>
        {% if offre.expired %}   
                <div class=\"label label-warning\"> Offre est éxpirer </div>
        {% endif %}

    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobCandidatBundle:Candidat:offre.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/offre.html.twig");
    }
}
