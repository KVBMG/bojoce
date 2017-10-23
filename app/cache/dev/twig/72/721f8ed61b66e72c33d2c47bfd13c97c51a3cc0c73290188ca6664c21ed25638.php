<?php

/* EcoJobAdminBundle:Admin:offres.html.twig */
class __TwigTemplate_9e8db6667dd768a88ab9022073348e14aa91ad6cf35b361754ef7d1c413466ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:offres.html.twig", 1);
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
        $__internal_14185545111f2e68dd18d99124f418f349233b5a95cbd115601c1ba9431c3276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14185545111f2e68dd18d99124f418f349233b5a95cbd115601c1ba9431c3276->enter($__internal_14185545111f2e68dd18d99124f418f349233b5a95cbd115601c1ba9431c3276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:offres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14185545111f2e68dd18d99124f418f349233b5a95cbd115601c1ba9431c3276->leave($__internal_14185545111f2e68dd18d99124f418f349233b5a95cbd115601c1ba9431c3276_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1686c365722158d5ea7c0212158c6189785f0554f0d37296132ef14cc19b9751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1686c365722158d5ea7c0212158c6189785f0554f0d37296132ef14cc19b9751->enter($__internal_1686c365722158d5ea7c0212158c6189785f0554f0d37296132ef14cc19b9751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_1686c365722158d5ea7c0212158c6189785f0554f0d37296132ef14cc19b9751->leave($__internal_1686c365722158d5ea7c0212158c6189785f0554f0d37296132ef14cc19b9751_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_fad44755d49cec031a26e5f9eb7010a8f4e90693d39165798b5411c4f30a22d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad44755d49cec031a26e5f9eb7010a8f4e90693d39165798b5411c4f30a22d7->enter($__internal_fad44755d49cec031a26e5f9eb7010a8f4e90693d39165798b5411c4f30a22d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_fad44755d49cec031a26e5f9eb7010a8f4e90693d39165798b5411c4f30a22d7->leave($__internal_fad44755d49cec031a26e5f9eb7010a8f4e90693d39165798b5411c4f30a22d7_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_653e67ea7564271b06fa99256e8e986eef3292a8aa3b70efece2dea472291007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653e67ea7564271b06fa99256e8e986eef3292a8aa3b70efece2dea472291007->enter($__internal_653e67ea7564271b06fa99256e8e986eef3292a8aa3b70efece2dea472291007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi en attentes de validation ";
        
        $__internal_653e67ea7564271b06fa99256e8e986eef3292a8aa3b70efece2dea472291007->leave($__internal_653e67ea7564271b06fa99256e8e986eef3292a8aa3b70efece2dea472291007_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_59a51b24eb0a40b08a18f7c51c359ce0df19c73cd8877ff14cd16a68c030d227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a51b24eb0a40b08a18f7c51c359ce0df19c73cd8877ff14cd16a68c030d227->enter($__internal_59a51b24eb0a40b08a18f7c51c359ce0df19c73cd8877ff14cd16a68c030d227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
                <div class=\"txt1\">12/4/2016</div>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Afficher</a>
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>    
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre_valider", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Valider</a>                                   
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "       
    </div>

    ";
        // line 25
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_59a51b24eb0a40b08a18f7c51c359ce0df19c73cd8877ff14cd16a68c030d227->leave($__internal_59a51b24eb0a40b08a18f7c51c359ce0df19c73cd8877ff14cd16a68c030d227_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 25,  120 => 22,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
                <div class=\"txt1\">12/4/2016</div>
                <div class=\"txt1\"> Recruteur: {{offre.recruteur.username}}</div>
                <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
                <div class=\"txt3\">{{offre.contenu}}</div>
                <a href=\"{{ path('eco_job_admin_recruteur_offre',{'id': offre.id})}}\" class=\"btn-default btn3\">Afficher</a>
                <a href=\"{{ path('eco_job_recruteur_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
                <a href=\"{{ path('eco_job_admin_recruteur_offre_valider',{'id': offre.id})}}\" class=\"btn-default btn3\">Valider</a>                                   
            </div>
        {% endfor %}       
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Admin:offres.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/offres.html.twig");
    }
}
