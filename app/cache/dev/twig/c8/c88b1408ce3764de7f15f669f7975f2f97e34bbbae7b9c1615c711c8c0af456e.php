<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0f5171670bbe9df36e2f9625dd04e40c22fff104fa45e1118c370e85f757638e extends Twig_Template
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
        $__internal_a8efc257762dbbf5dbdf3d323ba9c9fb87a404830f0ac3456a0b57e4b9b8f1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8efc257762dbbf5dbdf3d323ba9c9fb87a404830f0ac3456a0b57e4b9b8f1e8->enter($__internal_a8efc257762dbbf5dbdf3d323ba9c9fb87a404830f0ac3456a0b57e4b9b8f1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a8efc257762dbbf5dbdf3d323ba9c9fb87a404830f0ac3456a0b57e4b9b8f1e8->leave($__internal_a8efc257762dbbf5dbdf3d323ba9c9fb87a404830f0ac3456a0b57e4b9b8f1e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
