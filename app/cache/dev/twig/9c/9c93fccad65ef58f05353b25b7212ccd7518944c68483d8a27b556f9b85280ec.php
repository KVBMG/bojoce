<?php

/* :candidat:edit.html.twig */
class __TwigTemplate_aff71027460ab51edfc7ee98a784d847db7c1b7c7325e3b2f65df76653e1e896 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":candidat:edit.html.twig", 1);
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
        $__internal_0bef041d64dd8d864c0d535af7be9c0e93d47633bfa56179531e3c753a73c39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bef041d64dd8d864c0d535af7be9c0e93d47633bfa56179531e3c753a73c39c->enter($__internal_0bef041d64dd8d864c0d535af7be9c0e93d47633bfa56179531e3c753a73c39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":candidat:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bef041d64dd8d864c0d535af7be9c0e93d47633bfa56179531e3c753a73c39c->leave($__internal_0bef041d64dd8d864c0d535af7be9c0e93d47633bfa56179531e3c753a73c39c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc1c3ca854d5d5bc6245221cad80b0eee7a8876410d42602cdc0f729ab961517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1c3ca854d5d5bc6245221cad80b0eee7a8876410d42602cdc0f729ab961517->enter($__internal_fc1c3ca854d5d5bc6245221cad80b0eee7a8876410d42602cdc0f729ab961517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Candidat edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fc1c3ca854d5d5bc6245221cad80b0eee7a8876410d42602cdc0f729ab961517->leave($__internal_fc1c3ca854d5d5bc6245221cad80b0eee7a8876410d42602cdc0f729ab961517_prof);

    }

    public function getTemplateName()
    {
        return ":candidat:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Candidat edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":candidat:edit.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/views/candidat/edit.html.twig");
    }
}
