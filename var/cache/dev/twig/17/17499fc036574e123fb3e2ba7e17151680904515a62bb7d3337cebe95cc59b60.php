<?php

/* Cliente/listar3.html.twig */
class __TwigTemplate_40073388e4a2fe507551798f94c0fd878a470872665c0d70aa685b5147af3a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Cliente/listar3.html.twig", 1);
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
        $__internal_7a0eccbc3a97a94f1e5d4837d5b8ad56e5a7551b03efa192158e16b9cf08a6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a0eccbc3a97a94f1e5d4837d5b8ad56e5a7551b03efa192158e16b9cf08a6a9->enter($__internal_7a0eccbc3a97a94f1e5d4837d5b8ad56e5a7551b03efa192158e16b9cf08a6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cliente/listar3.html.twig"));

        $__internal_5770bd6879ef43c4d72d0cb744f76855e09cf7f9dff47b2f7e5e783c55a0c3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5770bd6879ef43c4d72d0cb744f76855e09cf7f9dff47b2f7e5e783c55a0c3ad->enter($__internal_5770bd6879ef43c4d72d0cb744f76855e09cf7f9dff47b2f7e5e783c55a0c3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cliente/listar3.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a0eccbc3a97a94f1e5d4837d5b8ad56e5a7551b03efa192158e16b9cf08a6a9->leave($__internal_7a0eccbc3a97a94f1e5d4837d5b8ad56e5a7551b03efa192158e16b9cf08a6a9_prof);

        
        $__internal_5770bd6879ef43c4d72d0cb744f76855e09cf7f9dff47b2f7e5e783c55a0c3ad->leave($__internal_5770bd6879ef43c4d72d0cb744f76855e09cf7f9dff47b2f7e5e783c55a0c3ad_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7cd21c1af6a0e6aeb1b4bf28f9c931282020db0b9007c848d9ef3e05bbc63cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd21c1af6a0e6aeb1b4bf28f9c931282020db0b9007c848d9ef3e05bbc63cf2->enter($__internal_7cd21c1af6a0e6aeb1b4bf28f9c931282020db0b9007c848d9ef3e05bbc63cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_78ecaea1ba4e8523e50fbbc7ddbe84e38f012215b8503a77f2175c7739d6634d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ecaea1ba4e8523e50fbbc7ddbe84e38f012215b8503a77f2175c7739d6634d->enter($__internal_78ecaea1ba4e8523e50fbbc7ddbe84e38f012215b8503a77f2175c7739d6634d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <a class=\"btn btn-success\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_cliente");
        echo "\">Nuevo</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Proyectos</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clientes"] ?? $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "_id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "apPaterno", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "apMaterno", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cliente"], "Proyecto", array()), "nombre", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <a class=\"btn btn-info\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualizar_clientes", array("id" => $this->getAttribute($context["cliente"], "_id", array()))), "html", null, true);
            echo "\">Editar</a>
                            <button class=\"btn btn-danger btnEliminar\" data-id=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "_id", array()), "html", null, true);
            echo "\" >Eliminar</button>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_78ecaea1ba4e8523e50fbbc7ddbe84e38f012215b8503a77f2175c7739d6634d->leave($__internal_78ecaea1ba4e8523e50fbbc7ddbe84e38f012215b8503a77f2175c7739d6634d_prof);

        
        $__internal_7cd21c1af6a0e6aeb1b4bf28f9c931282020db0b9007c848d9ef3e05bbc63cf2->leave($__internal_7cd21c1af6a0e6aeb1b4bf28f9c931282020db0b9007c848d9ef3e05bbc63cf2_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72d942d84ae06bbe5196e4b9f69a91644d99568311d029256c7b371baddf4b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d942d84ae06bbe5196e4b9f69a91644d99568311d029256c7b371baddf4b90->enter($__internal_72d942d84ae06bbe5196e4b9f69a91644d99568311d029256c7b371baddf4b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_86b999c9dca58fe6e77ae23e80733799b7bfafb84643e15fbef977f27d214d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b999c9dca58fe6e77ae23e80733799b7bfafb84643e15fbef977f27d214d45->enter($__internal_86b999c9dca58fe6e77ae23e80733799b7bfafb84643e15fbef977f27d214d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    <script>
        \$('.btnEliminar').click(function (){
            var id = \$(this).attr('data-id');
            \$.post(\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_eliminar_clientes");
        echo "\",{
                    id: id,
                },
                function (data, status){
                    alert(data);
                    location.reload();
                });
        });
    </script>
";
        
        $__internal_86b999c9dca58fe6e77ae23e80733799b7bfafb84643e15fbef977f27d214d45->leave($__internal_86b999c9dca58fe6e77ae23e80733799b7bfafb84643e15fbef977f27d214d45_prof);

        
        $__internal_72d942d84ae06bbe5196e4b9f69a91644d99568311d029256c7b371baddf4b90->leave($__internal_72d942d84ae06bbe5196e4b9f69a91644d99568311d029256c7b371baddf4b90_prof);

    }

    public function getTemplateName()
    {
        return "Cliente/listar3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  140 => 42,  131 => 41,  117 => 36,  107 => 32,  103 => 31,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  78 => 23,  74 => 22,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
        <div class=\"col-12\">
            <a class=\"btn btn-success\" href=\"{{ path('crear_cliente') }}\">Nuevo</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Proyectos</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                {% for cliente in clientes %}
                    <tr>
                        <td>{{ cliente._id }}</td>
                        <td>{{ cliente.nombre }}</td>
                        <td>{{ cliente.apPaterno }}</td>
                        <td>{{ cliente.apMaterno }}</td>
                        <td>{{ cliente.Proyecto.nombre }}
                        </td>
                        <td>
                            <a class=\"btn btn-info\" href=\"{{ path('actualizar_clientes',{'id':cliente._id}) }}\">Editar</a>
                            <button class=\"btn btn-danger btnEliminar\" data-id=\"{{ cliente._id }}\" >Eliminar</button>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script>
        \$('.btnEliminar').click(function (){
            var id = \$(this).attr('data-id');
            \$.post(\"{{ path('api_eliminar_clientes') }}\",{
                    id: id,
                },
                function (data, status){
                    alert(data);
                    location.reload();
                });
        });
    </script>
{% endblock %}", "Cliente/listar3.html.twig", "/var/www/html/clases/clase1/app/Resources/views/Cliente/listar3.html.twig");
    }
}
