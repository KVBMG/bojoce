<?php

/* EcoJobAdminBundle:Recruteur:offre.html.twig */
class __TwigTemplate_82527b03c21121934c421c11cc51b6d3549639324a12a75952bec3ba4cbdd35b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Recruteur:offre.html.twig", 1);
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
        $__internal_9cc5bc93e34a3a476d60ffbfb31017c4cb2a5a6d1a071e96b3500c683722fa5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc5bc93e34a3a476d60ffbfb31017c4cb2a5a6d1a071e96b3500c683722fa5f->enter($__internal_9cc5bc93e34a3a476d60ffbfb31017c4cb2a5a6d1a071e96b3500c683722fa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Recruteur:offre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc5bc93e34a3a476d60ffbfb31017c4cb2a5a6d1a071e96b3500c683722fa5f->leave($__internal_9cc5bc93e34a3a476d60ffbfb31017c4cb2a5a6d1a071e96b3500c683722fa5f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15d845d7357ea508acad904d4c28dbf2fd6836ea89457db00fe208bdbb54c0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d845d7357ea508acad904d4c28dbf2fd6836ea89457db00fe208bdbb54c0ee->enter($__internal_15d845d7357ea508acad904d4c28dbf2fd6836ea89457db00fe208bdbb54c0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offre d'emploi ";
        
        $__internal_15d845d7357ea508acad904d4c28dbf2fd6836ea89457db00fe208bdbb54c0ee->leave($__internal_15d845d7357ea508acad904d4c28dbf2fd6836ea89457db00fe208bdbb54c0ee_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_69569d215b42c1f53fa76aff279cc1a01c42c74fbb9ef6c589ba8acb98a91509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69569d215b42c1f53fa76aff279cc1a01c42c74fbb9ef6c589ba8acb98a91509->enter($__internal_69569d215b42c1f53fa76aff279cc1a01c42c74fbb9ef6c589ba8acb98a91509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_69569d215b42c1f53fa76aff279cc1a01c42c74fbb9ef6c589ba8acb98a91509->leave($__internal_69569d215b42c1f53fa76aff279cc1a01c42c74fbb9ef6c589ba8acb98a91509_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_cda38f8312ca282377ce07642b81dcbbdad965a1be852aa9545468d0ea21c714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda38f8312ca282377ce07642b81dcbbdad965a1be852aa9545468d0ea21c714->enter($__internal_cda38f8312ca282377ce07642b81dcbbdad965a1be852aa9545468d0ea21c714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_cda38f8312ca282377ce07642b81dcbbdad965a1be852aa9545468d0ea21c714->leave($__internal_cda38f8312ca282377ce07642b81dcbbdad965a1be852aa9545468d0ea21c714_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_9f4c53ee880bddbabe45b3d95803e5d557480e093fcfc3ac8dce362dbdbafd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4c53ee880bddbabe45b3d95803e5d557480e093fcfc3ac8dce362dbdbafd30->enter($__internal_9f4c53ee880bddbabe45b3d95803e5d557480e093fcfc3ac8dce362dbdbafd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Offre numero ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", array()), "html", null, true);
        echo "</div>
        <div class=\"news1\">
            <div class=\"txt1\">12/4/2016</div>
            <div class=\"txt2\"><a href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "titre", array()), "html", null, true);
        echo "</a></div>
            <div class=\"txt3\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "contenu", array()), "html", null, true);
        echo "</div>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre_delete", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", array()))), "html", null, true);
        echo "\" class=\"btn-default btn3\">Supprimer</a>    
             ";
        // line 17
        if ( !$this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "suspendu", array())) {
            // line 18
            echo "                ";
            if ( !$this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "valid", array())) {
                echo "                    
                    <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre_valider", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Valider</a>                    
                    <div class=\"label label-warning\"> Offre pas encore validée</div>     
                 ";
            } else {
                // line 22
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_suspendre", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Suspendre</a>
                    <div class=\"label label-success\"> Offre déja validée</div>
                ";
            }
            // line 25
            echo "            ";
        } else {
            // line 26
            echo "                 <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_republier", array("id" => $this->getAttribute((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")), "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Républier</a>
                 <div class=\"label label-warning\"> Offre est suspendu </div>
            ";
        }
        // line 28
        echo "                
        </div>

    </div>

    ";
        // line 33
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_9f4c53ee880bddbabe45b3d95803e5d557480e093fcfc3ac8dce362dbdbafd30->leave($__internal_9f4c53ee880bddbabe45b3d95803e5d557480e093fcfc3ac8dce362dbdbafd30_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Recruteur:offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  130 => 28,  123 => 26,  120 => 25,  113 => 22,  107 => 19,  102 => 18,  100 => 17,  96 => 16,  92 => 15,  88 => 14,  82 => 11,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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

{% block title %} Offre d'emploi {% endblock %}

{% block content_title %} Administrateur {% endblock %}

{% block content_stitle %} Offres d'emploi {% endblock %}

{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\">Offre numero {{offre.id}}</div>
        <div class=\"news1\">
            <div class=\"txt1\">12/4/2016</div>
            <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
            <div class=\"txt3\">{{offre.contenu}}</div>
            <a href=\"{{ path('eco_job_admin_recruteur_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
             {% if not offre.suspendu %}
                {% if not offre.valid %}                    
                    <a href=\"{{ path('eco_job_admin_recruteur_offre_valider',{'id': offre.id})}}\" class=\"btn-default btn3\">Valider</a>                    
                    <div class=\"label label-warning\"> Offre pas encore validée</div>     
                 {% else %}
                    <a href=\"{{ path('eco_job_admin_suspendre',{'id': offre.id})}}\" class=\"btn-default btn3\">Suspendre</a>
                    <div class=\"label label-success\"> Offre déja validée</div>
                {% endif %}
            {% else %}
                 <a href=\"{{ path('eco_job_admin_republier',{'id': offre.id})}}\" class=\"btn-default btn3\">Républier</a>
                 <div class=\"label label-warning\"> Offre est suspendu </div>
            {% endif %}                
        </div>

    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Recruteur:offre.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\AdminBundle/Resources/views/Recruteur/offre.html.twig");
    }
}
