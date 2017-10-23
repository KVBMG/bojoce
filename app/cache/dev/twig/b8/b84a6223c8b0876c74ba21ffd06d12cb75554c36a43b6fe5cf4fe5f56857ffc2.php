<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_82269f5ba7b17a326008621f7ed9f95202e2ce3d393fe6e94b874b562df8dbc0 extends Twig_Template
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
        $__internal_e9aabe477a6fa64cdf656c7fdcb9139d6a3c2a77795040fba8faefc54029016c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9aabe477a6fa64cdf656c7fdcb9139d6a3c2a77795040fba8faefc54029016c->enter($__internal_e9aabe477a6fa64cdf656c7fdcb9139d6a3c2a77795040fba8faefc54029016c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e9aabe477a6fa64cdf656c7fdcb9139d6a3c2a77795040fba8faefc54029016c->leave($__internal_e9aabe477a6fa64cdf656c7fdcb9139d6a3c2a77795040fba8faefc54029016c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
