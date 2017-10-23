<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1b2a82167d884e118b393783e46c6a81ca74f0f74ba304aeff0820da5111123d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_6f8b40501a56748a7c0f2a5e50b973b76abebd80fd9cf453647f2de39d7c5fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8b40501a56748a7c0f2a5e50b973b76abebd80fd9cf453647f2de39d7c5fb3->enter($__internal_6f8b40501a56748a7c0f2a5e50b973b76abebd80fd9cf453647f2de39d7c5fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f8b40501a56748a7c0f2a5e50b973b76abebd80fd9cf453647f2de39d7c5fb3->leave($__internal_6f8b40501a56748a7c0f2a5e50b973b76abebd80fd9cf453647f2de39d7c5fb3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d869a6196699dcecd156c24533b53d5749999419e54b015d45ea65c8b4a0f582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d869a6196699dcecd156c24533b53d5749999419e54b015d45ea65c8b4a0f582->enter($__internal_d869a6196699dcecd156c24533b53d5749999419e54b015d45ea65c8b4a0f582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d869a6196699dcecd156c24533b53d5749999419e54b015d45ea65c8b4a0f582->leave($__internal_d869a6196699dcecd156c24533b53d5749999419e54b015d45ea65c8b4a0f582_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
