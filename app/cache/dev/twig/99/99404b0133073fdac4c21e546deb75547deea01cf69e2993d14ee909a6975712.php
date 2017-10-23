<?php

/* EcoJobAdminBundle:Admin:expired.html.twig */
class __TwigTemplate_3c8d19db26795d79b245adb71aa0fe9a1e96ee4851479efdfb4c79584859e33a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:expired.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d33ac439c570dfe16428a62c2115e8f463831b3b098901a75a5c4da5d789dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d33ac439c570dfe16428a62c2115e8f463831b3b098901a75a5c4da5d789dcf->enter($__internal_8d33ac439c570dfe16428a62c2115e8f463831b3b098901a75a5c4da5d789dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:expired.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d33ac439c570dfe16428a62c2115e8f463831b3b098901a75a5c4da5d789dcf->leave($__internal_8d33ac439c570dfe16428a62c2115e8f463831b3b098901a75a5c4da5d789dcf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e5b255329796b4c13d79f3c272c946fb61f1a0653abb661fb141ff2f932b9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5b255329796b4c13d79f3c272c946fb61f1a0653abb661fb141ff2f932b9d5->enter($__internal_2e5b255329796b4c13d79f3c272c946fb61f1a0653abb661fb141ff2f932b9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_2e5b255329796b4c13d79f3c272c946fb61f1a0653abb661fb141ff2f932b9d5->leave($__internal_2e5b255329796b4c13d79f3c272c946fb61f1a0653abb661fb141ff2f932b9d5_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_0e58f7ac33cbe36302dbc13875b6c949c0b6042d859da8cfeffc77149fb36a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e58f7ac33cbe36302dbc13875b6c949c0b6042d859da8cfeffc77149fb36a1e->enter($__internal_0e58f7ac33cbe36302dbc13875b6c949c0b6042d859da8cfeffc77149fb36a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_0e58f7ac33cbe36302dbc13875b6c949c0b6042d859da8cfeffc77149fb36a1e->leave($__internal_0e58f7ac33cbe36302dbc13875b6c949c0b6042d859da8cfeffc77149fb36a1e_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_9a297c02fa7e8f70d287c29bbe0c74ae9c921c460d6c0dbc0b6a3a3a848ac267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a297c02fa7e8f70d287c29bbe0c74ae9c921c460d6c0dbc0b6a3a3a848ac267->enter($__internal_9a297c02fa7e8f70d287c29bbe0c74ae9c921c460d6c0dbc0b6a3a3a848ac267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi expirés ";
        
        $__internal_9a297c02fa7e8f70d287c29bbe0c74ae9c921c460d6c0dbc0b6a3a3a848ac267->leave($__internal_9a297c02fa7e8f70d287c29bbe0c74ae9c921c460d6c0dbc0b6a3a3a848ac267_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_255a4cd077a61bcf529c0dee7f28eeb63c1d5dfc91ac4c417d243f897e3787d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255a4cd077a61bcf529c0dee7f28eeb63c1d5dfc91ac4c417d243f897e3787d0->enter($__internal_255a4cd077a61bcf529c0dee7f28eeb63c1d5dfc91ac4c417d243f897e3787d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Offres d'emploi </div>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 13
            echo "            <div class=\"title7\">Offre numero ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "id", array()), "html", null, true);
            echo "</div>
            <div class=\"news1\">
                <div class=\"txt1\">12/4/2016</div>
                <div class=\"txt2\"><a href=\"#\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo "</a> (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "categorie", array()), "designation", array()), "html", null, true);
            echo ")</div>
                <div class=\"txt3\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
            echo "</div>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>    
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_suspendre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Suspendre</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  
        ";
        // line 22
        if ((twig_length_filter($this->env, ($context["offres"] ?? $this->getContext($context, "offres"))) > 0)) {
            // line 23
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_suspendre_all");
            echo "\"><button type=\"submit\" class=\"btn-default btn-cf-submit\">Suspendre tous</button></a>
        ";
        } else {
            // line 25
            echo "            Aucun offres exprirés
         ";
        }
        // line 27
        echo "    </div>

    ";
        // line 29
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_255a4cd077a61bcf529c0dee7f28eeb63c1d5dfc91ac4c417d243f897e3787d0->leave($__internal_255a4cd077a61bcf529c0dee7f28eeb63c1d5dfc91ac4c417d243f897e3787d0_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:expired.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 29,  132 => 27,  128 => 25,  122 => 23,  120 => 22,  117 => 21,  108 => 19,  104 => 18,  100 => 17,  94 => 16,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobAdminBundle::layout.html.twig\"%}

{% block title %} Offres d'emploi {% endblock %}

{% block content_title %} Administrateur {% endblock %}

{% block content_stitle %} Offres d'emploi expirés {% endblock %}

{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\">Offres d'emploi </div>
        {% for offre in offres %}
            <div class=\"title7\">Offre numero {{offre.id}}</div>
            <div class=\"news1\">
                <div class=\"txt1\">12/4/2016</div>
                <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a> ({{ offre.categorie.designation }})</div>
                <div class=\"txt3\">{{offre.contenu}}</div>
                <a href=\"{{ path('eco_job_admin_recruteur_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
                <a href=\"{{ path('eco_job_admin_suspendre',{'id': offre.id})}}\" class=\"btn-default btn3\">Suspendre</a>
            </div>
        {% endfor %}  
        {% if offres | length > 0 %}
            <a href=\"{{ path('eco_job_admin_suspendre_all')}}\"><button type=\"submit\" class=\"btn-default btn-cf-submit\">Suspendre tous</button></a>
        {% else %}
            Aucun offres exprirés
         {% endif %}
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Admin:expired.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/expired.html.twig");
    }
}
