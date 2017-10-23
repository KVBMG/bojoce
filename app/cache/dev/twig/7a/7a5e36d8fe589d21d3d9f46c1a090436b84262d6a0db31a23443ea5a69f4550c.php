<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_21893e4e5a9fa144283db9c83e7ed0fc35125871497349f702402066cc18561a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b48567edd470cb8f27dd38ac03f208f3f32d58d44ee54f189b0bf4b4b6a0a727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48567edd470cb8f27dd38ac03f208f3f32d58d44ee54f189b0bf4b4b6a0a727->enter($__internal_b48567edd470cb8f27dd38ac03f208f3f32d58d44ee54f189b0bf4b4b6a0a727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_b48567edd470cb8f27dd38ac03f208f3f32d58d44ee54f189b0bf4b4b6a0a727->leave($__internal_b48567edd470cb8f27dd38ac03f208f3f32d58d44ee54f189b0bf4b4b6a0a727_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
