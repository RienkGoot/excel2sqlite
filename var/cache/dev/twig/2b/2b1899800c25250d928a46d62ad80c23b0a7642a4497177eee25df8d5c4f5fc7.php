<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_efa87c9cef0ae78048743e75abbfbece1c9034a2007ec233b9872ad3c454662e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_42f2f413e01d799c6531cedc0df2c0840ed5e1e1ce50517f5fb6365dd6a51e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f2f413e01d799c6531cedc0df2c0840ed5e1e1ce50517f5fb6365dd6a51e36->enter($__internal_42f2f413e01d799c6531cedc0df2c0840ed5e1e1ce50517f5fb6365dd6a51e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8c4b03e207e7b2a4585072092f5af11a91b2a79c325cf432d06c4f308018ae19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4b03e207e7b2a4585072092f5af11a91b2a79c325cf432d06c4f308018ae19->enter($__internal_8c4b03e207e7b2a4585072092f5af11a91b2a79c325cf432d06c4f308018ae19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f2f413e01d799c6531cedc0df2c0840ed5e1e1ce50517f5fb6365dd6a51e36->leave($__internal_42f2f413e01d799c6531cedc0df2c0840ed5e1e1ce50517f5fb6365dd6a51e36_prof);

        
        $__internal_8c4b03e207e7b2a4585072092f5af11a91b2a79c325cf432d06c4f308018ae19->leave($__internal_8c4b03e207e7b2a4585072092f5af11a91b2a79c325cf432d06c4f308018ae19_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ada4c468fd2e0b6ac970b9447ee1546be0377c23fe336e95ed2bd066fbedc825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada4c468fd2e0b6ac970b9447ee1546be0377c23fe336e95ed2bd066fbedc825->enter($__internal_ada4c468fd2e0b6ac970b9447ee1546be0377c23fe336e95ed2bd066fbedc825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1c74b7131c6db1de6e4a2f4773ce47cbe657ebe038282cd9e1d2180d389d839c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c74b7131c6db1de6e4a2f4773ce47cbe657ebe038282cd9e1d2180d389d839c->enter($__internal_1c74b7131c6db1de6e4a2f4773ce47cbe657ebe038282cd9e1d2180d389d839c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1c74b7131c6db1de6e4a2f4773ce47cbe657ebe038282cd9e1d2180d389d839c->leave($__internal_1c74b7131c6db1de6e4a2f4773ce47cbe657ebe038282cd9e1d2180d389d839c_prof);

        
        $__internal_ada4c468fd2e0b6ac970b9447ee1546be0377c23fe336e95ed2bd066fbedc825->leave($__internal_ada4c468fd2e0b6ac970b9447ee1546be0377c23fe336e95ed2bd066fbedc825_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04088967c574e749ea623a7b7b76db0c95837debb99a77ad270e5880992364d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04088967c574e749ea623a7b7b76db0c95837debb99a77ad270e5880992364d3->enter($__internal_04088967c574e749ea623a7b7b76db0c95837debb99a77ad270e5880992364d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c3a5d4d37d02baa2d4ed6a5d7ecdaef31baae9493bc1ad2fc344c7eb3a21671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3a5d4d37d02baa2d4ed6a5d7ecdaef31baae9493bc1ad2fc344c7eb3a21671->enter($__internal_0c3a5d4d37d02baa2d4ed6a5d7ecdaef31baae9493bc1ad2fc344c7eb3a21671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0c3a5d4d37d02baa2d4ed6a5d7ecdaef31baae9493bc1ad2fc344c7eb3a21671->leave($__internal_0c3a5d4d37d02baa2d4ed6a5d7ecdaef31baae9493bc1ad2fc344c7eb3a21671_prof);

        
        $__internal_04088967c574e749ea623a7b7b76db0c95837debb99a77ad270e5880992364d3->leave($__internal_04088967c574e749ea623a7b7b76db0c95837debb99a77ad270e5880992364d3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56b2833efc4ae4362c7e508df467860b8bda7384a97d2411513ac82edf5135c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b2833efc4ae4362c7e508df467860b8bda7384a97d2411513ac82edf5135c7->enter($__internal_56b2833efc4ae4362c7e508df467860b8bda7384a97d2411513ac82edf5135c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f0e3bdf6db392abeb0596fd45ae9b3ff14bd746fa9d2e28c64b603affd192f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e3bdf6db392abeb0596fd45ae9b3ff14bd746fa9d2e28c64b603affd192f28->enter($__internal_f0e3bdf6db392abeb0596fd45ae9b3ff14bd746fa9d2e28c64b603affd192f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f0e3bdf6db392abeb0596fd45ae9b3ff14bd746fa9d2e28c64b603affd192f28->leave($__internal_f0e3bdf6db392abeb0596fd45ae9b3ff14bd746fa9d2e28c64b603affd192f28_prof);

        
        $__internal_56b2833efc4ae4362c7e508df467860b8bda7384a97d2411513ac82edf5135c7->leave($__internal_56b2833efc4ae4362c7e508df467860b8bda7384a97d2411513ac82edf5135c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Excel2SQLite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
