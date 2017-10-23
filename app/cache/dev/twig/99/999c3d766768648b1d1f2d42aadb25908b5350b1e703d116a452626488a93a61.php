<?php

/* CaptchaBundle::captcha.html.twig */
class __TwigTemplate_28ef198b03c1c02514fef042746016587ec38ddfffde59e787d54d843cb3454f extends Twig_Template
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
        $__internal_692225d881d692d23dfd24d9d92302408a0f243272185ad5caf2a766a8e1de62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692225d881d692d23dfd24d9d92302408a0f243272185ad5caf2a766a8e1de62->enter($__internal_692225d881d692d23dfd24d9d92302408a0f243272185ad5caf2a766a8e1de62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_692225d881d692d23dfd24d9d92302408a0f243272185ad5caf2a766a8e1de62->leave($__internal_692225d881d692d23dfd24d9d92302408a0f243272185ad5caf2a766a8e1de62_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_2b6e259469f416a2adac2ecbeb8d286335dc65f0d02c150c754ba0d043048e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6e259469f416a2adac2ecbeb8d286335dc65f0d02c150c754ba0d043048e62->enter($__internal_2b6e259469f416a2adac2ecbeb8d286335dc65f0d02c150c754ba0d043048e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

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
        
        $__internal_2b6e259469f416a2adac2ecbeb8d286335dc65f0d02c150c754ba0d043048e62->leave($__internal_2b6e259469f416a2adac2ecbeb8d286335dc65f0d02c150c754ba0d043048e62_prof);

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
