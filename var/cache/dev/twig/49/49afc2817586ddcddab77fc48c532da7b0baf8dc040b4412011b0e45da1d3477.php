<?php

/* base.html.twig */
class __TwigTemplate_559e907860c46520099dcbde370f6353b32f541dcfcac85bea6c45c73c49bfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36b82f8107052915d525bc3ec71bd37b9c1ce21f226787afd1482e9f9e1aa5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b82f8107052915d525bc3ec71bd37b9c1ce21f226787afd1482e9f9e1aa5f4->enter($__internal_36b82f8107052915d525bc3ec71bd37b9c1ce21f226787afd1482e9f9e1aa5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_389f0cf010dffcd5e87e99eb8568ff67ae108e67fd809c84cf4768695e2cf034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389f0cf010dffcd5e87e99eb8568ff67ae108e67fd809c84cf4768695e2cf034->enter($__internal_389f0cf010dffcd5e87e99eb8568ff67ae108e67fd809c84cf4768695e2cf034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_36b82f8107052915d525bc3ec71bd37b9c1ce21f226787afd1482e9f9e1aa5f4->leave($__internal_36b82f8107052915d525bc3ec71bd37b9c1ce21f226787afd1482e9f9e1aa5f4_prof);

        
        $__internal_389f0cf010dffcd5e87e99eb8568ff67ae108e67fd809c84cf4768695e2cf034->leave($__internal_389f0cf010dffcd5e87e99eb8568ff67ae108e67fd809c84cf4768695e2cf034_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_297f8f673e36c34dc751cfdf9aae06722709e05bec8017afd7123b4031270af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297f8f673e36c34dc751cfdf9aae06722709e05bec8017afd7123b4031270af6->enter($__internal_297f8f673e36c34dc751cfdf9aae06722709e05bec8017afd7123b4031270af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8ddc6adb1be7c7047e0a5a4bbe93c87713baac6294a3183114c4d7dd738a920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ddc6adb1be7c7047e0a5a4bbe93c87713baac6294a3183114c4d7dd738a920->enter($__internal_c8ddc6adb1be7c7047e0a5a4bbe93c87713baac6294a3183114c4d7dd738a920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c8ddc6adb1be7c7047e0a5a4bbe93c87713baac6294a3183114c4d7dd738a920->leave($__internal_c8ddc6adb1be7c7047e0a5a4bbe93c87713baac6294a3183114c4d7dd738a920_prof);

        
        $__internal_297f8f673e36c34dc751cfdf9aae06722709e05bec8017afd7123b4031270af6->leave($__internal_297f8f673e36c34dc751cfdf9aae06722709e05bec8017afd7123b4031270af6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7d8c2d02c96f63176cf25e4d4010957829e6623e468000eb20f53b6d52fdc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d8c2d02c96f63176cf25e4d4010957829e6623e468000eb20f53b6d52fdc75->enter($__internal_c7d8c2d02c96f63176cf25e4d4010957829e6623e468000eb20f53b6d52fdc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_55f2ce0846e77dbe23341249c6f524381b79414173cc8adb479a40b1123bc00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f2ce0846e77dbe23341249c6f524381b79414173cc8adb479a40b1123bc00a->enter($__internal_55f2ce0846e77dbe23341249c6f524381b79414173cc8adb479a40b1123bc00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_55f2ce0846e77dbe23341249c6f524381b79414173cc8adb479a40b1123bc00a->leave($__internal_55f2ce0846e77dbe23341249c6f524381b79414173cc8adb479a40b1123bc00a_prof);

        
        $__internal_c7d8c2d02c96f63176cf25e4d4010957829e6623e468000eb20f53b6d52fdc75->leave($__internal_c7d8c2d02c96f63176cf25e4d4010957829e6623e468000eb20f53b6d52fdc75_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f85090d1bd86fb5ad10b57183dee7e11356d2ad28fe00cc48a510c4100f689f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85090d1bd86fb5ad10b57183dee7e11356d2ad28fe00cc48a510c4100f689f7->enter($__internal_f85090d1bd86fb5ad10b57183dee7e11356d2ad28fe00cc48a510c4100f689f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55fd4fc71a80c0a794da55e983f27c0c94042f3889654d08ec65beb0fbf6abe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fd4fc71a80c0a794da55e983f27c0c94042f3889654d08ec65beb0fbf6abe2->enter($__internal_55fd4fc71a80c0a794da55e983f27c0c94042f3889654d08ec65beb0fbf6abe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55fd4fc71a80c0a794da55e983f27c0c94042f3889654d08ec65beb0fbf6abe2->leave($__internal_55fd4fc71a80c0a794da55e983f27c0c94042f3889654d08ec65beb0fbf6abe2_prof);

        
        $__internal_f85090d1bd86fb5ad10b57183dee7e11356d2ad28fe00cc48a510c4100f689f7->leave($__internal_f85090d1bd86fb5ad10b57183dee7e11356d2ad28fe00cc48a510c4100f689f7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94b187c17775a1f809d89259815e6837e1944f6ee4eab9709a211880ce56593a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b187c17775a1f809d89259815e6837e1944f6ee4eab9709a211880ce56593a->enter($__internal_94b187c17775a1f809d89259815e6837e1944f6ee4eab9709a211880ce56593a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f4f4f64a1168b8e967db5ef3f27a27ca480ee2f4ab8ce608c4db5f5105744c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f4f64a1168b8e967db5ef3f27a27ca480ee2f4ab8ce608c4db5f5105744c54->enter($__internal_f4f4f64a1168b8e967db5ef3f27a27ca480ee2f4ab8ce608c4db5f5105744c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f4f4f64a1168b8e967db5ef3f27a27ca480ee2f4ab8ce608c4db5f5105744c54->leave($__internal_f4f4f64a1168b8e967db5ef3f27a27ca480ee2f4ab8ce608c4db5f5105744c54_prof);

        
        $__internal_94b187c17775a1f809d89259815e6837e1944f6ee4eab9709a211880ce56593a->leave($__internal_94b187c17775a1f809d89259815e6837e1944f6ee4eab9709a211880ce56593a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/clases/clase1/app/Resources/views/base.html.twig");
    }
}
