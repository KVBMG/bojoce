<?php

/* EcoJobCandidatBundle::layout.html.twig */
class __TwigTemplate_9a9f9f5a4ad52bb8d6dcf1dabe758f17a6f9499286ae6fa2d0127fc7eeddbedd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobCandidatBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_280bead40c5b762e89144b25b3269e1f4ebddb00467dcbb990e0f024455d5f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280bead40c5b762e89144b25b3269e1f4ebddb00467dcbb990e0f024455d5f02->enter($__internal_280bead40c5b762e89144b25b3269e1f4ebddb00467dcbb990e0f024455d5f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_280bead40c5b762e89144b25b3269e1f4ebddb00467dcbb990e0f024455d5f02->leave($__internal_280bead40c5b762e89144b25b3269e1f4ebddb00467dcbb990e0f024455d5f02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d68944c2eec5f949f287b2cc4acd043c05bb5818cf437b6dca578bab4c56fca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68944c2eec5f949f287b2cc4acd043c05bb5818cf437b6dca578bab4c56fca1->enter($__internal_d68944c2eec5f949f287b2cc4acd043c05bb5818cf437b6dca578bab4c56fca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d68944c2eec5f949f287b2cc4acd043c05bb5818cf437b6dca578bab4c56fca1->leave($__internal_d68944c2eec5f949f287b2cc4acd043c05bb5818cf437b6dca578bab4c56fca1_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_284a473ba5f35e29c478d824f6a51bb58571114be3a8350d681c725d100bff3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284a473ba5f35e29c478d824f6a51bb58571114be3a8350d681c725d100bff3f->enter($__internal_284a473ba5f35e29c478d824f6a51bb58571114be3a8350d681c725d100bff3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    ";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
    <div id=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"latest_news\">
                        <div class=\"title7\">Candidat side bar</div>
                        <ul>
                            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_cv_fill");
        echo "\"> Remplir mon CV</a></li>
                            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_cv_show");
        echo "\"> Voir mon CV</a></li>
                            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_myoffres");
        echo "\"> Offres d'emploi sauvegardées (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "saved"), "method"), "html", null, true);
        echo ")</a></li>
                            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_postuled_offres");
        echo "\"> Offres d'emploi postulés (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "postuled"), "method"), "html", null, true);
        echo ")</a></li>
                            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_param");
        echo "\"> Paramètre</a></li>
                            </li>
                        </ul>
                    </div>
                </div>                
                <div class=\"col-sm-8\">
                    ";
        // line 23
        $this->displayBlock('scontent', $context, $blocks);
        // line 26
        echo "    
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_284a473ba5f35e29c478d824f6a51bb58571114be3a8350d681c725d100bff3f->leave($__internal_284a473ba5f35e29c478d824f6a51bb58571114be3a8350d681c725d100bff3f_prof);

    }

    // line 23
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_ec7dd3c2f68686051d6fdb885129456fa1cb2db64ef922b616f8b00167c65aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7dd3c2f68686051d6fdb885129456fa1cb2db64ef922b616f8b00167c65aef->enter($__internal_ec7dd3c2f68686051d6fdb885129456fa1cb2db64ef922b616f8b00167c65aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 24
        echo "                        <div class=\"title6\">Contenu pour un candidat</div>

                    ";
        
        $__internal_ec7dd3c2f68686051d6fdb885129456fa1cb2db64ef922b616f8b00167c65aef->leave($__internal_ec7dd3c2f68686051d6fdb885129456fa1cb2db64ef922b616f8b00167c65aef_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 24,  110 => 23,  97 => 26,  95 => 23,  86 => 17,  80 => 16,  74 => 15,  70 => 14,  66 => 13,  55 => 5,  47 => 4,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %}{% endblock %}

{% block content %} 
    {{parent()}} 
    <div id=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"latest_news\">
                        <div class=\"title7\">Candidat side bar</div>
                        <ul>
                            <li><a href=\"{{path('eco_job_candidat_cv_fill')}}\"> Remplir mon CV</a></li>
                            <li><a href=\"{{path('eco_job_candidat_cv_show')}}\"> Voir mon CV</a></li>
                            <li><a href=\"{{path('eco_job_candidat_myoffres')}}\"> Offres d'emploi sauvegardées ({{app.session.get('saved')}})</a></li>
                            <li><a href=\"{{path('eco_job_candidat_postuled_offres')}}\"> Offres d'emploi postulés ({{app.session.get('postuled')}})</a></li>
                            <li><a href=\"{{path('eco_job_candidat_param')}}\"> Paramètre</a></li>
                            </li>
                        </ul>
                    </div>
                </div>                
                <div class=\"col-sm-8\">
                    {% block scontent %}
                        <div class=\"title6\">Contenu pour un candidat</div>

                    {% endblock %}    
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}                
", "EcoJobCandidatBundle::layout.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/layout.html.twig");
    }
}
