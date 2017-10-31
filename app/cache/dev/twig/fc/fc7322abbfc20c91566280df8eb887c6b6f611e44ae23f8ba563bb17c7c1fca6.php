<?php

/* EcoJobCandidatBundle:AlertMail/Mail:alertMail.html.twig */
class __TwigTemplate_a1b0f19f1d64ab971aac6434bf883b7a748e631f6cb7e472ad393fc2d4d7dba5 extends Twig_Template
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
        $__internal_2b43a7a976f10176d2a8c1fabc8de8f65076c545c1ceabdd9fd6c65ac743f510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b43a7a976f10176d2a8c1fabc8de8f65076c545c1ceabdd9fd6c65ac743f510->enter($__internal_2b43a7a976f10176d2a8c1fabc8de8f65076c545c1ceabdd9fd6c65ac743f510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:AlertMail/Mail:alertMail.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres"))), "html", null, true);
        echo " offre d'emplois pour vous</div>
                                <div class=\"content\">
                                    <p>
                                        Les voici:
                                     ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) ? $context["offres"] : $this->getContext($context, "offres")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 91
            echo "                                        <ul>
                                            <li><a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("eco_job_candidat_offre", array("id" => $this->getAttribute($context["offre"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " -  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "contrat", array()), "libelle", array()), "html", null, true);
            echo ")</a></li>
                                        </ul>
                                       ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                                    </p>
                                  </div>
                        </div>
                                    
</div>
                                    <div style=\"text-align: center\">
                                        <div class=\"phone2\">1-800-123-1234</div>
                                    </div>
                                    <div style=\"text-align: center\"><i class=\"fa fa-envelope\"></i><span><a href=\"#\">example@website.com</a></span></div>
                                    </div>
                                   
</body>";
        
        $__internal_2b43a7a976f10176d2a8c1fabc8de8f65076c545c1ceabdd9fd6c65ac743f510->leave($__internal_2b43a7a976f10176d2a8c1fabc8de8f65076c545c1ceabdd9fd6c65ac743f510_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb1eb627513261f4cae35fc8216aa720fe5ca4d0777c376d2b3a7b91fc62372b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1eb627513261f4cae35fc8216aa720fe5ca4d0777c376d2b3a7b91fc62372b->enter($__internal_fb1eb627513261f4cae35fc8216aa720fe5ca4d0777c376d2b3a7b91fc62372b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alert Mail";
        
        $__internal_fb1eb627513261f4cae35fc8216aa720fe5ca4d0777c376d2b3a7b91fc62372b->leave($__internal_fb1eb627513261f4cae35fc8216aa720fe5ca4d0777c376d2b3a7b91fc62372b_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:AlertMail/Mail:alertMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 6,  168 => 95,  145 => 92,  142 => 91,  125 => 90,  116 => 86,  109 => 82,  30 => 6,  23 => 1,);
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
                            <div class=\"title\">Bonjour {{ prenom }} , {{ offres | length}} offre d'emplois pour vous</div>
                                <div class=\"content\">
                                    <p>
                                        Les voici:
                                     {% for offre in offres %}
                                        <ul>
                                            <li><a href=\"{{ url('eco_job_candidat_offre', {'id': offre.id}) }}\">{{ loop.index }} -  {{ offre.titre }} ({{ offre.contrat.libelle }})</a></li>
                                        </ul>
                                       {% endfor %}
                                    </p>
                                  </div>
                        </div>
                                    
</div>
                                    <div style=\"text-align: center\">
                                        <div class=\"phone2\">1-800-123-1234</div>
                                    </div>
                                    <div style=\"text-align: center\"><i class=\"fa fa-envelope\"></i><span><a href=\"#\">example@website.com</a></span></div>
                                    </div>
                                   
</body>", "EcoJobCandidatBundle:AlertMail/Mail:alertMail.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\CandidatBundle/Resources/views/AlertMail/Mail/alertMail.html.twig");
    }
}
