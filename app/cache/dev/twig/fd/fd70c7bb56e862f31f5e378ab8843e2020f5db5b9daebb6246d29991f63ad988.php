<?php

/* :candidat:index.html.twig */
class __TwigTemplate_38bb6e7297d0870353093a09a3ab16a1ad5353e82e38c29611a78f9ac1a75fd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":candidat:index.html.twig", 1);
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
        $__internal_9c8b813a3ce2c34d5d6afb2193d0d75b76b76fd179439ae8ab021d974b97f4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8b813a3ce2c34d5d6afb2193d0d75b76b76fd179439ae8ab021d974b97f4c0->enter($__internal_9c8b813a3ce2c34d5d6afb2193d0d75b76b76fd179439ae8ab021d974b97f4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":candidat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8b813a3ce2c34d5d6afb2193d0d75b76b76fd179439ae8ab021d974b97f4c0->leave($__internal_9c8b813a3ce2c34d5d6afb2193d0d75b76b76fd179439ae8ab021d974b97f4c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba1b588b8caa44f7ff7f652d50ba972b6eca3146170953c55c3378fd5929abb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1b588b8caa44f7ff7f652d50ba972b6eca3146170953c55c3378fd5929abb5->enter($__internal_ba1b588b8caa44f7ff7f652d50ba972b6eca3146170953c55c3378fd5929abb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Candidats list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Imagename</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["candidats"] ?? $this->getContext($context, "candidats")));
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_show", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "imageName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["candidat"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["candidat"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_show", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_new");
        echo "\">Create a new candidat</a>
        </li>
    </ul>
";
        
        $__internal_ba1b588b8caa44f7ff7f652d50ba972b6eca3146170953c55c3378fd5929abb5->leave($__internal_ba1b588b8caa44f7ff7f652d50ba972b6eca3146170953c55c3378fd5929abb5_prof);

    }

    public function getTemplateName()
    {
        return ":candidat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Candidats list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Imagename</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for candidat in candidats %}
            <tr>
                <td><a href=\"{{ path('_show', { 'id': candidat.id }) }}\">{{ candidat.id }}</a></td>
                <td>{{ candidat.imageName }}</td>
                <td>{% if candidat.updatedAt %}{{ candidat.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('_show', { 'id': candidat.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('_edit', { 'id': candidat.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('_new') }}\">Create a new candidat</a>
        </li>
    </ul>
{% endblock %}
", ":candidat:index.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/views/candidat/index.html.twig");
    }
}
