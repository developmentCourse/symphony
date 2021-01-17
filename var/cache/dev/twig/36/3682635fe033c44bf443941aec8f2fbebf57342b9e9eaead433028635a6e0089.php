<?php

/* Cliente/actualizar.html.twig */
class __TwigTemplate_16cef230e6125660cba8fe08f353d379a5817fcf9201e01f3f1dcd1ad03feee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Cliente/actualizar.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf365f8743a2aabda9fccc2fe4438483ac1e25f5568cab18d332dd53447f7a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf365f8743a2aabda9fccc2fe4438483ac1e25f5568cab18d332dd53447f7a24->enter($__internal_cf365f8743a2aabda9fccc2fe4438483ac1e25f5568cab18d332dd53447f7a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cliente/actualizar.html.twig"));

        $__internal_64845aec1343a538e69c46a0b1085d48dbfff4da4974fa9cab1d8d6a9410f7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64845aec1343a538e69c46a0b1085d48dbfff4da4974fa9cab1d8d6a9410f7f6->enter($__internal_64845aec1343a538e69c46a0b1085d48dbfff4da4974fa9cab1d8d6a9410f7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cliente/actualizar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf365f8743a2aabda9fccc2fe4438483ac1e25f5568cab18d332dd53447f7a24->leave($__internal_cf365f8743a2aabda9fccc2fe4438483ac1e25f5568cab18d332dd53447f7a24_prof);

        
        $__internal_64845aec1343a538e69c46a0b1085d48dbfff4da4974fa9cab1d8d6a9410f7f6->leave($__internal_64845aec1343a538e69c46a0b1085d48dbfff4da4974fa9cab1d8d6a9410f7f6_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_40845a98fccb9fc19ef5283ecb8b685243d04f5b8990d033dd024a847b56dac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40845a98fccb9fc19ef5283ecb8b685243d04f5b8990d033dd024a847b56dac0->enter($__internal_40845a98fccb9fc19ef5283ecb8b685243d04f5b8990d033dd024a847b56dac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_2961b4442bc20d622c1afcbdc961b675c0c25ed9e6fc6ccdadcc4180d64d2eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2961b4442bc20d622c1afcbdc961b675c0c25ed9e6fc6ccdadcc4180d64d2eda->enter($__internal_2961b4442bc20d622c1afcbdc961b675c0c25ed9e6fc6ccdadcc4180d64d2eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-4\">
            <div class=\"form-group\">
                <label>Nombre:</label>
                <input type=\"text\" class=\"form-control\" id=\"nombre\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label>Apellido Paterno:</label>
                <input type=\"text\" class=\"form-control\" id=\"apPaterno\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "apPaterno", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label>Apellido Materno:</label>
                <input type=\"text\" class=\"form-control\" id=\"apMaterno\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "apMaterno", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <button class=\"btn btn-success\" id=\"btnGuardar\">Guardar</button>
            </div>
        </div>
    </div>
";
        
        $__internal_2961b4442bc20d622c1afcbdc961b675c0c25ed9e6fc6ccdadcc4180d64d2eda->leave($__internal_2961b4442bc20d622c1afcbdc961b675c0c25ed9e6fc6ccdadcc4180d64d2eda_prof);

        
        $__internal_40845a98fccb9fc19ef5283ecb8b685243d04f5b8990d033dd024a847b56dac0->leave($__internal_40845a98fccb9fc19ef5283ecb8b685243d04f5b8990d033dd024a847b56dac0_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1ca96e6dfa02774c6cecc4e16b4e482d221bec082f24b5d10f63d1784cc3220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ca96e6dfa02774c6cecc4e16b4e482d221bec082f24b5d10f63d1784cc3220->enter($__internal_f1ca96e6dfa02774c6cecc4e16b4e482d221bec082f24b5d10f63d1784cc3220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cfb9108876d8afbb8d790627bea67767b9016814cd1ad892335194ea496dd144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb9108876d8afbb8d790627bea67767b9016814cd1ad892335194ea496dd144->enter($__internal_cfb9108876d8afbb8d790627bea67767b9016814cd1ad892335194ea496dd144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    <script>
        \$('#btnGuardar').click(function(){
            var id = '";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cliente"] ?? $this->getContext($context, "cliente")), "id", array()), "html", null, true);
        echo "';
            var nombre = \$('#nombre').val();
            var apPaterno = \$('#apPaterno').val();
            var apMaterno = \$('#apMaterno').val();
            \$.post(\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_actualizar_clientes");
        echo "\",{
                id: id,
                nombre: nombre,
                apPaterno: apPaterno,
                apMaterno: apMaterno,
            },
            function (data, status){
                alert(data);
            });
        });
    </script>
";
        
        $__internal_cfb9108876d8afbb8d790627bea67767b9016814cd1ad892335194ea496dd144->leave($__internal_cfb9108876d8afbb8d790627bea67767b9016814cd1ad892335194ea496dd144_prof);

        
        $__internal_f1ca96e6dfa02774c6cecc4e16b4e482d221bec082f24b5d10f63d1784cc3220->leave($__internal_f1ca96e6dfa02774c6cecc4e16b4e482d221bec082f24b5d10f63d1784cc3220_prof);

    }

    public function getTemplateName()
    {
        return "Cliente/actualizar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  101 => 26,  97 => 24,  88 => 23,  70 => 15,  63 => 11,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% block contenido %}
    <div class=\"row\">
        <div class=\"col-4\">
            <div class=\"form-group\">
                <label>Nombre:</label>
                <input type=\"text\" class=\"form-control\" id=\"nombre\" value=\"{{ cliente.nombre }}\">
            </div>
            <div class=\"form-group\">
                <label>Apellido Paterno:</label>
                <input type=\"text\" class=\"form-control\" id=\"apPaterno\" value=\"{{ cliente.apPaterno }}\">
            </div>
            <div class=\"form-group\">
                <label>Apellido Materno:</label>
                <input type=\"text\" class=\"form-control\" id=\"apMaterno\" value=\"{{ cliente.apMaterno }}\">
            </div>
            <div class=\"form-group\">
                <button class=\"btn btn-success\" id=\"btnGuardar\">Guardar</button>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script>
        \$('#btnGuardar').click(function(){
            var id = '{{ cliente.id }}';
            var nombre = \$('#nombre').val();
            var apPaterno = \$('#apPaterno').val();
            var apMaterno = \$('#apMaterno').val();
            \$.post(\"{{ path('api_actualizar_clientes') }}\",{
                id: id,
                nombre: nombre,
                apPaterno: apPaterno,
                apMaterno: apMaterno,
            },
            function (data, status){
                alert(data);
            });
        });
    </script>
{% endblock %}", "Cliente/actualizar.html.twig", "/var/www/html/clases/clase1/app/Resources/views/Cliente/actualizar.html.twig");
    }
}
