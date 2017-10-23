<?php

/* CaptchaBundle::captcha.html.twig */
class __TwigTemplate_29b47ac168c40403592f1d9a30ec6e8f0e7162f2611149da42574fcd088ac9d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'captcha_widget' => array($this, 'block_captcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c93506222b5c6318813d603fdd9631b29cb069d3a589bbb47dae4ea90c6a16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c93506222b5c6318813d603fdd9631b29cb069d3a589bbb47dae4ea90c6a16d->enter($__internal_4c93506222b5c6318813d603fdd9631b29cb069d3a589bbb47dae4ea90c6a16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_4c93506222b5c6318813d603fdd9631b29cb069d3a589bbb47dae4ea90c6a16d->leave($__internal_4c93506222b5c6318813d603fdd9631b29cb069d3a589bbb47dae4ea90c6a16d_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_d9e30ab288a1b199883bae44e2d5e20b0eb0dd15f4dbf72470c170bc04c01a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e30ab288a1b199883bae44e2d5e20b0eb0dd15f4dbf72470c170bc04c01a5a->enter($__internal_d9e30ab288a1b199883bae44e2d5e20b0eb0dd15f4dbf72470c170bc04c01a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if (($context["addLayoutStylesheetInclude"] ?? $this->getContext($context, "addLayoutStylesheetInclude"))) {
            // line 4
            echo "            <link href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("captcha_layout_stylesheet_url");
            echo "\" rel=\"stylesheet\" />
        ";
        }
        // line 6
        echo "
        ";
        // line 7
        echo ($context["captcha_html"] ?? $this->getContext($context, "captcha_html"));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("id" => ($context["user_input_id"] ?? $this->getContext($context, "user_input_id")), "value" => ""));
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d9e30ab288a1b199883bae44e2d5e20b0eb0dd15f4dbf72470c170bc04c01a5a->leave($__internal_d9e30ab288a1b199883bae44e2d5e20b0eb0dd15f4dbf72470c170bc04c01a5a_prof);

    }

    public function getTemplateName()
    {
        return "CaptchaBundle::captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  50 => 7,  47 => 6,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block captcha_widget %}
    {% spaceless %}
        {% if addLayoutStylesheetInclude %}
            <link href=\"{{ path('captcha_layout_stylesheet_url') }}\" rel=\"stylesheet\" />
        {% endif %}

        {{ captcha_html | raw }}
        {{ form_widget(form, { 'id': user_input_id, 'value': '' }) }}
    {% endspaceless %}
{% endblock %}", "CaptchaBundle::captcha.html.twig", "/opt/lampp/htdocs/ecojob/vendor/captcha-com/symfony-captcha-bundle/Resources/views/captcha.html.twig");
    }
}
