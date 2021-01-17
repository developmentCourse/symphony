<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_993917c48ca918f86b830c3ddef5bb97c92f399305799a1bae14d5ef9da2bdc0 extends Twig_Template
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
        $__internal_698f29804766752f121eab729426d6e040552bc167be656a52e850d29dc67529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698f29804766752f121eab729426d6e040552bc167be656a52e850d29dc67529->enter($__internal_698f29804766752f121eab729426d6e040552bc167be656a52e850d29dc67529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_15fbc0ce14511927eb46a747496d77c7c4b285d334ece9bdb6464ada493fcff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fbc0ce14511927eb46a747496d77c7c4b285d334ece9bdb6464ada493fcff7->enter($__internal_15fbc0ce14511927eb46a747496d77c7c4b285d334ece9bdb6464ada493fcff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_698f29804766752f121eab729426d6e040552bc167be656a52e850d29dc67529->leave($__internal_698f29804766752f121eab729426d6e040552bc167be656a52e850d29dc67529_prof);

        
        $__internal_15fbc0ce14511927eb46a747496d77c7c4b285d334ece9bdb6464ada493fcff7->leave($__internal_15fbc0ce14511927eb46a747496d77c7c4b285d334ece9bdb6464ada493fcff7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_959dd3ccdc91495924018f3e2ea34232c1ab2ae11ac11dad49dd91beed3deb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_959dd3ccdc91495924018f3e2ea34232c1ab2ae11ac11dad49dd91beed3deb25->enter($__internal_959dd3ccdc91495924018f3e2ea34232c1ab2ae11ac11dad49dd91beed3deb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e6a96c47a59cda2381566394bb2833f90132cf73d61abdb9b36f0e2b9ad0008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6a96c47a59cda2381566394bb2833f90132cf73d61abdb9b36f0e2b9ad0008->enter($__internal_7e6a96c47a59cda2381566394bb2833f90132cf73d61abdb9b36f0e2b9ad0008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e6a96c47a59cda2381566394bb2833f90132cf73d61abdb9b36f0e2b9ad0008->leave($__internal_7e6a96c47a59cda2381566394bb2833f90132cf73d61abdb9b36f0e2b9ad0008_prof);

        
        $__internal_959dd3ccdc91495924018f3e2ea34232c1ab2ae11ac11dad49dd91beed3deb25->leave($__internal_959dd3ccdc91495924018f3e2ea34232c1ab2ae11ac11dad49dd91beed3deb25_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_caf98a740d19b3b916af8182f94e6d4e86dd02fefbb3332b08adb48bc0e4fb87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf98a740d19b3b916af8182f94e6d4e86dd02fefbb3332b08adb48bc0e4fb87->enter($__internal_caf98a740d19b3b916af8182f94e6d4e86dd02fefbb3332b08adb48bc0e4fb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c808bb7f7614b96dda2e9b3cef23202b580efc933b021d32d0ebf226b2123fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c808bb7f7614b96dda2e9b3cef23202b580efc933b021d32d0ebf226b2123fe6->enter($__internal_c808bb7f7614b96dda2e9b3cef23202b580efc933b021d32d0ebf226b2123fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c808bb7f7614b96dda2e9b3cef23202b580efc933b021d32d0ebf226b2123fe6->leave($__internal_c808bb7f7614b96dda2e9b3cef23202b580efc933b021d32d0ebf226b2123fe6_prof);

        
        $__internal_caf98a740d19b3b916af8182f94e6d4e86dd02fefbb3332b08adb48bc0e4fb87->leave($__internal_caf98a740d19b3b916af8182f94e6d4e86dd02fefbb3332b08adb48bc0e4fb87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd57c4f96759767da475c70a0557eb254a119a731e44ff6b0a1fc08e53065b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd57c4f96759767da475c70a0557eb254a119a731e44ff6b0a1fc08e53065b52->enter($__internal_cd57c4f96759767da475c70a0557eb254a119a731e44ff6b0a1fc08e53065b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_222c74d20e85df4e655c79a6ab545d6afeb1b9e548ead0b3cf96df137dce84be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222c74d20e85df4e655c79a6ab545d6afeb1b9e548ead0b3cf96df137dce84be->enter($__internal_222c74d20e85df4e655c79a6ab545d6afeb1b9e548ead0b3cf96df137dce84be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_222c74d20e85df4e655c79a6ab545d6afeb1b9e548ead0b3cf96df137dce84be->leave($__internal_222c74d20e85df4e655c79a6ab545d6afeb1b9e548ead0b3cf96df137dce84be_prof);

        
        $__internal_cd57c4f96759767da475c70a0557eb254a119a731e44ff6b0a1fc08e53065b52->leave($__internal_cd57c4f96759767da475c70a0557eb254a119a731e44ff6b0a1fc08e53065b52_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/clases/clase1/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
