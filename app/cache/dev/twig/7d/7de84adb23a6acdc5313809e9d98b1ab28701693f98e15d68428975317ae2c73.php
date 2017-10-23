<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8407468061e8e2a220bc5b48e5eddd8cac68ac5eb0e8d678083f0e1912329507 extends Twig_Template
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
        $__internal_4d2708de3b3203c9095a307093e7ed7d9f9f350234d3bc9e74e83e249e50af1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2708de3b3203c9095a307093e7ed7d9f9f350234d3bc9e74e83e249e50af1e->enter($__internal_4d2708de3b3203c9095a307093e7ed7d9f9f350234d3bc9e74e83e249e50af1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4d2708de3b3203c9095a307093e7ed7d9f9f350234d3bc9e74e83e249e50af1e->leave($__internal_4d2708de3b3203c9095a307093e7ed7d9f9f350234d3bc9e74e83e249e50af1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/ecojob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
