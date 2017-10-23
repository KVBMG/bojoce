<?php

/* EcoJobCandidatBundle:AlertMail/Mail:alertCandidature.html.twig */
class __TwigTemplate_2617476086e317c2a296d26faccbc23e6969c3aa95edcce228287d83ff375d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e3c0e2c029f2547fa0b63e1cbabb25de71c5d96ac034f355d8eed2b92731eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3c0e2c029f2547fa0b63e1cbabb25de71c5d96ac034f355d8eed2b92731eab->enter($__internal_2e3c0e2c029f2547fa0b63e1cbabb25de71c5d96ac034f355d8eed2b92731eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:AlertMail/Mail:alertCandidature.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html style=\"background-color: #b1adad\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <style type=\"text/css\">
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-family: \"Open Sans\", Arial, Helvetica, sans-serif;
        }
        body {
            color: #3d3d47;
            line-height: 1.715;
            background-color: white;

        }
        a {
            color: white;
            text-decoration: underline;
            outline: none;
        }

        .img-responsive{
            display: block;
            max-width: 100%;
            height: auto;
        }

        img {
            vertical-align: middle;
        }


        #slogan {
            position: relative;
            top: 0;
            margin-top: 0;
            right: 0;
            width: auto;
        }


        #slogan .title {
            padding: 13px;
            font-size: 18px;
            background: #3d3d47;
            font-size: 22px;
            font-weight: 700;
            color: #fff;
        }


        #slogan .content {
            color: #fff;
            padding: 13px;
            background: rgba(86, 86, 95, 0.88);
        }
        p {
            margin: 0 0 10px;
        }
        a {
            color: #01a2a6;
            text-decoration: underline;
            outline: none;
        }
        .phone2 {
            font-size: 36px;
            color: #01a2a6;
            font-weight: 700;
        }
    </style>

</head>
<body style=\"margin: 0;\">
<div>
    <div class=\"logo_wrapper\">
        <a href=\"index.html\" class=\"logo\">
            <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
        </a>
    </div>
    <div id=\"slogan\">
        <div class=\"title\">Bonjour ";
        // line 86
        echo twig_escape_filter($this->env, ($context["recruteur"] ?? $this->getContext($context, "recruteur")), "html", null, true);
        echo " ,</div>
        <div class=\"content\">
            <p>
                Le candidat ";
        // line 89
        echo twig_escape_filter($this->env, ($context["candidat"] ?? $this->getContext($context, "candidat")), "html", null, true);
        echo " vient de postuler sur votre offre d'emploi ";
        echo twig_escape_filter($this->env, ($context["offre"] ?? $this->getContext($context, "offre")), "html", null, true);
        echo ".
            </p>
        </div>
    </div>

</div>
<div style=\"text-align: center\">
    <div class=\"phone2\">1-800-123-1234</div>
</div>
<div style=\"text-align: center\"><i class=\"fa fa-envelope\"></i><span><a href=\"#\">example@website.com</a></span></div>
</div>

</body>";
        
        $__internal_2e3c0e2c029f2547fa0b63e1cbabb25de71c5d96ac034f355d8eed2b92731eab->leave($__internal_2e3c0e2c029f2547fa0b63e1cbabb25de71c5d96ac034f355d8eed2b92731eab_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_863f59c4db0198760b74139f452c9754d93807c498c7820a1194e354cac60968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863f59c4db0198760b74139f452c9754d93807c498c7820a1194e354cac60968->enter($__internal_863f59c4db0198760b74139f452c9754d93807c498c7820a1194e354cac60968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alert Mail";
        
        $__internal_863f59c4db0198760b74139f452c9754d93807c498c7820a1194e354cac60968->leave($__internal_863f59c4db0198760b74139f452c9754d93807c498c7820a1194e354cac60968_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:AlertMail/Mail:alertCandidature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 6,  122 => 89,  116 => 86,  109 => 82,  30 => 6,  23 => 1,);
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
<html style=\"background-color: #b1adad\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Alert Mail{% endblock %}</title>

    <style type=\"text/css\">
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-family: \"Open Sans\", Arial, Helvetica, sans-serif;
        }
        body {
            color: #3d3d47;
            line-height: 1.715;
            background-color: white;

        }
        a {
            color: white;
            text-decoration: underline;
            outline: none;
        }

        .img-responsive{
            display: block;
            max-width: 100%;
            height: auto;
        }

        img {
            vertical-align: middle;
        }


        #slogan {
            position: relative;
            top: 0;
            margin-top: 0;
            right: 0;
            width: auto;
        }


        #slogan .title {
            padding: 13px;
            font-size: 18px;
            background: #3d3d47;
            font-size: 22px;
            font-weight: 700;
            color: #fff;
        }


        #slogan .content {
            color: #fff;
            padding: 13px;
            background: rgba(86, 86, 95, 0.88);
        }
        p {
            margin: 0 0 10px;
        }
        a {
            color: #01a2a6;
            text-decoration: underline;
            outline: none;
        }
        .phone2 {
            font-size: 36px;
            color: #01a2a6;
            font-weight: 700;
        }
    </style>

</head>
<body style=\"margin: 0;\">
<div>
    <div class=\"logo_wrapper\">
        <a href=\"index.html\" class=\"logo\">
            <img src=\"{{asset('images/logo.png')}}\" alt=\"\" class=\"img-responsive\">
        </a>
    </div>
    <div id=\"slogan\">
        <div class=\"title\">Bonjour {{ recruteur }} ,</div>
        <div class=\"content\">
            <p>
                Le candidat {{ candidat }} vient de postuler sur votre offre d'emploi {{ offre }}.
            </p>
        </div>
    </div>

</div>
<div style=\"text-align: center\">
    <div class=\"phone2\">1-800-123-1234</div>
</div>
<div style=\"text-align: center\"><i class=\"fa fa-envelope\"></i><span><a href=\"#\">example@website.com</a></span></div>
</div>

</body>", "EcoJobCandidatBundle:AlertMail/Mail:alertCandidature.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/CandidatBundle/Resources/views/AlertMail/Mail/alertCandidature.html.twig");
    }
}
