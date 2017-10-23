<?php

/* EcoJobRecruteurBundle:Recruteur:candidature-detail.html.twig */
class __TwigTemplate_d6a0d018b3ecb40f13b6fb4bae063bf065617962613e7a760a751d1bb7f6103f extends Twig_Template
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
        $__internal_7f71922823e6545c411ea0e1f9fbcc2ed8430c61f417e4988f7341b79a92fc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f71922823e6545c411ea0e1f9fbcc2ed8430c61f417e4988f7341b79a92fc18->enter($__internal_7f71922823e6545c411ea0e1f9fbcc2ed8430c61f417e4988f7341b79a92fc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:candidature-detail.html.twig"));

        // line 1
        echo "<div class=\"\">
    <div class=\"breadcrumbs1\">
        <a href=\"#\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "offre", array()), "titre", array()), "html", null, true);
        echo "</a><span></span>
    </div>
</div>
<div class=\"latest_news\">
    <div class=\"team1 clearfix\">
        <div class=\"caption\">
            <figure>
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("images/users/" . $this->getAttribute($this->getAttribute($this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "candidat", array()), "curriculum", array()), "imageName", array())) . "")), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
            </figure>
            <div class=\"txt1\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "candidat", array()), "username", array()), "html", null, true);
        echo "</div>
            <div class=\"txt2\">
                <a href=\"mailto:";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "candidat", array()), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "candidat", array()), "email", array()), "html", null, true);
        echo "</a>
            </div>
            <div class=\"txt3\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "description", array()), "html", null, true);
        echo ".</div>
            <div class=\"title5 pull-right\"><b>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "getDateCandidature", array(), "method")), "html", null, true);
        echo "</b></div>
        </div>
    </div>
</div>
<div class=\"latest_news\">
    <div class=\"quote_wrapper\">
        <div class=\"title4\"><span>CURRICULUM VITAE</span></div>
        <div id=\"note\"></div>
        <div id=\"fields\">
            <form id=\"ajax-contact-form\" class=\"form-horizontal\" action=\"javascript:alert('success!');\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label for=\"inputName\">Nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"name\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "candidat", array()), "curriculum", array()), "nom", array()), "html", null, true);
        echo "\" readonly=\"true\">
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label for=\"inputLName\">Prénom</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputLName\" name=\"lname\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "candidat", array()), "curriculum", array()), "prenom", array()), "html", null, true);
        echo "\" readonly=\"true\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label for=\"inputEmail\">Email</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputEmail\" name=\"email\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "candidat", array()), "email", array()), "html", null, true);
        echo "\" readonly=\"true\">
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label for=\"inputPhone\">Téléphone</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputPhone\" name=\"phone\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "candidat", array()), "curriculum", array()), "telephone", array()), "html", null, true);
        echo "\" readonly=\"true\">
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label for=\"inputMessage\">A propos</label>
                            <textarea class=\"form-control\" rows=\"5\" id=\"inputMessage\" name=\"content\" readonly=\"true\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["candidature"] ?? $this->getContext($context, "candidature")), "candidat", array()), "curriculum", array()), "about", array()), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                </div>

                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Télécharger le CV</button>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_7f71922823e6545c411ea0e1f9fbcc2ed8430c61f417e4988f7341b79a92fc18->leave($__internal_7f71922823e6545c411ea0e1f9fbcc2ed8430c61f417e4988f7341b79a92fc18_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:candidature-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 60,  103 => 51,  94 => 45,  83 => 37,  74 => 31,  57 => 17,  53 => 16,  46 => 14,  41 => 12,  36 => 10,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"\">
    <div class=\"breadcrumbs1\">
        <a href=\"#\">{{candidature.offre.titre}}</a><span></span>
    </div>
</div>
<div class=\"latest_news\">
    <div class=\"team1 clearfix\">
        <div class=\"caption\">
            <figure>
                <img src=\"{{ asset('images/users/' ~ candidature.candidat.curriculum.imageName ~'')}}\" alt=\"\" class=\"img-responsive\">
            </figure>
            <div class=\"txt1\">{{candidature.candidat.username}}</div>
            <div class=\"txt2\">
                <a href=\"mailto:{{candidature.candidat.email}}\">{{candidature.candidat.email}}</a>
            </div>
            <div class=\"txt3\">{{candidature.description}}.</div>
            <div class=\"title5 pull-right\"><b>{{candidature.getDateCandidature() | date}}</b></div>
        </div>
    </div>
</div>
<div class=\"latest_news\">
    <div class=\"quote_wrapper\">
        <div class=\"title4\"><span>CURRICULUM VITAE</span></div>
        <div id=\"note\"></div>
        <div id=\"fields\">
            <form id=\"ajax-contact-form\" class=\"form-horizontal\" action=\"javascript:alert('success!');\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label for=\"inputName\">Nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"name\" value=\"{{candidature.candidat.curriculum.nom}}\" readonly=\"true\">
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label for=\"inputLName\">Prénom</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputLName\" name=\"lname\" value=\"{{candidature.candidat.curriculum.prenom}}\" readonly=\"true\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label for=\"inputEmail\">Email</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputEmail\" name=\"email\" value=\"{{candidature.candidat.email}}\" readonly=\"true\">
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label for=\"inputPhone\">Téléphone</label>
                            <input type=\"text\" class=\"form-control\" id=\"inputPhone\" name=\"phone\" value=\"{{candidature.candidat.curriculum.telephone}}\" readonly=\"true\">
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"form-group\">
                            <label for=\"inputMessage\">A propos</label>
                            <textarea class=\"form-control\" rows=\"5\" id=\"inputMessage\" name=\"content\" readonly=\"true\">{{candidature.candidat.curriculum.about}}</textarea>
                        </div>
                    </div>
                </div>

                <button type=\"submit\" class=\"btn-default btn-cf-submit\">Télécharger le CV</button>
            </form>
        </div>
    </div>
</div>
", "EcoJobRecruteurBundle:Recruteur:candidature-detail.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/candidature-detail.html.twig");
    }
}
