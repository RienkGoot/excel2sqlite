<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7cd0368af159ad111afca999519e09529fed2fa66f5e5f10637a0b1e69ce0364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dcc9c2a9c44339a064edc56eef44cc5b294a375e0ce0e153a28a8808664bd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcc9c2a9c44339a064edc56eef44cc5b294a375e0ce0e153a28a8808664bd14->enter($__internal_8dcc9c2a9c44339a064edc56eef44cc5b294a375e0ce0e153a28a8808664bd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0c6e066dbd74d00274950c0f15ffbd99275ce07e0454b500b4607d5c344b777a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6e066dbd74d00274950c0f15ffbd99275ce07e0454b500b4607d5c344b777a->enter($__internal_0c6e066dbd74d00274950c0f15ffbd99275ce07e0454b500b4607d5c344b777a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8dcc9c2a9c44339a064edc56eef44cc5b294a375e0ce0e153a28a8808664bd14->leave($__internal_8dcc9c2a9c44339a064edc56eef44cc5b294a375e0ce0e153a28a8808664bd14_prof);

        
        $__internal_0c6e066dbd74d00274950c0f15ffbd99275ce07e0454b500b4607d5c344b777a->leave($__internal_0c6e066dbd74d00274950c0f15ffbd99275ce07e0454b500b4607d5c344b777a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c45f45a43db51b5dfff27e7707151396513884f6e28bd30f35d541128594eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c45f45a43db51b5dfff27e7707151396513884f6e28bd30f35d541128594eec->enter($__internal_6c45f45a43db51b5dfff27e7707151396513884f6e28bd30f35d541128594eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b1ec2bb4456a19629f4cd0453f8c26bc47f6842e190dbd7f194ecec89d681ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1ec2bb4456a19629f4cd0453f8c26bc47f6842e190dbd7f194ecec89d681ae->enter($__internal_5b1ec2bb4456a19629f4cd0453f8c26bc47f6842e190dbd7f194ecec89d681ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5b1ec2bb4456a19629f4cd0453f8c26bc47f6842e190dbd7f194ecec89d681ae->leave($__internal_5b1ec2bb4456a19629f4cd0453f8c26bc47f6842e190dbd7f194ecec89d681ae_prof);

        
        $__internal_6c45f45a43db51b5dfff27e7707151396513884f6e28bd30f35d541128594eec->leave($__internal_6c45f45a43db51b5dfff27e7707151396513884f6e28bd30f35d541128594eec_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_820089f5404ddc006fdf6477c1cf96d45c4748a6c3ac9811b86ba32b353b1791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820089f5404ddc006fdf6477c1cf96d45c4748a6c3ac9811b86ba32b353b1791->enter($__internal_820089f5404ddc006fdf6477c1cf96d45c4748a6c3ac9811b86ba32b353b1791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4fc145b14b10c17b489405ba031c1636ea94ce60a22d4c093af3f680e0b30059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc145b14b10c17b489405ba031c1636ea94ce60a22d4c093af3f680e0b30059->enter($__internal_4fc145b14b10c17b489405ba031c1636ea94ce60a22d4c093af3f680e0b30059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4fc145b14b10c17b489405ba031c1636ea94ce60a22d4c093af3f680e0b30059->leave($__internal_4fc145b14b10c17b489405ba031c1636ea94ce60a22d4c093af3f680e0b30059_prof);

        
        $__internal_820089f5404ddc006fdf6477c1cf96d45c4748a6c3ac9811b86ba32b353b1791->leave($__internal_820089f5404ddc006fdf6477c1cf96d45c4748a6c3ac9811b86ba32b353b1791_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8b20aed494ff75088c2043f7d3b0cb3e5b3097b69d75a2ee194e8a7dbcfdc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b20aed494ff75088c2043f7d3b0cb3e5b3097b69d75a2ee194e8a7dbcfdc3f->enter($__internal_b8b20aed494ff75088c2043f7d3b0cb3e5b3097b69d75a2ee194e8a7dbcfdc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_455c073aff0e336368cd41b54eaf440d4a9fb72e3311ff76d08fce9394245cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455c073aff0e336368cd41b54eaf440d4a9fb72e3311ff76d08fce9394245cff->enter($__internal_455c073aff0e336368cd41b54eaf440d4a9fb72e3311ff76d08fce9394245cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_455c073aff0e336368cd41b54eaf440d4a9fb72e3311ff76d08fce9394245cff->leave($__internal_455c073aff0e336368cd41b54eaf440d4a9fb72e3311ff76d08fce9394245cff_prof);

        
        $__internal_b8b20aed494ff75088c2043f7d3b0cb3e5b3097b69d75a2ee194e8a7dbcfdc3f->leave($__internal_b8b20aed494ff75088c2043f7d3b0cb3e5b3097b69d75a2ee194e8a7dbcfdc3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\Excel2SQLite\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
