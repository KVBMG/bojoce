<?php

/* EcoJobCandidatBundle:Candidat:index.html.twig */
class __TwigTemplate_b632e053da061a07485c673a79a1a07af91ca36ffdf3417bff9157f9ae2491a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EcoJobCandidatBundle::layout.html.twig", "EcoJobCandidatBundle:Candidat:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_title' => array($this, 'block_content_title'),
            'content_stitle' => array($this, 'block_content_stitle'),
            'scontent' => array($this, 'block_scontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoJobCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_496af7af954282b3b25d5f5a83ef3a9c356c983daae9ca8684251c4d78adc1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496af7af954282b3b25d5f5a83ef3a9c356c983daae9ca8684251c4d78adc1e5->enter($__internal_496af7af954282b3b25d5f5a83ef3a9c356c983daae9ca8684251c4d78adc1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcoJobCandidatBundle:Candidat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_496af7af954282b3b25d5f5a83ef3a9c356c983daae9ca8684251c4d78adc1e5->leave($__internal_496af7af954282b3b25d5f5a83ef3a9c356c983daae9ca8684251c4d78adc1e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_676ebf99bffaf10f914ad168d2ed0188914ac83c6a00e735967d143a1754ed71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676ebf99bffaf10f914ad168d2ed0188914ac83c6a00e735967d143a1754ed71->enter($__internal_676ebf99bffaf10f914ad168d2ed0188914ac83c6a00e735967d143a1754ed71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon espace ";
        
        $__internal_676ebf99bffaf10f914ad168d2ed0188914ac83c6a00e735967d143a1754ed71->leave($__internal_676ebf99bffaf10f914ad168d2ed0188914ac83c6a00e735967d143a1754ed71_prof);

    }

    // line 5
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_7cf51a113966f280846ea2b29bad2553a9d2567634660a32e30f7e06adf16cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf51a113966f280846ea2b29bad2553a9d2567634660a32e30f7e06adf16cb5->enter($__internal_7cf51a113966f280846ea2b29bad2553a9d2567634660a32e30f7e06adf16cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        echo " Candidat ";
        
        $__internal_7cf51a113966f280846ea2b29bad2553a9d2567634660a32e30f7e06adf16cb5->leave($__internal_7cf51a113966f280846ea2b29bad2553a9d2567634660a32e30f7e06adf16cb5_prof);

    }

    // line 7
    public function block_content_stitle($context, array $blocks = array())
    {
        $__internal_39d66615d130c5f4c5b1607fdb5b2b45c8834353fe57a513fd8ad28e99dee531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d66615d130c5f4c5b1607fdb5b2b45c8834353fe57a513fd8ad28e99dee531->enter($__internal_39d66615d130c5f4c5b1607fdb5b2b45c8834353fe57a513fd8ad28e99dee531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_stitle"));

        echo " Mon espace ";
        
        $__internal_39d66615d130c5f4c5b1607fdb5b2b45c8834353fe57a513fd8ad28e99dee531->leave($__internal_39d66615d130c5f4c5b1607fdb5b2b45c8834353fe57a513fd8ad28e99dee531_prof);

    }

    // line 9
    public function block_scontent($context, array $blocks = array())
    {
        $__internal_58dce305bd4dcd8e2072e0ce52bc1ced111a3e52abb2af2f877a59d96152241c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58dce305bd4dcd8e2072e0ce52bc1ced111a3e52abb2af2f877a59d96152241c->enter($__internal_58dce305bd4dcd8e2072e0ce52bc1ced111a3e52abb2af2f877a59d96152241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scontent"));

        // line 10
        echo "    ";
        $this->displayParentBlock("scontent", $context, $blocks);
        echo "
";
        
        $__internal_58dce305bd4dcd8e2072e0ce52bc1ced111a3e52abb2af2f877a59d96152241c->leave($__internal_58dce305bd4dcd8e2072e0ce52bc1ced111a3e52abb2af2f877a59d96152241c_prof);

    }

    public function getTemplateName()
    {
        return "EcoJobCandidatBundle:Candidat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EcoJobCandidatBundle::layout.html.twig\" %}

{% block title %} Mon espace {% endblock %}

{% block content_title %} Candidat {% endblock %}

{% block content_stitle %} Mon espace {% endblock %}

{% block scontent %}
    {{parent()}}
{% endblock %}    ", "EcoJobCandidatBundle:Candidat:index.html.twig", "E:\\kandra\\Dev\\bojoce\\src\\EcoJob\\CandidatBundle/Resources/views/Candidat/index.html.twig");
    }
}
