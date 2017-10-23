<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_87cdfd9ab62a2bf917fdd6162a799583106b35f10de6529afd8cca7440ae5b82 extends Twig_Template
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
        $__internal_dc8a59d072aaaa4749873f70df646e91dae4ad719cc700cb90e5c8215c9c9dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8a59d072aaaa4749873f70df646e91dae4ad719cc700cb90e5c8215c9c9dcf->enter($__internal_dc8a59d072aaaa4749873f70df646e91dae4ad719cc700cb90e5c8215c9c9dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dc8a59d072aaaa4749873f70df646e91dae4ad719cc700cb90e5c8215c9c9dcf->leave($__internal_dc8a59d072aaaa4749873f70df646e91dae4ad719cc700cb90e5c8215c9c9dcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
