<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a714c49b33d7b9f42043a2cf2027d7dd3be3cc88f02ae390ce85f532deb897c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0745005e7219d1ee5337a7627eea7f4a2bb4978a69ebe4412875a2837a5b6d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0745005e7219d1ee5337a7627eea7f4a2bb4978a69ebe4412875a2837a5b6d48->enter($__internal_0745005e7219d1ee5337a7627eea7f4a2bb4978a69ebe4412875a2837a5b6d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0745005e7219d1ee5337a7627eea7f4a2bb4978a69ebe4412875a2837a5b6d48->leave($__internal_0745005e7219d1ee5337a7627eea7f4a2bb4978a69ebe4412875a2837a5b6d48_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6a9fcd91b27af3abbd60b35475dfc31fef23b71b233e1f0b4f482cea758cef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a9fcd91b27af3abbd60b35475dfc31fef23b71b233e1f0b4f482cea758cef9->enter($__internal_a6a9fcd91b27af3abbd60b35475dfc31fef23b71b233e1f0b4f482cea758cef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a6a9fcd91b27af3abbd60b35475dfc31fef23b71b233e1f0b4f482cea758cef9->leave($__internal_a6a9fcd91b27af3abbd60b35475dfc31fef23b71b233e1f0b4f482cea758cef9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
