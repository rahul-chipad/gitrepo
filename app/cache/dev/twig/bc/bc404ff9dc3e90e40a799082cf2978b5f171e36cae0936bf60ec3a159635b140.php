<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f450afaab1bb86087072555f825d7a859a5075c065d2bcbbe0b0daabd133c7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9ba99008fc3e763dcd3a9c8aea8da56af30e9b071202c6458c6da7463f86022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ba99008fc3e763dcd3a9c8aea8da56af30e9b071202c6458c6da7463f86022->enter($__internal_e9ba99008fc3e763dcd3a9c8aea8da56af30e9b071202c6458c6da7463f86022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9ba99008fc3e763dcd3a9c8aea8da56af30e9b071202c6458c6da7463f86022->leave($__internal_e9ba99008fc3e763dcd3a9c8aea8da56af30e9b071202c6458c6da7463f86022_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9029b71282637942a6074d17deaf5cade4906985a23ca8e59fb9fcd01d7856de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9029b71282637942a6074d17deaf5cade4906985a23ca8e59fb9fcd01d7856de->enter($__internal_9029b71282637942a6074d17deaf5cade4906985a23ca8e59fb9fcd01d7856de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9029b71282637942a6074d17deaf5cade4906985a23ca8e59fb9fcd01d7856de->leave($__internal_9029b71282637942a6074d17deaf5cade4906985a23ca8e59fb9fcd01d7856de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_817878ba8ac6d2cc43edb0a4757cf6d81576d90789944a4232769e3df17ba65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817878ba8ac6d2cc43edb0a4757cf6d81576d90789944a4232769e3df17ba65b->enter($__internal_817878ba8ac6d2cc43edb0a4757cf6d81576d90789944a4232769e3df17ba65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_817878ba8ac6d2cc43edb0a4757cf6d81576d90789944a4232769e3df17ba65b->leave($__internal_817878ba8ac6d2cc43edb0a4757cf6d81576d90789944a4232769e3df17ba65b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_14dce428ca014af33339ca597954a351a5e5a8d7308f296b2cb47b06557ec099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14dce428ca014af33339ca597954a351a5e5a8d7308f296b2cb47b06557ec099->enter($__internal_14dce428ca014af33339ca597954a351a5e5a8d7308f296b2cb47b06557ec099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_14dce428ca014af33339ca597954a351a5e5a8d7308f296b2cb47b06557ec099->leave($__internal_14dce428ca014af33339ca597954a351a5e5a8d7308f296b2cb47b06557ec099_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/cimpress_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
