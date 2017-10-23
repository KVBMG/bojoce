<?php

/* EcoJobAdminBundle:Recruteur:offes.html.twig */
class __TwigTemplate_0304c9b56e354b5cbf0589fc0b0dbf09ede7f49266261baab1f447e10199a9d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Recruteur:offes.html.twig", 1);
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
        $__internal_15a8dcdbe4f9c15f8c3db165bdd2fe4784f9f6ded4f16a6ea1eeee46e0ae18f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a8dcdbe4f9c15f8c3db165bdd2fe4784f9f6ded4f16a6ea1eeee46e0ae18f4->enter($__internal_15a8dcdbe4f9c15f8c3db165bdd2fe4784f9f6ded4f16a6ea1eeee46e0ae18f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Recruteur:offes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a8dcdbe4f9c15f8c3db165bdd2fe4784f9f6ded4f16a6ea1eeee46e0ae18f4->leave($__internal_15a8dcdbe4f9c15f8c3db165bdd2fe4784f9f6ded4f16a6ea1eeee46e0ae18f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73c60a1aa3e24e8aac2261f8476862de1057e3e191bc2ecbafe668eb875d52be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c60a1aa3e24e8aac2261f8476862de1057e3e191bc2ecbafe668eb875d52be->enter($__internal_73c60a1aa3e24e8aac2261f8476862de1057e3e191bc2ecbafe668eb875d52be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_73c60a1aa3e24e8aac2261f8476862de1057e3e191bc2ecbafe668eb875d52be->leave($__internal_73c60a1aa3e24e8aac2261f8476862de1057e3e191bc2ecbafe668eb875d52be_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d9994f90b370b037a919e5f61412813445f05bd7f55d93389349cb1309da8269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9994f90b370b037a919e5f61412813445f05bd7f55d93389349cb1309da8269->enter($__internal_d9994f90b370b037a919e5f61412813445f05bd7f55d93389349cb1309da8269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_d9994f90b370b037a919e5f61412813445f05bd7f55d93389349cb1309da8269->leave($__internal_d9994f90b370b037a919e5f61412813445f05bd7f55d93389349cb1309da8269_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_471703be250b77e1ef8031de6e7399a6c78721d404524104057482f1c01ca4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471703be250b77e1ef8031de6e7399a6c78721d404524104057482f1c01ca4ce->enter($__internal_471703be250b77e1ef8031de6e7399a6c78721d404524104057482f1c01ca4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_471703be250b77e1ef8031de6e7399a6c78721d404524104057482f1c01ca4ce->leave($__internal_471703be250b77e1ef8031de6e7399a6c78721d404524104057482f1c01ca4ce_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_abc32f7afba29d6bd991eb61f18e22b86d8dfc2624239fd545d8e9a21fefc0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc32f7afba29d6bd991eb61f18e22b86d8dfc2624239fd545d8e9a21fefc0ee->enter($__internal_abc32f7afba29d6bd991eb61f18e22b86d8dfc2624239fd545d8e9a21fefc0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_edit", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Modifier</a>                
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>    
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
        
        $__internal_abc32f7afba29d6bd991eb61f18e22b86d8dfc2624239fd545d8e9a21fefc0ee->leave($__internal_abc32f7afba29d6bd991eb61f18e22b86d8dfc2624239fd545d8e9a21fefc0ee_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Recruteur:offes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 24,  116 => 21,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
                <a href=\"{{ path('eco_job_recruteur_offre_edit',{'id': offre.id})}}\" class=\"btn-default btn3\">Modifier</a>                
                <a href=\"{{ path('eco_job_recruteur_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
            </div>
        {% endfor %}       
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Recruteur:offes.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Recruteur/offes.html.twig");
    }
}
