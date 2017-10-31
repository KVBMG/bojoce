<?php

/* EcoJobRecruteurBundle:Recruteur:list.html.twig */
class __TwigTemplate_86c7d85084b9f848a5c8ed3fdf2f64e9c04964c39180b1de4e1e05a9cfb2a752 extends Twig_Template
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
        $__internal_b3ac6aa0770a2fdf26568ccaf1c7dfa8ab4eeca39b3b461b28cc072686d90f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ac6aa0770a2fdf26568ccaf1c7dfa8ab4eeca39b3b461b28cc072686d90f0e->enter($__internal_b3ac6aa0770a2fdf26568ccaf1c7dfa8ab4eeca39b3b461b28cc072686d90f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3ac6aa0770a2fdf26568ccaf1c7dfa8ab4eeca39b3b461b28cc072686d90f0e->leave($__internal_b3ac6aa0770a2fdf26568ccaf1c7dfa8ab4eeca39b3b461b28cc072686d90f0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_820181ec7abd8658ad90aeae455a0d5238442143023f3faf97677528ac8ef357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820181ec7abd8658ad90aeae455a0d5238442143023f3faf97677528ac8ef357->enter($__internal_820181ec7abd8658ad90aeae455a0d5238442143023f3faf97677528ac8ef357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_820181ec7abd8658ad90aeae455a0d5238442143023f3faf97677528ac8ef357->leave($__internal_820181ec7abd8658ad90aeae455a0d5238442143023f3faf97677528ac8ef357_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_b52e4af2727ea18acf9a5f12bc4c9fe0641d08e744974af8d1ced64b27b47e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52e4af2727ea18acf9a5f12bc4c9fe0641d08e744974af8d1ced64b27b47e8c->enter($__internal_b52e4af2727ea18acf9a5f12bc4c9fe0641d08e744974af8d1ced64b27b47e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_b52e4af2727ea18acf9a5f12bc4c9fe0641d08e744974af8d1ced64b27b47e8c->leave($__internal_b52e4af2727ea18acf9a5f12bc4c9fe0641d08e744974af8d1ced64b27b47e8c_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_62faf43a3aec072cea03c86db72dc47f0b5841fc7e34f088652ae4b9b794e38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62faf43a3aec072cea03c86db72dc47f0b5841fc7e34f088652ae4b9b794e38d->enter($__internal_62faf43a3aec072cea03c86db72dc47f0b5841fc7e34f088652ae4b9b794e38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_62faf43a3aec072cea03c86db72dc47f0b5841fc7e34f088652ae4b9b794e38d->leave($__internal_62faf43a3aec072cea03c86db72dc47f0b5841fc7e34f088652ae4b9b794e38d_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_4bf8e9ef1e64ed61b2992294c9d8301ccabda245e527c11db68e19f2cd412fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf8e9ef1e64ed61b2992294c9d8301ccabda245e527c11db68e19f2cd412fd1->enter($__internal_4bf8e9ef1e64ed61b2992294c9d8301ccabda245e527c11db68e19f2cd412fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Mes offres d'emploi</div>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 13
            echo "            <div class=\"news1\">
                <div class=\"txt1\">Ajoutée le ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "createdAt", array()), "d-m-y"), "html", null, true);
            echo "</div>
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
                    <div class=\"label label-warning\">Modification de l'offre en cours de validation par l'administrateur.</div>                ";
            }
            // line 34
            echo "                
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "       
    </div>

    ";
        // line 39
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_4bf8e9ef1e64ed61b2992294c9d8301ccabda245e527c11db68e19f2cd412fd1->leave($__internal_4bf8e9ef1e64ed61b2992294c9d8301ccabda245e527c11db68e19f2cd412fd1_prof);

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
        return array (  167 => 39,  162 => 36,  154 => 34,  149 => 33,  146 => 32,  142 => 31,  138 => 29,  134 => 28,  131 => 27,  127 => 25,  120 => 22,  118 => 21,  114 => 20,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  90 => 14,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
                <div class=\"txt1\">Ajoutée le {{offre.createdAt | date('d-m-y')}}</div>
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
                    <div class=\"label label-warning\">Modification de l'offre en cours de validation par l'administrateur.</div>                {% endif %}                
            </div>
        {% endfor %}       
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobRecruteurBundle:Recruteur:list.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\RecruteurBundle/Resources/views/Recruteur/list.html.twig");
    }
}
