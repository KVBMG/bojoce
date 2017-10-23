<?php

/* EcoJobAnonymousBundle:Default:offre.html.twig */
class __TwigTemplate_946546619073b9801ec37459dd5e66e6b979e68c3be9cadf8d867457e4ef14d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobAnonymousBundle:Default:offre.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b607437b2263c2323a9a3f7aec3c32fe008d56412731391acc092b284f3ed6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b607437b2263c2323a9a3f7aec3c32fe008d56412731391acc092b284f3ed6c->enter($__internal_3b607437b2263c2323a9a3f7aec3c32fe008d56412731391acc092b284f3ed6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAnonymousBundle:Default:offre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b607437b2263c2323a9a3f7aec3c32fe008d56412731391acc092b284f3ed6c->leave($__internal_3b607437b2263c2323a9a3f7aec3c32fe008d56412731391acc092b284f3ed6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d5608b03cbd7d295cd199b1b002af5632aff10590cc543250d8d1e56b789609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5608b03cbd7d295cd199b1b002af5632aff10590cc543250d8d1e56b789609->enter($__internal_0d5608b03cbd7d295cd199b1b002af5632aff10590cc543250d8d1e56b789609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_0d5608b03cbd7d295cd199b1b002af5632aff10590cc543250d8d1e56b789609->leave($__internal_0d5608b03cbd7d295cd199b1b002af5632aff10590cc543250d8d1e56b789609_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9525683c108b41f140dfbf539344ccaeac4501897656088d0eebde9b4c4a0376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9525683c108b41f140dfbf539344ccaeac4501897656088d0eebde9b4c4a0376->enter($__internal_9525683c108b41f140dfbf539344ccaeac4501897656088d0eebde9b4c4a0376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recherche ";
        
        $__internal_9525683c108b41f140dfbf539344ccaeac4501897656088d0eebde9b4c4a0376->leave($__internal_9525683c108b41f140dfbf539344ccaeac4501897656088d0eebde9b4c4a0376_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_bb29a7f7a59ee74a9595070a0ddc52aa7becc721d3cbb7de798445d3d7454879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb29a7f7a59ee74a9595070a0ddc52aa7becc721d3cbb7de798445d3d7454879->enter($__internal_bb29a7f7a59ee74a9595070a0ddc52aa7becc721d3cbb7de798445d3d7454879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_bb29a7f7a59ee74a9595070a0ddc52aa7becc721d3cbb7de798445d3d7454879->leave($__internal_bb29a7f7a59ee74a9595070a0ddc52aa7becc721d3cbb7de798445d3d7454879_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_a1b74583b2f9cff101c95f68b9fda45403987849f65c0b2b09aed74122e104a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b74583b2f9cff101c95f68b9fda45403987849f65c0b2b09aed74122e104a7->enter($__internal_a1b74583b2f9cff101c95f68b9fda45403987849f65c0b2b09aed74122e104a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 10
        echo "    <div class=\"latest_news\">
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
            ";
        // line 15
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 16
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_delete", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>                    
            ";
        }
        // line 18
        echo "        </div>

    </div>

    ";
        // line 22
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "

";
        
        $__internal_a1b74583b2f9cff101c95f68b9fda45403987849f65c0b2b09aed74122e104a7->leave($__internal_a1b74583b2f9cff101c95f68b9fda45403987849f65c0b2b09aed74122e104a7_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAnonymousBundle:Default:offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  103 => 18,  97 => 16,  95 => 15,  91 => 14,  87 => 13,  82 => 11,  79 => 10,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block title %} Offres d'emploi {% endblock %}

{% block content_title %} Recherche {% endblock %}

{% block content_stitle %} Offres d'emploi {% endblock %}

{% block scontent %}
    <div class=\"latest_news\">
        <div class=\"title7\">Offre numero {{offre.id}}</div>
        <div class=\"news1\">
            <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
            <div class=\"txt3\">{{offre.contenu}}</div>  
            {% if app.user %}
                <a href=\"{{ path('eco_job_candidat_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>                    
            {% endif %}
        </div>

    </div>

    {{parent()}}

{% endblock %}  
", "EcoJobAnonymousBundle:Default:offre.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AnonymousBundle/Resources/views/Default/offre.html.twig");
    }
}
