<?php

/* EcoJobAdminBundle:Admin:suspendu.html.twig */
class __TwigTemplate_d02efc74242ba6df2c6a652a158d81f219289070bf68fb5e89c43a09b22397ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:suspendu.html.twig", 1);
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
        $__internal_b88f6ae46448b6be646ecddf596c8f8ca2f34ca1194c21ff2f61bd8ec5e483a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88f6ae46448b6be646ecddf596c8f8ca2f34ca1194c21ff2f61bd8ec5e483a7->enter($__internal_b88f6ae46448b6be646ecddf596c8f8ca2f34ca1194c21ff2f61bd8ec5e483a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:suspendu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b88f6ae46448b6be646ecddf596c8f8ca2f34ca1194c21ff2f61bd8ec5e483a7->leave($__internal_b88f6ae46448b6be646ecddf596c8f8ca2f34ca1194c21ff2f61bd8ec5e483a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1527f6d0c761a1d2b89e242546b6f0bfcdfea65f63af557c6b6ee29069fea8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1527f6d0c761a1d2b89e242546b6f0bfcdfea65f63af557c6b6ee29069fea8e8->enter($__internal_1527f6d0c761a1d2b89e242546b6f0bfcdfea65f63af557c6b6ee29069fea8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_1527f6d0c761a1d2b89e242546b6f0bfcdfea65f63af557c6b6ee29069fea8e8->leave($__internal_1527f6d0c761a1d2b89e242546b6f0bfcdfea65f63af557c6b6ee29069fea8e8_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c21a72842ca110dcd5447f9e20634f2c83985dd05fd4629982900512c3566cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21a72842ca110dcd5447f9e20634f2c83985dd05fd4629982900512c3566cb7->enter($__internal_c21a72842ca110dcd5447f9e20634f2c83985dd05fd4629982900512c3566cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_c21a72842ca110dcd5447f9e20634f2c83985dd05fd4629982900512c3566cb7->leave($__internal_c21a72842ca110dcd5447f9e20634f2c83985dd05fd4629982900512c3566cb7_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_b89f00194d28ac27c3232f0cfec9cee3b0fdaffffa03b202dc7222df3df8fca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89f00194d28ac27c3232f0cfec9cee3b0fdaffffa03b202dc7222df3df8fca9->enter($__internal_b89f00194d28ac27c3232f0cfec9cee3b0fdaffffa03b202dc7222df3df8fca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi expirés ";
        
        $__internal_b89f00194d28ac27c3232f0cfec9cee3b0fdaffffa03b202dc7222df3df8fca9->leave($__internal_b89f00194d28ac27c3232f0cfec9cee3b0fdaffffa03b202dc7222df3df8fca9_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_696ea1747d564619d2decbfcb3d1509796f48df60b4909ee1e079fcb6364a556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696ea1747d564619d2decbfcb3d1509796f48df60b4909ee1e079fcb6364a556->enter($__internal_696ea1747d564619d2decbfcb3d1509796f48df60b4909ee1e079fcb6364a556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Offres d'emploi </div>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>    
                 <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_republier", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Républier</a>                                 
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
        // line 26
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_696ea1747d564619d2decbfcb3d1509796f48df60b4909ee1e079fcb6364a556->leave($__internal_696ea1747d564619d2decbfcb3d1509796f48df60b4909ee1e079fcb6364a556_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:suspendu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 26,  123 => 22,  114 => 20,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  90 => 14,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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

{% block content_stitle %} Offres d'emploi expirés {% endblock %}

{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\">Offres d'emploi </div>
        {% for offre in offres %}
            <div class=\"news1\">
                <div class=\"txt1\">Ajoutée le {{offre.createdAt | date('d-m-y')}}</div>
                <div class=\"txt1\"> Recruteur: {{offre.recruteur.username}}</div>
                <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
                <div class=\"txt3\">{{offre.contenu}}</div>
                <a href=\"{{ path('eco_job_admin_recruteur_offre',{'id': offre.id})}}\" class=\"btn-default btn3\">Afficher</a>
                <a href=\"{{ path('eco_job_admin_recruteur_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
                 <a href=\"{{ path('eco_job_admin_republier',{'id': offre.id})}}\" class=\"btn-default btn3\">Républier</a>                                 
            </div>
        {% endfor %}       
    </div>


    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Admin:suspendu.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\AdminBundle/Resources/views/Admin/suspendu.html.twig");
    }
}
