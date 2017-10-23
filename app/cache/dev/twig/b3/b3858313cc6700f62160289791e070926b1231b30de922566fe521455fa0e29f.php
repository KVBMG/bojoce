<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0a6d057a922edb48673172a8ff59d43466aaf67d893ddb0361c00f69dee02600 extends Twig_Template
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
        $__internal_797187c60029dad5c4aae91211abe3e51ba9a9b112228ead21caca4e88dd279f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797187c60029dad5c4aae91211abe3e51ba9a9b112228ead21caca4e88dd279f->enter($__internal_797187c60029dad5c4aae91211abe3e51ba9a9b112228ead21caca4e88dd279f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_797187c60029dad5c4aae91211abe3e51ba9a9b112228ead21caca4e88dd279f->leave($__internal_797187c60029dad5c4aae91211abe3e51ba9a9b112228ead21caca4e88dd279f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
