<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_7440f8a39f0ffd9e215672dde2ce046d33b7f1ceb100a374452cda924de851b9 extends Twig_Template
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
        $__internal_5a64e4dc10f4b037b32412f77ca06aa9703df759f94aace0fb819168de3938ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a64e4dc10f4b037b32412f77ca06aa9703df759f94aace0fb819168de3938ec->enter($__internal_5a64e4dc10f4b037b32412f77ca06aa9703df759f94aace0fb819168de3938ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        if (array_key_exists("error", $context)) {
            // line 3
            echo "    <div class=\"alert alert-danger text-center\" stlye=\"border-radius:10px;\">

        ";
            // line 5
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "
    </div>

";
        }
        // line 9
        echo "<form class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"row\">
        <div class=\"col-sm-12\">     
            <div class=\"form-group\">
                <label class=\"control-label col-sm-4\"  for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-6\">
                    <input type=\"text\" class=\"form-control\"  id=\"username\" name=\"username\" required=\"required\" />
                </div>
            </div>
        </div>
    </div>
    <input type=\"submit\" class=\"btn-default btn-cf-submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_5a64e4dc10f4b037b32412f77ca06aa9703df759f94aace0fb819168de3938ec->leave($__internal_5a64e4dc10f4b037b32412f77ca06aa9703df759f94aace0fb819168de3938ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  43 => 13,  35 => 9,  28 => 5,  24 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% if error is defined %}
    <div class=\"alert alert-danger text-center\" stlye=\"border-radius:10px;\">

        {{ error }}
    </div>

{% endif %}
<form class=\"form-horizontal\" action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"row\">
        <div class=\"col-sm-12\">     
            <div class=\"form-group\">
                <label class=\"control-label col-sm-4\"  for=\"username\">{{ 'resetting.request.username'|trans }}</label>
                <div class=\"col-sm-6\">
                    <input type=\"text\" class=\"form-control\"  id=\"username\" name=\"username\" required=\"required\" />
                </div>
            </div>
        </div>
    </div>
    <input type=\"submit\" class=\"btn-default btn-cf-submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/opt/lampp/htdocs/ecojob/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
