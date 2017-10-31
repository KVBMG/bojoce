<?php

/* EcoJobAdminBundle::layout.html.twig */
class __TwigTemplate_81c3d6a38c458561609b8c946d43831002e084347c43af7f39256779849255a1 extends Twig_Template
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
        $__internal_358e5f6fc7c41eccd8b1c38679ce278108194605ba113b83f1a31791dc9b7656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358e5f6fc7c41eccd8b1c38679ce278108194605ba113b83f1a31791dc9b7656->enter($__internal_358e5f6fc7c41eccd8b1c38679ce278108194605ba113b83f1a31791dc9b7656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_358e5f6fc7c41eccd8b1c38679ce278108194605ba113b83f1a31791dc9b7656->leave($__internal_358e5f6fc7c41eccd8b1c38679ce278108194605ba113b83f1a31791dc9b7656_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_83f7f9137488f2d9f1316c517bc6a80b34c1b9d0b23149d744b38d7fc8dcbd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f7f9137488f2d9f1316c517bc6a80b34c1b9d0b23149d744b38d7fc8dcbd2c->enter($__internal_83f7f9137488f2d9f1316c517bc6a80b34c1b9d0b23149d744b38d7fc8dcbd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_83f7f9137488f2d9f1316c517bc6a80b34c1b9d0b23149d744b38d7fc8dcbd2c->leave($__internal_83f7f9137488f2d9f1316c517bc6a80b34c1b9d0b23149d744b38d7fc8dcbd2c_prof);

    }

    // line 3
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_04bfda1097b48d315a5df21bf33a12c680b23ea1686e85b354ce17c711626442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04bfda1097b48d315a5df21bf33a12c680b23ea1686e85b354ce17c711626442->enter($__internal_04bfda1097b48d315a5df21bf33a12c680b23ea1686e85b354ce17c711626442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Administration ";
        
        $__internal_04bfda1097b48d315a5df21bf33a12c680b23ea1686e85b354ce17c711626442->leave($__internal_04bfda1097b48d315a5df21bf33a12c680b23ea1686e85b354ce17c711626442_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_227ff31f00b2fea62edc39b31b5fd91eedd006615fd020a50c961ded864ef887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227ff31f00b2fea62edc39b31b5fd91eedd006615fd020a50c961ded864ef887->enter($__internal_227ff31f00b2fea62edc39b31b5fd91eedd006615fd020a50c961ded864ef887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "newUsers"), "method"), "html", null, true);
        echo ") </a>                        
                        <br><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres");
        echo "\"> Offres en attentes de validation (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "notvalided"), "method"), "html", null, true);
        echo ")</a> 
                         <br><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_expirer");
        echo "\"> Offres exprirés (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "expired"), "method"), "html", null, true);
        echo ")</a>
                         <br><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_suspendu");
        echo "\"> Offres suspendu (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "suspendu"), "method"), "html", null, true);
        echo ")</a>
                         <br><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_edited");
        echo "\"> Offres modifiées et en attente de validation (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "modified"), "method"), "html", null, true);
        echo ")</a>
                        <br><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_categorie");
        echo "\"> Secteur d'activité</a> 
                        <br><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_users_dashoard");
        echo "\"> Utilisateurs (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "users"), "method"), "html", null, true);
        echo ") </a>
                        <br><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_all");
        echo "\"> Toutes les Offres (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "offres"), "method"), "html", null, true);
        echo ") </a>
                    </div>
                </div>                
                <div class=\"col-sm-8\">
                    ";
        // line 23
        $this->displayBlock('scontent', $context, $blocks);
        // line 25
        echo "    
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_227ff31f00b2fea62edc39b31b5fd91eedd006615fd020a50c961ded864ef887->leave($__internal_227ff31f00b2fea62edc39b31b5fd91eedd006615fd020a50c961ded864ef887_prof);

    }

    // line 23
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_d6da074a673ab3e82475537bcf5818fb5690941de3f15d146f2e6eea32684c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6da074a673ab3e82475537bcf5818fb5690941de3f15d146f2e6eea32684c66->enter($__internal_d6da074a673ab3e82475537bcf5818fb5690941de3f15d146f2e6eea32684c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 24
        echo "                    <div class=\"title6\">Contenu pour un administrateur</div>
                ";
        
        $__internal_d6da074a673ab3e82475537bcf5818fb5690941de3f15d146f2e6eea32684c66->leave($__internal_d6da074a673ab3e82475537bcf5818fb5690941de3f15d146f2e6eea32684c66_prof);

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
        return array (  147 => 24,  141 => 23,  129 => 25,  127 => 23,  118 => 19,  112 => 18,  108 => 17,  102 => 16,  96 => 15,  90 => 14,  84 => 13,  78 => 12,  68 => 5,  60 => 4,  48 => 3,  37 => 2,  11 => 1,);
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
                        <br><a href=\"{{path('eco_job_admin_offres')}}\"> Offres en attentes de validation ({{app.session.get('notvalided')}})</a> 
                         <br><a href=\"{{path('eco_job_admin_offres_expirer')}}\"> Offres exprirés ({{app.session.get('expired')}})</a>
                         <br><a href=\"{{path('eco_job_admin_offres_suspendu')}}\"> Offres suspendu ({{app.session.get('suspendu')}})</a>
                         <br><a href=\"{{path('eco_job_admin_offres_edited')}}\"> Offres modifiées et en attente de validation ({{app.session.get('modified')}})</a>
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
{% endblock %}                ", "EcoJobAdminBundle::layout.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\AdminBundle/Resources/views/layout.html.twig");
    }
}
