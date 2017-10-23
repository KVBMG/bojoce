<?php

/* EcoJobUserBundle:Default:index.html.twig */
class __TwigTemplate_db1975351cceee1f9751c2c7a356a11fa193bfc98d11e5e06692c7734429297e extends Twig_Template
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
        $__internal_4d40d6423195d5fdd13cfb90b179f8d5b120c55560e2765862d929816c17cc12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d40d6423195d5fdd13cfb90b179f8d5b120c55560e2765862d929816c17cc12->enter($__internal_4d40d6423195d5fdd13cfb90b179f8d5b120c55560e2765862d929816c17cc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobUserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_4d40d6423195d5fdd13cfb90b179f8d5b120c55560e2765862d929816c17cc12->leave($__internal_4d40d6423195d5fdd13cfb90b179f8d5b120c55560e2765862d929816c17cc12_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobUserBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "EcoJobUserBundle:Default:index.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/UserBundle/Resources/views/Default/index.html.twig");
    }
}
