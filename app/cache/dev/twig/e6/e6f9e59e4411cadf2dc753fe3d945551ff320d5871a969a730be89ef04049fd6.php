<?php

/* EcoJobRecruteurBundle:Recruteur:show.html.twig */
class __TwigTemplate_3d4279e91d477f50bd868c0bfa7f2d62ca27f0586a293802d9ca2273864a2b50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobRecruteurBundle::layout.html.twig", "EcoJobRecruteurBundle:Recruteur:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobRecruteurBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7375d2c3e7a1d26060361157e5d705f14d8d92c9106a94cc4af5f9111eced1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7375d2c3e7a1d26060361157e5d705f14d8d92c9106a94cc4af5f9111eced1f6->enter($__internal_7375d2c3e7a1d26060361157e5d705f14d8d92c9106a94cc4af5f9111eced1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7375d2c3e7a1d26060361157e5d705f14d8d92c9106a94cc4af5f9111eced1f6->leave($__internal_7375d2c3e7a1d26060361157e5d705f14d8d92c9106a94cc4af5f9111eced1f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8af7eee9f0c5b99cd34006aea44896b260cc25d9ce9109e3ce78b36648aa9ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af7eee9f0c5b99cd34006aea44896b260cc25d9ce9109e3ce78b36648aa9ec9->enter($__internal_8af7eee9f0c5b99cd34006aea44896b260cc25d9ce9109e3ce78b36648aa9ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_8af7eee9f0c5b99cd34006aea44896b260cc25d9ce9109e3ce78b36648aa9ec9->leave($__internal_8af7eee9f0c5b99cd34006aea44896b260cc25d9ce9109e3ce78b36648aa9ec9_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_41b14d4fe3c30994e17721cc76328b95798377db6969e22ff316fc599490ea8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b14d4fe3c30994e17721cc76328b95798377db6969e22ff316fc599490ea8d->enter($__internal_41b14d4fe3c30994e17721cc76328b95798377db6969e22ff316fc599490ea8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_41b14d4fe3c30994e17721cc76328b95798377db6969e22ff316fc599490ea8d->leave($__internal_41b14d4fe3c30994e17721cc76328b95798377db6969e22ff316fc599490ea8d_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_36dd2d3055d87f7d852d657e80046e943405a8c3b508395a5471a8b8a8d9fc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dd2d3055d87f7d852d657e80046e943405a8c3b508395a5471a8b8a8d9fc74->enter($__internal_36dd2d3055d87f7d852d657e80046e943405a8c3b508395a5471a8b8a8d9fc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_36dd2d3055d87f7d852d657e80046e943405a8c3b508395a5471a8b8a8d9fc74->leave($__internal_36dd2d3055d87f7d852d657e80046e943405a8c3b508395a5471a8b8a8d9fc74_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_7f32e3d7233e90085e82164f06d22f02bf622301cd57e31ebbf4ccaee8e4d30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f32e3d7233e90085e82164f06d22f02bf622301cd57e31ebbf4ccaee8e4d30d->enter($__internal_7f32e3d7233e90085e82164f06d22f02bf622301cd57e31ebbf4ccaee8e4d30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\"> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</div>
        <div class=\"news1\">
            <div class=\"txt1\">12/4/2016 </div>
            <div class=\"txt2\"><a href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</a></div>
            <div class=\"txt3\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "contenu", array()), "html", null, true);
        echo "</div>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_edit", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
        echo "\" class=\"btn-default btn3\">Modifier</a>                
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_delete", array("id" => $this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "id", array()))), "html", null, true);
        echo "\" class=\"btn-default btn3\">Supprimer</a>     
            ";
        // line 18
        if ( !$this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "expired", array())) {
            // line 19
            echo "                ";
            if ( !$this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "suspendu", array())) {
                // line 20
                echo "                    ";
                if ( !$this->getAttribute(($context["offre"] ?? $this->getContext($context, "offre")), "valid", array())) {
                    // line 21
                    echo "                        <div class=\"label label-warning\"> Offre pas encore validée</div>     
                     ";
                } else {
                    // line 23
                    echo "                        <div class=\"label label-success\"> Offre déja validée</div>
                    ";
                }
                // line 25
                echo "                ";
            } else {
                // line 26
                echo "                     <div class=\"label label-warning\"> Offre est suspendu </div>
                ";
            }
            // line 27
            echo "  
            ";
        } else {
            // line 29
            echo "                 <div class=\"label label-warning\"> Offre est expirée</div>     
            ";
        }
        // line 30
        echo "                 
        </div>

    </div>

    ";
        // line 35
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_7f32e3d7233e90085e82164f06d22f02bf622301cd57e31ebbf4ccaee8e4d30d->leave($__internal_7f32e3d7233e90085e82164f06d22f02bf622301cd57e31ebbf4ccaee8e4d30d_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 35,  135 => 30,  131 => 29,  127 => 27,  123 => 26,  120 => 25,  116 => 23,  112 => 21,  109 => 20,  106 => 19,  104 => 18,  100 => 17,  96 => 16,  92 => 15,  88 => 14,  82 => 11,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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

{% block content_stitle %} Offres d'emploi {% endblock %}

{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\"> {{offre.titre}}</div>
        <div class=\"news1\">
            <div class=\"txt1\">12/4/2016 </div>
            <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
            <div class=\"txt3\">{{offre.contenu}}</div>
            <a href=\"{{ path('eco_job_recruteur_offre_edit',{'id': offre.id})}}\" class=\"btn-default btn3\">Modifier</a>                
            <a href=\"{{ path('eco_job_recruteur_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>     
            {% if not offre.expired %}
                {% if not offre.suspendu %}
                    {% if not offre.valid %}
                        <div class=\"label label-warning\"> Offre pas encore validée</div>     
                     {% else %}
                        <div class=\"label label-success\"> Offre déja validée</div>
                    {% endif %}
                {% else %}
                     <div class=\"label label-warning\"> Offre est suspendu </div>
                {% endif %}  
            {% else %}
                 <div class=\"label label-warning\"> Offre est expirée</div>     
            {% endif %}                 
        </div>

    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobRecruteurBundle:Recruteur:show.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/show.html.twig");
    }
}
