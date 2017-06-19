<?php

/* default/index.html.twig */
class __TwigTemplate_49f26b627150329d46e0cb55c64e42cb2d006ffbc1dcc4a79937a1eae40d2a80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5c711a29bb375b87a08d586ec5d157f57ec899c7fd8cc26ee45ecdc999a9a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c711a29bb375b87a08d586ec5d157f57ec899c7fd8cc26ee45ecdc999a9a66->enter($__internal_f5c711a29bb375b87a08d586ec5d157f57ec899c7fd8cc26ee45ecdc999a9a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_35c300bd732e45ab990b6340bed50f476d504f93329e4d287c5d6c5c33575277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c300bd732e45ab990b6340bed50f476d504f93329e4d287c5d6c5c33575277->enter($__internal_35c300bd732e45ab990b6340bed50f476d504f93329e4d287c5d6c5c33575277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c711a29bb375b87a08d586ec5d157f57ec899c7fd8cc26ee45ecdc999a9a66->leave($__internal_f5c711a29bb375b87a08d586ec5d157f57ec899c7fd8cc26ee45ecdc999a9a66_prof);

        
        $__internal_35c300bd732e45ab990b6340bed50f476d504f93329e4d287c5d6c5c33575277->leave($__internal_35c300bd732e45ab990b6340bed50f476d504f93329e4d287c5d6c5c33575277_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7539c9e3aae55fdbf901119a341dafd77978241a17fa64920cd127c74856599a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7539c9e3aae55fdbf901119a341dafd77978241a17fa64920cd127c74856599a->enter($__internal_7539c9e3aae55fdbf901119a341dafd77978241a17fa64920cd127c74856599a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3047d5b0c6839e3d6cf03cb1df354c15f412f910c24235a556d736ae9cf11418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3047d5b0c6839e3d6cf03cb1df354c15f412f910c24235a556d736ae9cf11418->enter($__internal_3047d5b0c6839e3d6cf03cb1df354c15f412f910c24235a556d736ae9cf11418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"panel panel-primary panel-center\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Bestandsoverzicht</h3>
                <div class=\"pull-right button-panel\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("import");
        echo "\" class=\"btn btn-sm btn-default\" ><span class=\"glyphicon glyphicon-upload\"></span> Importeren</a>
                </div>
            </div>
            <div class=\"panel-body\">
                <h4 class=\"text-center\">Overzicht</h4>
                <hr>
                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Datum</th>
                        <th>Acties</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>HAP412-301.B1.015</td>
                        <td>12-6-2017</td>
                        <td>
                            <a><i class=\"glyphicon glyphicon-download\"></i></a>
                            <a><i class=\"glyphicon glyphicon-eye-open\"></i></a>
                            <a><i class=\"glyphicon glyphicon-remove\"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_3047d5b0c6839e3d6cf03cb1df354c15f412f910c24235a556d736ae9cf11418->leave($__internal_3047d5b0c6839e3d6cf03cb1df354c15f412f910c24235a556d736ae9cf11418_prof);

        
        $__internal_7539c9e3aae55fdbf901119a341dafd77978241a17fa64920cd127c74856599a->leave($__internal_7539c9e3aae55fdbf901119a341dafd77978241a17fa64920cd127c74856599a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <div class=\"panel panel-primary panel-center\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Bestandsoverzicht</h3>
                <div class=\"pull-right button-panel\">
                    <a href=\"{{ path('import') }}\" class=\"btn btn-sm btn-default\" ><span class=\"glyphicon glyphicon-upload\"></span> Importeren</a>
                </div>
            </div>
            <div class=\"panel-body\">
                <h4 class=\"text-center\">Overzicht</h4>
                <hr>
                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Datum</th>
                        <th>Acties</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>HAP412-301.B1.015</td>
                        <td>12-6-2017</td>
                        <td>
                            <a><i class=\"glyphicon glyphicon-download\"></i></a>
                            <a><i class=\"glyphicon glyphicon-eye-open\"></i></a>
                            <a><i class=\"glyphicon glyphicon-remove\"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\Excel2SQLite\\app\\Resources\\views\\default\\index.html.twig");
    }
}
