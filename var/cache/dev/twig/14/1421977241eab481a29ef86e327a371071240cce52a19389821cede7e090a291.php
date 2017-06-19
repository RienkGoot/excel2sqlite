<?php

/* ::flash-messages.html.twig */
class __TwigTemplate_230d1ba888b63bfa130cccd8adbc1a0b9d3fef33c90e173b988c7b142179b5b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'flash_messages' => array($this, 'block_flash_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1ec075dca7e4dd22e7eaa3343912a4172512a3bfd671ffcecbf7b5cde069191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ec075dca7e4dd22e7eaa3343912a4172512a3bfd671ffcecbf7b5cde069191->enter($__internal_a1ec075dca7e4dd22e7eaa3343912a4172512a3bfd671ffcecbf7b5cde069191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::flash-messages.html.twig"));

        $__internal_31beb19ac4968dcc0baaab359640b50977fe4b0bd006959911de17c8061a9323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31beb19ac4968dcc0baaab359640b50977fe4b0bd006959911de17c8061a9323->enter($__internal_31beb19ac4968dcc0baaab359640b50977fe4b0bd006959911de17c8061a9323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::flash-messages.html.twig"));

        // line 1
        echo "<!-- Flash messages -->
";
        // line 2
        $this->displayBlock('flash_messages', $context, $blocks);
        
        $__internal_a1ec075dca7e4dd22e7eaa3343912a4172512a3bfd671ffcecbf7b5cde069191->leave($__internal_a1ec075dca7e4dd22e7eaa3343912a4172512a3bfd671ffcecbf7b5cde069191_prof);

        
        $__internal_31beb19ac4968dcc0baaab359640b50977fe4b0bd006959911de17c8061a9323->leave($__internal_31beb19ac4968dcc0baaab359640b50977fe4b0bd006959911de17c8061a9323_prof);

    }

    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_7b59be52532101f5c1da6f1421d47ceacdcf8a945490d73c5d416a370b85c280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b59be52532101f5c1da6f1421d47ceacdcf8a945490d73c5d416a370b85c280->enter($__internal_7b59be52532101f5c1da6f1421d47ceacdcf8a945490d73c5d416a370b85c280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_fd39ddc647507caeffb5f8db03bd06565e32c6fc3c298cac7287e7f2861f7d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd39ddc647507caeffb5f8db03bd06565e32c6fc3c298cac7287e7f2861f7d33->enter($__internal_fd39ddc647507caeffb5f8db03bd06565e32c6fc3c298cac7287e7f2861f7d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                ";
                // line 7
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fd39ddc647507caeffb5f8db03bd06565e32c6fc3c298cac7287e7f2861f7d33->leave($__internal_fd39ddc647507caeffb5f8db03bd06565e32c6fc3c298cac7287e7f2861f7d33_prof);

        
        $__internal_7b59be52532101f5c1da6f1421d47ceacdcf8a945490d73c5d416a370b85c280->leave($__internal_7b59be52532101f5c1da6f1421d47ceacdcf8a945490d73c5d416a370b85c280_prof);

    }

    public function getTemplateName()
    {
        return "::flash-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  63 => 7,  57 => 5,  52 => 4,  47 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Flash messages -->
{% block flash_messages %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }} alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock %}", "::flash-messages.html.twig", "C:\\xampp\\htdocs\\Excel2SQLite\\app/Resources\\views/flash-messages.html.twig");
    }
}
