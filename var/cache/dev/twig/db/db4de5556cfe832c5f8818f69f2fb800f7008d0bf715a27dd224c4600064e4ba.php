<?php

/* default/import.html.twig */
class __TwigTemplate_c559831726be3e065a0926f24379cf2610177ddf12c33c3bbb961d994b95446c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/import.html.twig", 1);
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
        $__internal_9b23589db23aeda74aae740e4b5b2d5d300cabdaaf283811936556bce250b89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b23589db23aeda74aae740e4b5b2d5d300cabdaaf283811936556bce250b89c->enter($__internal_9b23589db23aeda74aae740e4b5b2d5d300cabdaaf283811936556bce250b89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/import.html.twig"));

        $__internal_44b116ff88c00140f5b66e6c3fab6974c5b4fe82f72de4ab892abc04334d6459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b116ff88c00140f5b66e6c3fab6974c5b4fe82f72de4ab892abc04334d6459->enter($__internal_44b116ff88c00140f5b66e6c3fab6974c5b4fe82f72de4ab892abc04334d6459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/import.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b23589db23aeda74aae740e4b5b2d5d300cabdaaf283811936556bce250b89c->leave($__internal_9b23589db23aeda74aae740e4b5b2d5d300cabdaaf283811936556bce250b89c_prof);

        
        $__internal_44b116ff88c00140f5b66e6c3fab6974c5b4fe82f72de4ab892abc04334d6459->leave($__internal_44b116ff88c00140f5b66e6c3fab6974c5b4fe82f72de4ab892abc04334d6459_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b1e03806a52115f32397da007eaa6a296469a8f4d39e3cd5d8c1dcb52424f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1e03806a52115f32397da007eaa6a296469a8f4d39e3cd5d8c1dcb52424f32->enter($__internal_2b1e03806a52115f32397da007eaa6a296469a8f4d39e3cd5d8c1dcb52424f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e37c52a834d8ffe618087176ac4e74caa5d4b354fdd510c24497b84d61108877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37c52a834d8ffe618087176ac4e74caa5d4b354fdd510c24497b84d61108877->enter($__internal_e37c52a834d8ffe618087176ac4e74caa5d4b354fdd510c24497b84d61108877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"panel panel-primary panel-center\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Importeren</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 11
        $this->loadTemplate("::flash-messages.html.twig", "default/import.html.twig", 11)->display($context);
        // line 12
        echo "                ";
        // line 22
        echo "                <form action=\"#\" method=\"post\" enctype=\"multipart/form-data\">
                    Select image to upload:
                    <input type=\"file\" accept=\".csv, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\" name=\"excelFile\" id=\"excelFile\">
                    <input type=\"submit\" value=\"Upload File\" name=\"submit\">
                </form>
                <hr>

                <!-- Progress Bar -->
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"> <span class=\"sr-only\">60% Complete</span> </div>
                </div>
                <br />

            </div>
        </div>
    </div>
";
        
        $__internal_e37c52a834d8ffe618087176ac4e74caa5d4b354fdd510c24497b84d61108877->leave($__internal_e37c52a834d8ffe618087176ac4e74caa5d4b354fdd510c24497b84d61108877_prof);

        
        $__internal_2b1e03806a52115f32397da007eaa6a296469a8f4d39e3cd5d8c1dcb52424f32->leave($__internal_2b1e03806a52115f32397da007eaa6a296469a8f4d39e3cd5d8c1dcb52424f32_prof);

    }

    public function getTemplateName()
    {
        return "default/import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  60 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
                <h3 class=\"panel-title\">Importeren</h3>
            </div>
            <div class=\"panel-body\">
                {% include ('::flash-messages.html.twig') %}
                {#<div class=\"input-group file-preview\">
                    <input placeholder=\"Nog geen bestand gekozen.\" type=\"text\" class=\"form-control file-preview-filename\" disabled=\"disabled\">
                    <span class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default file-preview-clear\" style=\"display:none;\"> <span class=\"glyphicon glyphicon-remove\"></span> Clear </button>
\t\t\t\t\t\t<div class=\"btn btn-default file-preview-input\"> <span class=\"glyphicon glyphicon-folder-open\"></span> <span class=\"file-preview-input-title\">Bestand kiezen</span>
\t\t\t\t\t\t\t<input type=\"file\" accept=\".csv, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\" name=\"input-file-preview\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-labeled btn-primary\"> <span class=\"btn-label\"><i class=\"glyphicon glyphicon-upload\"></i> </span>Importeren</button>
                    </span>
                </div>#}
                <form action=\"#\" method=\"post\" enctype=\"multipart/form-data\">
                    Select image to upload:
                    <input type=\"file\" accept=\".csv, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\" name=\"excelFile\" id=\"excelFile\">
                    <input type=\"submit\" value=\"Upload File\" name=\"submit\">
                </form>
                <hr>

                <!-- Progress Bar -->
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"> <span class=\"sr-only\">60% Complete</span> </div>
                </div>
                <br />

            </div>
        </div>
    </div>
{% endblock %}
", "default/import.html.twig", "C:\\xampp\\htdocs\\Excel2SQLite\\app\\Resources\\views\\default\\import.html.twig");
    }
}
