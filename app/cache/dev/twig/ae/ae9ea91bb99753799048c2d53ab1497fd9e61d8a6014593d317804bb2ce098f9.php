<?php

/* EcoJobCandidatBundle:Candidat:index.html.twig */
class __TwigTemplate_dfd35a4d14e6c25d2ae702da637fa952957700452f5b615e54b6a6bae4819ee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:index.html.twig", 1);
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
        $__internal_38506593c779445feb24e2048f83582683fb352f5f55d0b96ad43f23b71f6d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38506593c779445feb24e2048f83582683fb352f5f55d0b96ad43f23b71f6d15->enter($__internal_38506593c779445feb24e2048f83582683fb352f5f55d0b96ad43f23b71f6d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38506593c779445feb24e2048f83582683fb352f5f55d0b96ad43f23b71f6d15->leave($__internal_38506593c779445feb24e2048f83582683fb352f5f55d0b96ad43f23b71f6d15_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9026b7d60d573de45f54bbc01ba635c7b86397140cad8270efdf279f4f60974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9026b7d60d573de45f54bbc01ba635c7b86397140cad8270efdf279f4f60974->enter($__internal_b9026b7d60d573de45f54bbc01ba635c7b86397140cad8270efdf279f4f60974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon espace ";
        
        $__internal_b9026b7d60d573de45f54bbc01ba635c7b86397140cad8270efdf279f4f60974->leave($__internal_b9026b7d60d573de45f54bbc01ba635c7b86397140cad8270efdf279f4f60974_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c256fb2c7fe77ac06d2d27564eecf56e5f66d1373b480e633a7a8cc501cf4c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c256fb2c7fe77ac06d2d27564eecf56e5f66d1373b480e633a7a8cc501cf4c5c->enter($__internal_c256fb2c7fe77ac06d2d27564eecf56e5f66d1373b480e633a7a8cc501cf4c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_c256fb2c7fe77ac06d2d27564eecf56e5f66d1373b480e633a7a8cc501cf4c5c->leave($__internal_c256fb2c7fe77ac06d2d27564eecf56e5f66d1373b480e633a7a8cc501cf4c5c_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_736c3cb5ae924bc352d9ffbcc597acb48972c199f2ec700180d436666fc76ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736c3cb5ae924bc352d9ffbcc597acb48972c199f2ec700180d436666fc76ad6->enter($__internal_736c3cb5ae924bc352d9ffbcc597acb48972c199f2ec700180d436666fc76ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mon espace ";
        
        $__internal_736c3cb5ae924bc352d9ffbcc597acb48972c199f2ec700180d436666fc76ad6->leave($__internal_736c3cb5ae924bc352d9ffbcc597acb48972c199f2ec700180d436666fc76ad6_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_0f51aea87d21ac3b7cc9fc9c9193aade1a129e91538c06ad3f9bb8ae020ea958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f51aea87d21ac3b7cc9fc9c9193aade1a129e91538c06ad3f9bb8ae020ea958->enter($__internal_0f51aea87d21ac3b7cc9fc9c9193aade1a129e91538c06ad3f9bb8ae020ea958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 10
        echo "    ";
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "
";
        
        $__internal_0f51aea87d21ac3b7cc9fc9c9193aade1a129e91538c06ad3f9bb8ae020ea958->leave($__internal_0f51aea87d21ac3b7cc9fc9c9193aade1a129e91538c06ad3f9bb8ae020ea958_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobCandidatBundle::layout.html.twig\" %}

{% block title %} Mon espace {% endblock %}

{% block content_title %} Candidat {% endblock %}

{% block content_stitle %} Mon espace {% endblock %}

{% block scontent %}
    {{parent()}}
{% endblock %}    ", "EcoJobCandidatBundle:Candidat:index.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/Candidat/index.html.twig");
    }
}
