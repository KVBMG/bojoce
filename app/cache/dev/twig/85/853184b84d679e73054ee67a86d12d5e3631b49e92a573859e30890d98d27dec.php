<?php

/* EcoJobAdminBundle:Admin:offres.html.twig */
class __TwigTemplate_496435b283ffe6ceca21d37755a2151b39051f8e4f8c8dd3182802de0bc971ff extends Twig_Template
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
        $__internal_634390f918d8ccaa934c18e0540da2d370b89f333fd1a926382b870a2f16fd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634390f918d8ccaa934c18e0540da2d370b89f333fd1a926382b870a2f16fd2f->enter($__internal_634390f918d8ccaa934c18e0540da2d370b89f333fd1a926382b870a2f16fd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:offres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_634390f918d8ccaa934c18e0540da2d370b89f333fd1a926382b870a2f16fd2f->leave($__internal_634390f918d8ccaa934c18e0540da2d370b89f333fd1a926382b870a2f16fd2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a335cf1e7ac99444017b29817df6b9c0deffe6878a42a155ee2f8c77ed8ff689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a335cf1e7ac99444017b29817df6b9c0deffe6878a42a155ee2f8c77ed8ff689->enter($__internal_a335cf1e7ac99444017b29817df6b9c0deffe6878a42a155ee2f8c77ed8ff689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Offres d'emploi ";
        
        $__internal_a335cf1e7ac99444017b29817df6b9c0deffe6878a42a155ee2f8c77ed8ff689->leave($__internal_a335cf1e7ac99444017b29817df6b9c0deffe6878a42a155ee2f8c77ed8ff689_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_1da7d6a5b38e529564c50b10e368bbb18ad02e026c26d57d2797eed176272c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da7d6a5b38e529564c50b10e368bbb18ad02e026c26d57d2797eed176272c20->enter($__internal_1da7d6a5b38e529564c50b10e368bbb18ad02e026c26d57d2797eed176272c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Administrateur ";
        
        $__internal_1da7d6a5b38e529564c50b10e368bbb18ad02e026c26d57d2797eed176272c20->leave($__internal_1da7d6a5b38e529564c50b10e368bbb18ad02e026c26d57d2797eed176272c20_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_035f10c404fc50dc3961d1adb50caf7615874f9c201d7c5b40fe82e731f59b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035f10c404fc50dc3961d1adb50caf7615874f9c201d7c5b40fe82e731f59b56->enter($__internal_035f10c404fc50dc3961d1adb50caf7615874f9c201d7c5b40fe82e731f59b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Offres d'emploi en attentes de validation ";
        
        $__internal_035f10c404fc50dc3961d1adb50caf7615874f9c201d7c5b40fe82e731f59b56->leave($__internal_035f10c404fc50dc3961d1adb50caf7615874f9c201d7c5b40fe82e731f59b56_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_0ad1685b0e90c448a02df66e8d787958e6cbccd44ef2f79c7e177af968d93629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad1685b0e90c448a02df66e8d787958e6cbccd44ef2f79c7e177af968d93629->enter($__internal_0ad1685b0e90c448a02df66e8d787958e6cbccd44ef2f79c7e177af968d93629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
        
        $__internal_0ad1685b0e90c448a02df66e8d787958e6cbccd44ef2f79c7e177af968d93629->leave($__internal_0ad1685b0e90c448a02df66e8d787958e6cbccd44ef2f79c7e177af968d93629_prof);

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
        return array (  128 => 25,  123 => 22,  114 => 20,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  90 => 14,  87 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
                <div class=\"txt1\">Ajoutée le {{offre.createdAt | date('d-m-y')}}</div>
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
", "EcoJobAdminBundle:Admin:offres.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\AdminBundle/Resources/views/Admin/offres.html.twig");
    }
}
