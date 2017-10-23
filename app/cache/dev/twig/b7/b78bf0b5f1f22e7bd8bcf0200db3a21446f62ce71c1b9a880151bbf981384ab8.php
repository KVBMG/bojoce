<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0ceed585f76ed498df15a2ebcceac2a2b2cb08c6fc8ed4dd75ab40425183f443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b973603e0dd02043199f7f72929b145875092b9b0a9db5e3c934498850418e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b973603e0dd02043199f7f72929b145875092b9b0a9db5e3c934498850418e95->enter($__internal_b973603e0dd02043199f7f72929b145875092b9b0a9db5e3c934498850418e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b973603e0dd02043199f7f72929b145875092b9b0a9db5e3c934498850418e95->leave($__internal_b973603e0dd02043199f7f72929b145875092b9b0a9db5e3c934498850418e95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4f4b80c09cfe81ad32b45d76d4fba87685a78ca3863f993d14140b24cc0709b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f4b80c09cfe81ad32b45d76d4fba87685a78ca3863f993d14140b24cc0709b->enter($__internal_a4f4b80c09cfe81ad32b45d76d4fba87685a78ca3863f993d14140b24cc0709b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a4f4b80c09cfe81ad32b45d76d4fba87685a78ca3863f993d14140b24cc0709b->leave($__internal_a4f4b80c09cfe81ad32b45d76d4fba87685a78ca3863f993d14140b24cc0709b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b7f8331e092910b090e1f7a746f3e420b061b5724a2b1ce83fca695488a5e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7f8331e092910b090e1f7a746f3e420b061b5724a2b1ce83fca695488a5e95->enter($__internal_6b7f8331e092910b090e1f7a746f3e420b061b5724a2b1ce83fca695488a5e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6b7f8331e092910b090e1f7a746f3e420b061b5724a2b1ce83fca695488a5e95->leave($__internal_6b7f8331e092910b090e1f7a746f3e420b061b5724a2b1ce83fca695488a5e95_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
