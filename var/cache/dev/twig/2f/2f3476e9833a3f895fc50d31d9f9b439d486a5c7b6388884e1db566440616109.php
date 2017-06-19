<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2d5a561363a2617836ba29a7c76482dc3874404bc793e75eba72a11f41f3ec26 extends Twig_Template
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
        $__internal_165748b547695a8c3f7b750d5519ba7139b906f5b680d9e154f60c00419dfbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165748b547695a8c3f7b750d5519ba7139b906f5b680d9e154f60c00419dfbd2->enter($__internal_165748b547695a8c3f7b750d5519ba7139b906f5b680d9e154f60c00419dfbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9fc247aae02d3adec7622b682b93f60ef3c10d8ecc1997c3dd34051bb49196cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc247aae02d3adec7622b682b93f60ef3c10d8ecc1997c3dd34051bb49196cc->enter($__internal_9fc247aae02d3adec7622b682b93f60ef3c10d8ecc1997c3dd34051bb49196cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165748b547695a8c3f7b750d5519ba7139b906f5b680d9e154f60c00419dfbd2->leave($__internal_165748b547695a8c3f7b750d5519ba7139b906f5b680d9e154f60c00419dfbd2_prof);

        
        $__internal_9fc247aae02d3adec7622b682b93f60ef3c10d8ecc1997c3dd34051bb49196cc->leave($__internal_9fc247aae02d3adec7622b682b93f60ef3c10d8ecc1997c3dd34051bb49196cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c87b299abdf07c749744130ea9c263f58d8880dce0ab82c910cf13d6452fbee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c87b299abdf07c749744130ea9c263f58d8880dce0ab82c910cf13d6452fbee->enter($__internal_8c87b299abdf07c749744130ea9c263f58d8880dce0ab82c910cf13d6452fbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f887049a23c2e31b9c71f181014d4d9df8901bb436f5d89b2f733fdc9bdc17db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f887049a23c2e31b9c71f181014d4d9df8901bb436f5d89b2f733fdc9bdc17db->enter($__internal_f887049a23c2e31b9c71f181014d4d9df8901bb436f5d89b2f733fdc9bdc17db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f887049a23c2e31b9c71f181014d4d9df8901bb436f5d89b2f733fdc9bdc17db->leave($__internal_f887049a23c2e31b9c71f181014d4d9df8901bb436f5d89b2f733fdc9bdc17db_prof);

        
        $__internal_8c87b299abdf07c749744130ea9c263f58d8880dce0ab82c910cf13d6452fbee->leave($__internal_8c87b299abdf07c749744130ea9c263f58d8880dce0ab82c910cf13d6452fbee_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_21456558bd65c246608871641626fea30a1349c8c397fb43efcbcfc97194bc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21456558bd65c246608871641626fea30a1349c8c397fb43efcbcfc97194bc42->enter($__internal_21456558bd65c246608871641626fea30a1349c8c397fb43efcbcfc97194bc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bb0ace437e7445247883f65e0546ddfcf945d5ebebc24c97b51e15d1144fbfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb0ace437e7445247883f65e0546ddfcf945d5ebebc24c97b51e15d1144fbfb->enter($__internal_4bb0ace437e7445247883f65e0546ddfcf945d5ebebc24c97b51e15d1144fbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4bb0ace437e7445247883f65e0546ddfcf945d5ebebc24c97b51e15d1144fbfb->leave($__internal_4bb0ace437e7445247883f65e0546ddfcf945d5ebebc24c97b51e15d1144fbfb_prof);

        
        $__internal_21456558bd65c246608871641626fea30a1349c8c397fb43efcbcfc97194bc42->leave($__internal_21456558bd65c246608871641626fea30a1349c8c397fb43efcbcfc97194bc42_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8606eb3561b95a77fb08f799b7130e6c4f43b68c149a1682aea1ef20eae1a8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8606eb3561b95a77fb08f799b7130e6c4f43b68c149a1682aea1ef20eae1a8fc->enter($__internal_8606eb3561b95a77fb08f799b7130e6c4f43b68c149a1682aea1ef20eae1a8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef78b4859c1bf76b230121c0384e5904960e23d509c7add2b6e750bca91b6fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef78b4859c1bf76b230121c0384e5904960e23d509c7add2b6e750bca91b6fdc->enter($__internal_ef78b4859c1bf76b230121c0384e5904960e23d509c7add2b6e750bca91b6fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ef78b4859c1bf76b230121c0384e5904960e23d509c7add2b6e750bca91b6fdc->leave($__internal_ef78b4859c1bf76b230121c0384e5904960e23d509c7add2b6e750bca91b6fdc_prof);

        
        $__internal_8606eb3561b95a77fb08f799b7130e6c4f43b68c149a1682aea1ef20eae1a8fc->leave($__internal_8606eb3561b95a77fb08f799b7130e6c4f43b68c149a1682aea1ef20eae1a8fc_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Excel2SQLite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
