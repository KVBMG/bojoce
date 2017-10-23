<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_93d4970c7047f618376926c034da1015fea09c904ac302c2303af4aae292d21b extends Twig_Template
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
        $__internal_c7bb4f76695f538013b42867f2d47d6e0bae15c6583a5e39c25ad05dc7cf828b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bb4f76695f538013b42867f2d47d6e0bae15c6583a5e39c25ad05dc7cf828b->enter($__internal_c7bb4f76695f538013b42867f2d47d6e0bae15c6583a5e39c25ad05dc7cf828b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c7bb4f76695f538013b42867f2d47d6e0bae15c6583a5e39c25ad05dc7cf828b->leave($__internal_c7bb4f76695f538013b42867f2d47d6e0bae15c6583a5e39c25ad05dc7cf828b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
