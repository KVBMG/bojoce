<?php

/* EcoJobRecruteurBundle:Recruteur:list.html.twig */
class __TwigTemplate_e038bb58b9fc4ceb9c4a8bf0ecbf0d59bb3a40bfe504c506038c6dd742d5affc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobRecruteurBundle::layout.html.twig", "EcoJobRecruteurBundle:Recruteur:list.html.twig", 1);
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
        $__internal_65230a7c6f804aa2cc7c16239998dba4f2c531098b72d0b8085d7322d3c5c962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65230a7c6f804aa2cc7c16239998dba4f2c531098b72d0b8085d7322d3c5c962->enter($__internal_65230a7c6f804aa2cc7c16239998dba4f2c531098b72d0b8085d7322d3c5c962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65230a7c6f804aa2cc7c16239998dba4f2c531098b72d0b8085d7322d3c5c962->leave($__internal_65230a7c6f804aa2cc7c16239998dba4f2c531098b72d0b8085d7322d3c5c962_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4995b82b66386ee684969f828623302406be6376ba0b3b7c5a9e6ef7e427772a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4995b82b66386ee684969f828623302406be6376ba0b3b7c5a9e6ef7e427772a->enter($__internal_4995b82b66386ee684969f828623302406be6376ba0b3b7c5a9e6ef7e427772a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_4995b82b66386ee684969f828623302406be6376ba0b3b7c5a9e6ef7e427772a->leave($__internal_4995b82b66386ee684969f828623302406be6376ba0b3b7c5a9e6ef7e427772a_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_839b17c83b070d8eb56ca973c8803053a0fdf89da45d9d8d8f29425e6dedd583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839b17c83b070d8eb56ca973c8803053a0fdf89da45d9d8d8f29425e6dedd583->enter($__internal_839b17c83b070d8eb56ca973c8803053a0fdf89da45d9d8d8f29425e6dedd583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_839b17c83b070d8eb56ca973c8803053a0fdf89da45d9d8d8f29425e6dedd583->leave($__internal_839b17c83b070d8eb56ca973c8803053a0fdf89da45d9d8d8f29425e6dedd583_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_12c5d06c0571c771c5c1b180d70d8bd5b041a753e6f9936a67f1220e12d50d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c5d06c0571c771c5c1b180d70d8bd5b041a753e6f9936a67f1220e12d50d3b->enter($__internal_12c5d06c0571c771c5c1b180d70d8bd5b041a753e6f9936a67f1220e12d50d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_12c5d06c0571c771c5c1b180d70d8bd5b041a753e6f9936a67f1220e12d50d3b->leave($__internal_12c5d06c0571c771c5c1b180d70d8bd5b041a753e6f9936a67f1220e12d50d3b_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_03c6dd09ebee3970568e072b87077ab1a75a1d722eb8333202688bf626c7ac08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c6dd09ebee3970568e072b87077ab1a75a1d722eb8333202688bf626c7ac08->enter($__internal_03c6dd09ebee3970568e072b87077ab1a75a1d722eb8333202688bf626c7ac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Mes offres d'emploi</div>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_show", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Afficher</a>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_edit", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Modifier</a>                
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>    
                ";
            // line 20
            if ( !$this->getAttribute($context["offre"], "expired", array())) {
                echo "   
                    ";
                // line 21
                if ( !$this->getAttribute($context["offre"], "suspendu", array())) {
                    // line 22
                    echo "                        ";
                    if ( !$this->getAttribute($context["offre"], "valid", array())) {
                        echo "                    
                            <div class=\"label label-warning\"> Offre pas encore validée</div>     
                        ";
                    } else {
                        // line 25
                        echo "                            <div class=\"label label-success\"> Offre déja validée</div>
                        ";
                    }
                    // line 27
                    echo "                    ";
                } else {
                    // line 28
                    echo "                        <div class=\"label label-warning\"> Offre est suspendu </div>
                    ";
                }
                // line 29
                echo "    
                ";
            } else {
                // line 31
                echo "                    <div class=\"label label-warning\"> Offre est éxpirer </div>
                ";
            }
            // line 32
            echo "    
                ";
            // line 33
            if ( !$this->getAttribute($context["offre"], "modificationValided", array())) {
                echo " 
                    Modification de l'offre en cours de validation par l'administrateur.
                ";
            }
            // line 35
            echo "                
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "       
    </div>

    ";
        // line 40
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_03c6dd09ebee3970568e072b87077ab1a75a1d722eb8333202688bf626c7ac08->leave($__internal_03c6dd09ebee3970568e072b87077ab1a75a1d722eb8333202688bf626c7ac08_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 40,  160 => 37,  152 => 35,  146 => 33,  143 => 32,  139 => 31,  135 => 29,  131 => 28,  128 => 27,  124 => 25,  117 => 22,  115 => 21,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
        <div class=\"title7\">Mes offres d'emploi</div>
        {% for offre in offres %}
            <div class=\"news1\">
                <div class=\"txt1\">12/4/2016</div>
                <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
                <div class=\"txt3\">{{offre.contenu}}</div>
                <a href=\"{{ path('eco_job_recruteur_offre_show',{'id': offre.id})}}\" class=\"btn-default btn3\">Afficher</a>
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
                    <div class=\"label label-warning\"> Offre est éxpirer </div>
                {% endif%}    
                {% if not offre.modificationValided %} 
                    Modification de l'offre en cours de validation par l'administrateur.
                {% endif %}                
            </div>
        {% endfor %}       
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobRecruteurBundle:Recruteur:list.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/list.html.twig");
    }
}
