<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_65585bd6951af3cbbb9144e6b1d14a92020cdabbba880f44a32d16f307792484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04bcd808b60d13b885d6082b3152e0825e54fdddeb444acb82da99bb4134a66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04bcd808b60d13b885d6082b3152e0825e54fdddeb444acb82da99bb4134a66e->enter($__internal_04bcd808b60d13b885d6082b3152e0825e54fdddeb444acb82da99bb4134a66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04bcd808b60d13b885d6082b3152e0825e54fdddeb444acb82da99bb4134a66e->leave($__internal_04bcd808b60d13b885d6082b3152e0825e54fdddeb444acb82da99bb4134a66e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de69feda435a09864127cc493cca613917c668580d733e027f1a2f7155ea942f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de69feda435a09864127cc493cca613917c668580d733e027f1a2f7155ea942f->enter($__internal_de69feda435a09864127cc493cca613917c668580d733e027f1a2f7155ea942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_de69feda435a09864127cc493cca613917c668580d733e027f1a2f7155ea942f->leave($__internal_de69feda435a09864127cc493cca613917c668580d733e027f1a2f7155ea942f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
