<?php

/* EcoJobRecruteurBundle:Recruteur:result.html.twig */
class __TwigTemplate_51567ae521d31f99e2694f3a5070a75ef732062373a983fbdc392251c3bf5125 extends Twig_Template
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
        $__internal_61dea940d75d16e99077e9bbe149629ba35531f608a4f5fecc9cae4098348203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61dea940d75d16e99077e9bbe149629ba35531f608a4f5fecc9cae4098348203->enter($__internal_61dea940d75d16e99077e9bbe149629ba35531f608a4f5fecc9cae4098348203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobRecruteurBundle:Recruteur:result.html.twig"));

        // line 1
        echo "<div class=\"col-sm-8\">
    <div class=\"title6\">Résultats </div>   
    ";
        // line 3
        if ( !twig_test_empty(($context["offres"] ?? $this->getContext($context, "offres")))) {
            // line 4
            echo "        Total ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["offres"] ?? $this->getContext($context, "offres"))), "html", null, true);
            echo "       
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 6
                echo "            <div class=\"news1\">
                <div class=\"txt1\">12/4/2016</div>
                <div class=\"txt2\"><a href=\"#\">";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", array()), "html", null, true);
                echo "</a></div>
                <div class=\"txt3\">";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "contenu", array()), "html", null, true);
                echo "</div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "     
    ";
        } else {
            // line 13
            echo "        aucun résultat 
    ";
        }
        // line 15
        echo "
</div>";
        
        $__internal_61dea940d75d16e99077e9bbe149629ba35531f608a4f5fecc9cae4098348203->leave($__internal_61dea940d75d16e99077e9bbe149629ba35531f608a4f5fecc9cae4098348203_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobRecruteurBundle:Recruteur:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  58 => 13,  54 => 11,  45 => 9,  41 => 8,  37 => 6,  33 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-sm-8\">
    <div class=\"title6\">Résultats </div>   
    {% if offres is not empty %}
        Total {{ offres|length }}       
        {% for offre in offres %}
            <div class=\"news1\">
                <div class=\"txt1\">12/4/2016</div>
                <div class=\"txt2\"><a href=\"#\">{{offre.titre}}</a></div>
                <div class=\"txt3\">{{offre.contenu}}</div>
            </div>
        {% endfor %}     
    {% else %}
        aucun résultat 
    {%endif %}

</div>", "EcoJobRecruteurBundle:Recruteur:result.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/RecruteurBundle/Resources/views/Recruteur/result.html.twig");
    }
}
