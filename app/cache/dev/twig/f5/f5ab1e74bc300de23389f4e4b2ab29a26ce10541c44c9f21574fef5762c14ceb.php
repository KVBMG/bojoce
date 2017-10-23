<?php

/* EcoJobAdminBundle::layout.html.twig */
class __TwigTemplate_4475bbe3feafc8d969e2228afbfc1a8513b82962948722c91ba2b6f1d62e6c9a extends Twig_Template
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
        $__internal_bc590d23f2445b417b4b0a10b383c2ee07a447aba14c15066af6c4b3300d6c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc590d23f2445b417b4b0a10b383c2ee07a447aba14c15066af6c4b3300d6c91->enter($__internal_bc590d23f2445b417b4b0a10b383c2ee07a447aba14c15066af6c4b3300d6c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc590d23f2445b417b4b0a10b383c2ee07a447aba14c15066af6c4b3300d6c91->leave($__internal_bc590d23f2445b417b4b0a10b383c2ee07a447aba14c15066af6c4b3300d6c91_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5afb0cc620183bba30eb81a3b36640f6fbc3a1a6d39e11305564754036beadad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afb0cc620183bba30eb81a3b36640f6fbc3a1a6d39e11305564754036beadad->enter($__internal_5afb0cc620183bba30eb81a3b36640f6fbc3a1a6d39e11305564754036beadad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5afb0cc620183bba30eb81a3b36640f6fbc3a1a6d39e11305564754036beadad->leave($__internal_5afb0cc620183bba30eb81a3b36640f6fbc3a1a6d39e11305564754036beadad_prof);

    }

    // line 3
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_8b10a73984c6de85688312e5d1a9040919dae1a8bfb1c8591a912a5f5b9e4c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b10a73984c6de85688312e5d1a9040919dae1a8bfb1c8591a912a5f5b9e4c02->enter($__internal_8b10a73984c6de85688312e5d1a9040919dae1a8bfb1c8591a912a5f5b9e4c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Administration ";
        
        $__internal_8b10a73984c6de85688312e5d1a9040919dae1a8bfb1c8591a912a5f5b9e4c02->leave($__internal_8b10a73984c6de85688312e5d1a9040919dae1a8bfb1c8591a912a5f5b9e4c02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_5620339887dbdc65855c2c7d592879364cba00e5df69a56d0a6de4979fbf9685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5620339887dbdc65855c2c7d592879364cba00e5df69a56d0a6de4979fbf9685->enter($__internal_5620339887dbdc65855c2c7d592879364cba00e5df69a56d0a6de4979fbf9685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_categorie");
        echo "\"> Secteur d'activité</a> 
                        <br><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_users_dashoard");
        echo "\"> Utilisateurs </a>
                        <br><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_admin_offres_all");
        echo "\"> Toutes les Offres </a>
                    </div>
                </div>                
                <div class=\"col-sm-8\">
                    ";
        // line 21
        $this->displayBlock('scontent', $context, $blocks);
        // line 23
        echo "    
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5620339887dbdc65855c2c7d592879364cba00e5df69a56d0a6de4979fbf9685->leave($__internal_5620339887dbdc65855c2c7d592879364cba00e5df69a56d0a6de4979fbf9685_prof);

    }

    // line 21
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_7cf9b22183a5178bd5b69645927ba508744f536fe7ba9c2fa396e91ff309f0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf9b22183a5178bd5b69645927ba508744f536fe7ba9c2fa396e91ff309f0e8->enter($__internal_7cf9b22183a5178bd5b69645927ba508744f536fe7ba9c2fa396e91ff309f0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 22
        echo "                    <div class=\"title6\">Contenu pour un administrateur</div>
                ";
        
        $__internal_7cf9b22183a5178bd5b69645927ba508744f536fe7ba9c2fa396e91ff309f0e8->leave($__internal_7cf9b22183a5178bd5b69645927ba508744f536fe7ba9c2fa396e91ff309f0e8_prof);

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
        return array (  125 => 22,  119 => 21,  107 => 23,  105 => 21,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  68 => 5,  60 => 4,  48 => 3,  37 => 2,  11 => 1,);
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
