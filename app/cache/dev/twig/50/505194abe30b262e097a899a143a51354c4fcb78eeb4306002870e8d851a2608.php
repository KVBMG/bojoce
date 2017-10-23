<?php

/* EcoJobAdminBundle:Admin:offres.html.twig */
class __TwigTemplate_3a3343977d2e9fd3b2e33d5df3d0ecafe14f39f1a28b3df9b6255373b7eeea61 extends Twig_Template
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
        $__internal_cecac820c17ef6a79946e1e95eeff9a99d2d875007647c1d4403461797202d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecac820c17ef6a79946e1e95eeff9a99d2d875007647c1d4403461797202d14->enter($__internal_cecac820c17ef6a79946e1e95eeff9a99d2d875007647c1d4403461797202d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:offres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cecac820c17ef6a79946e1e95eeff9a99d2d875007647c1d4403461797202d14->leave($__internal_cecac820c17ef6a79946e1e95eeff9a99d2d875007647c1d4403461797202d14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07c0d4ba7af9842945d62b835700cfe260ee6437a44502aa31b4fa9154c73ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c0d4ba7af9842945d62b835700cfe260ee6437a44502aa31b4fa9154c73ad7->enter($__internal_07c0d4ba7af9842945d62b835700cfe260ee6437a44502aa31b4fa9154c73ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_07c0d4ba7af9842945d62b835700cfe260ee6437a44502aa31b4fa9154c73ad7->leave($__internal_07c0d4ba7af9842945d62b835700cfe260ee6437a44502aa31b4fa9154c73ad7_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_94300aeadaa367cf5dcff7fabba14b7b76594f035e6fc861efc9a84044f025d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94300aeadaa367cf5dcff7fabba14b7b76594f035e6fc861efc9a84044f025d7->enter($__internal_94300aeadaa367cf5dcff7fabba14b7b76594f035e6fc861efc9a84044f025d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_94300aeadaa367cf5dcff7fabba14b7b76594f035e6fc861efc9a84044f025d7->leave($__internal_94300aeadaa367cf5dcff7fabba14b7b76594f035e6fc861efc9a84044f025d7_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_5188dbab594036f68f7b559fe34227255de1e27e0bb2721dc6b05aa1320dd468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5188dbab594036f68f7b559fe34227255de1e27e0bb2721dc6b05aa1320dd468->enter($__internal_5188dbab594036f68f7b559fe34227255de1e27e0bb2721dc6b05aa1320dd468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi en attentes de validation ";
        
        $__internal_5188dbab594036f68f7b559fe34227255de1e27e0bb2721dc6b05aa1320dd468->leave($__internal_5188dbab594036f68f7b559fe34227255de1e27e0bb2721dc6b05aa1320dd468_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_7c4702068922974fe9a29ce05723251b23526917eecf2a55a5337def7da46893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4702068922974fe9a29ce05723251b23526917eecf2a55a5337def7da46893->enter($__internal_7c4702068922974fe9a29ce05723251b23526917eecf2a55a5337def7da46893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
        
        $__internal_7c4702068922974fe9a29ce05723251b23526917eecf2a55a5337def7da46893->leave($__internal_7c4702068922974fe9a29ce05723251b23526917eecf2a55a5337def7da46893_prof);

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
