<?php

/* EcoJobCandidatBundle:Candidat:param.html.twig */
class __TwigTemplate_fec47e2308e60e8c2c6573ca6aecab6f8c159b9ec640c8ea6b600c19b0c8a3e1 extends Twig_Template
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
        $__internal_dfb1eb42992d32f3213d8c7f04fc8dbb641629cac1551f4f1ac16cb22bf1be9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb1eb42992d32f3213d8c7f04fc8dbb641629cac1551f4f1ac16cb22bf1be9c->enter($__internal_dfb1eb42992d32f3213d8c7f04fc8dbb641629cac1551f4f1ac16cb22bf1be9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:param.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfb1eb42992d32f3213d8c7f04fc8dbb641629cac1551f4f1ac16cb22bf1be9c->leave($__internal_dfb1eb42992d32f3213d8c7f04fc8dbb641629cac1551f4f1ac16cb22bf1be9c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0a687fc62d0d8b57247221f65c01dafe0b7a534daa1a9cdf8c6e409a3cb1e56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a687fc62d0d8b57247221f65c01dafe0b7a534daa1a9cdf8c6e409a3cb1e56c->enter($__internal_0a687fc62d0d8b57247221f65c01dafe0b7a534daa1a9cdf8c6e409a3cb1e56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_0a687fc62d0d8b57247221f65c01dafe0b7a534daa1a9cdf8c6e409a3cb1e56c->leave($__internal_0a687fc62d0d8b57247221f65c01dafe0b7a534daa1a9cdf8c6e409a3cb1e56c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_5656d5b9001bd16bb1247d24678c6e3133456efabee3106dc651ed9f95e6d404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5656d5b9001bd16bb1247d24678c6e3133456efabee3106dc651ed9f95e6d404->enter($__internal_5656d5b9001bd16bb1247d24678c6e3133456efabee3106dc651ed9f95e6d404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paramètre";
        
        $__internal_5656d5b9001bd16bb1247d24678c6e3133456efabee3106dc651ed9f95e6d404->leave($__internal_5656d5b9001bd16bb1247d24678c6e3133456efabee3106dc651ed9f95e6d404_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c613513f5b3271ce9c57cfa087e35e6a73895207778bce4da1c792ce91b81e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c613513f5b3271ce9c57cfa087e35e6a73895207778bce4da1c792ce91b81e93->enter($__internal_c613513f5b3271ce9c57cfa087e35e6a73895207778bce4da1c792ce91b81e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Paramètre ";
        
        $__internal_c613513f5b3271ce9c57cfa087e35e6a73895207778bce4da1c792ce91b81e93->leave($__internal_c613513f5b3271ce9c57cfa087e35e6a73895207778bce4da1c792ce91b81e93_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_1fb574ae34006f667ed0e2aaa144ec73b65a162d1f9a8bc35a8267a7efac314c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb574ae34006f667ed0e2aaa144ec73b65a162d1f9a8bc35a8267a7efac314c->enter($__internal_1fb574ae34006f667ed0e2aaa144ec73b65a162d1f9a8bc35a8267a7efac314c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Paramètre";
        
        $__internal_1fb574ae34006f667ed0e2aaa144ec73b65a162d1f9a8bc35a8267a7efac314c->leave($__internal_1fb574ae34006f667ed0e2aaa144ec73b65a162d1f9a8bc35a8267a7efac314c_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_370297b84e95b14cc2bc71095dc110af099222784a49aec1e0a6c8ce20e5369f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370297b84e95b14cc2bc71095dc110af099222784a49aec1e0a6c8ce20e5369f->enter($__internal_370297b84e95b14cc2bc71095dc110af099222784a49aec1e0a6c8ce20e5369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_370297b84e95b14cc2bc71095dc110af099222784a49aec1e0a6c8ce20e5369f->leave($__internal_370297b84e95b14cc2bc71095dc110af099222784a49aec1e0a6c8ce20e5369f_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69ecee3ff014433d01ca97e42da6b399bb9a31c9147144e6c0807c8028d0bab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ecee3ff014433d01ca97e42da6b399bb9a31c9147144e6c0807c8028d0bab2->enter($__internal_69ecee3ff014433d01ca97e42da6b399bb9a31c9147144e6c0807c8028d0bab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/candidat.js"), "html", null, true);
        echo "\"></script>    
";
        
        $__internal_69ecee3ff014433d01ca97e42da6b399bb9a31c9147144e6c0807c8028d0bab2->leave($__internal_69ecee3ff014433d01ca97e42da6b399bb9a31c9147144e6c0807c8028d0bab2_prof);

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
