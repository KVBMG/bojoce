<?php

/* EcoJobAnonymousBundle::layout.html.twig */
class __TwigTemplate_f2bb1baf8ae9c2656cb2337e602439aff6edbf5f7cb71155f92681b27aef426e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobAnonymousBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c90e8b2338d64c2f7ce7be55dc8fac38a0c43037cad041dd16ff2eb735e4c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c90e8b2338d64c2f7ce7be55dc8fac38a0c43037cad041dd16ff2eb735e4c9e->enter($__internal_6c90e8b2338d64c2f7ce7be55dc8fac38a0c43037cad041dd16ff2eb735e4c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAnonymousBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c90e8b2338d64c2f7ce7be55dc8fac38a0c43037cad041dd16ff2eb735e4c9e->leave($__internal_6c90e8b2338d64c2f7ce7be55dc8fac38a0c43037cad041dd16ff2eb735e4c9e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aad329e6d742d862148c112dea881a506ac9f7ef11cd6ff6e5c8ef00a886556d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad329e6d742d862148c112dea881a506ac9f7ef11cd6ff6e5c8ef00a886556d->enter($__internal_aad329e6d742d862148c112dea881a506ac9f7ef11cd6ff6e5c8ef00a886556d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_aad329e6d742d862148c112dea881a506ac9f7ef11cd6ff6e5c8ef00a886556d->leave($__internal_aad329e6d742d862148c112dea881a506ac9f7ef11cd6ff6e5c8ef00a886556d_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_3893ccebda20156fc1b0e402b56a3c6afaf4bbcd2ad113e5079aa7f55ac524f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3893ccebda20156fc1b0e402b56a3c6afaf4bbcd2ad113e5079aa7f55ac524f0->enter($__internal_3893ccebda20156fc1b0e402b56a3c6afaf4bbcd2ad113e5079aa7f55ac524f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 

";
        
        $__internal_3893ccebda20156fc1b0e402b56a3c6afaf4bbcd2ad113e5079aa7f55ac524f0->leave($__internal_3893ccebda20156fc1b0e402b56a3c6afaf4bbcd2ad113e5079aa7f55ac524f0_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAnonymousBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %}{% endblock %}

{% block content %} 

{% endblock %}                
", "EcoJobAnonymousBundle::layout.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AnonymousBundle/Resources/views/layout.html.twig");
    }
}
