<?php

/* EcoJobAdminBundle:Admin:index.html.twig */
class __TwigTemplate_f589bdaad5acdf78d7f085350a8c4b034a905f461951e37b913af76058d633a2 extends Twig_Template
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
        $__internal_808e0f8baa77d0b15908f15fa9983188a5dbf59b95d892bfc1d78a14c9954874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808e0f8baa77d0b15908f15fa9983188a5dbf59b95d892bfc1d78a14c9954874->enter($__internal_808e0f8baa77d0b15908f15fa9983188a5dbf59b95d892bfc1d78a14c9954874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_808e0f8baa77d0b15908f15fa9983188a5dbf59b95d892bfc1d78a14c9954874->leave($__internal_808e0f8baa77d0b15908f15fa9983188a5dbf59b95d892bfc1d78a14c9954874_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_589e0959e8f7c07f59356e0375ba63394ca87f57122d820d2aeb2e4bfaecbf22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589e0959e8f7c07f59356e0375ba63394ca87f57122d820d2aeb2e4bfaecbf22->enter($__internal_589e0959e8f7c07f59356e0375ba63394ca87f57122d820d2aeb2e4bfaecbf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Administration";
        
        $__internal_589e0959e8f7c07f59356e0375ba63394ca87f57122d820d2aeb2e4bfaecbf22->leave($__internal_589e0959e8f7c07f59356e0375ba63394ca87f57122d820d2aeb2e4bfaecbf22_prof);

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
{% block titre %}Administration{% endblock %}", "EcoJobAdminBundle:Admin:index.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/index.html.twig");
    }
}
