<?php

/* EcoJobRecruteurBundle:Recruteur:candidatures.html.twig */
class __TwigTemplate_1b1fadf31745228f36cb37c7c1f20c6873fa9b0aa421881bdbef7e468d6b23ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobRecruteurBundle::layout.html.twig", "EcoJobRecruteurBundle:Recruteur:candidatures.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'offres' => array($this, 'block_offres'),
            'scontent' => array($this, 'block_scontent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobRecruteurBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc23710070e51081b9db49da811435732103ba0f642876242ba7c0d1832c4f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc23710070e51081b9db49da811435732103ba0f642876242ba7c0d1832c4f7a->enter($__internal_bc23710070e51081b9db49da811435732103ba0f642876242ba7c0d1832c4f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:candidatures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc23710070e51081b9db49da811435732103ba0f642876242ba7c0d1832c4f7a->leave($__internal_bc23710070e51081b9db49da811435732103ba0f642876242ba7c0d1832c4f7a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49238e5cf3020e11f46f3e4d33d9fbd1faa9bb17aacc9dbc45aa84a9a6cd5509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49238e5cf3020e11f46f3e4d33d9fbd1faa9bb17aacc9dbc45aa84a9a6cd5509->enter($__internal_49238e5cf3020e11f46f3e4d33d9fbd1faa9bb17aacc9dbc45aa84a9a6cd5509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_49238e5cf3020e11f46f3e4d33d9fbd1faa9bb17aacc9dbc45aa84a9a6cd5509->leave($__internal_49238e5cf3020e11f46f3e4d33d9fbd1faa9bb17aacc9dbc45aa84a9a6cd5509_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d089499aed473a86332f76915ba9f566411b6d384081fc3d6f1934f61f6e21f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d089499aed473a86332f76915ba9f566411b6d384081fc3d6f1934f61f6e21f3->enter($__internal_d089499aed473a86332f76915ba9f566411b6d384081fc3d6f1934f61f6e21f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_d089499aed473a86332f76915ba9f566411b6d384081fc3d6f1934f61f6e21f3->leave($__internal_d089499aed473a86332f76915ba9f566411b6d384081fc3d6f1934f61f6e21f3_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_aabeba24827eb60876237c6c6e7082a91c70e384edf4c4255ad006c3e802f78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabeba24827eb60876237c6c6e7082a91c70e384edf4c4255ad006c3e802f78c->enter($__internal_aabeba24827eb60876237c6c6e7082a91c70e384edf4c4255ad006c3e802f78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Candidatures";
        
        $__internal_aabeba24827eb60876237c6c6e7082a91c70e384edf4c4255ad006c3e802f78c->leave($__internal_aabeba24827eb60876237c6c6e7082a91c70e384edf4c4255ad006c3e802f78c_prof);

    }

    // line 9
    public function block_offres($context, array $blocks = array())
    {
        $__internal_9ec34606b8d3ad2eaa2992a7bc0b99b14ae7dba205374c9a2fa8a3a88979ea91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec34606b8d3ad2eaa2992a7bc0b99b14ae7dba205374c9a2fa8a3a88979ea91->enter($__internal_9ec34606b8d3ad2eaa2992a7bc0b99b14ae7dba205374c9a2fa8a3a88979ea91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offres"));

        // line 10
        echo "    ";
        $this->displayParentBlock("offres", $context, $blocks);
        echo "
    <div class=\"latest_news row\" style=\"padding: 5px;\">
        <div class=\"col-md-6\"><h4>Offres</h4></div>
        <div class=\"col-md-6\"><h4>Candidatures</h4></div>
    </div>
    <div class=\"latest_news row\" style=\"padding: 5px;\">
        <div class=\"col-md-6 srollko list-group\" id=\"offreList\" style=\"height: 350px;\">
        </div>
        <div class=\"col-md-6 srollko list-group\" id=\"candidatureList\" style=\"height: 350px;\">
        </div>
    </div>
    <div id=\"user-id-hidden\" style=\"visibility: hidden;\" data-user-id=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["user_id"] ?? $this->getContext($context, "user_id")), "html", null, true);
        echo "\"></div>
";
        
        $__internal_9ec34606b8d3ad2eaa2992a7bc0b99b14ae7dba205374c9a2fa8a3a88979ea91->leave($__internal_9ec34606b8d3ad2eaa2992a7bc0b99b14ae7dba205374c9a2fa8a3a88979ea91_prof);

    }

    // line 24
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_29ffda696f24f3675bf6435b9610c3abb4eed0f32aaced29762b0f2e2ebf57fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ffda696f24f3675bf6435b9610c3abb4eed0f32aaced29762b0f2e2ebf57fe->enter($__internal_29ffda696f24f3675bf6435b9610c3abb4eed0f32aaced29762b0f2e2ebf57fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 25
        echo "    <div class=\"latest_news\">
        <div class=\"title2\">Informations supplémentaires</div>

    </div>
    <div id=\"c-d\" class=\"latest_news\" >
        <div class=\"alert alert-info\">En attente de votre choix....</div>
    </div>

    ";
        // line 33
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "

";
        
        $__internal_29ffda696f24f3675bf6435b9610c3abb4eed0f32aaced29762b0f2e2ebf57fe->leave($__internal_29ffda696f24f3675bf6435b9610c3abb4eed0f32aaced29762b0f2e2ebf57fe_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_323e22a421406bed594b814ef5ac7830ed3168e87c05e532ac4aa8b2b79ee98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323e22a421406bed594b814ef5ac7830ed3168e87c05e532ac4aa8b2b79ee98e->enter($__internal_323e22a421406bed594b814ef5ac7830ed3168e87c05e532ac4aa8b2b79ee98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/candidature.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_323e22a421406bed594b814ef5ac7830ed3168e87c05e532ac4aa8b2b79ee98e->leave($__internal_323e22a421406bed594b814ef5ac7830ed3168e87c05e532ac4aa8b2b79ee98e_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:candidatures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  142 => 39,  137 => 38,  131 => 37,  121 => 33,  111 => 25,  105 => 24,  96 => 21,  81 => 10,  75 => 9,  63 => 7,  51 => 5,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobRecruteurBundle::layout.html.twig\"%}

{% block title %} Mes offres{% endblock %}

{% block content_title %} Recruteur {% endblock %}

{% block content_stitle %}Candidatures{% endblock %}

{% block offres %}
    {{ parent() }}
    <div class=\"latest_news row\" style=\"padding: 5px;\">
        <div class=\"col-md-6\"><h4>Offres</h4></div>
        <div class=\"col-md-6\"><h4>Candidatures</h4></div>
    </div>
    <div class=\"latest_news row\" style=\"padding: 5px;\">
        <div class=\"col-md-6 srollko list-group\" id=\"offreList\" style=\"height: 350px;\">
        </div>
        <div class=\"col-md-6 srollko list-group\" id=\"candidatureList\" style=\"height: 350px;\">
        </div>
    </div>
    <div id=\"user-id-hidden\" style=\"visibility: hidden;\" data-user-id=\"{{user_id}}\"></div>
{% endblock %}

{% block scontent %}
    <div class=\"latest_news\">
        <div class=\"title2\">Informations supplémentaires</div>

    </div>
    <div id=\"c-d\" class=\"latest_news\" >
        <div class=\"alert alert-info\">En attente de votre choix....</div>
    </div>

    {{parent()}}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{asset('js/jquery.blockUI.js')}}\"></script>
    <script src=\"{{asset('js/candidature.js')}}\"></script>
{% endblock %}
", "EcoJobRecruteurBundle:Recruteur:candidatures.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/candidatures.html.twig");
    }
}
