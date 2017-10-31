<?php

/* EcoJobRecruteurBundle::layout.html.twig */
class __TwigTemplate_c2863dcbd56e4dec0ebe7f58cacd981bbc0419cd5799dd65b320132c7e764834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobRecruteurBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'offres' => array($this, 'block_offres'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a9ad115ba6652f9aa28bbf2bbf8b643fe3f13961ffb49f9a6a08350e4ff1946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9ad115ba6652f9aa28bbf2bbf8b643fe3f13961ffb49f9a6a08350e4ff1946->enter($__internal_5a9ad115ba6652f9aa28bbf2bbf8b643fe3f13961ffb49f9a6a08350e4ff1946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a9ad115ba6652f9aa28bbf2bbf8b643fe3f13961ffb49f9a6a08350e4ff1946->leave($__internal_5a9ad115ba6652f9aa28bbf2bbf8b643fe3f13961ffb49f9a6a08350e4ff1946_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef830eff1e690f27737dd7efdff4bca07ca6f0076d7db1a323ce79d709da5dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef830eff1e690f27737dd7efdff4bca07ca6f0076d7db1a323ce79d709da5dfb->enter($__internal_ef830eff1e690f27737dd7efdff4bca07ca6f0076d7db1a323ce79d709da5dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ef830eff1e690f27737dd7efdff4bca07ca6f0076d7db1a323ce79d709da5dfb->leave($__internal_ef830eff1e690f27737dd7efdff4bca07ca6f0076d7db1a323ce79d709da5dfb_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_c43d4ef7cd898405dc3cdde182e99ec7088ea2723603c6729bbbcad29632e308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43d4ef7cd898405dc3cdde182e99ec7088ea2723603c6729bbbcad29632e308->enter($__internal_c43d4ef7cd898405dc3cdde182e99ec7088ea2723603c6729bbbcad29632e308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 
    ";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
    <div id=\"content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"latest_news row\">
                        <ul>
                            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_create");
        echo "\">Ajouter une offre d'emploi </a></li>
                            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_list");
        echo "\"> Mes offres d'emploi (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "offres"), "method"), "html", null, true);
        echo ") </a></li>
                            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_candidatures_list");
        echo "\">Candidatures (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "candidatures"), "method"), "html", null, true);
        echo ")</a></li>
                            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-default btn3\">Modifier nom et/ou email</a></li>
                            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" class=\"btn btn-default btn3\">Modifier nom mot de passe</a></li>                                                    
                        </ul>
                    </div>
                    ";
        // line 19
        $this->displayBlock('offres', $context, $blocks);
        // line 20
        echo "                </div>                
                <div class=\"col-sm-8\">
                    ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 23
            echo "                       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 24
                echo "                            <div class=\"alert alert-succes alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>";
                // line 26
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</strong>
                            </div>
                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                    ";
        $this->displayBlock('scontent', $context, $blocks);
        // line 32
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c43d4ef7cd898405dc3cdde182e99ec7088ea2723603c6729bbbcad29632e308->leave($__internal_c43d4ef7cd898405dc3cdde182e99ec7088ea2723603c6729bbbcad29632e308_prof);

    }

    // line 19
    public function block_offres($context, array $blocks = array())
    {
        $__internal_77c4b6a6b16a14ea231a7c08c375a9da9ced02468ed3092c23cd0ffc45d0d206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c4b6a6b16a14ea231a7c08c375a9da9ced02468ed3092c23cd0ffc45d0d206->enter($__internal_77c4b6a6b16a14ea231a7c08c375a9da9ced02468ed3092c23cd0ffc45d0d206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offres"));

        echo " ";
        
        $__internal_77c4b6a6b16a14ea231a7c08c375a9da9ced02468ed3092c23cd0ffc45d0d206->leave($__internal_77c4b6a6b16a14ea231a7c08c375a9da9ced02468ed3092c23cd0ffc45d0d206_prof);

    }

    // line 30
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_75bdc5bc0eaf20c9db05e2a43a4732012fe30c9df00891e5c3e185e994c3a27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bdc5bc0eaf20c9db05e2a43a4732012fe30c9df00891e5c3e185e994c3a27b->enter($__internal_75bdc5bc0eaf20c9db05e2a43a4732012fe30c9df00891e5c3e185e994c3a27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 31
        echo "                    ";
        
        $__internal_75bdc5bc0eaf20c9db05e2a43a4732012fe30c9df00891e5c3e185e994c3a27b->leave($__internal_75bdc5bc0eaf20c9db05e2a43a4732012fe30c9df00891e5c3e185e994c3a27b_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 31,  147 => 30,  135 => 19,  124 => 32,  121 => 30,  118 => 29,  109 => 26,  105 => 24,  100 => 23,  98 => 22,  94 => 20,  92 => 19,  86 => 16,  82 => 15,  76 => 14,  70 => 13,  66 => 12,  56 => 5,  48 => 4,  37 => 2,  11 => 1,);
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
                    <div class=\"latest_news row\">
                        <ul>
                            <li><a href=\"{{path('eco_job_recruteur_offre_create')}}\">Ajouter une offre d'emploi </a></li>
                            <li><a href=\"{{path('eco_job_recruteur_offre_list')}}\"> Mes offres d'emploi ({{app.session.get('offres')}}) </a></li>
                            <li><a href=\"{{ path('eco_job_recruteur_candidatures_list') }}\">Candidatures ({{app.session.get('candidatures')}})</a></li>
                            <li><a href=\"{{path('fos_user_profile_edit')}}\" class=\"btn btn-default btn3\">Modifier nom et/ou email</a></li>
                            <li><a href=\"{{path('fos_user_change_password')}}\" class=\"btn btn-default btn3\">Modifier nom mot de passe</a></li>                                                    
                        </ul>
                    </div>
                    {% block offres %} {% endblock %}
                </div>                
                <div class=\"col-sm-8\">
                    {% if app.request.hasPreviousSession %}
                       {% for flashMessage in app.session.flashBag.get('success') %}
                            <div class=\"alert alert-succes alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>{{ flashMessage }}</strong>
                            </div>
                       {% endfor %}
                    {% endif %}
                    {% block scontent %}
                    {% endblock %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}                ", "EcoJobRecruteurBundle::layout.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\RecruteurBundle/Resources/views/layout.html.twig");
    }
}
