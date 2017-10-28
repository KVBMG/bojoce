<?php

/* EcoJobMainBundle::layout.html.twig */
class __TwigTemplate_a6d444887d24e550f82ff67361abf04f99b47b62ce781e6a2a75a4bfd6212a20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcoJobMainBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a489bf793916d98ce745cb70b5aaec2e0c2a0a3a9abad8faf2549298f4c07cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a489bf793916d98ce745cb70b5aaec2e0c2a0a3a9abad8faf2549298f4c07cc4->enter($__internal_a489bf793916d98ce745cb70b5aaec2e0c2a0a3a9abad8faf2549298f4c07cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a489bf793916d98ce745cb70b5aaec2e0c2a0a3a9abad8faf2549298f4c07cc4->leave($__internal_a489bf793916d98ce745cb70b5aaec2e0c2a0a3a9abad8faf2549298f4c07cc4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c1dfb7ed5b42ded8a11e3e9d510aff3ba6fd2eb48b8ed69585fd4894c80227c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1dfb7ed5b42ded8a11e3e9d510aff3ba6fd2eb48b8ed69585fd4894c80227c->enter($__internal_0c1dfb7ed5b42ded8a11e3e9d510aff3ba6fd2eb48b8ed69585fd4894c80227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
      
";
        
        $__internal_0c1dfb7ed5b42ded8a11e3e9d510aff3ba6fd2eb48b8ed69585fd4894c80227c->leave($__internal_0c1dfb7ed5b42ded8a11e3e9d510aff3ba6fd2eb48b8ed69585fd4894c80227c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_80df6ab165e7db9180f3651fc74222c32bce231f4148401217b22b10213cb707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80df6ab165e7db9180f3651fc74222c32bce231f4148401217b22b10213cb707->enter($__internal_80df6ab165e7db9180f3651fc74222c32bce231f4148401217b22b10213cb707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_80df6ab165e7db9180f3651fc74222c32bce231f4148401217b22b10213cb707->leave($__internal_80df6ab165e7db9180f3651fc74222c32bce231f4148401217b22b10213cb707_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block content %}
{{parent()}}
      
{% endblock %}
{% block body %}
{% endblock %}
", "EcoJobMainBundle::layout.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/MainBundle/Resources/views/layout.html.twig");
    }
}
