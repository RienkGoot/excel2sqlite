<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4838a6931b88ba289931e4d48841d5f2beee27d7a38510e2af32c946c320cd92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22a31dfcc206c7e01d2a12893024ae8ddf016d983cfd63e8315e65131794ba4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a31dfcc206c7e01d2a12893024ae8ddf016d983cfd63e8315e65131794ba4c->enter($__internal_22a31dfcc206c7e01d2a12893024ae8ddf016d983cfd63e8315e65131794ba4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e54fa4e7e259fb80b1a80ca7bfacc91bc714e332810253ae91f5e2806948ca8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54fa4e7e259fb80b1a80ca7bfacc91bc714e332810253ae91f5e2806948ca8d->enter($__internal_e54fa4e7e259fb80b1a80ca7bfacc91bc714e332810253ae91f5e2806948ca8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a31dfcc206c7e01d2a12893024ae8ddf016d983cfd63e8315e65131794ba4c->leave($__internal_22a31dfcc206c7e01d2a12893024ae8ddf016d983cfd63e8315e65131794ba4c_prof);

        
        $__internal_e54fa4e7e259fb80b1a80ca7bfacc91bc714e332810253ae91f5e2806948ca8d->leave($__internal_e54fa4e7e259fb80b1a80ca7bfacc91bc714e332810253ae91f5e2806948ca8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33a8135e35121f0903fb5ca0360e79a8b4e5d118688a1bbb83da48286850212e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a8135e35121f0903fb5ca0360e79a8b4e5d118688a1bbb83da48286850212e->enter($__internal_33a8135e35121f0903fb5ca0360e79a8b4e5d118688a1bbb83da48286850212e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_09c79867ddfa604d0202d26bbd2314bf5baba2050587f52043a9b3a6f3e1052e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c79867ddfa604d0202d26bbd2314bf5baba2050587f52043a9b3a6f3e1052e->enter($__internal_09c79867ddfa604d0202d26bbd2314bf5baba2050587f52043a9b3a6f3e1052e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_09c79867ddfa604d0202d26bbd2314bf5baba2050587f52043a9b3a6f3e1052e->leave($__internal_09c79867ddfa604d0202d26bbd2314bf5baba2050587f52043a9b3a6f3e1052e_prof);

        
        $__internal_33a8135e35121f0903fb5ca0360e79a8b4e5d118688a1bbb83da48286850212e->leave($__internal_33a8135e35121f0903fb5ca0360e79a8b4e5d118688a1bbb83da48286850212e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Excel2SQLite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
