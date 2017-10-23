<?php

/* EcoJobAdminBundle:Admin:offres_edited.html.twig */
class __TwigTemplate_5ffdd6a26653c2b1ec3cf525dd28687285526551c58037bb73da45c412f01477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:offres_edited.html.twig", 1);
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
        $__internal_f654d47bb53d08f1232f4d2df7cb99de03a2bc28619d70a7aa53cf47bcfdb962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f654d47bb53d08f1232f4d2df7cb99de03a2bc28619d70a7aa53cf47bcfdb962->enter($__internal_f654d47bb53d08f1232f4d2df7cb99de03a2bc28619d70a7aa53cf47bcfdb962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:offres_edited.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f654d47bb53d08f1232f4d2df7cb99de03a2bc28619d70a7aa53cf47bcfdb962->leave($__internal_f654d47bb53d08f1232f4d2df7cb99de03a2bc28619d70a7aa53cf47bcfdb962_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d11c9be83d18f09eadfdf98ac854b64033c2d9ec87e441cc7e620b042b2d9080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11c9be83d18f09eadfdf98ac854b64033c2d9ec87e441cc7e620b042b2d9080->enter($__internal_d11c9be83d18f09eadfdf98ac854b64033c2d9ec87e441cc7e620b042b2d9080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_d11c9be83d18f09eadfdf98ac854b64033c2d9ec87e441cc7e620b042b2d9080->leave($__internal_d11c9be83d18f09eadfdf98ac854b64033c2d9ec87e441cc7e620b042b2d9080_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e934badb617ed7bc551f88e3030d62c6b4231730a3f8686387c62a29e2f8031a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e934badb617ed7bc551f88e3030d62c6b4231730a3f8686387c62a29e2f8031a->enter($__internal_e934badb617ed7bc551f88e3030d62c6b4231730a3f8686387c62a29e2f8031a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_e934badb617ed7bc551f88e3030d62c6b4231730a3f8686387c62a29e2f8031a->leave($__internal_e934badb617ed7bc551f88e3030d62c6b4231730a3f8686387c62a29e2f8031a_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_6c12b869b55b84f4acf3fb11986281634827c0a4b82e3755552f347d70c52e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c12b869b55b84f4acf3fb11986281634827c0a4b82e3755552f347d70c52e4d->enter($__internal_6c12b869b55b84f4acf3fb11986281634827c0a4b82e3755552f347d70c52e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi en attentes de validation ";
        
        $__internal_6c12b869b55b84f4acf3fb11986281634827c0a4b82e3755552f347d70c52e4d->leave($__internal_6c12b869b55b84f4acf3fb11986281634827c0a4b82e3755552f347d70c52e4d_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_a445d60566ed5189504a67135082efc57111e69e85e677d616f63c9b26b46092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a445d60566ed5189504a67135082efc57111e69e85e677d616f63c9b26b46092->enter($__internal_a445d60566ed5189504a67135082efc57111e69e85e677d616f63c9b26b46092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Offres d'emploi </div>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 13
            echo "            <div class=\"news1\">
                <div class=\"txt1\">";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "createdAt", array()), "d-m-y"), "html", null, true);
            echo "</div>
                <div class=\"txt1\"> Recruteur: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "recruteur", array()), "username", array()), "html", null, true);
            echo "</div>
                <div class=\"txt2\"><a href=\"#\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo "</a></div>
                <div class=\"txt3\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
            echo "</div>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>    
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre_valider_edit", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Valider la modification</a>                                   
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "       
    </div>

    ";
        // line 24
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_a445d60566ed5189504a67135082efc57111e69e85e677d616f63c9b26b46092->leave($__internal_a445d60566ed5189504a67135082efc57111e69e85e677d616f63c9b26b46092_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:offres_edited.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 24,  119 => 21,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  90 => 14,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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

{% block content_stitle %} Offres d'emploi en attentes de validation {% endblock %}

{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\">Offres d'emploi </div>
        {% for offre in offres %}
            <div class=\"news1\">
                <div class=\"txt1\">{{offre.createdAt | date('d-m-y') }}</div>
                <div class=\"txt1\"> Recruteur: {{offre.recruteur.username}}</div>
                <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
                <div class=\"txt3\">{{offre.contenu}}</div>
                <a href=\"{{ path('eco_job_recruteur_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
                <a href=\"{{ path('eco_job_admin_recruteur_offre_valider_edit',{'id': offre.id})}}\" class=\"btn-default btn3\">Valider la modification</a>                                   
            </div>
        {% endfor %}       
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Admin:offres_edited.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/offres_edited.html.twig");
    }
}
