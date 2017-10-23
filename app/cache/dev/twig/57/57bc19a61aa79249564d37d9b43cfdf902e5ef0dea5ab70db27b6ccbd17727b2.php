<?php

/* EcoJobAdminBundle:Recruteur:offres.html.twig */
class __TwigTemplate_b9067a142e69bd9bc6fdb61e560cba401f4abf9669912a9a5258e59f6dc9dd4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Recruteur:offres.html.twig", 1);
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
        $__internal_ac54dce606f6e259adbfc5574c4f523a3a36b255ea3e1b10ac64736a24c9e3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac54dce606f6e259adbfc5574c4f523a3a36b255ea3e1b10ac64736a24c9e3bd->enter($__internal_ac54dce606f6e259adbfc5574c4f523a3a36b255ea3e1b10ac64736a24c9e3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Recruteur:offres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac54dce606f6e259adbfc5574c4f523a3a36b255ea3e1b10ac64736a24c9e3bd->leave($__internal_ac54dce606f6e259adbfc5574c4f523a3a36b255ea3e1b10ac64736a24c9e3bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1a490908279d61a6aeca2ba5fb0ef8aa76f4ef2b0100011c141feb236f84ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a490908279d61a6aeca2ba5fb0ef8aa76f4ef2b0100011c141feb236f84ce2->enter($__internal_b1a490908279d61a6aeca2ba5fb0ef8aa76f4ef2b0100011c141feb236f84ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_b1a490908279d61a6aeca2ba5fb0ef8aa76f4ef2b0100011c141feb236f84ce2->leave($__internal_b1a490908279d61a6aeca2ba5fb0ef8aa76f4ef2b0100011c141feb236f84ce2_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9bfb6638c37d169bffe13613be270b3f9e744aedd738fa0e026642333ffb8c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfb6638c37d169bffe13613be270b3f9e744aedd738fa0e026642333ffb8c41->enter($__internal_9bfb6638c37d169bffe13613be270b3f9e744aedd738fa0e026642333ffb8c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_9bfb6638c37d169bffe13613be270b3f9e744aedd738fa0e026642333ffb8c41->leave($__internal_9bfb6638c37d169bffe13613be270b3f9e744aedd738fa0e026642333ffb8c41_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_5b2c990fdb23402b271cd6559eb11bc77de64a3022314002955d67f9b85ab31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2c990fdb23402b271cd6559eb11bc77de64a3022314002955d67f9b85ab31c->enter($__internal_5b2c990fdb23402b271cd6559eb11bc77de64a3022314002955d67f9b85ab31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_5b2c990fdb23402b271cd6559eb11bc77de64a3022314002955d67f9b85ab31c->leave($__internal_5b2c990fdb23402b271cd6559eb11bc77de64a3022314002955d67f9b85ab31c_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_da536c7e936898381386028642df287dd9a04afd010e614242b9ee98555332ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da536c7e936898381386028642df287dd9a04afd010e614242b9ee98555332ae->enter($__internal_da536c7e936898381386028642df287dd9a04afd010e614242b9ee98555332ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Offres d'emploi du recruteur </div>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 13
            echo "            <div class=\"news1\">
                <div class=\"txt1\">12/4/2016</div>
                <div class=\"txt2\"><a href=\"#\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo "</a></div>
                <div class=\"txt3\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
            echo "</div>
                <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Afficher</a>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>    
                ";
            // line 19
            if ( !$this->getAttribute($context["offre"], "valid", array())) {
                // line 20
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre_valider", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Valider</a>                    
                ";
            } else {
                // line 22
                echo "                    <div class=\"label label-success\"> Offre déja validée</div>
                ";
            }
            // line 24
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "       
    </div>

    ";
        // line 28
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_da536c7e936898381386028642df287dd9a04afd010e614242b9ee98555332ae->leave($__internal_da536c7e936898381386028642df287dd9a04afd010e614242b9ee98555332ae_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Recruteur:offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  126 => 25,  119 => 24,  115 => 22,  109 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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

{% block content_stitle %} Offres d'emploi {% endblock %}

{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\">Offres d'emploi du recruteur </div>
        {% for offre in offres %}
            <div class=\"news1\">
                <div class=\"txt1\">12/4/2016</div>
                <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
                <div class=\"txt3\">{{offre.contenu}}</div>
                <a href=\"{{ path('eco_job_admin_recruteur_offre',{'id': offre.id})}}\" class=\"btn-default btn3\">Afficher</a>
                <a href=\"{{ path('eco_job_recruteur_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
                {% if not offre.valid %}
                    <a href=\"{{ path('eco_job_admin_recruteur_offre_valider',{'id': offre.id})}}\" class=\"btn-default btn3\">Valider</a>                    
                {% else %}
                    <div class=\"label label-success\"> Offre déja validée</div>
                {% endif %}
            </div>
        {% endfor %}       
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Recruteur:offres.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Recruteur/offres.html.twig");
    }
}
