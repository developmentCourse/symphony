<?php

/* Cliente/listar.html.twig */
class __TwigTemplate_e4f3b712c30c105688cfb8b4ba9701e811a861199e2d76b02fe5227f8cd1dd03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Cliente/listar.html.twig", 1);
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
        $__internal_a75542f03316c8413b531c73282dc209db11379abb9aca75392a9fbdc62e4f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75542f03316c8413b531c73282dc209db11379abb9aca75392a9fbdc62e4f5b->enter($__internal_a75542f03316c8413b531c73282dc209db11379abb9aca75392a9fbdc62e4f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cliente/listar.html.twig"));

        $__internal_40bc44750a71dda535645cd82d94e704ad523de3e0464f187157a561bf591938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bc44750a71dda535645cd82d94e704ad523de3e0464f187157a561bf591938->enter($__internal_40bc44750a71dda535645cd82d94e704ad523de3e0464f187157a561bf591938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cliente/listar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75542f03316c8413b531c73282dc209db11379abb9aca75392a9fbdc62e4f5b->leave($__internal_a75542f03316c8413b531c73282dc209db11379abb9aca75392a9fbdc62e4f5b_prof);

        
        $__internal_40bc44750a71dda535645cd82d94e704ad523de3e0464f187157a561bf591938->leave($__internal_40bc44750a71dda535645cd82d94e704ad523de3e0464f187157a561bf591938_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e73eecbb80d225d89f84108ef490ae697cf90cddbdfff156898ab0728bff2dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73eecbb80d225d89f84108ef490ae697cf90cddbdfff156898ab0728bff2dbb->enter($__internal_e73eecbb80d225d89f84108ef490ae697cf90cddbdfff156898ab0728bff2dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_fa82625846e0379e8d71dd34225d8d5e306c084047fcf102785beccf645b46a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa82625846e0379e8d71dd34225d8d5e306c084047fcf102785beccf645b46a6->enter($__internal_fa82625846e0379e8d71dd34225d8d5e306c084047fcf102785beccf645b46a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
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
                        <td>
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cliente"], "proyectos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
                // line 30
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombre", array()), "html", null, true);
                echo "<br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        </td>
                        <td>
                            <a class=\"btn btn-info\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actualizar_clientes", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                            <button class=\"btn btn-danger btnEliminar\" data-id=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "\" >Eliminar</button>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_fa82625846e0379e8d71dd34225d8d5e306c084047fcf102785beccf645b46a6->leave($__internal_fa82625846e0379e8d71dd34225d8d5e306c084047fcf102785beccf645b46a6_prof);

        
        $__internal_e73eecbb80d225d89f84108ef490ae697cf90cddbdfff156898ab0728bff2dbb->leave($__internal_e73eecbb80d225d89f84108ef490ae697cf90cddbdfff156898ab0728bff2dbb_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_faf8a5bd427d9045247906c156a3a34baa65120b72dfd98958cc2189d23f957f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf8a5bd427d9045247906c156a3a34baa65120b72dfd98958cc2189d23f957f->enter($__internal_faf8a5bd427d9045247906c156a3a34baa65120b72dfd98958cc2189d23f957f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_590f66d5eb28fb7143f440b657d15eabb60100ef346b427d340389e188b05cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590f66d5eb28fb7143f440b657d15eabb60100ef346b427d340389e188b05cd5->enter($__internal_590f66d5eb28fb7143f440b657d15eabb60100ef346b427d340389e188b05cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script>
        \$('.btnEliminar').click(function (){
            var id = \$(this).attr('data-id');
            \$.post(\"";
        // line 48
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
        
        $__internal_590f66d5eb28fb7143f440b657d15eabb60100ef346b427d340389e188b05cd5->leave($__internal_590f66d5eb28fb7143f440b657d15eabb60100ef346b427d340389e188b05cd5_prof);

        
        $__internal_faf8a5bd427d9045247906c156a3a34baa65120b72dfd98958cc2189d23f957f->leave($__internal_faf8a5bd427d9045247906c156a3a34baa65120b72dfd98958cc2189d23f957f_prof);

    }

    public function getTemplateName()
    {
        return "Cliente/listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 48,  152 => 45,  143 => 44,  129 => 39,  119 => 35,  115 => 34,  111 => 32,  102 => 30,  98 => 29,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  78 => 23,  74 => 22,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                        <td>{{ cliente.id }}</td>
                        <td>{{ cliente.nombre }}</td>
                        <td>{{ cliente.apPaterno }}</td>
                        <td>{{ cliente.apMaterno }}</td>
                        <td>
                            {% for proyecto in cliente.proyectos %}
                                {{ proyecto.nombre }}<br>
                            {% endfor %}
                        </td>
                        <td>
                            <a class=\"btn btn-info\" href=\"{{ path('actualizar_clientes',{'id':cliente.id}) }}\">Editar</a>
                            <button class=\"btn btn-danger btnEliminar\" data-id=\"{{ cliente.id }}\" >Eliminar</button>
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
{% endblock %}", "Cliente/listar.html.twig", "/var/www/html/clases/clase1/app/Resources/views/Cliente/listar.html.twig");
    }
}
