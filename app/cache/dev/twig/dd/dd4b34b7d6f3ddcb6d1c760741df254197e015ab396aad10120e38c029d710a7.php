<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c3f0272bff76b41f80ba30d365103d58ab6f633c2be0fc01647373e2ccabb233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c04bd94daf0fd95582887cad50e05a2ae37820c4c7330fa0b8d43b3833c8c598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04bd94daf0fd95582887cad50e05a2ae37820c4c7330fa0b8d43b3833c8c598->enter($__internal_c04bd94daf0fd95582887cad50e05a2ae37820c4c7330fa0b8d43b3833c8c598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c04bd94daf0fd95582887cad50e05a2ae37820c4c7330fa0b8d43b3833c8c598->leave($__internal_c04bd94daf0fd95582887cad50e05a2ae37820c4c7330fa0b8d43b3833c8c598_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9595002eec7470a229ece1206c228dd39b108571f08ce027649f20c3ee36d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9595002eec7470a229ece1206c228dd39b108571f08ce027649f20c3ee36d7d->enter($__internal_c9595002eec7470a229ece1206c228dd39b108571f08ce027649f20c3ee36d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9595002eec7470a229ece1206c228dd39b108571f08ce027649f20c3ee36d7d->leave($__internal_c9595002eec7470a229ece1206c228dd39b108571f08ce027649f20c3ee36d7d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a4e8df9c018a7e57637565d52f880ddc02b75e23df278c85b94735d30afbaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4e8df9c018a7e57637565d52f880ddc02b75e23df278c85b94735d30afbaed->enter($__internal_9a4e8df9c018a7e57637565d52f880ddc02b75e23df278c85b94735d30afbaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a4e8df9c018a7e57637565d52f880ddc02b75e23df278c85b94735d30afbaed->leave($__internal_9a4e8df9c018a7e57637565d52f880ddc02b75e23df278c85b94735d30afbaed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57661ee3f2220c746e8b761d2ef44d04dbcb4d1f22d95bab0d2b0a4343bef3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57661ee3f2220c746e8b761d2ef44d04dbcb4d1f22d95bab0d2b0a4343bef3a6->enter($__internal_57661ee3f2220c746e8b761d2ef44d04dbcb4d1f22d95bab0d2b0a4343bef3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57661ee3f2220c746e8b761d2ef44d04dbcb4d1f22d95bab0d2b0a4343bef3a6->leave($__internal_57661ee3f2220c746e8b761d2ef44d04dbcb4d1f22d95bab0d2b0a4343bef3a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/cimpress_test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
