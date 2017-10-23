<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fd28d852da0500f78a0d59abb17a703cc3d93f1d34ebe0d2ddeb3c232c350043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3092c498653ef1489e2ff8cf42864144f4ae44b723640a44451231f5dd166620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3092c498653ef1489e2ff8cf42864144f4ae44b723640a44451231f5dd166620->enter($__internal_3092c498653ef1489e2ff8cf42864144f4ae44b723640a44451231f5dd166620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3092c498653ef1489e2ff8cf42864144f4ae44b723640a44451231f5dd166620->leave($__internal_3092c498653ef1489e2ff8cf42864144f4ae44b723640a44451231f5dd166620_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c67768622b610feba2f8bb01f35504b511a9c3df6fc9f24dc8a9f0a1a98af618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67768622b610feba2f8bb01f35504b511a9c3df6fc9f24dc8a9f0a1a98af618->enter($__internal_c67768622b610feba2f8bb01f35504b511a9c3df6fc9f24dc8a9f0a1a98af618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c67768622b610feba2f8bb01f35504b511a9c3df6fc9f24dc8a9f0a1a98af618->leave($__internal_c67768622b610feba2f8bb01f35504b511a9c3df6fc9f24dc8a9f0a1a98af618_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d23b1f60e83dd999b3f9c074e4532b179eedfe90c4f3e0f8d61906f65fe9524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d23b1f60e83dd999b3f9c074e4532b179eedfe90c4f3e0f8d61906f65fe9524->enter($__internal_3d23b1f60e83dd999b3f9c074e4532b179eedfe90c4f3e0f8d61906f65fe9524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d23b1f60e83dd999b3f9c074e4532b179eedfe90c4f3e0f8d61906f65fe9524->leave($__internal_3d23b1f60e83dd999b3f9c074e4532b179eedfe90c4f3e0f8d61906f65fe9524_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_35c7aaf3d43c336cf7694fbbe2cf4e55005da43f15be3432775c3f5529c9e81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c7aaf3d43c336cf7694fbbe2cf4e55005da43f15be3432775c3f5529c9e81f->enter($__internal_35c7aaf3d43c336cf7694fbbe2cf4e55005da43f15be3432775c3f5529c9e81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_35c7aaf3d43c336cf7694fbbe2cf4e55005da43f15be3432775c3f5529c9e81f->leave($__internal_35c7aaf3d43c336cf7694fbbe2cf4e55005da43f15be3432775c3f5529c9e81f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
