<?php

/* default/overview.html.twig */
class __TwigTemplate_cc9d8949a5c40f99656c87cd59f0bc3266d5fed5162c30f5a7be5ea691829309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/overview.html.twig", 1);
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
        $__internal_3eea3bf9f8575e9253e05b84095cd69cb77665dafbb8c813cfcc3892fa5a391f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eea3bf9f8575e9253e05b84095cd69cb77665dafbb8c813cfcc3892fa5a391f->enter($__internal_3eea3bf9f8575e9253e05b84095cd69cb77665dafbb8c813cfcc3892fa5a391f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/overview.html.twig"));

        $__internal_5cd5ea84e38b3a607db286ed0ce52dc1a6927626bd1b5681a4598da7a00525d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd5ea84e38b3a607db286ed0ce52dc1a6927626bd1b5681a4598da7a00525d8->enter($__internal_5cd5ea84e38b3a607db286ed0ce52dc1a6927626bd1b5681a4598da7a00525d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/overview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eea3bf9f8575e9253e05b84095cd69cb77665dafbb8c813cfcc3892fa5a391f->leave($__internal_3eea3bf9f8575e9253e05b84095cd69cb77665dafbb8c813cfcc3892fa5a391f_prof);

        
        $__internal_5cd5ea84e38b3a607db286ed0ce52dc1a6927626bd1b5681a4598da7a00525d8->leave($__internal_5cd5ea84e38b3a607db286ed0ce52dc1a6927626bd1b5681a4598da7a00525d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65f754008e16b6185d5e5d66598995f5db8bba1691aff34e51f25f58cbc16c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f754008e16b6185d5e5d66598995f5db8bba1691aff34e51f25f58cbc16c9c->enter($__internal_65f754008e16b6185d5e5d66598995f5db8bba1691aff34e51f25f58cbc16c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71a77b40a178c966d54c12525006d62cc6f72dd8f31d7c2f0eec7af0dce7946c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a77b40a178c966d54c12525006d62cc6f72dd8f31d7c2f0eec7af0dce7946c->enter($__internal_71a77b40a178c966d54c12525006d62cc6f72dd8f31d7c2f0eec7af0dce7946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"panel panel-primary panel-center\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Database overzicht</h3>
                <div class=\"pull-right button-panel\">
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"btn btn-sm btn-default\" ><span class=\"glyphicon glyphicon-home\"></span> Home</a>
                    <a href=\"\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-sm btn-default\" ><span class=\"glyphicon glyphicon-transfer\"></span> Query uitvoeren</a>
                </div>
            </div>
            <div class=\"panel-body\">
                <!-- Tabs & Table -->
                <div class=\"col-md-9\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">SalesOrders</a></li>
                        <li><a data-toggle=\"tab\" href=\"#menu1\">Items</a></li>
                        <li><a data-toggle=\"tab\" href=\"#menu2\">Rep</a></li>
                        <li><a data-toggle=\"tab\" href=\"#menu3\">Region</a></li>
                    </ul>

                    <div class=\"tab-content\">
                        <div id=\"home\" class=\"tab-pane fade in active\">
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th>OrderDate</th>
                                    <th>Region</th>
                                    <th>Rep</th>
                                    <th>Item</th>
                                    <th>Units</th>
                                    <th>Unit Cost</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td>4-7-2017</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>62</td>
                                    <td>4,99</td>
                                    <td>309,98</td>
                                </tr>
                                <tr>
                                    <td>21-7-2017</td>
                                    <td>1</td>
                                    <td>8</td>
                                    <td>20</td>
                                    <td>55</td>
                                    <td>12,49</td>
                                    <td>686,56</td>
                                </tr>
                                <tr>
                                    <td>7-8-2017</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>22</td>
                                    <td>42</td>
                                    <td>23,95</td>
                                    <td>1000,95</td>
                                </tr>
                            </table>
                        </div>
                        <div id=\"menu1\" class=\"tab-pane fade\">
                            <h3>Menu 1</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id=\"menu2\" class=\"tab-pane fade\">
                            <h3>Menu 2</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div id=\"menu3\" class=\"tab-pane fade\">
                            <h3>Menu 3</h3>
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>

                <!-- Info sidebar -->
                <div class=\"col-md-3\">
                    <br><br>
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\">Grootte: 20kb</li>
                        <li class=\"list-group-item\">Tabellen: 4</li>
                        <li class=\"list-group-item\">Velden: 21</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Query uitvoeren</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmail1\">Query</label>
                            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"CREATE VIEW test AS SELECT [kolommen] FROM [tabel] \">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Uitvoeren</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_71a77b40a178c966d54c12525006d62cc6f72dd8f31d7c2f0eec7af0dce7946c->leave($__internal_71a77b40a178c966d54c12525006d62cc6f72dd8f31d7c2f0eec7af0dce7946c_prof);

        
        $__internal_65f754008e16b6185d5e5d66598995f5db8bba1691aff34e51f25f58cbc16c9c->leave($__internal_65f754008e16b6185d5e5d66598995f5db8bba1691aff34e51f25f58cbc16c9c_prof);

    }

    public function getTemplateName()
    {
        return "default/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 120,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                <h3 class=\"panel-title\">Database overzicht</h3>
                <div class=\"pull-right button-panel\">
                    <a href=\"{{ path('homepage') }}\" class=\"btn btn-sm btn-default\" ><span class=\"glyphicon glyphicon-home\"></span> Home</a>
                    <a href=\"\" data-toggle=\"modal\" data-target=\"#myModal\" class=\"btn btn-sm btn-default\" ><span class=\"glyphicon glyphicon-transfer\"></span> Query uitvoeren</a>
                </div>
            </div>
            <div class=\"panel-body\">
                <!-- Tabs & Table -->
                <div class=\"col-md-9\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">SalesOrders</a></li>
                        <li><a data-toggle=\"tab\" href=\"#menu1\">Items</a></li>
                        <li><a data-toggle=\"tab\" href=\"#menu2\">Rep</a></li>
                        <li><a data-toggle=\"tab\" href=\"#menu3\">Region</a></li>
                    </ul>

                    <div class=\"tab-content\">
                        <div id=\"home\" class=\"tab-pane fade in active\">
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <th>OrderDate</th>
                                    <th>Region</th>
                                    <th>Rep</th>
                                    <th>Item</th>
                                    <th>Units</th>
                                    <th>Unit Cost</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td>4-7-2017</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>62</td>
                                    <td>4,99</td>
                                    <td>309,98</td>
                                </tr>
                                <tr>
                                    <td>21-7-2017</td>
                                    <td>1</td>
                                    <td>8</td>
                                    <td>20</td>
                                    <td>55</td>
                                    <td>12,49</td>
                                    <td>686,56</td>
                                </tr>
                                <tr>
                                    <td>7-8-2017</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>22</td>
                                    <td>42</td>
                                    <td>23,95</td>
                                    <td>1000,95</td>
                                </tr>
                            </table>
                        </div>
                        <div id=\"menu1\" class=\"tab-pane fade\">
                            <h3>Menu 1</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id=\"menu2\" class=\"tab-pane fade\">
                            <h3>Menu 2</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div id=\"menu3\" class=\"tab-pane fade\">
                            <h3>Menu 3</h3>
                            <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>

                <!-- Info sidebar -->
                <div class=\"col-md-3\">
                    <br><br>
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\">Grootte: 20kb</li>
                        <li class=\"list-group-item\">Tabellen: 4</li>
                        <li class=\"list-group-item\">Velden: 21</li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Query uitvoeren</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmail1\">Query</label>
                            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"CREATE VIEW test AS SELECT [kolommen] FROM [tabel] \">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Uitvoeren</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
{% endblock %}
", "default/overview.html.twig", "C:\\xampp\\htdocs\\Excel2SQLite\\app\\Resources\\views\\default\\overview.html.twig");
    }
}
