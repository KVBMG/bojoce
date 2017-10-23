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
        $__internal_67570c3c47c449b8fa6d6fcc2b1c19e6b70d75dd70bde4b1f3545d7419285871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67570c3c47c449b8fa6d6fcc2b1c19e6b70d75dd70bde4b1f3545d7419285871->enter($__internal_67570c3c47c449b8fa6d6fcc2b1c19e6b70d75dd70bde4b1f3545d7419285871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67570c3c47c449b8fa6d6fcc2b1c19e6b70d75dd70bde4b1f3545d7419285871->leave($__internal_67570c3c47c449b8fa6d6fcc2b1c19e6b70d75dd70bde4b1f3545d7419285871_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9176648695027985a9df2197b544941920a1c33762388ef3a69e70628b7746f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9176648695027985a9df2197b544941920a1c33762388ef3a69e70628b7746f->enter($__internal_b9176648695027985a9df2197b544941920a1c33762388ef3a69e70628b7746f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b9176648695027985a9df2197b544941920a1c33762388ef3a69e70628b7746f->leave($__internal_b9176648695027985a9df2197b544941920a1c33762388ef3a69e70628b7746f_prof);

    }

    // line 3
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_c17c16f649e81dc0332813e03dcf3102659c1655f8d0d7bd63ed657f02d147d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17c16f649e81dc0332813e03dcf3102659c1655f8d0d7bd63ed657f02d147d7->enter($__internal_c17c16f649e81dc0332813e03dcf3102659c1655f8d0d7bd63ed657f02d147d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Administration ";
        
        $__internal_c17c16f649e81dc0332813e03dcf3102659c1655f8d0d7bd63ed657f02d147d7->leave($__internal_c17c16f649e81dc0332813e03dcf3102659c1655f8d0d7bd63ed657f02d147d7_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_1529f7963a2d510ee08eaa9ffe959aba890b9ddd486036b21a85f87e40bf0ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1529f7963a2d510ee08eaa9ffe959aba890b9ddd486036b21a85f87e40bf0ef6->enter($__internal_1529f7963a2d510ee08eaa9ffe959aba890b9ddd486036b21a85f87e40bf0ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "\"> Liste des nouveaux utilisateurs </a>                        
                        <br><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres");
        echo "\"> Offres en attentes de validation </a> 
                         <br><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_expirer");
        echo "\"> Offres exprirés </a>
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
        echo "\"> Utilisateurs </a>
                        <br><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_all");
        echo "\"> Toutes les Offres </a>
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
        
        $__internal_1529f7963a2d510ee08eaa9ffe959aba890b9ddd486036b21a85f87e40bf0ef6->leave($__internal_1529f7963a2d510ee08eaa9ffe959aba890b9ddd486036b21a85f87e40bf0ef6_prof);

    }

    // line 22
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_cfedd6afef08033227948c7e4ad466253556d3758a37c00522f06695bdc5e007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfedd6afef08033227948c7e4ad466253556d3758a37c00522f06695bdc5e007->enter($__internal_cfedd6afef08033227948c7e4ad466253556d3758a37c00522f06695bdc5e007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 23
        echo "                    <div class=\"title6\">Contenu pour un administrateur</div>
                ";
        
        $__internal_cfedd6afef08033227948c7e4ad466253556d3758a37c00522f06695bdc5e007->leave($__internal_cfedd6afef08033227948c7e4ad466253556d3758a37c00522f06695bdc5e007_prof);

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
        return array (  129 => 23,  123 => 22,  111 => 24,  109 => 22,  102 => 18,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  68 => 5,  60 => 4,  48 => 3,  37 => 2,  11 => 1,);
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
                        <a href=\"{{path('eco_job_admin_users')}}\"> Liste des nouveaux utilisateurs </a>                        
                        <br><a href=\"{{path('eco_job_admin_offres')}}\"> Offres en attentes de validation </a> 
                         <br><a href=\"{{path('eco_job_admin_offres_expirer')}}\"> Offres exprirés </a>
                         <br><a href=\"{{path('eco_job_admin_offres_edited')}}\"> Offres modifiées et en attente de validation </a>
                        <br><a href=\"{{path('eco_job_admin_offres_categorie')}}\"> Secteur d'activité</a> 
                        <br><a href=\"{{path('eco_job_admin_users_dashoard')}}\"> Utilisateurs </a>
                        <br><a href=\"{{path('eco_job_admin_offres_all')}}\"> Toutes les Offres </a>
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
