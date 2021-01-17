<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_825ca2aa137a9515ebe275341b175c9009faae5483283b9a68051a94da6769f8 extends Twig_Template
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
        $__internal_6640cbea5e5cfbae7194aba76ed11f34eb80d74d9cf10398bce270cfaf4f2aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6640cbea5e5cfbae7194aba76ed11f34eb80d74d9cf10398bce270cfaf4f2aed->enter($__internal_6640cbea5e5cfbae7194aba76ed11f34eb80d74d9cf10398bce270cfaf4f2aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_368e32ed114260656c96d8f7b4a775cfb614fa2488da9573e80333cf7f7c5630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368e32ed114260656c96d8f7b4a775cfb614fa2488da9573e80333cf7f7c5630->enter($__internal_368e32ed114260656c96d8f7b4a775cfb614fa2488da9573e80333cf7f7c5630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6640cbea5e5cfbae7194aba76ed11f34eb80d74d9cf10398bce270cfaf4f2aed->leave($__internal_6640cbea5e5cfbae7194aba76ed11f34eb80d74d9cf10398bce270cfaf4f2aed_prof);

        
        $__internal_368e32ed114260656c96d8f7b4a775cfb614fa2488da9573e80333cf7f7c5630->leave($__internal_368e32ed114260656c96d8f7b4a775cfb614fa2488da9573e80333cf7f7c5630_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b48f08ea8c9e6d37ea59d5d8fd0950a61b06e0b1757b286a257896b3654584b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b48f08ea8c9e6d37ea59d5d8fd0950a61b06e0b1757b286a257896b3654584b->enter($__internal_0b48f08ea8c9e6d37ea59d5d8fd0950a61b06e0b1757b286a257896b3654584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60a3cd128b030dd6df269d851323934b085f62ff107056d3caa017d8d9a7b9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a3cd128b030dd6df269d851323934b085f62ff107056d3caa017d8d9a7b9e9->enter($__internal_60a3cd128b030dd6df269d851323934b085f62ff107056d3caa017d8d9a7b9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_60a3cd128b030dd6df269d851323934b085f62ff107056d3caa017d8d9a7b9e9->leave($__internal_60a3cd128b030dd6df269d851323934b085f62ff107056d3caa017d8d9a7b9e9_prof);

        
        $__internal_0b48f08ea8c9e6d37ea59d5d8fd0950a61b06e0b1757b286a257896b3654584b->leave($__internal_0b48f08ea8c9e6d37ea59d5d8fd0950a61b06e0b1757b286a257896b3654584b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f44c86336f6b1b49741af5f4153dff2eaa52ef1d6adf0fddbe8f66ca395c2103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44c86336f6b1b49741af5f4153dff2eaa52ef1d6adf0fddbe8f66ca395c2103->enter($__internal_f44c86336f6b1b49741af5f4153dff2eaa52ef1d6adf0fddbe8f66ca395c2103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3ddd28b3e6c3dc80538071885b1a58879783973af2554c8a561c96cce8e362c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ddd28b3e6c3dc80538071885b1a58879783973af2554c8a561c96cce8e362c->enter($__internal_d3ddd28b3e6c3dc80538071885b1a58879783973af2554c8a561c96cce8e362c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d3ddd28b3e6c3dc80538071885b1a58879783973af2554c8a561c96cce8e362c->leave($__internal_d3ddd28b3e6c3dc80538071885b1a58879783973af2554c8a561c96cce8e362c_prof);

        
        $__internal_f44c86336f6b1b49741af5f4153dff2eaa52ef1d6adf0fddbe8f66ca395c2103->leave($__internal_f44c86336f6b1b49741af5f4153dff2eaa52ef1d6adf0fddbe8f66ca395c2103_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ad1b545feec34d1dc5c2a765ba1ab5d3b78f0af6c7b5e1135897bf0e35195b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad1b545feec34d1dc5c2a765ba1ab5d3b78f0af6c7b5e1135897bf0e35195b7->enter($__internal_8ad1b545feec34d1dc5c2a765ba1ab5d3b78f0af6c7b5e1135897bf0e35195b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60d5c23034e2b180dd8acb3f83096cfb5bd6acb8e68f24991d6e5f8a0256b1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d5c23034e2b180dd8acb3f83096cfb5bd6acb8e68f24991d6e5f8a0256b1a7->enter($__internal_60d5c23034e2b180dd8acb3f83096cfb5bd6acb8e68f24991d6e5f8a0256b1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60d5c23034e2b180dd8acb3f83096cfb5bd6acb8e68f24991d6e5f8a0256b1a7->leave($__internal_60d5c23034e2b180dd8acb3f83096cfb5bd6acb8e68f24991d6e5f8a0256b1a7_prof);

        
        $__internal_8ad1b545feec34d1dc5c2a765ba1ab5d3b78f0af6c7b5e1135897bf0e35195b7->leave($__internal_8ad1b545feec34d1dc5c2a765ba1ab5d3b78f0af6c7b5e1135897bf0e35195b7_prof);

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
", "@Twig/layout.html.twig", "/var/www/html/clases/clase1/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
