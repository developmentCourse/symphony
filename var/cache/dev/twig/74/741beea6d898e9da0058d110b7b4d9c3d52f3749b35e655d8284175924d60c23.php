<?php

/* User/login.html.twig */
class __TwigTemplate_e93e160bad948b37b8182774fa3fc5843bfa17225d6038fcc5f618796581853a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "User/login.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d016500ddd2b8d514bf9d45b1393ed1c0c7339e268a59dd60105ad9f5536e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d016500ddd2b8d514bf9d45b1393ed1c0c7339e268a59dd60105ad9f5536e6e->enter($__internal_1d016500ddd2b8d514bf9d45b1393ed1c0c7339e268a59dd60105ad9f5536e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/login.html.twig"));

        $__internal_bbe3eeda6d5e2ae02c2312d288e592f25e8dad90f77c251e5c9bb7afe15066cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe3eeda6d5e2ae02c2312d288e592f25e8dad90f77c251e5c9bb7afe15066cb->enter($__internal_bbe3eeda6d5e2ae02c2312d288e592f25e8dad90f77c251e5c9bb7afe15066cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d016500ddd2b8d514bf9d45b1393ed1c0c7339e268a59dd60105ad9f5536e6e->leave($__internal_1d016500ddd2b8d514bf9d45b1393ed1c0c7339e268a59dd60105ad9f5536e6e_prof);

        
        $__internal_bbe3eeda6d5e2ae02c2312d288e592f25e8dad90f77c251e5c9bb7afe15066cb->leave($__internal_bbe3eeda6d5e2ae02c2312d288e592f25e8dad90f77c251e5c9bb7afe15066cb_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7392ec35c3f87b0c9d7d85fbcaf51303a339e3337dc95e1e2af2ff34869da278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7392ec35c3f87b0c9d7d85fbcaf51303a339e3337dc95e1e2af2ff34869da278->enter($__internal_7392ec35c3f87b0c9d7d85fbcaf51303a339e3337dc95e1e2af2ff34869da278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_cde9437c9e0b0b887ddd01b67cccf46ecb0b392de3d84b9a9910868c66026c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde9437c9e0b0b887ddd01b67cccf46ecb0b392de3d84b9a9910868c66026c03->enter($__internal_cde9437c9e0b0b887ddd01b67cccf46ecb0b392de3d84b9a9910868c66026c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 6
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    Username:
    <input type=\"text\" id=\"username\" name=\"_username\">
    <br>
    Password:
    <input type=\"password\" id=\"password\" name=\"_password\">
    <br>
    <input type=\"submit\" value=\"Login\">
</form>
";
        
        $__internal_cde9437c9e0b0b887ddd01b67cccf46ecb0b392de3d84b9a9910868c66026c03->leave($__internal_cde9437c9e0b0b887ddd01b67cccf46ecb0b392de3d84b9a9910868c66026c03_prof);

        
        $__internal_7392ec35c3f87b0c9d7d85fbcaf51303a339e3337dc95e1e2af2ff34869da278->leave($__internal_7392ec35c3f87b0c9d7d85fbcaf51303a339e3337dc95e1e2af2ff34869da278_prof);

    }

    public function getTemplateName()
    {
        return "User/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
<form action=\"{{ path('login') }}\" method=\"post\">
    Username:
    <input type=\"text\" id=\"username\" name=\"_username\">
    <br>
    Password:
    <input type=\"password\" id=\"password\" name=\"_password\">
    <br>
    <input type=\"submit\" value=\"Login\">
</form>
{% endblock %}", "User/login.html.twig", "/var/www/html/clases/clase1/app/Resources/views/User/login.html.twig");
    }
}
