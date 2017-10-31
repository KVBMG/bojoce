<?php

/* EcoJobAdminBundle:Admin:expired.html.twig */
class __TwigTemplate_207d8c4bbe565fb104ae2b24e3fb2415c95c2ffc33ee05e4c0b66fe8e1d5aab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:expired.html.twig", 1);
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
        $__internal_a2b5770b76b771d9497744d194e37dbacfeb81118b0121498e709ece136e7d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b5770b76b771d9497744d194e37dbacfeb81118b0121498e709ece136e7d9a->enter($__internal_a2b5770b76b771d9497744d194e37dbacfeb81118b0121498e709ece136e7d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:expired.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b5770b76b771d9497744d194e37dbacfeb81118b0121498e709ece136e7d9a->leave($__internal_a2b5770b76b771d9497744d194e37dbacfeb81118b0121498e709ece136e7d9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20dfe4f3caa6e2ad195a1c100c0a740a996a700f5b3543d3949d480f238dd490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dfe4f3caa6e2ad195a1c100c0a740a996a700f5b3543d3949d480f238dd490->enter($__internal_20dfe4f3caa6e2ad195a1c100c0a740a996a700f5b3543d3949d480f238dd490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_20dfe4f3caa6e2ad195a1c100c0a740a996a700f5b3543d3949d480f238dd490->leave($__internal_20dfe4f3caa6e2ad195a1c100c0a740a996a700f5b3543d3949d480f238dd490_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_7b1fb1cbc56218325fa357d520de6bfee806da6df3782e07f79eaa01663672d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1fb1cbc56218325fa357d520de6bfee806da6df3782e07f79eaa01663672d0->enter($__internal_7b1fb1cbc56218325fa357d520de6bfee806da6df3782e07f79eaa01663672d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_7b1fb1cbc56218325fa357d520de6bfee806da6df3782e07f79eaa01663672d0->leave($__internal_7b1fb1cbc56218325fa357d520de6bfee806da6df3782e07f79eaa01663672d0_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_c2ed20b26ac17f20d0cea28b393f6ac78ff385d74ffd64c90d1534e43f8df3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ed20b26ac17f20d0cea28b393f6ac78ff385d74ffd64c90d1534e43f8df3f5->enter($__internal_c2ed20b26ac17f20d0cea28b393f6ac78ff385d74ffd64c90d1534e43f8df3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi expirés ";
        
        $__internal_c2ed20b26ac17f20d0cea28b393f6ac78ff385d74ffd64c90d1534e43f8df3f5->leave($__internal_c2ed20b26ac17f20d0cea28b393f6ac78ff385d74ffd64c90d1534e43f8df3f5_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_2b1acca27a1f9f85271e11582519cd1fe1f6981f30d857133fb995c016ee0fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1acca27a1f9f85271e11582519cd1fe1f6981f30d857133fb995c016ee0fd8->enter($__internal_2b1acca27a1f9f85271e11582519cd1fe1f6981f30d857133fb995c016ee0fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Offres d'emploi </div>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 13
            echo "            <div class=\"title7\">Offre numero ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "id", array()), "html", null, true);
            echo "</div>
            <div class=\"news1\">
                <div class=\"txt1\">Ajoutée le ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "createdAt", array()), "d-m-y"), "html", null, true);
            echo "</div>
                <div class=\"txt2\"><a href=\"#\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo "</a> (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "categorie", array()), "designation", array()), "html", null, true);
            echo ")</div>
                <div class=\"txt3\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
            echo "</div>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Supprimer</a>    
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_suspendre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-default btn3\">Suspendre</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  
        ";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres"))) > 0)) {
            // line 23
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_suspendre_all");
            echo "\"><button type=\"submit\" class=\"btn-default btn-cf-submit\">Suspendre tous</button></a>
        ";
        } else {
            // line 25
            echo "            Aucun offres exprirés
         ";
        }
        // line 27
        echo "    </div>

    ";
        // line 29
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_2b1acca27a1f9f85271e11582519cd1fe1f6981f30d857133fb995c016ee0fd8->leave($__internal_2b1acca27a1f9f85271e11582519cd1fe1f6981f30d857133fb995c016ee0fd8_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:expired.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 29,  135 => 27,  131 => 25,  125 => 23,  123 => 22,  120 => 21,  111 => 19,  107 => 18,  103 => 17,  97 => 16,  93 => 15,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
            <div class=\"title7\">Offre numero {{offre.id}}</div>
            <div class=\"news1\">
                <div class=\"txt1\">Ajoutée le {{offre.createdAt | date('d-m-y')}}</div>
                <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a> ({{ offre.categorie.designation }})</div>
                <div class=\"txt3\">{{offre.contenu}}</div>
                <a href=\"{{ path('eco_job_admin_recruteur_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
                <a href=\"{{ path('eco_job_admin_suspendre',{'id': offre.id})}}\" class=\"btn-default btn3\">Suspendre</a>
            </div>
        {% endfor %}  
        {% if offres | length > 0 %}
            <a href=\"{{ path('eco_job_admin_suspendre_all')}}\"><button type=\"submit\" class=\"btn-default btn-cf-submit\">Suspendre tous</button></a>
        {% else %}
            Aucun offres exprirés
         {% endif %}
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Admin:expired.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\AdminBundle/Resources/views/Admin/expired.html.twig");
    }
}
