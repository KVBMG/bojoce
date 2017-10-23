<?php

/* :candidat:new.html.twig */
class __TwigTemplate_e88afd66b55fda4f1ffcce108ae84f5d71aea87145ec98afdf1a36f4f9e780b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":candidat:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e83d7cc0c0536627e9852df594ae9f348262be843c5501ed1d6c149af2158d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83d7cc0c0536627e9852df594ae9f348262be843c5501ed1d6c149af2158d41->enter($__internal_e83d7cc0c0536627e9852df594ae9f348262be843c5501ed1d6c149af2158d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":candidat:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e83d7cc0c0536627e9852df594ae9f348262be843c5501ed1d6c149af2158d41->leave($__internal_e83d7cc0c0536627e9852df594ae9f348262be843c5501ed1d6c149af2158d41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5f686219fcc882df9c77638484e1768fa303a9d35a8f6b24b0e442b91562236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f686219fcc882df9c77638484e1768fa303a9d35a8f6b24b0e442b91562236->enter($__internal_d5f686219fcc882df9c77638484e1768fa303a9d35a8f6b24b0e442b91562236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Candidat creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d5f686219fcc882df9c77638484e1768fa303a9d35a8f6b24b0e442b91562236->leave($__internal_d5f686219fcc882df9c77638484e1768fa303a9d35a8f6b24b0e442b91562236_prof);

    }

    public function getTemplateName()
    {
        return ":candidat:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Candidat creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":candidat:new.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/views/candidat/new.html.twig");
    }
}
