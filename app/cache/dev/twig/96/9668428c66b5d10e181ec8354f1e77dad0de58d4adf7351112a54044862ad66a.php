<?php

/* EcoJobAdminBundle:Recruteur:offres.html.twig */
class __TwigTemplate_0084ef53e172b93fb93487c26d9b875581df00be986e1f5b0d1f375280eb7ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Recruteur:offres.html.twig", 1);
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
        $__internal_abef1b95d309083967e99adb214a3c66d33d2fd9c79842c33a1c42dce1465b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abef1b95d309083967e99adb214a3c66d33d2fd9c79842c33a1c42dce1465b50->enter($__internal_abef1b95d309083967e99adb214a3c66d33d2fd9c79842c33a1c42dce1465b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Recruteur:offres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abef1b95d309083967e99adb214a3c66d33d2fd9c79842c33a1c42dce1465b50->leave($__internal_abef1b95d309083967e99adb214a3c66d33d2fd9c79842c33a1c42dce1465b50_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfebfad49f3e0e624510ab6636ed3fe6483fabfec9d10b5f4a1c68c5644cf3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfebfad49f3e0e624510ab6636ed3fe6483fabfec9d10b5f4a1c68c5644cf3a1->enter($__internal_dfebfad49f3e0e624510ab6636ed3fe6483fabfec9d10b5f4a1c68c5644cf3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_dfebfad49f3e0e624510ab6636ed3fe6483fabfec9d10b5f4a1c68c5644cf3a1->leave($__internal_dfebfad49f3e0e624510ab6636ed3fe6483fabfec9d10b5f4a1c68c5644cf3a1_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_eea2fa98dfd7ae850fe88935293b88577d539d008655f0562c8331e5e6dfe3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea2fa98dfd7ae850fe88935293b88577d539d008655f0562c8331e5e6dfe3e3->enter($__internal_eea2fa98dfd7ae850fe88935293b88577d539d008655f0562c8331e5e6dfe3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_eea2fa98dfd7ae850fe88935293b88577d539d008655f0562c8331e5e6dfe3e3->leave($__internal_eea2fa98dfd7ae850fe88935293b88577d539d008655f0562c8331e5e6dfe3e3_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_ada99733af034b6b9c10422d781959c0392f615e9d8ff539741b10013ceefbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada99733af034b6b9c10422d781959c0392f615e9d8ff539741b10013ceefbb6->enter($__internal_ada99733af034b6b9c10422d781959c0392f615e9d8ff539741b10013ceefbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi ";
        
        $__internal_ada99733af034b6b9c10422d781959c0392f615e9d8ff539741b10013ceefbb6->leave($__internal_ada99733af034b6b9c10422d781959c0392f615e9d8ff539741b10013ceefbb6_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_521cfeaf43a627ddf3f1577267a18e7e25c87e64edc964bfe0ac4ad603016a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521cfeaf43a627ddf3f1577267a18e7e25c87e64edc964bfe0ac4ad603016a03->enter($__internal_521cfeaf43a627ddf3f1577267a18e7e25c87e64edc964bfe0ac4ad603016a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Offres d'emploi du recruteur </div>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>    
                ";
            // line 19
            if ( !$this->getAttribute($context["offre"], "valid", array())) {
                // line 20
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre_valider", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Valider</a>                    
                ";
            } else {
                // line 22
                echo "                    <div class=\"label label-success\"> Offre déja validée</div>
                ";
            }
            // line 24
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "       
    </div>

    ";
        // line 28
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_521cfeaf43a627ddf3f1577267a18e7e25c87e64edc964bfe0ac4ad603016a03->leave($__internal_521cfeaf43a627ddf3f1577267a18e7e25c87e64edc964bfe0ac4ad603016a03_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Recruteur:offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  126 => 25,  119 => 24,  115 => 22,  109 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
                <a href=\"{{ path('eco_job_recruteur_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
                {% if not offre.valid %}
                    <a href=\"{{ path('eco_job_admin_recruteur_offre_valider',{'id': offre.id})}}\" class=\"btn-default btn3\">Valider</a>                    
                {% else %}
                    <div class=\"label label-success\"> Offre déja validée</div>
                {% endif %}
            </div>
        {% endfor %}       
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Recruteur:offres.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\AdminBundle/Resources/views/Recruteur/offres.html.twig");
    }
}
