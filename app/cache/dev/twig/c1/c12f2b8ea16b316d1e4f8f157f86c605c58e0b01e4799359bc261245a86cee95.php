<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_01e89a8cd4c10777e256493632570c8aed252a72fec2f87d77fd058f8c84fd90 extends Twig_Template
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
        $__internal_f9b1edacf0a9e6a79f140fde6ba5116a797668b70cbde113d454b0ad8e0f6093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b1edacf0a9e6a79f140fde6ba5116a797668b70cbde113d454b0ad8e0f6093->enter($__internal_f9b1edacf0a9e6a79f140fde6ba5116a797668b70cbde113d454b0ad8e0f6093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f9b1edacf0a9e6a79f140fde6ba5116a797668b70cbde113d454b0ad8e0f6093->leave($__internal_f9b1edacf0a9e6a79f140fde6ba5116a797668b70cbde113d454b0ad8e0f6093_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
