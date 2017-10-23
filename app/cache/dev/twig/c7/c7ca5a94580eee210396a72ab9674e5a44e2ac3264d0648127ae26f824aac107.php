<?php

/* EcoJobRecruteurBundle::layout.html.twig */
class __TwigTemplate_66b9212c5066d0e4716279aec203c41094dca8375d8d91ca374eaf2377a5e56a extends Twig_Template
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
        $__internal_b5cde5f1a3e2cf923728501e5cd2566f23d86cc1142a8b0ba67e5869aa5cc19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cde5f1a3e2cf923728501e5cd2566f23d86cc1142a8b0ba67e5869aa5cc19b->enter($__internal_b5cde5f1a3e2cf923728501e5cd2566f23d86cc1142a8b0ba67e5869aa5cc19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5cde5f1a3e2cf923728501e5cd2566f23d86cc1142a8b0ba67e5869aa5cc19b->leave($__internal_b5cde5f1a3e2cf923728501e5cd2566f23d86cc1142a8b0ba67e5869aa5cc19b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff471d08574292fa1a6c5f0652414858bb5f799f3e5624544df1c18c4ce80724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff471d08574292fa1a6c5f0652414858bb5f799f3e5624544df1c18c4ce80724->enter($__internal_ff471d08574292fa1a6c5f0652414858bb5f799f3e5624544df1c18c4ce80724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ff471d08574292fa1a6c5f0652414858bb5f799f3e5624544df1c18c4ce80724->leave($__internal_ff471d08574292fa1a6c5f0652414858bb5f799f3e5624544df1c18c4ce80724_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_19e1fcf1f19b28490a3e9807232a13b3824a5d395002bd6049058ba84ef15408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e1fcf1f19b28490a3e9807232a13b3824a5d395002bd6049058ba84ef15408->enter($__internal_19e1fcf1f19b28490a3e9807232a13b3824a5d395002bd6049058ba84ef15408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_19e1fcf1f19b28490a3e9807232a13b3824a5d395002bd6049058ba84ef15408->leave($__internal_19e1fcf1f19b28490a3e9807232a13b3824a5d395002bd6049058ba84ef15408_prof);

    }

    // line 17
    public function block_offres($context, array $blocks = array())
    {
        $__internal_84ee7983b1c7d552e79916e79485b4d35146a89728919d2f305e633489874502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ee7983b1c7d552e79916e79485b4d35146a89728919d2f305e633489874502->enter($__internal_84ee7983b1c7d552e79916e79485b4d35146a89728919d2f305e633489874502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offres"));

        echo " ";
        
        $__internal_84ee7983b1c7d552e79916e79485b4d35146a89728919d2f305e633489874502->leave($__internal_84ee7983b1c7d552e79916e79485b4d35146a89728919d2f305e633489874502_prof);

    }

    // line 28
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_184f2655ca49f166f9474baf7e25b5647472438bb4020ca2daf8ce7e23556c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184f2655ca49f166f9474baf7e25b5647472438bb4020ca2daf8ce7e23556c9e->enter($__internal_184f2655ca49f166f9474baf7e25b5647472438bb4020ca2daf8ce7e23556c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 29
        echo "                    ";
        
        $__internal_184f2655ca49f166f9474baf7e25b5647472438bb4020ca2daf8ce7e23556c9e->leave($__internal_184f2655ca49f166f9474baf7e25b5647472438bb4020ca2daf8ce7e23556c9e_prof);

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
