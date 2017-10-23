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
        $__internal_31c19c7e8d0c2d0453bb5c75dc8b157e290a89b96dc91d2b2555cb91ec656a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c19c7e8d0c2d0453bb5c75dc8b157e290a89b96dc91d2b2555cb91ec656a16->enter($__internal_31c19c7e8d0c2d0453bb5c75dc8b157e290a89b96dc91d2b2555cb91ec656a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c19c7e8d0c2d0453bb5c75dc8b157e290a89b96dc91d2b2555cb91ec656a16->leave($__internal_31c19c7e8d0c2d0453bb5c75dc8b157e290a89b96dc91d2b2555cb91ec656a16_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb53869af3a6d8642fa38dfb498baca859106dd8d18fac67d61ba330f9eef57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb53869af3a6d8642fa38dfb498baca859106dd8d18fac67d61ba330f9eef57c->enter($__internal_cb53869af3a6d8642fa38dfb498baca859106dd8d18fac67d61ba330f9eef57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cb53869af3a6d8642fa38dfb498baca859106dd8d18fac67d61ba330f9eef57c->leave($__internal_cb53869af3a6d8642fa38dfb498baca859106dd8d18fac67d61ba330f9eef57c_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b022c3e5097d0297b1dbcb76b470ac32398db3091577f87cc17dfffaa642a101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b022c3e5097d0297b1dbcb76b470ac32398db3091577f87cc17dfffaa642a101->enter($__internal_b022c3e5097d0297b1dbcb76b470ac32398db3091577f87cc17dfffaa642a101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo "\">Ajouter une offre d'emploi</a></li>
                            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_offre_list");
        echo "\"> Mes offres d'emploi </a></li>
                            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_recruteur_candidatures_list");
        echo "\">Candidatures</a></li>
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
        
        $__internal_b022c3e5097d0297b1dbcb76b470ac32398db3091577f87cc17dfffaa642a101->leave($__internal_b022c3e5097d0297b1dbcb76b470ac32398db3091577f87cc17dfffaa642a101_prof);

    }

    // line 17
    public function block_offres($context, array $blocks = array())
    {
        $__internal_f8486b31154b8d28be2dc698f9a3ed87b15b292d5a47da1310cec4ab2dbccc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8486b31154b8d28be2dc698f9a3ed87b15b292d5a47da1310cec4ab2dbccc0f->enter($__internal_f8486b31154b8d28be2dc698f9a3ed87b15b292d5a47da1310cec4ab2dbccc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offres"));

        echo " ";
        
        $__internal_f8486b31154b8d28be2dc698f9a3ed87b15b292d5a47da1310cec4ab2dbccc0f->leave($__internal_f8486b31154b8d28be2dc698f9a3ed87b15b292d5a47da1310cec4ab2dbccc0f_prof);

    }

    // line 28
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_f0eface4eac5c10f94f55088fea413aa1f049a9f0d414c616c4844243663a67a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0eface4eac5c10f94f55088fea413aa1f049a9f0d414c616c4844243663a67a->enter($__internal_f0eface4eac5c10f94f55088fea413aa1f049a9f0d414c616c4844243663a67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 29
        echo "                    ";
        
        $__internal_f0eface4eac5c10f94f55088fea413aa1f049a9f0d414c616c4844243663a67a->leave($__internal_f0eface4eac5c10f94f55088fea413aa1f049a9f0d414c616c4844243663a67a_prof);

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
        return array (  141 => 29,  135 => 28,  123 => 17,  112 => 30,  109 => 28,  106 => 27,  97 => 24,  93 => 22,  88 => 21,  86 => 20,  82 => 18,  80 => 17,  74 => 14,  70 => 13,  66 => 12,  56 => 5,  48 => 4,  37 => 2,  11 => 1,);
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
                            <li><a href=\"{{path('eco_job_recruteur_offre_create')}}\">Ajouter une offre d'emploi</a></li>
                            <li><a href=\"{{path('eco_job_recruteur_offre_list')}}\"> Mes offres d'emploi </a></li>
                            <li><a href=\"{{ path('eco_job_recruteur_candidatures_list') }}\">Candidatures</a></li>
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
