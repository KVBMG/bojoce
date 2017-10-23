<?php

/* EcoJobCandidatBundle::layout.html.twig */
class __TwigTemplate_a4414f6b75806ccc5e6f7ac649356947478f3ec2369a0056bbdf1f1a0b09ee32 extends Twig_Template
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
        $__internal_84cf4e7752b027c70bfed9bd6e592411e580d94d3f89871af39ffc8ee8b37389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84cf4e7752b027c70bfed9bd6e592411e580d94d3f89871af39ffc8ee8b37389->enter($__internal_84cf4e7752b027c70bfed9bd6e592411e580d94d3f89871af39ffc8ee8b37389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84cf4e7752b027c70bfed9bd6e592411e580d94d3f89871af39ffc8ee8b37389->leave($__internal_84cf4e7752b027c70bfed9bd6e592411e580d94d3f89871af39ffc8ee8b37389_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7057a4ea74ba554e9a65abc07c72aea8ac0cf1b224cce5576f900d1236cec3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7057a4ea74ba554e9a65abc07c72aea8ac0cf1b224cce5576f900d1236cec3c->enter($__internal_d7057a4ea74ba554e9a65abc07c72aea8ac0cf1b224cce5576f900d1236cec3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d7057a4ea74ba554e9a65abc07c72aea8ac0cf1b224cce5576f900d1236cec3c->leave($__internal_d7057a4ea74ba554e9a65abc07c72aea8ac0cf1b224cce5576f900d1236cec3c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_356ee0bed0c9b361051a6b2e57899f374453f4329b43375bc78d1a59a1f6c027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356ee0bed0c9b361051a6b2e57899f374453f4329b43375bc78d1a59a1f6c027->enter($__internal_356ee0bed0c9b361051a6b2e57899f374453f4329b43375bc78d1a59a1f6c027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "\"> Offres d'emploi sauvegardées</a></li>
                            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_postuled_offres");
        echo "\"> Offres d'emploi postulés</a></li>
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
        
        $__internal_356ee0bed0c9b361051a6b2e57899f374453f4329b43375bc78d1a59a1f6c027->leave($__internal_356ee0bed0c9b361051a6b2e57899f374453f4329b43375bc78d1a59a1f6c027_prof);

    }

    // line 23
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_b3eb625f5c26147079dd18b49abe9d0b8219c6272b1422b9cf5f965fb0b19029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3eb625f5c26147079dd18b49abe9d0b8219c6272b1422b9cf5f965fb0b19029->enter($__internal_b3eb625f5c26147079dd18b49abe9d0b8219c6272b1422b9cf5f965fb0b19029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 24
        echo "                        <div class=\"title6\">Contenu pour un candidat</div>

                    ";
        
        $__internal_b3eb625f5c26147079dd18b49abe9d0b8219c6272b1422b9cf5f965fb0b19029->leave($__internal_b3eb625f5c26147079dd18b49abe9d0b8219c6272b1422b9cf5f965fb0b19029_prof);

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
        return array (  112 => 24,  106 => 23,  93 => 26,  91 => 23,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  55 => 5,  47 => 4,  36 => 2,  11 => 1,);
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
                            <li><a href=\"{{path('eco_job_candidat_myoffres')}}\"> Offres d'emploi sauvegardées</a></li>
                            <li><a href=\"{{path('eco_job_candidat_postuled_offres')}}\"> Offres d'emploi postulés</a></li>
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
