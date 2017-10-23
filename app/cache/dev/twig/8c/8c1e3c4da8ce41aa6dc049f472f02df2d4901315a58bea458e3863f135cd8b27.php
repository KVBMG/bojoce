<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_87c4e455723555fff8dd47c59ea8de6ea3142648586d57f10eb571855b8a4f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48f526c4455c0d26d07cf15db2549578e9e12324f1f67ca2055b00f37b87d37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f526c4455c0d26d07cf15db2549578e9e12324f1f67ca2055b00f37b87d37f->enter($__internal_48f526c4455c0d26d07cf15db2549578e9e12324f1f67ca2055b00f37b87d37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_48f526c4455c0d26d07cf15db2549578e9e12324f1f67ca2055b00f37b87d37f->leave($__internal_48f526c4455c0d26d07cf15db2549578e9e12324f1f67ca2055b00f37b87d37f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2820441980ad38beee3ded8d1b14a836c458cfe608ca6dc4dc475efbad646da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2820441980ad38beee3ded8d1b14a836c458cfe608ca6dc4dc475efbad646da7->enter($__internal_2820441980ad38beee3ded8d1b14a836c458cfe608ca6dc4dc475efbad646da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_2820441980ad38beee3ded8d1b14a836c458cfe608ca6dc4dc475efbad646da7->leave($__internal_2820441980ad38beee3ded8d1b14a836c458cfe608ca6dc4dc475efbad646da7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7736302c2682063a964b45ef9757f1cd89b51e4fab17bf7d07e0a16619f9cc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7736302c2682063a964b45ef9757f1cd89b51e4fab17bf7d07e0a16619f9cc7e->enter($__internal_7736302c2682063a964b45ef9757f1cd89b51e4fab17bf7d07e0a16619f9cc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_7736302c2682063a964b45ef9757f1cd89b51e4fab17bf7d07e0a16619f9cc7e->leave($__internal_7736302c2682063a964b45ef9757f1cd89b51e4fab17bf7d07e0a16619f9cc7e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_94aa4b7aa2fed8ffa203c985564c306a410c79ba28e851f7bc5794f3a9f767b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94aa4b7aa2fed8ffa203c985564c306a410c79ba28e851f7bc5794f3a9f767b1->enter($__internal_94aa4b7aa2fed8ffa203c985564c306a410c79ba28e851f7bc5794f3a9f767b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_94aa4b7aa2fed8ffa203c985564c306a410c79ba28e851f7bc5794f3a9f767b1->leave($__internal_94aa4b7aa2fed8ffa203c985564c306a410c79ba28e851f7bc5794f3a9f767b1_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fcf2010279bc51a0374a485adf309ef1ca3c3a5815b9dd5fd5ba7eac28a567b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf2010279bc51a0374a485adf309ef1ca3c3a5815b9dd5fd5ba7eac28a567b9->enter($__internal_fcf2010279bc51a0374a485adf309ef1ca3c3a5815b9dd5fd5ba7eac28a567b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_fcf2010279bc51a0374a485adf309ef1ca3c3a5815b9dd5fd5ba7eac28a567b9->leave($__internal_fcf2010279bc51a0374a485adf309ef1ca3c3a5815b9dd5fd5ba7eac28a567b9_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/opt/lampp/htdocs/ecojob/vendor/winzou/console-bundle/CoreSphere/ConsoleBundle/Resources/views/base.html.twig");
    }
}
