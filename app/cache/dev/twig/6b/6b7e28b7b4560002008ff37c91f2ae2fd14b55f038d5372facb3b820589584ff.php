<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1d46c4302052de2232e15413068ad084b199560fb5c5ff987b83679436ccf97c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_29d38d02f99ff145403a33e05cd3d280800e1e6671622c2da75d5c3a1b9d8e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d38d02f99ff145403a33e05cd3d280800e1e6671622c2da75d5c3a1b9d8e40->enter($__internal_29d38d02f99ff145403a33e05cd3d280800e1e6671622c2da75d5c3a1b9d8e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d38d02f99ff145403a33e05cd3d280800e1e6671622c2da75d5c3a1b9d8e40->leave($__internal_29d38d02f99ff145403a33e05cd3d280800e1e6671622c2da75d5c3a1b9d8e40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aab42093938035b326597fb27adc30667747a0a631130e47ae5df2b1937d3a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab42093938035b326597fb27adc30667747a0a631130e47ae5df2b1937d3a96->enter($__internal_aab42093938035b326597fb27adc30667747a0a631130e47ae5df2b1937d3a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_aab42093938035b326597fb27adc30667747a0a631130e47ae5df2b1937d3a96->leave($__internal_aab42093938035b326597fb27adc30667747a0a631130e47ae5df2b1937d3a96_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
