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
        $__internal_f10f4eb8488a42ad21a42fe200f140002edbe4d4e0796f2b4d4b2edffb239c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10f4eb8488a42ad21a42fe200f140002edbe4d4e0796f2b4d4b2edffb239c89->enter($__internal_f10f4eb8488a42ad21a42fe200f140002edbe4d4e0796f2b4d4b2edffb239c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f10f4eb8488a42ad21a42fe200f140002edbe4d4e0796f2b4d4b2edffb239c89->leave($__internal_f10f4eb8488a42ad21a42fe200f140002edbe4d4e0796f2b4d4b2edffb239c89_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4a76d03b8487752d74f7d843ef079e6ad46ebd19f95d05cf282ab26e4c42230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a76d03b8487752d74f7d843ef079e6ad46ebd19f95d05cf282ab26e4c42230->enter($__internal_c4a76d03b8487752d74f7d843ef079e6ad46ebd19f95d05cf282ab26e4c42230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c4a76d03b8487752d74f7d843ef079e6ad46ebd19f95d05cf282ab26e4c42230->leave($__internal_c4a76d03b8487752d74f7d843ef079e6ad46ebd19f95d05cf282ab26e4c42230_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_7f3c2e7fda4bd9da9d789b10b93e2a0d089bba785685acf11d729f3705186fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3c2e7fda4bd9da9d789b10b93e2a0d089bba785685acf11d729f3705186fa7->enter($__internal_7f3c2e7fda4bd9da9d789b10b93e2a0d089bba785685acf11d729f3705186fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7f3c2e7fda4bd9da9d789b10b93e2a0d089bba785685acf11d729f3705186fa7->leave($__internal_7f3c2e7fda4bd9da9d789b10b93e2a0d089bba785685acf11d729f3705186fa7_prof);

    }

    // line 23
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_171806a3a196923be653b3c2a933e75e1dd691cbf157f987608a1c53bbc19b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171806a3a196923be653b3c2a933e75e1dd691cbf157f987608a1c53bbc19b9f->enter($__internal_171806a3a196923be653b3c2a933e75e1dd691cbf157f987608a1c53bbc19b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 24
        echo "                        <div class=\"title6\">Contenu pour un candidat</div>

                    ";
        
        $__internal_171806a3a196923be653b3c2a933e75e1dd691cbf157f987608a1c53bbc19b9f->leave($__internal_171806a3a196923be653b3c2a933e75e1dd691cbf157f987608a1c53bbc19b9f_prof);

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
