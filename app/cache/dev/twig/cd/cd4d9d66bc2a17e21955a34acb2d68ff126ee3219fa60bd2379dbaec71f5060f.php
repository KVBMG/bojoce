<?php

/* EcoJobCandidatBundle:Candidat:edit.html.twig */
class __TwigTemplate_6ef5c1e578e8ac0b2757af2ae389b0536f7c707daf5dc66716f89b5fe688259d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3152dbace78bc1b8f82fc522b960f5629a537a65f56afcdfad5a911f41860bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3152dbace78bc1b8f82fc522b960f5629a537a65f56afcdfad5a911f41860bca->enter($__internal_3152dbace78bc1b8f82fc522b960f5629a537a65f56afcdfad5a911f41860bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3152dbace78bc1b8f82fc522b960f5629a537a65f56afcdfad5a911f41860bca->leave($__internal_3152dbace78bc1b8f82fc522b960f5629a537a65f56afcdfad5a911f41860bca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_825be793f2454fe69939a0fcd4e7b14323020a1e578ba1629f74c69e2ab941f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825be793f2454fe69939a0fcd4e7b14323020a1e578ba1629f74c69e2ab941f9->enter($__internal_825be793f2454fe69939a0fcd4e7b14323020a1e578ba1629f74c69e2ab941f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon CV ";
        
        $__internal_825be793f2454fe69939a0fcd4e7b14323020a1e578ba1629f74c69e2ab941f9->leave($__internal_825be793f2454fe69939a0fcd4e7b14323020a1e578ba1629f74c69e2ab941f9_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_57bbd9a778b876a329e27755dd8114503554aa58f85805d88c506fb530d195f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bbd9a778b876a329e27755dd8114503554aa58f85805d88c506fb530d195f4->enter($__internal_57bbd9a778b876a329e27755dd8114503554aa58f85805d88c506fb530d195f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_57bbd9a778b876a329e27755dd8114503554aa58f85805d88c506fb530d195f4->leave($__internal_57bbd9a778b876a329e27755dd8114503554aa58f85805d88c506fb530d195f4_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_cc0689f0c52801d07c8f0633cc12b370b6b7678ae4e8d380a45e30472f53691e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0689f0c52801d07c8f0633cc12b370b6b7678ae4e8d380a45e30472f53691e->enter($__internal_cc0689f0c52801d07c8f0633cc12b370b6b7678ae4e8d380a45e30472f53691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mon CV ";
        
        $__internal_cc0689f0c52801d07c8f0633cc12b370b6b7678ae4e8d380a45e30472f53691e->leave($__internal_cc0689f0c52801d07c8f0633cc12b370b6b7678ae4e8d380a45e30472f53691e_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_d2626df7c90eab15b29ab8f8dde53b074618280777324a53f4164c6a8c0b1422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2626df7c90eab15b29ab8f8dde53b074618280777324a53f4164c6a8c0b1422->enter($__internal_d2626df7c90eab15b29ab8f8dde53b074618280777324a53f4164c6a8c0b1422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"quote_wrapper\">
        <div class=\"title4\"> Mon <span>Curriculum Vitae</span></div>
        <div class=\"title5\">contact us for more information</div>
        <br>
        <div id=\"note\"></div>
        <div id=\"fields\">        
            <form novalidate class=\"form-horizontal\"  method=\"post\" ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Modifier</button>
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "                       
        </div>
    </div>
    ";
        // line 22
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_d2626df7c90eab15b29ab8f8dde53b074618280777324a53f4164c6a8c0b1422->leave($__internal_d2626df7c90eab15b29ab8f8dde53b074618280777324a53f4164c6a8c0b1422_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 22,  96 => 19,  91 => 17,  87 => 16,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobCandidatBundle::layout.html.twig\"%}

{% block title %} Mon CV {% endblock %}

{% block content_title %} Candidat {% endblock %}

{% block content_stitle %} Mon CV {% endblock %}

{% block scontent %}   
    <div class=\"quote_wrapper\">
        <div class=\"title4\"> Mon <span>Curriculum Vitae</span></div>
        <div class=\"title5\">contact us for more information</div>
        <br>
        <div id=\"note\"></div>
        <div id=\"fields\">        
            <form novalidate class=\"form-horizontal\"  method=\"post\" {{ form_enctype(form) }}>
                {{ form_widget(form) }}
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Modifier</button>
            {{ form_end(form) }}                       
        </div>
    </div>
    {{parent()}} 

{% endblock %}  
", "EcoJobCandidatBundle:Candidat:edit.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/edit.html.twig");
    }
}
