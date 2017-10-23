<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d9255b9cb1c55570f2aebc2107cf6a8c7ffbe9a23bd12887c09678202f397326 extends Twig_Template
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
        $__internal_126ffb6c95c7d24e292231c0d2f6a4b9fa0113e2f661d33d814f5e6aec57bd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126ffb6c95c7d24e292231c0d2f6a4b9fa0113e2f661d33d814f5e6aec57bd7a->enter($__internal_126ffb6c95c7d24e292231c0d2f6a4b9fa0113e2f661d33d814f5e6aec57bd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_126ffb6c95c7d24e292231c0d2f6a4b9fa0113e2f661d33d814f5e6aec57bd7a->leave($__internal_126ffb6c95c7d24e292231c0d2f6a4b9fa0113e2f661d33d814f5e6aec57bd7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
