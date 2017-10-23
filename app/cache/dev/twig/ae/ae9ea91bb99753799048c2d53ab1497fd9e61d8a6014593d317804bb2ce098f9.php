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
        $__internal_35fa1446ce6f9e27db0cddfb8695405cda422ff6a9f1b27ba48a97f47541bc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fa1446ce6f9e27db0cddfb8695405cda422ff6a9f1b27ba48a97f47541bc8e->enter($__internal_35fa1446ce6f9e27db0cddfb8695405cda422ff6a9f1b27ba48a97f47541bc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35fa1446ce6f9e27db0cddfb8695405cda422ff6a9f1b27ba48a97f47541bc8e->leave($__internal_35fa1446ce6f9e27db0cddfb8695405cda422ff6a9f1b27ba48a97f47541bc8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c25d1898a591fc631f5fb93a68224ed205a4fcc9bdb996b5e2a876895149621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c25d1898a591fc631f5fb93a68224ed205a4fcc9bdb996b5e2a876895149621->enter($__internal_5c25d1898a591fc631f5fb93a68224ed205a4fcc9bdb996b5e2a876895149621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon espace ";
        
        $__internal_5c25d1898a591fc631f5fb93a68224ed205a4fcc9bdb996b5e2a876895149621->leave($__internal_5c25d1898a591fc631f5fb93a68224ed205a4fcc9bdb996b5e2a876895149621_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_69c306fdee78e0cc15cf8cb0ea078f6f94efa7b6618768fb623aae7313e192ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c306fdee78e0cc15cf8cb0ea078f6f94efa7b6618768fb623aae7313e192ac->enter($__internal_69c306fdee78e0cc15cf8cb0ea078f6f94efa7b6618768fb623aae7313e192ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_69c306fdee78e0cc15cf8cb0ea078f6f94efa7b6618768fb623aae7313e192ac->leave($__internal_69c306fdee78e0cc15cf8cb0ea078f6f94efa7b6618768fb623aae7313e192ac_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_2c86a4e26c8e0fa8810b803f47fc2c6ae07a52a4854fbafe6c9186b1cf35d17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c86a4e26c8e0fa8810b803f47fc2c6ae07a52a4854fbafe6c9186b1cf35d17f->enter($__internal_2c86a4e26c8e0fa8810b803f47fc2c6ae07a52a4854fbafe6c9186b1cf35d17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mon espace ";
        
        $__internal_2c86a4e26c8e0fa8810b803f47fc2c6ae07a52a4854fbafe6c9186b1cf35d17f->leave($__internal_2c86a4e26c8e0fa8810b803f47fc2c6ae07a52a4854fbafe6c9186b1cf35d17f_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_0e926da8b3345fd45009bd764d9548556457ca721e44fa4d76ac30363ea10ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e926da8b3345fd45009bd764d9548556457ca721e44fa4d76ac30363ea10ab9->enter($__internal_0e926da8b3345fd45009bd764d9548556457ca721e44fa4d76ac30363ea10ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 10
        echo "    ";
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "
";
        
        $__internal_0e926da8b3345fd45009bd764d9548556457ca721e44fa4d76ac30363ea10ab9->leave($__internal_0e926da8b3345fd45009bd764d9548556457ca721e44fa4d76ac30363ea10ab9_prof);

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
