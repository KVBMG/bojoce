<?php

/* EcoJobCandidatBundle:Candidat:uploadcv.html.twig */
class __TwigTemplate_a864cc4da799551cf0af64143332831d87f25fef10e721ec5338d83f2e213c6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:uploadcv.html.twig", 1);
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
        $__internal_6845e4b1d8c567357ac925a965e6cdc7c4a16cb98574b5e19ffd35467d040121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6845e4b1d8c567357ac925a965e6cdc7c4a16cb98574b5e19ffd35467d040121->enter($__internal_6845e4b1d8c567357ac925a965e6cdc7c4a16cb98574b5e19ffd35467d040121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:uploadcv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6845e4b1d8c567357ac925a965e6cdc7c4a16cb98574b5e19ffd35467d040121->leave($__internal_6845e4b1d8c567357ac925a965e6cdc7c4a16cb98574b5e19ffd35467d040121_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef5bc92393de120f6505a55be15256a4e133468118b13c1078848ac7db87365d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5bc92393de120f6505a55be15256a4e133468118b13c1078848ac7db87365d->enter($__internal_ef5bc92393de120f6505a55be15256a4e133468118b13c1078848ac7db87365d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon CV ";
        
        $__internal_ef5bc92393de120f6505a55be15256a4e133468118b13c1078848ac7db87365d->leave($__internal_ef5bc92393de120f6505a55be15256a4e133468118b13c1078848ac7db87365d_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_bbf4eafe8a1affa6eb5614cc43ed81a96936ca14a5797dbe4ff4c75e3aa77797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf4eafe8a1affa6eb5614cc43ed81a96936ca14a5797dbe4ff4c75e3aa77797->enter($__internal_bbf4eafe8a1affa6eb5614cc43ed81a96936ca14a5797dbe4ff4c75e3aa77797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_bbf4eafe8a1affa6eb5614cc43ed81a96936ca14a5797dbe4ff4c75e3aa77797->leave($__internal_bbf4eafe8a1affa6eb5614cc43ed81a96936ca14a5797dbe4ff4c75e3aa77797_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_9eb8cfd19c363d70ec7bc00ff0217aeb7f674cbd598c833e2208e452993a54f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb8cfd19c363d70ec7bc00ff0217aeb7f674cbd598c833e2208e452993a54f7->enter($__internal_9eb8cfd19c363d70ec7bc00ff0217aeb7f674cbd598c833e2208e452993a54f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mon CV ";
        
        $__internal_9eb8cfd19c363d70ec7bc00ff0217aeb7f674cbd598c833e2208e452993a54f7->leave($__internal_9eb8cfd19c363d70ec7bc00ff0217aeb7f674cbd598c833e2208e452993a54f7_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_211c2a3e8584dd814d3b420dc6e9c4f853687be231022f25219244a5139a90d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211c2a3e8584dd814d3b420dc6e9c4f853687be231022f25219244a5139a90d8->enter($__internal_211c2a3e8584dd814d3b420dc6e9c4f853687be231022f25219244a5139a90d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

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
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Sauvegarder</button>
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
        
        $__internal_211c2a3e8584dd814d3b420dc6e9c4f853687be231022f25219244a5139a90d8->leave($__internal_211c2a3e8584dd814d3b420dc6e9c4f853687be231022f25219244a5139a90d8_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:uploadcv.html.twig";
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
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Sauvegarder</button>
            {{ form_end(form) }}                       
        </div>
    </div>
    {{parent()}} 

{% endblock %}  ", "EcoJobCandidatBundle:Candidat:uploadcv.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/uploadcv.html.twig");
    }
}
