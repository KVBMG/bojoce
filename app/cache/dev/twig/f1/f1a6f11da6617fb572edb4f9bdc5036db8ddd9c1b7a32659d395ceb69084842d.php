<?php

/* EcoJobAdminBundle:Admin:showuser.html.twig */
class __TwigTemplate_eba6b6e23bb7bc3358a683b140614d41f0c4375be81a9642f75413757a4cc4bf extends Twig_Template
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
        $__internal_59621de02b7e7b364dee472836e76c779ee9a03ab5ee2c6b3763a9462e69d2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59621de02b7e7b364dee472836e76c779ee9a03ab5ee2c6b3763a9462e69d2a8->enter($__internal_59621de02b7e7b364dee472836e76c779ee9a03ab5ee2c6b3763a9462e69d2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobAdminBundle:Admin:showuser.html.twig"));

        // line 1
        echo "    <div class=\"team1 clearfix\">
        <figure><img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "curriculum", array()), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "curriculum", array()), "nom", array()), "html", null, true);
        echo "\" class=\"img-responsive\" height=\"200px\" width=\"200px\" /></figure>
        <div class=\"caption\">
            <div class=\"txt1\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "curriculum", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "curriculum", array()), "prenom", array()), "html", null, true);
        echo "</div>
            <div class=\"txt2\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "curriculum", array()), "telephone", array()), "html", null, true);
        echo "</div>
            <div class=\"txt3\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "curriculum", array()), "about", array()), "html", null, true);
        echo "</div>
        </div>
    </div>";
        
        $__internal_59621de02b7e7b364dee472836e76c779ee9a03ab5ee2c6b3763a9462e69d2a8->leave($__internal_59621de02b7e7b364dee472836e76c779ee9a03ab5ee2c6b3763a9462e69d2a8_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobAdminBundle:Admin:showuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 5,  32 => 4,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <div class=\"team1 clearfix\">
        <figure><img src=\"{{ vich_uploader_asset(user.curriculum, 'imageFile') }}\" alt=\"{{ user.curriculum.nom }}\" class=\"img-responsive\" height=\"200px\" width=\"200px\" /></figure>
        <div class=\"caption\">
            <div class=\"txt1\">{{user.curriculum.nom}} {{user.curriculum.prenom}}</div>
            <div class=\"txt2\">{{user.curriculum.telephone}}</div>
            <div class=\"txt3\">{{user.curriculum.about}}</div>
        </div>
    </div>", "EcoJobAdminBundle:Admin:showuser.html.twig", "/opt/lampp/htdocs/ecojob/src/EcoJob/AdminBundle/Resources/views/Admin/showuser.html.twig");
    }
}
