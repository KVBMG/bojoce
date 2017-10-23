<?php

/* :candidat:show.html.twig */
class __TwigTemplate_7e81a8a5b54fe23a98a202bf29d1300345823ddad65166e3f4ca0095efb7d4bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":candidat:show.html.twig", 1);
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
        $__internal_28368e5e5febf8bf33f11cf20517f656848f60d2e47978b8099f9f597cc5387d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28368e5e5febf8bf33f11cf20517f656848f60d2e47978b8099f9f597cc5387d->enter($__internal_28368e5e5febf8bf33f11cf20517f656848f60d2e47978b8099f9f597cc5387d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":candidat:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28368e5e5febf8bf33f11cf20517f656848f60d2e47978b8099f9f597cc5387d->leave($__internal_28368e5e5febf8bf33f11cf20517f656848f60d2e47978b8099f9f597cc5387d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eec6f39a3f25116b9d402842233cea5e76dd08f7d88900d086c836cc3e01c294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec6f39a3f25116b9d402842233cea5e76dd08f7d88900d086c836cc3e01c294->enter($__internal_eec6f39a3f25116b9d402842233cea5e76dd08f7d88900d086c836cc3e01c294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Candidat</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["candidat"] ?? $this->getContext($context, "candidat")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagename</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["candidat"] ?? $this->getContext($context, "candidat")), "imageName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["candidat"] ?? $this->getContext($context, "candidat")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["candidat"] ?? $this->getContext($context, "candidat")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute(($context["candidat"] ?? $this->getContext($context, "candidat")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_eec6f39a3f25116b9d402842233cea5e76dd08f7d88900d086c836cc3e01c294->leave($__internal_eec6f39a3f25116b9d402842233cea5e76dd08f7d88900d086c836cc3e01c294_prof);

    }

    public function getTemplateName()
    {
        return ":candidat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 31,  80 => 28,  74 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Candidat</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ candidat.id }}</td>
            </tr>
            <tr>
                <th>Imagename</th>
                <td>{{ candidat.imageName }}</td>
            </tr>
            <tr>
                <th>Updatedat</th>
                <td>{% if candidat.updatedAt %}{{ candidat.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('_edit', { 'id': candidat.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":candidat:show.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/views/candidat/show.html.twig");
    }
}
