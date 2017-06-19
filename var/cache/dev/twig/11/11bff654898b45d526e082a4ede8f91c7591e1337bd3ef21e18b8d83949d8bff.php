<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d8e8b0caecbf6c69f4e84b3f77c7c4b3fc2ee3c868fe60c6e9a7296961dee70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a56c45d3ca040ae23d1882fc22afc244d9820499e0d4ffa6ba47f443d2c4449c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56c45d3ca040ae23d1882fc22afc244d9820499e0d4ffa6ba47f443d2c4449c->enter($__internal_a56c45d3ca040ae23d1882fc22afc244d9820499e0d4ffa6ba47f443d2c4449c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c21856067906a6f4eb39ea988cd96ab1cd5bbf64d5c068ffe9f2a7e00a89644f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21856067906a6f4eb39ea988cd96ab1cd5bbf64d5c068ffe9f2a7e00a89644f->enter($__internal_c21856067906a6f4eb39ea988cd96ab1cd5bbf64d5c068ffe9f2a7e00a89644f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a56c45d3ca040ae23d1882fc22afc244d9820499e0d4ffa6ba47f443d2c4449c->leave($__internal_a56c45d3ca040ae23d1882fc22afc244d9820499e0d4ffa6ba47f443d2c4449c_prof);

        
        $__internal_c21856067906a6f4eb39ea988cd96ab1cd5bbf64d5c068ffe9f2a7e00a89644f->leave($__internal_c21856067906a6f4eb39ea988cd96ab1cd5bbf64d5c068ffe9f2a7e00a89644f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d53762d5274ae464c536e9f7a9cfee0d1f760fea1022b1c1daefead866eecbd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53762d5274ae464c536e9f7a9cfee0d1f760fea1022b1c1daefead866eecbd1->enter($__internal_d53762d5274ae464c536e9f7a9cfee0d1f760fea1022b1c1daefead866eecbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa04c61c78107e6e7564dc8c2b72805c1f89a75ac573f3cf77c178a82bb7753c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa04c61c78107e6e7564dc8c2b72805c1f89a75ac573f3cf77c178a82bb7753c->enter($__internal_fa04c61c78107e6e7564dc8c2b72805c1f89a75ac573f3cf77c178a82bb7753c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fa04c61c78107e6e7564dc8c2b72805c1f89a75ac573f3cf77c178a82bb7753c->leave($__internal_fa04c61c78107e6e7564dc8c2b72805c1f89a75ac573f3cf77c178a82bb7753c_prof);

        
        $__internal_d53762d5274ae464c536e9f7a9cfee0d1f760fea1022b1c1daefead866eecbd1->leave($__internal_d53762d5274ae464c536e9f7a9cfee0d1f760fea1022b1c1daefead866eecbd1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8bda4f337a44de1c03b454bf70ab35a5478ba5e7cc420b860d71bba3b6eb986c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bda4f337a44de1c03b454bf70ab35a5478ba5e7cc420b860d71bba3b6eb986c->enter($__internal_8bda4f337a44de1c03b454bf70ab35a5478ba5e7cc420b860d71bba3b6eb986c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9b707a18d139f94628f546d693acef61b0e7d53ea489343e9554ea34ae74b2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b707a18d139f94628f546d693acef61b0e7d53ea489343e9554ea34ae74b2ed->enter($__internal_9b707a18d139f94628f546d693acef61b0e7d53ea489343e9554ea34ae74b2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9b707a18d139f94628f546d693acef61b0e7d53ea489343e9554ea34ae74b2ed->leave($__internal_9b707a18d139f94628f546d693acef61b0e7d53ea489343e9554ea34ae74b2ed_prof);

        
        $__internal_8bda4f337a44de1c03b454bf70ab35a5478ba5e7cc420b860d71bba3b6eb986c->leave($__internal_8bda4f337a44de1c03b454bf70ab35a5478ba5e7cc420b860d71bba3b6eb986c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b1776c1d1ece1a430e083a49f67e0065f36fe3a0f9c46e8e614fe44a06eb888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1776c1d1ece1a430e083a49f67e0065f36fe3a0f9c46e8e614fe44a06eb888->enter($__internal_2b1776c1d1ece1a430e083a49f67e0065f36fe3a0f9c46e8e614fe44a06eb888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_73422519037492647a5208a92cad0d7a1e75455df06cfc1e1df98c9f92a705ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73422519037492647a5208a92cad0d7a1e75455df06cfc1e1df98c9f92a705ef->enter($__internal_73422519037492647a5208a92cad0d7a1e75455df06cfc1e1df98c9f92a705ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_73422519037492647a5208a92cad0d7a1e75455df06cfc1e1df98c9f92a705ef->leave($__internal_73422519037492647a5208a92cad0d7a1e75455df06cfc1e1df98c9f92a705ef_prof);

        
        $__internal_2b1776c1d1ece1a430e083a49f67e0065f36fe3a0f9c46e8e614fe44a06eb888->leave($__internal_2b1776c1d1ece1a430e083a49f67e0065f36fe3a0f9c46e8e614fe44a06eb888_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Excel2SQLite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
