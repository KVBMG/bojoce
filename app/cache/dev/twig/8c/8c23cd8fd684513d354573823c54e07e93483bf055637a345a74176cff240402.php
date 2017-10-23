<?php

/* EcoJobCandidatBundle:Candidat:fill.html.twig */
class __TwigTemplate_ca1c3bd3d25bf75c8b3e797f310a9d6538cf38e2065bc0aa257310a06bbf1d3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:fill.html.twig", 1);
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
        $__internal_3c6e3723291e7c9191e9f2bc1ff44096edcc5f9ffabdfe56f999d141613cd18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6e3723291e7c9191e9f2bc1ff44096edcc5f9ffabdfe56f999d141613cd18c->enter($__internal_3c6e3723291e7c9191e9f2bc1ff44096edcc5f9ffabdfe56f999d141613cd18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:fill.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c6e3723291e7c9191e9f2bc1ff44096edcc5f9ffabdfe56f999d141613cd18c->leave($__internal_3c6e3723291e7c9191e9f2bc1ff44096edcc5f9ffabdfe56f999d141613cd18c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b958b0a08ef1c94f9f45c9b248213fb5065d5128e42cadc6e9892d367ba1e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b958b0a08ef1c94f9f45c9b248213fb5065d5128e42cadc6e9892d367ba1e5f->enter($__internal_6b958b0a08ef1c94f9f45c9b248213fb5065d5128e42cadc6e9892d367ba1e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon CV ";
        
        $__internal_6b958b0a08ef1c94f9f45c9b248213fb5065d5128e42cadc6e9892d367ba1e5f->leave($__internal_6b958b0a08ef1c94f9f45c9b248213fb5065d5128e42cadc6e9892d367ba1e5f_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5c3bd7f318832ab90a9da4a2be199c8fedf173827ad33b68c0a44d4feba0343b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3bd7f318832ab90a9da4a2be199c8fedf173827ad33b68c0a44d4feba0343b->enter($__internal_5c3bd7f318832ab90a9da4a2be199c8fedf173827ad33b68c0a44d4feba0343b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_5c3bd7f318832ab90a9da4a2be199c8fedf173827ad33b68c0a44d4feba0343b->leave($__internal_5c3bd7f318832ab90a9da4a2be199c8fedf173827ad33b68c0a44d4feba0343b_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_d784ecc270e409b4b8f019905b8d4ec887e08bb03e4e3e32bf598bbd1a1ef035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d784ecc270e409b4b8f019905b8d4ec887e08bb03e4e3e32bf598bbd1a1ef035->enter($__internal_d784ecc270e409b4b8f019905b8d4ec887e08bb03e4e3e32bf598bbd1a1ef035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mon CV ";
        
        $__internal_d784ecc270e409b4b8f019905b8d4ec887e08bb03e4e3e32bf598bbd1a1ef035->leave($__internal_d784ecc270e409b4b8f019905b8d4ec887e08bb03e4e3e32bf598bbd1a1ef035_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_80c02794d835548d6344bad881235cf64fb62b8ff464922530c116fdd4ec171c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c02794d835548d6344bad881235cf64fb62b8ff464922530c116fdd4ec171c->enter($__internal_80c02794d835548d6344bad881235cf64fb62b8ff464922530c116fdd4ec171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"quote_wrapper\">
        <div class=\"title4\"> Mon <span>Curriculum Vitae</span></div>
        <div class=\"title5\">contact us for more information</div>
        <br>
        <div id=\"note\"></div>
        <div id=\"fields\">        
            Veuillez remplir votre CV. Toutes les informations inscrites ci-dessous feront l'objet de votre CV sur ecojob.fr.
            Si vous voulez opter pour un CV numérique, veuillez l'envoyer <a href='";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_uploadcv");
        echo "'>ici</a>
            <form novalidate class=\"form-horizontal\"  method=\"post\" ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Sauvegarder</button>
            ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "                       
        </div>
    </div>
    ";
        // line 24
        $this->displayParentBlock("scontent", $context, $blocks);
        echo " 

";
        
        $__internal_80c02794d835548d6344bad881235cf64fb62b8ff464922530c116fdd4ec171c->leave($__internal_80c02794d835548d6344bad881235cf64fb62b8ff464922530c116fdd4ec171c_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:fill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  101 => 21,  96 => 19,  92 => 18,  88 => 17,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
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
            Veuillez remplir votre CV. Toutes les informations inscrites ci-dessous feront l'objet de votre CV sur ecojob.fr.
            Si vous voulez opter pour un CV numérique, veuillez l'envoyer <a href='{{path('eco_job_candidat_uploadcv')}}'>ici</a>
            <form novalidate class=\"form-horizontal\"  method=\"post\" {{ form_enctype(form) }}>
                {{ form_widget(form) }}
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Sauvegarder</button>
            {{ form_end(form) }}                       
        </div>
    </div>
    {{parent()}} 

{% endblock %}  ", "EcoJobCandidatBundle:Candidat:fill.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/fill.html.twig");
    }
}
