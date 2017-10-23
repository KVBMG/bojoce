<?php

/* EcoJobRecruteurBundle:Recruteur:candidatures.html.twig */
class __TwigTemplate_52b4c520419df0e7292746dc3848bf62af5ad1a5a0b794efe8b566ffd50e9b52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobRecruteurBundle::layout.html.twig", "EcoJobRecruteurBundle:Recruteur:candidatures.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'offres' => array($this, 'block_offres'),
            'scontent' => array($this, 'block_scontent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobRecruteurBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_359630d8738e3a2ce6ae143fea2ac8fa3c4b987d8dc7e69848ff054a8e74355e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359630d8738e3a2ce6ae143fea2ac8fa3c4b987d8dc7e69848ff054a8e74355e->enter($__internal_359630d8738e3a2ce6ae143fea2ac8fa3c4b987d8dc7e69848ff054a8e74355e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:candidatures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_359630d8738e3a2ce6ae143fea2ac8fa3c4b987d8dc7e69848ff054a8e74355e->leave($__internal_359630d8738e3a2ce6ae143fea2ac8fa3c4b987d8dc7e69848ff054a8e74355e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6ca5d62b10d177af5be3ea2336a5d9133b7641afcc4fd5976ddf02e87f0b9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ca5d62b10d177af5be3ea2336a5d9133b7641afcc4fd5976ddf02e87f0b9e4->enter($__internal_c6ca5d62b10d177af5be3ea2336a5d9133b7641afcc4fd5976ddf02e87f0b9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes offres";
        
        $__internal_c6ca5d62b10d177af5be3ea2336a5d9133b7641afcc4fd5976ddf02e87f0b9e4->leave($__internal_c6ca5d62b10d177af5be3ea2336a5d9133b7641afcc4fd5976ddf02e87f0b9e4_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_387f15228fd93497866ec3b63d0d3c4e34074861f2d490a1452f16ff1a8b4d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387f15228fd93497866ec3b63d0d3c4e34074861f2d490a1452f16ff1a8b4d1e->enter($__internal_387f15228fd93497866ec3b63d0d3c4e34074861f2d490a1452f16ff1a8b4d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Recruteur ";
        
        $__internal_387f15228fd93497866ec3b63d0d3c4e34074861f2d490a1452f16ff1a8b4d1e->leave($__internal_387f15228fd93497866ec3b63d0d3c4e34074861f2d490a1452f16ff1a8b4d1e_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_b7e80accde0ce2254cc3f589b4867601689c8eeaca0c7a9d9516e010a334380e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e80accde0ce2254cc3f589b4867601689c8eeaca0c7a9d9516e010a334380e->enter($__internal_b7e80accde0ce2254cc3f589b4867601689c8eeaca0c7a9d9516e010a334380e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Candidatures";
        
        $__internal_b7e80accde0ce2254cc3f589b4867601689c8eeaca0c7a9d9516e010a334380e->leave($__internal_b7e80accde0ce2254cc3f589b4867601689c8eeaca0c7a9d9516e010a334380e_prof);

    }

    // line 9
    public function block_offres($context, array $blocks = array())
    {
        $__internal_eb32a9e8cebb89a763eb389913bdfbb6e7379e4a0e0f4af523b92dbf7c48c325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb32a9e8cebb89a763eb389913bdfbb6e7379e4a0e0f4af523b92dbf7c48c325->enter($__internal_eb32a9e8cebb89a763eb389913bdfbb6e7379e4a0e0f4af523b92dbf7c48c325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "offres"));

        // line 10
        echo "    ";
        $this->displayParentBlock("offres", $context, $blocks);
        echo "
    <div class=\"latest_news row\" style=\"padding: 5px;\">
        <div class=\"col-md-6\"><h4>Offres</h4></div>
        <div class=\"col-md-6\"><h4>Candidatures</h4></div>
    </div>
    <div class=\"latest_news row\" style=\"padding: 5px;\">
        <div class=\"col-md-6 srollko list-group\" id=\"offreList\" style=\"height: 350px;\">
        </div>
        <div class=\"col-md-6 srollko list-group\" id=\"candidatureList\" style=\"height: 350px;\">
        </div>
    </div>
    <div id=\"user-id-hidden\" style=\"visibility: hidden;\" data-user-id=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["user_id"] ?? $this->getContext($context, "user_id")), "html", null, true);
        echo "\"></div>
";
        
        $__internal_eb32a9e8cebb89a763eb389913bdfbb6e7379e4a0e0f4af523b92dbf7c48c325->leave($__internal_eb32a9e8cebb89a763eb389913bdfbb6e7379e4a0e0f4af523b92dbf7c48c325_prof);

    }

    // line 24
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_54581f837fd285ac8cd9b584a07d003c448e061250b0303f69df44f8c0891eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54581f837fd285ac8cd9b584a07d003c448e061250b0303f69df44f8c0891eef->enter($__internal_54581f837fd285ac8cd9b584a07d003c448e061250b0303f69df44f8c0891eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 25
        echo "    <div class=\"latest_news\">
        <div class=\"title2\">Informations supplémentaires</div>

    </div>
    <div id=\"c-d\" class=\"latest_news\" >
        <div class=\"alert alert-info\">En attente de votre choix....</div>
    </div>

    ";
        // line 33
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "

";
        
        $__internal_54581f837fd285ac8cd9b584a07d003c448e061250b0303f69df44f8c0891eef->leave($__internal_54581f837fd285ac8cd9b584a07d003c448e061250b0303f69df44f8c0891eef_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea75bfe36780e5b2e45ef35b664778f234975becda49c90e03ecfb2de17f80da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea75bfe36780e5b2e45ef35b664778f234975becda49c90e03ecfb2de17f80da->enter($__internal_ea75bfe36780e5b2e45ef35b664778f234975becda49c90e03ecfb2de17f80da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/candidature.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ea75bfe36780e5b2e45ef35b664778f234975becda49c90e03ecfb2de17f80da->leave($__internal_ea75bfe36780e5b2e45ef35b664778f234975becda49c90e03ecfb2de17f80da_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:candidatures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  142 => 39,  137 => 38,  131 => 37,  121 => 33,  111 => 25,  105 => 24,  96 => 21,  81 => 10,  75 => 9,  63 => 7,  51 => 5,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobRecruteurBundle::layout.html.twig\"%}

{% block title %} Mes offres{% endblock %}

{% block content_title %} Recruteur {% endblock %}

{% block content_stitle %}Candidatures{% endblock %}

{% block offres %}
    {{ parent() }}
    <div class=\"latest_news row\" style=\"padding: 5px;\">
        <div class=\"col-md-6\"><h4>Offres</h4></div>
        <div class=\"col-md-6\"><h4>Candidatures</h4></div>
    </div>
    <div class=\"latest_news row\" style=\"padding: 5px;\">
        <div class=\"col-md-6 srollko list-group\" id=\"offreList\" style=\"height: 350px;\">
        </div>
        <div class=\"col-md-6 srollko list-group\" id=\"candidatureList\" style=\"height: 350px;\">
        </div>
    </div>
    <div id=\"user-id-hidden\" style=\"visibility: hidden;\" data-user-id=\"{{user_id}}\"></div>
{% endblock %}

{% block scontent %}
    <div class=\"latest_news\">
        <div class=\"title2\">Informations supplémentaires</div>

    </div>
    <div id=\"c-d\" class=\"latest_news\" >
        <div class=\"alert alert-info\">En attente de votre choix....</div>
    </div>

    {{parent()}}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{asset('js/jquery.blockUI.js')}}\"></script>
    <script src=\"{{asset('js/candidature.js')}}\"></script>
{% endblock %}
", "EcoJobRecruteurBundle:Recruteur:candidatures.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/candidatures.html.twig");
    }
}
