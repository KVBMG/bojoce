<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b9159ff5120654822d65269a34e5ab81f2b4e0e65733e77398f0a504dc037b4f extends Twig_Template
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
        $__internal_772b28a3aad7bce89c39b3869a08d69def3065b9c96e4df3f12860133e00352e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772b28a3aad7bce89c39b3869a08d69def3065b9c96e4df3f12860133e00352e->enter($__internal_772b28a3aad7bce89c39b3869a08d69def3065b9c96e4df3f12860133e00352e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_772b28a3aad7bce89c39b3869a08d69def3065b9c96e4df3f12860133e00352e->leave($__internal_772b28a3aad7bce89c39b3869a08d69def3065b9c96e4df3f12860133e00352e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
