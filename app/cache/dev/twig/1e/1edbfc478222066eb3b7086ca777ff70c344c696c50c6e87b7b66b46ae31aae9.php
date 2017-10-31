<?php

/* EcoJobAdminBundle:Admin:index.html.twig */
class __TwigTemplate_3b2ae0e5f2f300c311187b4744a6025918c5f33c04c0f8bbfbebc64e4efb69bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobAdminBundle::layout.html.twig", "EcoJobAdminBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_806c92cb4dcaeecc80058d9215b4ae67dbf9120d70aabc14ee75bc327332e3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806c92cb4dcaeecc80058d9215b4ae67dbf9120d70aabc14ee75bc327332e3c1->enter($__internal_806c92cb4dcaeecc80058d9215b4ae67dbf9120d70aabc14ee75bc327332e3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_806c92cb4dcaeecc80058d9215b4ae67dbf9120d70aabc14ee75bc327332e3c1->leave($__internal_806c92cb4dcaeecc80058d9215b4ae67dbf9120d70aabc14ee75bc327332e3c1_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_1be495f5741100807cbff598beec6aa60d3e1f2214402c77b10c0b32ec174774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be495f5741100807cbff598beec6aa60d3e1f2214402c77b10c0b32ec174774->enter($__internal_1be495f5741100807cbff598beec6aa60d3e1f2214402c77b10c0b32ec174774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Administration";
        
        $__internal_1be495f5741100807cbff598beec6aa60d3e1f2214402c77b10c0b32ec174774->leave($__internal_1be495f5741100807cbff598beec6aa60d3e1f2214402c77b10c0b32ec174774_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobAdminBundle::layout.html.twig\"%}
{% block titre %}Administration{% endblock %}", "EcoJobAdminBundle:Admin:index.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\AdminBundle/Resources/views/Admin/index.html.twig");
    }
}
