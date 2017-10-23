<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f63a4379e5c1a0e51e59ee17ebda274bd62d0eea3afff97ac28ba9448d24d726 extends Twig_Template
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
        $__internal_525c74f1232504a6e7d83cdf27c7e4528d160b72e6c515d2ef45eff5e75626ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525c74f1232504a6e7d83cdf27c7e4528d160b72e6c515d2ef45eff5e75626ec->enter($__internal_525c74f1232504a6e7d83cdf27c7e4528d160b72e6c515d2ef45eff5e75626ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_525c74f1232504a6e7d83cdf27c7e4528d160b72e6c515d2ef45eff5e75626ec->leave($__internal_525c74f1232504a6e7d83cdf27c7e4528d160b72e6c515d2ef45eff5e75626ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
