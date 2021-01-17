<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7a56631aec9ecc9a55b7dfb35d6581121066a4fb4cae0634e626cb86147c0ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0ad32b3b9d5ae71db3a77f69ba647940b603101eddd841a992cce69f02d948bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad32b3b9d5ae71db3a77f69ba647940b603101eddd841a992cce69f02d948bf->enter($__internal_0ad32b3b9d5ae71db3a77f69ba647940b603101eddd841a992cce69f02d948bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_28130129cb5e443f257369bf0c4a10ad4345308fd271d3e41164cc683f86019d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28130129cb5e443f257369bf0c4a10ad4345308fd271d3e41164cc683f86019d->enter($__internal_28130129cb5e443f257369bf0c4a10ad4345308fd271d3e41164cc683f86019d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ad32b3b9d5ae71db3a77f69ba647940b603101eddd841a992cce69f02d948bf->leave($__internal_0ad32b3b9d5ae71db3a77f69ba647940b603101eddd841a992cce69f02d948bf_prof);

        
        $__internal_28130129cb5e443f257369bf0c4a10ad4345308fd271d3e41164cc683f86019d->leave($__internal_28130129cb5e443f257369bf0c4a10ad4345308fd271d3e41164cc683f86019d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fdf620e6a9df03dd7c4bb5ad27e9a6180eb988ec9f4f8028b827bfcf916621b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf620e6a9df03dd7c4bb5ad27e9a6180eb988ec9f4f8028b827bfcf916621b0->enter($__internal_fdf620e6a9df03dd7c4bb5ad27e9a6180eb988ec9f4f8028b827bfcf916621b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_713d85fe63c56dd712af512cd5d2095f8ed07b6fa74ad0f6e0a93ef72edc452d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713d85fe63c56dd712af512cd5d2095f8ed07b6fa74ad0f6e0a93ef72edc452d->enter($__internal_713d85fe63c56dd712af512cd5d2095f8ed07b6fa74ad0f6e0a93ef72edc452d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_713d85fe63c56dd712af512cd5d2095f8ed07b6fa74ad0f6e0a93ef72edc452d->leave($__internal_713d85fe63c56dd712af512cd5d2095f8ed07b6fa74ad0f6e0a93ef72edc452d_prof);

        
        $__internal_fdf620e6a9df03dd7c4bb5ad27e9a6180eb988ec9f4f8028b827bfcf916621b0->leave($__internal_fdf620e6a9df03dd7c4bb5ad27e9a6180eb988ec9f4f8028b827bfcf916621b0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_185fdbb78e8c2cd53c13783d80c27de7f456ca617569d6cf6fadb78dd24bec63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_185fdbb78e8c2cd53c13783d80c27de7f456ca617569d6cf6fadb78dd24bec63->enter($__internal_185fdbb78e8c2cd53c13783d80c27de7f456ca617569d6cf6fadb78dd24bec63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e747fb19f394a1d475e901375369b9a9fe956aa33cc83855d2435df996a7aea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e747fb19f394a1d475e901375369b9a9fe956aa33cc83855d2435df996a7aea7->enter($__internal_e747fb19f394a1d475e901375369b9a9fe956aa33cc83855d2435df996a7aea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e747fb19f394a1d475e901375369b9a9fe956aa33cc83855d2435df996a7aea7->leave($__internal_e747fb19f394a1d475e901375369b9a9fe956aa33cc83855d2435df996a7aea7_prof);

        
        $__internal_185fdbb78e8c2cd53c13783d80c27de7f456ca617569d6cf6fadb78dd24bec63->leave($__internal_185fdbb78e8c2cd53c13783d80c27de7f456ca617569d6cf6fadb78dd24bec63_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6971e2aeab99fb3d76c13a004fcf1a69658753a895e71fd8a3c8bcc667c2580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6971e2aeab99fb3d76c13a004fcf1a69658753a895e71fd8a3c8bcc667c2580->enter($__internal_b6971e2aeab99fb3d76c13a004fcf1a69658753a895e71fd8a3c8bcc667c2580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7b45fa4b34c0abad1bb1b2fae2842f6af0a10aa7e50686b90a8ae733ecf80d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b45fa4b34c0abad1bb1b2fae2842f6af0a10aa7e50686b90a8ae733ecf80d6->enter($__internal_f7b45fa4b34c0abad1bb1b2fae2842f6af0a10aa7e50686b90a8ae733ecf80d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f7b45fa4b34c0abad1bb1b2fae2842f6af0a10aa7e50686b90a8ae733ecf80d6->leave($__internal_f7b45fa4b34c0abad1bb1b2fae2842f6af0a10aa7e50686b90a8ae733ecf80d6_prof);

        
        $__internal_b6971e2aeab99fb3d76c13a004fcf1a69658753a895e71fd8a3c8bcc667c2580->leave($__internal_b6971e2aeab99fb3d76c13a004fcf1a69658753a895e71fd8a3c8bcc667c2580_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/clases/clase1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
