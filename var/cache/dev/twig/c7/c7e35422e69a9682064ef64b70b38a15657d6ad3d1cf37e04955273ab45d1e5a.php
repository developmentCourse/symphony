<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ee77b0566e02c08097cc0818e6e220f0438fc514ff5c2ae52342b3a8ccea3295 extends Twig_Template
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
        $__internal_abab989c51095ff1b7d53183c82919a4bf8fa114285ec4dcbe955deed074acfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abab989c51095ff1b7d53183c82919a4bf8fa114285ec4dcbe955deed074acfd->enter($__internal_abab989c51095ff1b7d53183c82919a4bf8fa114285ec4dcbe955deed074acfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2fb0ff4b5c018ace7392ef6b6413e1530362b49acec2331eb000e759a4208222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb0ff4b5c018ace7392ef6b6413e1530362b49acec2331eb000e759a4208222->enter($__internal_2fb0ff4b5c018ace7392ef6b6413e1530362b49acec2331eb000e759a4208222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abab989c51095ff1b7d53183c82919a4bf8fa114285ec4dcbe955deed074acfd->leave($__internal_abab989c51095ff1b7d53183c82919a4bf8fa114285ec4dcbe955deed074acfd_prof);

        
        $__internal_2fb0ff4b5c018ace7392ef6b6413e1530362b49acec2331eb000e759a4208222->leave($__internal_2fb0ff4b5c018ace7392ef6b6413e1530362b49acec2331eb000e759a4208222_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14ea73b90684976b20dbe18f6448351cae082cd06309a738cb1759ce47dedff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ea73b90684976b20dbe18f6448351cae082cd06309a738cb1759ce47dedff7->enter($__internal_14ea73b90684976b20dbe18f6448351cae082cd06309a738cb1759ce47dedff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fafa49a226ba40d8034558d02bbcc8e336ea46c9ccaa7beff97bede0f210e1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafa49a226ba40d8034558d02bbcc8e336ea46c9ccaa7beff97bede0f210e1e3->enter($__internal_fafa49a226ba40d8034558d02bbcc8e336ea46c9ccaa7beff97bede0f210e1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fafa49a226ba40d8034558d02bbcc8e336ea46c9ccaa7beff97bede0f210e1e3->leave($__internal_fafa49a226ba40d8034558d02bbcc8e336ea46c9ccaa7beff97bede0f210e1e3_prof);

        
        $__internal_14ea73b90684976b20dbe18f6448351cae082cd06309a738cb1759ce47dedff7->leave($__internal_14ea73b90684976b20dbe18f6448351cae082cd06309a738cb1759ce47dedff7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_187e4aac934e408e1724f93098ab6e7bc01be1bf7f9fabc3bbd27f89e0432851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187e4aac934e408e1724f93098ab6e7bc01be1bf7f9fabc3bbd27f89e0432851->enter($__internal_187e4aac934e408e1724f93098ab6e7bc01be1bf7f9fabc3bbd27f89e0432851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8028903f007833bf8db8055a413c556a2e54b707c3ef80f51ed12c48aa02caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8028903f007833bf8db8055a413c556a2e54b707c3ef80f51ed12c48aa02caa->enter($__internal_a8028903f007833bf8db8055a413c556a2e54b707c3ef80f51ed12c48aa02caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a8028903f007833bf8db8055a413c556a2e54b707c3ef80f51ed12c48aa02caa->leave($__internal_a8028903f007833bf8db8055a413c556a2e54b707c3ef80f51ed12c48aa02caa_prof);

        
        $__internal_187e4aac934e408e1724f93098ab6e7bc01be1bf7f9fabc3bbd27f89e0432851->leave($__internal_187e4aac934e408e1724f93098ab6e7bc01be1bf7f9fabc3bbd27f89e0432851_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1997d19da4a3dc8ea8b72e7457c664667b4d1aa6a445feaa1f1472f8f1966a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1997d19da4a3dc8ea8b72e7457c664667b4d1aa6a445feaa1f1472f8f1966a0->enter($__internal_a1997d19da4a3dc8ea8b72e7457c664667b4d1aa6a445feaa1f1472f8f1966a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdbfc53ab2c455d4df9965bda79a1313f7f76c7d7acbc8f81d9639c29774c4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbfc53ab2c455d4df9965bda79a1313f7f76c7d7acbc8f81d9639c29774c4ef->enter($__internal_fdbfc53ab2c455d4df9965bda79a1313f7f76c7d7acbc8f81d9639c29774c4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fdbfc53ab2c455d4df9965bda79a1313f7f76c7d7acbc8f81d9639c29774c4ef->leave($__internal_fdbfc53ab2c455d4df9965bda79a1313f7f76c7d7acbc8f81d9639c29774c4ef_prof);

        
        $__internal_a1997d19da4a3dc8ea8b72e7457c664667b4d1aa6a445feaa1f1472f8f1966a0->leave($__internal_a1997d19da4a3dc8ea8b72e7457c664667b4d1aa6a445feaa1f1472f8f1966a0_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/clases/clase1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
