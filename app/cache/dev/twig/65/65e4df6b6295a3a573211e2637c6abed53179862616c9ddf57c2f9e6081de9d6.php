<?php

/* gitusers/users.html.twig */
class __TwigTemplate_79319485c791f476a6f87dcebd2cce287a8532c54fc202412c8bae1abc740887 extends Twig_Template
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
        $__internal_1a5a12f191859fd5a4aaab878279611f6aef6946b1dffc8c6e9aae8cfc4fb2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5a12f191859fd5a4aaab878279611f6aef6946b1dffc8c6e9aae8cfc4fb2bb->enter($__internal_1a5a12f191859fd5a4aaab878279611f6aef6946b1dffc8c6e9aae8cfc4fb2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gitusers/users.html.twig"));

        // line 1
        echo "<h1>Git Repositories</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["repositories"] ?? $this->getContext($context, "repositories")));
        foreach ($context['_seq'] as $context["_key"] => $context["repository"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repository"], "name", array()));
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repository'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
        
        $__internal_1a5a12f191859fd5a4aaab878279611f6aef6946b1dffc8c6e9aae8cfc4fb2bb->leave($__internal_1a5a12f191859fd5a4aaab878279611f6aef6946b1dffc8c6e9aae8cfc4fb2bb_prof);

    }

    public function getTemplateName()
    {
        return "gitusers/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Git Repositories</h1>
<ul>
    {% for repository in repositories %}
        <li>{{ repository.name|e }}</li>
    {% endfor %}
</ul>", "gitusers/users.html.twig", "/var/www/cimpress_test/app/Resources/views/gitusers/users.html.twig");
    }
}
