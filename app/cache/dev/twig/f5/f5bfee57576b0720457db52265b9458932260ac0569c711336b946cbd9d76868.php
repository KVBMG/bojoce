<?php

/* EcoJobAdminBundle::layout.html.twig */
class __TwigTemplate_2cadc6b7985f0faba6776eff3865c6756ec2063f826661d66d3582f7606a6083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
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
        $__internal_65450e79e59440c8932ec69cd68af63e05f12468e81bf182a7130bd48b7f91dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65450e79e59440c8932ec69cd68af63e05f12468e81bf182a7130bd48b7f91dd->enter($__internal_65450e79e59440c8932ec69cd68af63e05f12468e81bf182a7130bd48b7f91dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65450e79e59440c8932ec69cd68af63e05f12468e81bf182a7130bd48b7f91dd->leave($__internal_65450e79e59440c8932ec69cd68af63e05f12468e81bf182a7130bd48b7f91dd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8df4dec4ca6fb45983c1f0cf7c4b9eac930d51be4230ddbb4c7754c07eb0fa42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df4dec4ca6fb45983c1f0cf7c4b9eac930d51be4230ddbb4c7754c07eb0fa42->enter($__internal_8df4dec4ca6fb45983c1f0cf7c4b9eac930d51be4230ddbb4c7754c07eb0fa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8df4dec4ca6fb45983c1f0cf7c4b9eac930d51be4230ddbb4c7754c07eb0fa42->leave($__internal_8df4dec4ca6fb45983c1f0cf7c4b9eac930d51be4230ddbb4c7754c07eb0fa42_prof);

    }

    // line 3
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_a1baddcf76b0cb7ac00a5f2d9677371fd1562be38c8a2d9289076d96d16876d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1baddcf76b0cb7ac00a5f2d9677371fd1562be38c8a2d9289076d96d16876d5->enter($__internal_a1baddcf76b0cb7ac00a5f2d9677371fd1562be38c8a2d9289076d96d16876d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Administration ";
        
        $__internal_a1baddcf76b0cb7ac00a5f2d9677371fd1562be38c8a2d9289076d96d16876d5->leave($__internal_a1baddcf76b0cb7ac00a5f2d9677371fd1562be38c8a2d9289076d96d16876d5_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_f86c1139f6857ad77051b3d4f6d36493de4972ecddcb3c5d4a81593215db4a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86c1139f6857ad77051b3d4f6d36493de4972ecddcb3c5d4a81593215db4a3c->enter($__internal_f86c1139f6857ad77051b3d4f6d36493de4972ecddcb3c5d4a81593215db4a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <div class=\"title7\">Administration side bar</div>
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_users");
        echo "\"> Liste des nouveaux utilisateurs (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "newUsers"), "method"), "html", null, true);
        echo ") </a>                        
                        <br><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres");
        echo "\"> Offres en attentes de validation </a> 
                         <br><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_expirer");
        echo "\"> Offres exprirés (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "expired"), "method"), "html", null, true);
        echo ")</a>
                         <br><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_edited");
        echo "\"> Offres modifiées et en attente de validation </a>
                        <br><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_categorie");
        echo "\"> Secteur d'activité</a> 
                        <br><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_users_dashoard");
        echo "\"> Utilisateurs (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "users"), "method"), "html", null, true);
        echo ") </a>
                        <br><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_all");
        echo "\"> Toutes les Offres (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "offres"), "method"), "html", null, true);
        echo ") </a>
                    </div>
                </div>                
                <div class=\"col-sm-8\">
                    ";
        // line 22
        $this->displayBlock('scontent', $context, $blocks);
        // line 24
        echo "    
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_f86c1139f6857ad77051b3d4f6d36493de4972ecddcb3c5d4a81593215db4a3c->leave($__internal_f86c1139f6857ad77051b3d4f6d36493de4972ecddcb3c5d4a81593215db4a3c_prof);

    }

    // line 22
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_451c6293510dac25fc0e639ff2854263568bce85503f9bab8d3358a207e8b45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451c6293510dac25fc0e639ff2854263568bce85503f9bab8d3358a207e8b45d->enter($__internal_451c6293510dac25fc0e639ff2854263568bce85503f9bab8d3358a207e8b45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 23
        echo "                    <div class=\"title6\">Contenu pour un administrateur</div>
                ";
        
        $__internal_451c6293510dac25fc0e639ff2854263568bce85503f9bab8d3358a207e8b45d->leave($__internal_451c6293510dac25fc0e639ff2854263568bce85503f9bab8d3358a207e8b45d_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 23,  131 => 22,  119 => 24,  117 => 22,  108 => 18,  102 => 17,  98 => 16,  94 => 15,  88 => 14,  84 => 13,  78 => 12,  68 => 5,  60 => 4,  48 => 3,  37 => 2,  11 => 1,);
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
{% block content_stitle %} Administration {% endblock %}
{% block content %} 
    {{parent()}} 
    <div id=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"latest_news\">
                        <div class=\"title7\">Administration side bar</div>
                        <a href=\"{{path('eco_job_admin_users')}}\"> Liste des nouveaux utilisateurs ({{app.session.get('newUsers')}}) </a>                        
                        <br><a href=\"{{path('eco_job_admin_offres')}}\"> Offres en attentes de validation </a> 
                         <br><a href=\"{{path('eco_job_admin_offres_expirer')}}\"> Offres exprirés ({{app.session.get('expired')}})</a>
                         <br><a href=\"{{path('eco_job_admin_offres_edited')}}\"> Offres modifiées et en attente de validation </a>
                        <br><a href=\"{{path('eco_job_admin_offres_categorie')}}\"> Secteur d'activité</a> 
                        <br><a href=\"{{path('eco_job_admin_users_dashoard')}}\"> Utilisateurs ({{app.session.get('users')}}) </a>
                        <br><a href=\"{{path('eco_job_admin_offres_all')}}\"> Toutes les Offres ({{app.session.get('offres')}}) </a>
                    </div>
                </div>                
                <div class=\"col-sm-8\">
                    {% block scontent %}
                    <div class=\"title6\">Contenu pour un administrateur</div>
                {% endblock %}    
                </div>
            </div>
        </div>
    </div>
{% endblock %}                ", "EcoJobAdminBundle::layout.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/layout.html.twig");
    }
}
