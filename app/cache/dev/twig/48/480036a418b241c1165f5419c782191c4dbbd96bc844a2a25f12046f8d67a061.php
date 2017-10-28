<?php

/* EcoJobCandidatBundle:Candidat:fill.html.twig */
class __TwigTemplate_ba71c309a181d8aca7c5d9f97bee452be5b231900fb48d99b044d93c3d260099 extends Twig_Template
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
        $__internal_156056053fc27e46bc23e1a86bcf91a22dae7177be6214278a22712b3a802744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156056053fc27e46bc23e1a86bcf91a22dae7177be6214278a22712b3a802744->enter($__internal_156056053fc27e46bc23e1a86bcf91a22dae7177be6214278a22712b3a802744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:fill.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_156056053fc27e46bc23e1a86bcf91a22dae7177be6214278a22712b3a802744->leave($__internal_156056053fc27e46bc23e1a86bcf91a22dae7177be6214278a22712b3a802744_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3563d27c0293c5b30879f856e94310b9f164109892cd5703b3971fa6ef2ec2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3563d27c0293c5b30879f856e94310b9f164109892cd5703b3971fa6ef2ec2b8->enter($__internal_3563d27c0293c5b30879f856e94310b9f164109892cd5703b3971fa6ef2ec2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon CV ";
        
        $__internal_3563d27c0293c5b30879f856e94310b9f164109892cd5703b3971fa6ef2ec2b8->leave($__internal_3563d27c0293c5b30879f856e94310b9f164109892cd5703b3971fa6ef2ec2b8_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8ac92bb0c669a1a22ed8966576fb1c91869dc01652b763ac7649350d2214439b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac92bb0c669a1a22ed8966576fb1c91869dc01652b763ac7649350d2214439b->enter($__internal_8ac92bb0c669a1a22ed8966576fb1c91869dc01652b763ac7649350d2214439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_8ac92bb0c669a1a22ed8966576fb1c91869dc01652b763ac7649350d2214439b->leave($__internal_8ac92bb0c669a1a22ed8966576fb1c91869dc01652b763ac7649350d2214439b_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_94824ef9c6ccd1c4562f3602646cb4a1269c63343487c2b9c9320bd19e697f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94824ef9c6ccd1c4562f3602646cb4a1269c63343487c2b9c9320bd19e697f9c->enter($__internal_94824ef9c6ccd1c4562f3602646cb4a1269c63343487c2b9c9320bd19e697f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mon CV ";
        
        $__internal_94824ef9c6ccd1c4562f3602646cb4a1269c63343487c2b9c9320bd19e697f9c->leave($__internal_94824ef9c6ccd1c4562f3602646cb4a1269c63343487c2b9c9320bd19e697f9c_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_4c48f89f67e489f42e9d6201cafb6e8437160eacd261d025cb509f7aa94ba25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c48f89f67e489f42e9d6201cafb6e8437160eacd261d025cb509f7aa94ba25d->enter($__internal_4c48f89f67e489f42e9d6201cafb6e8437160eacd261d025cb509f7aa94ba25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        echo "   
    <div class=\"quote_wrapper\">
        <div class=\"title4\"> Mon <span>Curriculum Vitae</span></div>
        <div class=\"title5\">contact us for more information</div>
        <br>
        <div id=\"note\"></div>
        <div id=\"fields\">        
            Veuillez remplir votre CV. Toutes les informations inscrites ci-dessous feront l'objet de votre CV sur ecojob.fr.
            Si vous voulez envoyer un CV numérique, veuillez l'envoyer <a href='";
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
        
        $__internal_4c48f89f67e489f42e9d6201cafb6e8437160eacd261d025cb509f7aa94ba25d->leave($__internal_4c48f89f67e489f42e9d6201cafb6e8437160eacd261d025cb509f7aa94ba25d_prof);

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
            Si vous voulez envoyer un CV numérique, veuillez l'envoyer <a href='{{path('eco_job_candidat_uploadcv')}}'>ici</a>
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
