<?php

/* EcoJobCandidatBundle:Candidat:index.html.twig */
class __TwigTemplate_cbf0e5160159f309c6db078c5bbf40f985b6a025079e88ee2e2f3f09b48bd652 extends Twig_Template
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
        $__internal_9b09db4338a21d90cac5710f5fbd3bd53937046806bf24598326534a6810286f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b09db4338a21d90cac5710f5fbd3bd53937046806bf24598326534a6810286f->enter($__internal_9b09db4338a21d90cac5710f5fbd3bd53937046806bf24598326534a6810286f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b09db4338a21d90cac5710f5fbd3bd53937046806bf24598326534a6810286f->leave($__internal_9b09db4338a21d90cac5710f5fbd3bd53937046806bf24598326534a6810286f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d2214227d2c3bb71a38152fcde2f0e5f8d2b8bcfe04f88ab8204495f5e01897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2214227d2c3bb71a38152fcde2f0e5f8d2b8bcfe04f88ab8204495f5e01897->enter($__internal_4d2214227d2c3bb71a38152fcde2f0e5f8d2b8bcfe04f88ab8204495f5e01897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon espace ";
        
        $__internal_4d2214227d2c3bb71a38152fcde2f0e5f8d2b8bcfe04f88ab8204495f5e01897->leave($__internal_4d2214227d2c3bb71a38152fcde2f0e5f8d2b8bcfe04f88ab8204495f5e01897_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f2ed5a85e7b92b6fea1620436cee612b422fe9cb46de2c0af35e830a26350508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ed5a85e7b92b6fea1620436cee612b422fe9cb46de2c0af35e830a26350508->enter($__internal_f2ed5a85e7b92b6fea1620436cee612b422fe9cb46de2c0af35e830a26350508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_f2ed5a85e7b92b6fea1620436cee612b422fe9cb46de2c0af35e830a26350508->leave($__internal_f2ed5a85e7b92b6fea1620436cee612b422fe9cb46de2c0af35e830a26350508_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_a9907a0aedfa983a660b1bc8f22c41ee3c97933b8ffa42c81b5ed0a20974544c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9907a0aedfa983a660b1bc8f22c41ee3c97933b8ffa42c81b5ed0a20974544c->enter($__internal_a9907a0aedfa983a660b1bc8f22c41ee3c97933b8ffa42c81b5ed0a20974544c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mon espace ";
        
        $__internal_a9907a0aedfa983a660b1bc8f22c41ee3c97933b8ffa42c81b5ed0a20974544c->leave($__internal_a9907a0aedfa983a660b1bc8f22c41ee3c97933b8ffa42c81b5ed0a20974544c_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_4f40145700ebc3bdc43f0e9c6c4ffb730b3a1a00b8c3ef9cafb1cc06b8a431b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f40145700ebc3bdc43f0e9c6c4ffb730b3a1a00b8c3ef9cafb1cc06b8a431b5->enter($__internal_4f40145700ebc3bdc43f0e9c6c4ffb730b3a1a00b8c3ef9cafb1cc06b8a431b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 10
        echo "    ";
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "
";
        
        $__internal_4f40145700ebc3bdc43f0e9c6c4ffb730b3a1a00b8c3ef9cafb1cc06b8a431b5->leave($__internal_4f40145700ebc3bdc43f0e9c6c4ffb730b3a1a00b8c3ef9cafb1cc06b8a431b5_prof);

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
