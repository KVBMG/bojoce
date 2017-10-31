<?php

/* EcoJobCandidatBundle:Candidat:param.html.twig */
class __TwigTemplate_5d90ff5863686682d7d52624a08950e42aad916fd686fe283444d3eafe0681b3 extends Twig_Template
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
        $__internal_a1b0cdb5767692c982eae799d83a6909a5b29bf1790e1345c6c0939e43aaebbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b0cdb5767692c982eae799d83a6909a5b29bf1790e1345c6c0939e43aaebbe->enter($__internal_a1b0cdb5767692c982eae799d83a6909a5b29bf1790e1345c6c0939e43aaebbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:param.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b0cdb5767692c982eae799d83a6909a5b29bf1790e1345c6c0939e43aaebbe->leave($__internal_a1b0cdb5767692c982eae799d83a6909a5b29bf1790e1345c6c0939e43aaebbe_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41c6d9cc17c04268f89ddbc4a0bd596ecc397e0b8800df62482b3c495c423faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c6d9cc17c04268f89ddbc4a0bd596ecc397e0b8800df62482b3c495c423faf->enter($__internal_41c6d9cc17c04268f89ddbc4a0bd596ecc397e0b8800df62482b3c495c423faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_41c6d9cc17c04268f89ddbc4a0bd596ecc397e0b8800df62482b3c495c423faf->leave($__internal_41c6d9cc17c04268f89ddbc4a0bd596ecc397e0b8800df62482b3c495c423faf_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_33f9427575be65e3dfb0c32e7b910c530fa805280fc6147813644e365e277f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f9427575be65e3dfb0c32e7b910c530fa805280fc6147813644e365e277f25->enter($__internal_33f9427575be65e3dfb0c32e7b910c530fa805280fc6147813644e365e277f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Paramètre";
        
        $__internal_33f9427575be65e3dfb0c32e7b910c530fa805280fc6147813644e365e277f25->leave($__internal_33f9427575be65e3dfb0c32e7b910c530fa805280fc6147813644e365e277f25_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6f809a51a306dd543b7da9543dfd3cacd83424886edd69cd00ef1f79adaa5d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f809a51a306dd543b7da9543dfd3cacd83424886edd69cd00ef1f79adaa5d29->enter($__internal_6f809a51a306dd543b7da9543dfd3cacd83424886edd69cd00ef1f79adaa5d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo "Paramètre ";
        
        $__internal_6f809a51a306dd543b7da9543dfd3cacd83424886edd69cd00ef1f79adaa5d29->leave($__internal_6f809a51a306dd543b7da9543dfd3cacd83424886edd69cd00ef1f79adaa5d29_prof);

    }

    // line 12
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_00133ecc82cf85032a91345514a440eed02dab6630e7e60378aa3c69c89216a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00133ecc82cf85032a91345514a440eed02dab6630e7e60378aa3c69c89216a9->enter($__internal_00133ecc82cf85032a91345514a440eed02dab6630e7e60378aa3c69c89216a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo "Paramètre";
        
        $__internal_00133ecc82cf85032a91345514a440eed02dab6630e7e60378aa3c69c89216a9->leave($__internal_00133ecc82cf85032a91345514a440eed02dab6630e7e60378aa3c69c89216a9_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_94004a1212caad07c21403161e282da77ad60c2189e529032fa427b3ac85c8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94004a1212caad07c21403161e282da77ad60c2189e529032fa427b3ac85c8c3->enter($__internal_94004a1212caad07c21403161e282da77ad60c2189e529032fa427b3ac85c8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorie", array()), 'widget');
        echo "
                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Sauvegarder</button>
                <a  class=\"btn-default btn-cf-submit\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("eco_job_candidat_reset_param");
        echo "\">Réinitialiser</a>
            ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "                       
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
      
";
        
        $__internal_94004a1212caad07c21403161e282da77ad60c2189e529032fa427b3ac85c8c3->leave($__internal_94004a1212caad07c21403161e282da77ad60c2189e529032fa427b3ac85c8c3_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97f974d5f3b6585f7a93b9106c1f6469848cf489431873500c25cf750f7826fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f974d5f3b6585f7a93b9106c1f6469848cf489431873500c25cf750f7826fd->enter($__internal_97f974d5f3b6585f7a93b9106c1f6469848cf489431873500c25cf750f7826fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/candidat.js"), "html", null, true);
        echo "\"></script>    
";
        
        $__internal_97f974d5f3b6585f7a93b9106c1f6469848cf489431873500c25cf750f7826fd->leave($__internal_97f974d5f3b6585f7a93b9106c1f6469848cf489431873500c25cf750f7826fd_prof);

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
{% endblock %}", "EcoJobCandidatBundle:Candidat:param.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\CandidatBundle/Resources/views/Candidat/param.html.twig");
    }
}
