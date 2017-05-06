<?php

/* gitrepo/repo.html.twig */
class __TwigTemplate_64a760802aa93c4a89e0898fe443473261ca2ed22be05122ae981b85560cb502 extends Twig_Template
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
        $__internal_a8aaf0d55ce4bd12bf43096ea692b7d18592fa8f398022951d86f8f4c6e0662e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8aaf0d55ce4bd12bf43096ea692b7d18592fa8f398022951d86f8f4c6e0662e->enter($__internal_a8aaf0d55ce4bd12bf43096ea692b7d18592fa8f398022951d86f8f4c6e0662e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gitrepo/repo.html.twig"));

        // line 1
        echo "<h1>Symfony Git Repositories</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["repos"] ?? $this->getContext($context, "repos")));
        foreach ($context['_seq'] as $context["_key"] => $context["repo"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repo"], "name", array()));
            echo " -> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repo"], "url", array()));
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
        
        $__internal_a8aaf0d55ce4bd12bf43096ea692b7d18592fa8f398022951d86f8f4c6e0662e->leave($__internal_a8aaf0d55ce4bd12bf43096ea692b7d18592fa8f398022951d86f8f4c6e0662e_prof);

    }

    public function getTemplateName()
    {
        return "gitrepo/repo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Symfony Git Repositories</h1>
<ul>
    {% for repo in repos %}
        <li>{{ repo.name|e }} -> {{ repo.url|e }}</li>
    {% endfor %}
</ul>", "gitrepo/repo.html.twig", "/var/www/cimpress_test/app/Resources/views/gitrepo/repo.html.twig");
    }
}
