<?php

/* EcoJobCandidatBundle:Candidat:myoffres.html.twig */
class __TwigTemplate_b2f7485abb24e3f220c5acc1355ac6ff8999a2d2957f199952a5bf4440e4fb26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:myoffres.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef8feaa59d43a1f591113bc4b16195c2010234330bd782fe9208a75369e3c17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8feaa59d43a1f591113bc4b16195c2010234330bd782fe9208a75369e3c17f->enter($__internal_ef8feaa59d43a1f591113bc4b16195c2010234330bd782fe9208a75369e3c17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:myoffres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef8feaa59d43a1f591113bc4b16195c2010234330bd782fe9208a75369e3c17f->leave($__internal_ef8feaa59d43a1f591113bc4b16195c2010234330bd782fe9208a75369e3c17f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df47e97bad481f1921c9f891f728082982cfb49b149743fb692604c861996ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df47e97bad481f1921c9f891f728082982cfb49b149743fb692604c861996ccb->enter($__internal_df47e97bad481f1921c9f891f728082982cfb49b149743fb692604c861996ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_df47e97bad481f1921c9f891f728082982cfb49b149743fb692604c861996ccb->leave($__internal_df47e97bad481f1921c9f891f728082982cfb49b149743fb692604c861996ccb_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_9c652219f199d999bfa47f9d7ed6813d1885f134d7ca1636dc68ccdc528c95bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c652219f199d999bfa47f9d7ed6813d1885f134d7ca1636dc68ccdc528c95bd->enter($__internal_9c652219f199d999bfa47f9d7ed6813d1885f134d7ca1636dc68ccdc528c95bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_9c652219f199d999bfa47f9d7ed6813d1885f134d7ca1636dc68ccdc528c95bd->leave($__internal_9c652219f199d999bfa47f9d7ed6813d1885f134d7ca1636dc68ccdc528c95bd_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_f485d36249e1b6969c9acd1c77093c8b15bca315dac53b7c3c86034cc587dd36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f485d36249e1b6969c9acd1c77093c8b15bca315dac53b7c3c86034cc587dd36->enter($__internal_f485d36249e1b6969c9acd1c77093c8b15bca315dac53b7c3c86034cc587dd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Les offres d'emploi sauvegardées ";
        
        $__internal_f485d36249e1b6969c9acd1c77093c8b15bca315dac53b7c3c86034cc587dd36->leave($__internal_f485d36249e1b6969c9acd1c77093c8b15bca315dac53b7c3c86034cc587dd36_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_2cd9194c14872af4353eb33a255af9242f4511ad9e46b07ffdc237ad5513eeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd9194c14872af4353eb33a255af9242f4511ad9e46b07ffdc237ad5513eeef->enter($__internal_2cd9194c14872af4353eb33a255af9242f4511ad9e46b07ffdc237ad5513eeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"latest_news\">
        <div class=\"title7\">Liste des offres d'emploi sauvegardées</div>
        ";
        // line 12
        if ( !twig_test_empty(($context["offres"] ?? $this->getContext($context, "offres")))) {
            // line 13
            echo "            Total ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["offres"] ?? $this->getContext($context, "offres"))), "html", null, true);
            echo "
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 15
                echo "                 
                    <div class=\"news1\">
                        <div class=\"txt2\"><a href=\"#\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
                echo "</a></div>
                        <div class=\"txt3\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
                echo "</div>
                        <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Afficher</a>
                        <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_offre_delete", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-default btn3\">Supprimer</a>    
                          ";
                // line 21
                if ($this->getAttribute($context["offre"], "expired", array())) {
                    // line 22
                    echo "                            <div class=\"label label-warning\"> Offre est expirée</div>     
                           ";
                }
                // line 24
                echo "                    </div>
                  
                
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        } else {
            // line 29
            echo "            aucune offre sauvegardée 
        ";
        }
        // line 31
        echo "
    </div>
</div>


";
        
        $__internal_2cd9194c14872af4353eb33a255af9242f4511ad9e46b07ffdc237ad5513eeef->leave($__internal_2cd9194c14872af4353eb33a255af9242f4511ad9e46b07ffdc237ad5513eeef_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:myoffres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 31,  132 => 29,  129 => 28,  120 => 24,  116 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  98 => 17,  94 => 15,  90 => 14,  85 => 13,  83 => 12,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobCandidatBundle::layout.html.twig\"%}

{% block title %} Mes offres{% endblock %}

{% block content_title %} Candidat {% endblock %}

{% block content_stitle %} Les offres d'emploi sauvegardées {% endblock %}

{% block scontent %}   
    <div class=\"latest_news\">
        <div class=\"title7\">Liste des offres d'emploi sauvegardées</div>
        {% if offres is not empty %}
            Total {{ offres|length }}
            {% for offre in offres %}
                 
                    <div class=\"news1\">
                        <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
                        <div class=\"txt3\">{{offre.contenu}}</div>
                        <a href=\"{{ path('eco_job_candidat_offre',{'id': offre.id})}}\" class=\"btn-default btn3\">Afficher</a>
                        <a href=\"{{ path('eco_job_candidat_offre_delete',{'id': offre.id})}}\" class=\"btn-default btn3\">Supprimer</a>    
                          {% if offre.expired %}
                            <div class=\"label label-warning\"> Offre est expirée</div>     
                           {% endif%}
                    </div>
                  
                
            {% endfor %}
        {% else %}
            aucune offre sauvegardée 
        {%endif %}

    </div>
</div>


{% endblock %}  


", "EcoJobCandidatBundle:Candidat:myoffres.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/myoffres.html.twig");
    }
}
