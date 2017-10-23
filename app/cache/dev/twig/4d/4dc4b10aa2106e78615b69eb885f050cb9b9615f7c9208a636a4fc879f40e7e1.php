<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_666ca16d15022509935b8f7a98149344700b6c1c1b0396958f7c70dfb6ed762e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_9e0b4e00404669757aa45fee127c33becc7aeede9eb9b17c5fa3b971077469c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0b4e00404669757aa45fee127c33becc7aeede9eb9b17c5fa3b971077469c9->enter($__internal_9e0b4e00404669757aa45fee127c33becc7aeede9eb9b17c5fa3b971077469c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e0b4e00404669757aa45fee127c33becc7aeede9eb9b17c5fa3b971077469c9->leave($__internal_9e0b4e00404669757aa45fee127c33becc7aeede9eb9b17c5fa3b971077469c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c94ef5017f83b62ed3e0d03042b1f1c409d443ba9589fa359274dea568a60604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94ef5017f83b62ed3e0d03042b1f1c409d443ba9589fa359274dea568a60604->enter($__internal_c94ef5017f83b62ed3e0d03042b1f1c409d443ba9589fa359274dea568a60604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c94ef5017f83b62ed3e0d03042b1f1c409d443ba9589fa359274dea568a60604->leave($__internal_c94ef5017f83b62ed3e0d03042b1f1c409d443ba9589fa359274dea568a60604_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f11c6f24bc78df10e7a634b3bb30cdfdbe4562201d1f42fb24a4cabb093e4290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11c6f24bc78df10e7a634b3bb30cdfdbe4562201d1f42fb24a4cabb093e4290->enter($__internal_f11c6f24bc78df10e7a634b3bb30cdfdbe4562201d1f42fb24a4cabb093e4290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f11c6f24bc78df10e7a634b3bb30cdfdbe4562201d1f42fb24a4cabb093e4290->leave($__internal_f11c6f24bc78df10e7a634b3bb30cdfdbe4562201d1f42fb24a4cabb093e4290_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f208544e08db2ad198a0a647382751dacb827f99f292a165178a683d702bcf5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f208544e08db2ad198a0a647382751dacb827f99f292a165178a683d702bcf5b->enter($__internal_f208544e08db2ad198a0a647382751dacb827f99f292a165178a683d702bcf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f208544e08db2ad198a0a647382751dacb827f99f292a165178a683d702bcf5b->leave($__internal_f208544e08db2ad198a0a647382751dacb827f99f292a165178a683d702bcf5b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
