<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_9ebb96c8679854681c05e13a6833352d69f11876cc0199bcde4c73dec49136e0 extends Twig_Template
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
        $__internal_519c91234abbe0f9e889b42f2ecfc843445d676b1ea67fb247e94dde7e19881a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519c91234abbe0f9e889b42f2ecfc843445d676b1ea67fb247e94dde7e19881a->enter($__internal_519c91234abbe0f9e889b42f2ecfc843445d676b1ea67fb247e94dde7e19881a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9bc9590f77cf78d822946ed2ce62dcd2c0c07952218302275f91b1b8d0a8cd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc9590f77cf78d822946ed2ce62dcd2c0c07952218302275f91b1b8d0a8cd30->enter($__internal_9bc9590f77cf78d822946ed2ce62dcd2c0c07952218302275f91b1b8d0a8cd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_519c91234abbe0f9e889b42f2ecfc843445d676b1ea67fb247e94dde7e19881a->leave($__internal_519c91234abbe0f9e889b42f2ecfc843445d676b1ea67fb247e94dde7e19881a_prof);

        
        $__internal_9bc9590f77cf78d822946ed2ce62dcd2c0c07952218302275f91b1b8d0a8cd30->leave($__internal_9bc9590f77cf78d822946ed2ce62dcd2c0c07952218302275f91b1b8d0a8cd30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\Excel2SQLite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
