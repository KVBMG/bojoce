<?php

/* EcoJobCandidatBundle:Candidat:param.html.twig */
class __TwigTemplate_3baf7760975caf689f369e57cf68b6354fe74582a1a5217120f72f4fbfe49fe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobMainBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:param.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b4fd4bf586d86f853abcd0590aa9ad0c7d93d4821902a9b310ab24bf04d1d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4fd4bf586d86f853abcd0590aa9ad0c7d93d4821902a9b310ab24bf04d1d64->enter($__internal_8b4fd4bf586d86f853abcd0590aa9ad0c7d93d4821902a9b310ab24bf04d1d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:param.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b4fd4bf586d86f853abcd0590aa9ad0c7d93d4821902a9b310ab24bf04d1d64->leave($__internal_8b4fd4bf586d86f853abcd0590aa9ad0c7d93d4821902a9b310ab24bf04d1d64_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a62442cc6bf28bcd46944a914a31ba339c5747acd7aefb6284e7028484538c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62442cc6bf28bcd46944a914a31ba339c5747acd7aefb6284e7028484538c63->enter($__internal_a62442cc6bf28bcd46944a914a31ba339c5747acd7aefb6284e7028484538c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_a62442cc6bf28bcd46944a914a31ba339c5747acd7aefb6284e7028484538c63->leave($__internal_a62442cc6bf28bcd46944a914a31ba339c5747acd7aefb6284e7028484538c63_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e089a8491b8286e6576d73283523aee94240e7e98f7b2e5f605786a1c5d6bf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e089a8491b8286e6576d73283523aee94240e7e98f7b2e5f605786a1c5d6bf49->enter($__internal_e089a8491b8286e6576d73283523aee94240e7e98f7b2e5f605786a1c5d6bf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paramètre";
        
        $__internal_e089a8491b8286e6576d73283523aee94240e7e98f7b2e5f605786a1c5d6bf49->leave($__internal_e089a8491b8286e6576d73283523aee94240e7e98f7b2e5f605786a1c5d6bf49_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5f7aa517e2c1f83e34ce9d85f67d6cfc551629ff574ab22bf333135e42b0ce07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7aa517e2c1f83e34ce9d85f67d6cfc551629ff574ab22bf333135e42b0ce07->enter($__internal_5f7aa517e2c1f83e34ce9d85f67d6cfc551629ff574ab22bf333135e42b0ce07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Paramètre ";
        
        $__internal_5f7aa517e2c1f83e34ce9d85f67d6cfc551629ff574ab22bf333135e42b0ce07->leave($__internal_5f7aa517e2c1f83e34ce9d85f67d6cfc551629ff574ab22bf333135e42b0ce07_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_0ed9cc91562738b2e5e7de3550e2248b0bdd2bccf65d9cd913f74142943a661f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed9cc91562738b2e5e7de3550e2248b0bdd2bccf65d9cd913f74142943a661f->enter($__internal_0ed9cc91562738b2e5e7de3550e2248b0bdd2bccf65d9cd913f74142943a661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Paramètre";
        
        $__internal_0ed9cc91562738b2e5e7de3550e2248b0bdd2bccf65d9cd913f74142943a661f->leave($__internal_0ed9cc91562738b2e5e7de3550e2248b0bdd2bccf65d9cd913f74142943a661f_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_46d3dd338ebb5bba8be3bc7a3a7fe18047bebab8051edb1819c7d9abdbef9f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d3dd338ebb5bba8be3bc7a3a7fe18047bebab8051edb1819c7d9abdbef9f3a->enter($__internal_46d3dd338ebb5bba8be3bc7a3a7fe18047bebab8051edb1819c7d9abdbef9f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div id=\"content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">Parametre du compte candidat</div>
          <br>
          <div id=\"note\"></div>

           
          


          <div id=\"fields\">
             <form novalidate class=\"form-horizontal\"  method=\"post\" ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo ">
                    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categorie", array()), 'widget');
        echo "
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Sauvegarder</button>
                <a  class=\"btn-default btn-cf-submit\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_reset_param");
        echo "\">Réinitialiser</a>
            ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "                       
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_46d3dd338ebb5bba8be3bc7a3a7fe18047bebab8051edb1819c7d9abdbef9f3a->leave($__internal_46d3dd338ebb5bba8be3bc7a3a7fe18047bebab8051edb1819c7d9abdbef9f3a_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbf2f02c9e99b359b3dbfcb5e9c46d6093225267fd21c312ee49e533e25d068d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf2f02c9e99b359b3dbfcb5e9c46d6093225267fd21c312ee49e533e25d068d->enter($__internal_bbf2f02c9e99b359b3dbfcb5e9c46d6093225267fd21c312ee49e533e25d068d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/candidat.js"), "html", null, true);
        echo "\"></script>    
";
        
        $__internal_bbf2f02c9e99b359b3dbfcb5e9c46d6093225267fd21c312ee49e533e25d068d->leave($__internal_bbf2f02c9e99b359b3dbfcb5e9c46d6093225267fd21c312ee49e533e25d068d_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:param.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  154 => 44,  148 => 43,  132 => 34,  128 => 33,  123 => 31,  119 => 30,  101 => 15,  95 => 14,  83 => 12,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobMainBundle::layout.html.twig\" %}

{% block stylesheets %}
    {{parent()}}
  <link href=\"{{ path('captcha_layout_stylesheet_url') }}\" rel=\"stylesheet\" />
{% endblock %}

{% block title %}Paramètre{% endblock %}

{% block content_title %}Paramètre {% endblock %}

{% block content_stitle %}Paramètre{% endblock %}

{% block content %}
{{parent()}}
<div id=\"content\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"quote_wrapper\">
          <div class=\"title4\">Parametre du compte candidat</div>
          <br>
          <div id=\"note\"></div>

           
          


          <div id=\"fields\">
             <form novalidate class=\"form-horizontal\"  method=\"post\" {{ form_enctype(form) }}>
                    {{ form_widget(form.categorie) }}
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Sauvegarder</button>
                <a  class=\"btn-default btn-cf-submit\" href=\"{{ path('eco_job_candidat_reset_param') }}\">Réinitialiser</a>
            {{ form_end(form) }}                       
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
{% endblock content %}
{% block javascripts %}
    {{parent()}}    
    <script type=\"text/javascript\" src=\"{{asset('js/candidat.js')}}\"></script>    
{% endblock %}", "EcoJobCandidatBundle:Candidat:param.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/param.html.twig");
    }
}
