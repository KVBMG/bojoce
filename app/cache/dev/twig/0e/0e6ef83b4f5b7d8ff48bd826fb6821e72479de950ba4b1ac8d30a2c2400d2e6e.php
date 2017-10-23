<?php

/* FOSMessageBundle::layout.html.twig */
class __TwigTemplate_f2e2393be3bf67ad8488e6200b1eda1f18b42326868d6e3b825752481ef79195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99fb246b44bbc15b185a3942663629e370d80bee8de70f91b4f8a3f1da323281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fb246b44bbc15b185a3942663629e370d80bee8de70f91b4f8a3f1da323281->enter($__internal_99fb246b44bbc15b185a3942663629e370d80bee8de70f91b4f8a3f1da323281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</title>
    </head>

    <body>

        <h1>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</h1>

        <ul>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_inbox");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("inbox", array(), "FOSMessageBundle");
        echo "</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_sent");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sent", array(), "FOSMessageBundle");
        echo "</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_deleted");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("deleted", array(), "FOSMessageBundle");
        echo "</a></li>
        </ul>

        ";
        // line 18
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 19
        echo "
    </body>
</html>
";
        
        $__internal_99fb246b44bbc15b185a3942663629e370d80bee8de70f91b4f8a3f1da323281->leave($__internal_99fb246b44bbc15b185a3942663629e370d80bee8de70f91b4f8a3f1da323281_prof);

    }

    // line 18
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_92ded878b18027f6c1db126733ba6e32d9e798f553e1e0f42bd54e33cb31c479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ded878b18027f6c1db126733ba6e32d9e798f553e1e0f42bd54e33cb31c479->enter($__internal_92ded878b18027f6c1db126733ba6e32d9e798f553e1e0f42bd54e33cb31c479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_92ded878b18027f6c1db126733ba6e32d9e798f553e1e0f42bd54e33cb31c479->leave($__internal_92ded878b18027f6c1db126733ba6e32d9e798f553e1e0f42bd54e33cb31c479_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  68 => 19,  66 => 18,  58 => 15,  52 => 14,  46 => 13,  40 => 10,  32 => 5,  28 => 4,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset={{ _charset }}\" />
        <title>{% trans from 'FOSMessageBundle' %}messenger{% endtrans %}</title>
    </head>

    <body>

        <h1>{% trans from 'FOSMessageBundle' %}messenger{% endtrans %}</h1>

        <ul>
            <li><a href=\"{{ url('fos_message_inbox') }}\">{% trans from 'FOSMessageBundle' %}inbox{% endtrans %}</a></li>
            <li><a href=\"{{ url('fos_message_sent') }}\">{% trans from 'FOSMessageBundle' %}sent{% endtrans %}</a></li>
            <li><a href=\"{{ url('fos_message_deleted') }}\">{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</a></li>
        </ul>

        {% block fos_message_content %}{% endblock %}

    </body>
</html>
", "FOSMessageBundle::layout.html.twig", "/opt/lampp/htdocs/ecojob/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/layout.html.twig");
    }
}
