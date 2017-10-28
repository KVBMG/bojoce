<?php

/* EcoJobRecruteurBundle::layout.html.twig */
class __TwigTemplate_f6b85369ffd4c1ed2ce4d19466bfa9325cf323ec7d4f3cff31d792727caf2055 extends Twig_Template
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
        $__internal_f0e96876b534f53bda2dcdb85bb96eb19036c246e0cdde75a1c634fb51ee7e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e96876b534f53bda2dcdb85bb96eb19036c246e0cdde75a1c634fb51ee7e9a->enter($__internal_f0e96876b534f53bda2dcdb85bb96eb19036c246e0cdde75a1c634fb51ee7e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e96876b534f53bda2dcdb85bb96eb19036c246e0cdde75a1c634fb51ee7e9a->leave($__internal_f0e96876b534f53bda2dcdb85bb96eb19036c246e0cdde75a1c634fb51ee7e9a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_17d19c452694dd412843c9e4a6a0da8e26b518ff1356bacf1bb2ecf62700d093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d19c452694dd412843c9e4a6a0da8e26b518ff1356bacf1bb2ecf62700d093->enter($__internal_17d19c452694dd412843c9e4a6a0da8e26b518ff1356bacf1bb2ecf62700d093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_17d19c452694dd412843c9e4a6a0da8e26b518ff1356bacf1bb2ecf62700d093->leave($__internal_17d19c452694dd412843c9e4a6a0da8e26b518ff1356bacf1bb2ecf62700d093_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_772e4fa8c8bfa74baadbe6456fe77d79f2275ef56338634e5f832b2f18e8bdec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772e4fa8c8bfa74baadbe6456fe77d79f2275ef56338634e5f832b2f18e8bdec->enter($__internal_772e4fa8c8bfa74baadbe6456fe77d79f2275ef56338634e5f832b2f18e8bdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "offres"), "method"), "html", null, true);
        echo ") </a></li>
                            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_candidatures_list");
        echo "\">Candidatures (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "candidatures"), "method"), "html", null, true);
        echo ")</a></li>
                        </ul>
                    </div>
                    ";
        // line 17
        $this->displayBlock('offres', $context, $blocks);
        // line 18
        echo "                </div>                
                <div class=\"col-sm-8\">
                    ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 21
            echo "                       ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 22
                echo "                            <div class=\"alert alert-succes alert-dismissible\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <strong>";
                // line 24
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "</strong>
                            </div>
                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    ";
        }
        // line 28
        echo "                    ";
        $this->displayBlock('scontent', $context, $blocks);
        // line 30
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_772e4fa8c8bfa74baadbe6456fe77d79f2275ef56338634e5f832b2f18e8bdec->leave($__internal_772e4fa8c8bfa74baadbe6456fe77d79f2275ef56338634e5f832b2f18e8bdec_prof);

    }

    // line 17
    public function block_offres($context, array $blocks = array())
    {
        $__internal_31f8d4976cb159d4c3f993b06d5562c74de0df3d501567f2f1d79181c99a0fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f8d4976cb159d4c3f993b06d5562c74de0df3d501567f2f1d79181c99a0fca->enter($__internal_31f8d4976cb159d4c3f993b06d5562c74de0df3d501567f2f1d79181c99a0fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offres"));

        echo " ";
        
        $__internal_31f8d4976cb159d4c3f993b06d5562c74de0df3d501567f2f1d79181c99a0fca->leave($__internal_31f8d4976cb159d4c3f993b06d5562c74de0df3d501567f2f1d79181c99a0fca_prof);

    }

    // line 28
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_575bbd88fe5521cf3b4d4670079ee6b704ebd1ced9f531304caee9fa1b1d79a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575bbd88fe5521cf3b4d4670079ee6b704ebd1ced9f531304caee9fa1b1d79a1->enter($__internal_575bbd88fe5521cf3b4d4670079ee6b704ebd1ced9f531304caee9fa1b1d79a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 29
        echo "                    ";
        
        $__internal_575bbd88fe5521cf3b4d4670079ee6b704ebd1ced9f531304caee9fa1b1d79a1->leave($__internal_575bbd88fe5521cf3b4d4670079ee6b704ebd1ced9f531304caee9fa1b1d79a1_prof);

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
        return array (  145 => 29,  139 => 28,  127 => 17,  116 => 30,  113 => 28,  110 => 27,  101 => 24,  97 => 22,  92 => 21,  90 => 20,  86 => 18,  84 => 17,  76 => 14,  70 => 13,  66 => 12,  56 => 5,  48 => 4,  37 => 2,  11 => 1,);
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
{% endblock %}                ", "EcoJobRecruteurBundle::layout.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/layout.html.twig");
    }
}
