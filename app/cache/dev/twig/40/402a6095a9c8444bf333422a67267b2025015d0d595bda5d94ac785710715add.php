<?php

/* CaptchaBundle::captcha.html.twig */
class __TwigTemplate_fd656d51a3a710da9293b99ca585f020a95d5c8c271d840b430ec4df3dbfabff extends Twig_Template
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
        $__internal_cb98a7f3cb1c0f9657e3e6151c8914daf3c64501a27dd77a9fb7288f7b096152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb98a7f3cb1c0f9657e3e6151c8914daf3c64501a27dd77a9fb7288f7b096152->enter($__internal_cb98a7f3cb1c0f9657e3e6151c8914daf3c64501a27dd77a9fb7288f7b096152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_cb98a7f3cb1c0f9657e3e6151c8914daf3c64501a27dd77a9fb7288f7b096152->leave($__internal_cb98a7f3cb1c0f9657e3e6151c8914daf3c64501a27dd77a9fb7288f7b096152_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_b3dada8966db1c3bce9f458a5520cd1d03cd603f3c5f23f030f3bdc153e3167e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3dada8966db1c3bce9f458a5520cd1d03cd603f3c5f23f030f3bdc153e3167e->enter($__internal_b3dada8966db1c3bce9f458a5520cd1d03cd603f3c5f23f030f3bdc153e3167e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["addLayoutStylesheetInclude"]) ? $context["addLayoutStylesheetInclude"] : $this->getContext($context, "addLayoutStylesheetInclude"))) {
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
        echo (isset($context["captcha_html"]) ? $context["captcha_html"] : $this->getContext($context, "captcha_html"));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("id" => (isset($context["user_input_id"]) ? $context["user_input_id"] : $this->getContext($context, "user_input_id")), "value" => ""));
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b3dada8966db1c3bce9f458a5520cd1d03cd603f3c5f23f030f3bdc153e3167e->leave($__internal_b3dada8966db1c3bce9f458a5520cd1d03cd603f3c5f23f030f3bdc153e3167e_prof);

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
{% endblock %}", "CaptchaBundle::captcha.html.twig", "E:\\kandra\\Dev\\bojoce\\vendor\\captcha-com\\symfony-captcha-bundle/Resources/views/captcha.html.twig");
    }
}
