<?php

/* EcoJobAdminBundle:Admin:users.html.twig */
class __TwigTemplate_a2e0e9f8e3de2fd7774eb06f17c407e8e116f4fc518534c49aec97c2b141c107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:users.html.twig", 1);
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
        $__internal_f32ef7112259199719ede84e18e45b0370fe829e49684dc2f6eb883958884d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32ef7112259199719ede84e18e45b0370fe829e49684dc2f6eb883958884d9d->enter($__internal_f32ef7112259199719ede84e18e45b0370fe829e49684dc2f6eb883958884d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f32ef7112259199719ede84e18e45b0370fe829e49684dc2f6eb883958884d9d->leave($__internal_f32ef7112259199719ede84e18e45b0370fe829e49684dc2f6eb883958884d9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4b9e04fd34e33c68286d0f55d9bbdff3933335c1f77b4019719e41ce73108e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b9e04fd34e33c68286d0f55d9bbdff3933335c1f77b4019719e41ce73108e5->enter($__internal_d4b9e04fd34e33c68286d0f55d9bbdff3933335c1f77b4019719e41ce73108e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Espace administration ";
        
        $__internal_d4b9e04fd34e33c68286d0f55d9bbdff3933335c1f77b4019719e41ce73108e5->leave($__internal_d4b9e04fd34e33c68286d0f55d9bbdff3933335c1f77b4019719e41ce73108e5_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d84d17a919353f3f1960f8bdf09d90faeb07e77ddccdd78be99b3b7a7095e0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84d17a919353f3f1960f8bdf09d90faeb07e77ddccdd78be99b3b7a7095e0a8->enter($__internal_d84d17a919353f3f1960f8bdf09d90faeb07e77ddccdd78be99b3b7a7095e0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_d84d17a919353f3f1960f8bdf09d90faeb07e77ddccdd78be99b3b7a7095e0a8->leave($__internal_d84d17a919353f3f1960f8bdf09d90faeb07e77ddccdd78be99b3b7a7095e0a8_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_3d22fcf86e82e3b9c282cedb225848b35907b9028a445ec4789a48a78eff975f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d22fcf86e82e3b9c282cedb225848b35907b9028a445ec4789a48a78eff975f->enter($__internal_3d22fcf86e82e3b9c282cedb225848b35907b9028a445ec4789a48a78eff975f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " ";
        $this->displayParentBlock("content_stitle", $context, $blocks);
        echo " Nouveaux utilisateurs";
        
        $__internal_3d22fcf86e82e3b9c282cedb225848b35907b9028a445ec4789a48a78eff975f->leave($__internal_3d22fcf86e82e3b9c282cedb225848b35907b9028a445ec4789a48a78eff975f_prof);

    }

    // line 10
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_14221083dc0556c7c9987d2c4d26faf70cd341d6c38e54e9263736adf709d9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14221083dc0556c7c9987d2c4d26faf70cd341d6c38e54e9263736adf709d9d5->enter($__internal_14221083dc0556c7c9987d2c4d26faf70cd341d6c38e54e9263736adf709d9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Liste des candidats qui viennent de créer leur compte depuis ces 7 derniers jous</div>
        ";
        // line 13
        if ( !twig_test_empty(($context["candidats"] ?? $this->getContext($context, "candidats")))) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["candidats"] ?? $this->getContext($context, "candidats")));
            foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
                // line 15
                echo "                <div class=\"news1\">
                    <div class=\"txt1\">Inscrit(e) depuis le ";
                // line 16
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["candidat"], "createdAt", array()), "d/m/Y"), "html", null, true);
                echo "</div>
                    <div class=\"txt2\"><a href=\"#\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "username", array()), "html", null, true);
                echo "</a></div>
                    <div class=\"txt3\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "email", array()), "html", null, true);
                echo "</div>
                    <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_candidat_cv", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Voir son CV</a>                 
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_user_delete", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Supprimer le compte</a>                    
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    
        ";
        } else {
            // line 24
            echo "            Aucun
        ";
        }
        // line 26
        echo "
        <div class=\"title7\">Liste des recruteurs qui viennent de créer leur compte depuis ces 7 derniers jous</div>
        ";
        // line 28
        if ( !twig_test_empty(($context["recruteurs"] ?? $this->getContext($context, "recruteurs")))) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recruteurs"] ?? $this->getContext($context, "recruteurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["recruteur"]) {
                // line 30
                echo "                <div class=\"news1\">
                    <div class=\"txt1\"> Inscrit(e) depuis le  ";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["recruteur"], "createdAt", array()), "d/m/Y"), "html", null, true);
                echo "</div>
                    <div class=\"txt2\"><a href=\"#\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["recruteur"], "username", array()), "html", null, true);
                echo "</a></div>
                    <div class=\"txt3\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["recruteur"], "email", array()), "html", null, true);
                echo "</div>
                    <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_recruteur_offres", array("id" => $this->getAttribute($context["recruteur"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Voir ses offres d'emploi</a>                
                    <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_user_delete", array("id" => $this->getAttribute($context["recruteur"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Supprimer le compte</a>                    
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recruteur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      
        ";
        } else {
            // line 39
            echo "            Aucun
        ";
        }
        // line 41
        echo "    </div>

    ";
        // line 43
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_14221083dc0556c7c9987d2c4d26faf70cd341d6c38e54e9263736adf709d9d5->leave($__internal_14221083dc0556c7c9987d2c4d26faf70cd341d6c38e54e9263736adf709d9d5_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 43,  175 => 41,  171 => 39,  167 => 37,  158 => 35,  154 => 34,  150 => 33,  146 => 32,  142 => 31,  139 => 30,  134 => 29,  132 => 28,  128 => 26,  124 => 24,  120 => 22,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  92 => 15,  87 => 14,  85 => 13,  75 => 10,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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

{% block title %} Espace administration {% endblock %}

{% block content_title %} Administrateur {% endblock %}

{% block content_stitle %} {{parent()}} Nouveaux utilisateurs{% endblock %}


{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\">Liste des candidats qui viennent de créer leur compte depuis ces 7 derniers jous</div>
        {% if candidats is not empty %}
            {% for candidat in candidats %}
                <div class=\"news1\">
                    <div class=\"txt1\">Inscrit(e) depuis le {{candidat.createdAt |date(\"d/m/Y\")}}</div>
                    <div class=\"txt2\"><a href=\"#\">{{candidat.username}}</a></div>
                    <div class=\"txt3\">{{candidat.email}}</div>
                    <a href=\"{{ path('eco_job_admin_candidat_cv',{'id': candidat.id})}}\" class=\"btn-default btn3\">Voir son CV</a>                 
                    <a href=\"{{ path('eco_job_admin_user_delete',{'id': candidat.id})}}\" class=\"btn-default btn3\">Supprimer le compte</a>                    
                </div>
            {% endfor %}    
        {% else %}
            Aucun
        {% endif %}

        <div class=\"title7\">Liste des recruteurs qui viennent de créer leur compte depuis ces 7 derniers jous</div>
        {% if recruteurs is not empty %}
            {% for recruteur in recruteurs %}
                <div class=\"news1\">
                    <div class=\"txt1\"> Inscrit(e) depuis le  {{recruteur.createdAt |date(\"d/m/Y\")}}</div>
                    <div class=\"txt2\"><a href=\"#\">{{recruteur.username}}</a></div>
                    <div class=\"txt3\">{{recruteur.email}}</div>
                    <a href=\"{{ path('eco_job_admin_recruteur_offres',{'id': recruteur.id})}}\" class=\"btn-default btn3\">Voir ses offres d'emploi</a>                
                    <a href=\"{{ path('eco_job_admin_user_delete',{'id': recruteur.id})}}\" class=\"btn-default btn3\">Supprimer le compte</a>                    
                </div>
            {% endfor %}      
        {% else %}
            Aucun
        {% endif %}
    </div>

    {{parent()}} 

{% endblock %}  
", "EcoJobAdminBundle:Admin:users.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/users.html.twig");
    }
}
