<?php

/* EcoJobMainBundle::layout.html.twig */
class __TwigTemplate_da93330d864c1fc47e922725c979862982e217e041f5b9e5e60ee8e013d55444 extends Twig_Template
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
        $__internal_e71e42db674dea48d8a7cdc3251acce86af59443685db66d8944b49af099e79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71e42db674dea48d8a7cdc3251acce86af59443685db66d8944b49af099e79d->enter($__internal_e71e42db674dea48d8a7cdc3251acce86af59443685db66d8944b49af099e79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e71e42db674dea48d8a7cdc3251acce86af59443685db66d8944b49af099e79d->leave($__internal_e71e42db674dea48d8a7cdc3251acce86af59443685db66d8944b49af099e79d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4dfc4ec8707d714595d4cc3770de576cec5f8e0771854ac5e036494f81e74b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfc4ec8707d714595d4cc3770de576cec5f8e0771854ac5e036494f81e74b0b->enter($__internal_4dfc4ec8707d714595d4cc3770de576cec5f8e0771854ac5e036494f81e74b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
      
";
        
        $__internal_4dfc4ec8707d714595d4cc3770de576cec5f8e0771854ac5e036494f81e74b0b->leave($__internal_4dfc4ec8707d714595d4cc3770de576cec5f8e0771854ac5e036494f81e74b0b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d143d6126582b42b8e3b9fd90c94b661acd765ba1075e1081885191a25affb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d143d6126582b42b8e3b9fd90c94b661acd765ba1075e1081885191a25affb58->enter($__internal_d143d6126582b42b8e3b9fd90c94b661acd765ba1075e1081885191a25affb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d143d6126582b42b8e3b9fd90c94b661acd765ba1075e1081885191a25affb58->leave($__internal_d143d6126582b42b8e3b9fd90c94b661acd765ba1075e1081885191a25affb58_prof);

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
", "EcoJobMainBundle::layout.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\MainBundle/Resources/views/layout.html.twig");
    }
}
