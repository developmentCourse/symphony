<?php

/* layout.html.twig */
class __TwigTemplate_7224c3be5e8cdc30a3e80f61c3d5b8623352cf93f997a3ba280357f88b987285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'barra' => array($this, 'block_barra'),
            'contenido' => array($this, 'block_contenido'),
            'pie' => array($this, 'block_pie'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdad39d6a2d39b297e14510e9192d4c7403ab80725740c24c625fb1c1a1e6d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdad39d6a2d39b297e14510e9192d4c7403ab80725740c24c625fb1c1a1e6d68->enter($__internal_cdad39d6a2d39b297e14510e9192d4c7403ab80725740c24c625fb1c1a1e6d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_55c0d8438f9795752140afc0e29735c56eaa1f81dc700f6381ab9ba208965cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c0d8438f9795752140afc0e29735c56eaa1f81dc700f6381ab9ba208965cee->enter($__internal_55c0d8438f9795752140afc0e29735c56eaa1f81dc700f6381ab9ba208965cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">

    <title>";
        // line 11
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/carousel/\">

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">


    <!-- Custom styles for this template -->
    <link href=\"carousel.css\" rel=\"stylesheet\">
</head>
<body>

<header>
    ";
        // line 25
        $this->displayBlock('barra', $context, $blocks);
        // line 49
        echo "    </nav>
</header>

<main role=\"main\">


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\" style=\"padding-top: 100px;\">

        ";
        // line 61
        $this->displayBlock('contenido', $context, $blocks);
        // line 126
        echo "    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class=\"container\">
        ";
        // line 131
        $this->displayBlock('pie', $context, $blocks);
        // line 135
        echo "    </footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        // line 146
        echo "</body>
</html>
";
        
        $__internal_cdad39d6a2d39b297e14510e9192d4c7403ab80725740c24c625fb1c1a1e6d68->leave($__internal_cdad39d6a2d39b297e14510e9192d4c7403ab80725740c24c625fb1c1a1e6d68_prof);

        
        $__internal_55c0d8438f9795752140afc0e29735c56eaa1f81dc700f6381ab9ba208965cee->leave($__internal_55c0d8438f9795752140afc0e29735c56eaa1f81dc700f6381ab9ba208965cee_prof);

    }

    // line 11
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_78e6630061634acb27adc6082e61fec7a2aacc8e47d3f64591f4ee4e3f14f053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78e6630061634acb27adc6082e61fec7a2aacc8e47d3f64591f4ee4e3f14f053->enter($__internal_78e6630061634acb27adc6082e61fec7a2aacc8e47d3f64591f4ee4e3f14f053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_2e04e95635e99497bcd9c62564940075e3555772dc0856fadd2b01fd51c902fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e04e95635e99497bcd9c62564940075e3555772dc0856fadd2b01fd51c902fe->enter($__internal_2e04e95635e99497bcd9c62564940075e3555772dc0856fadd2b01fd51c902fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        echo "Carousel Template for Bootstrap";
        
        $__internal_2e04e95635e99497bcd9c62564940075e3555772dc0856fadd2b01fd51c902fe->leave($__internal_2e04e95635e99497bcd9c62564940075e3555772dc0856fadd2b01fd51c902fe_prof);

        
        $__internal_78e6630061634acb27adc6082e61fec7a2aacc8e47d3f64591f4ee4e3f14f053->leave($__internal_78e6630061634acb27adc6082e61fec7a2aacc8e47d3f64591f4ee4e3f14f053_prof);

    }

    // line 25
    public function block_barra($context, array $blocks = array())
    {
        $__internal_4ad004a5e564c15b15a224b7fd4c6241266317554637895d83b2ee357ae41df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad004a5e564c15b15a224b7fd4c6241266317554637895d83b2ee357ae41df2->enter($__internal_4ad004a5e564c15b15a224b7fd4c6241266317554637895d83b2ee357ae41df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        $__internal_e02f45e216206e2183c2fb1caddbb79c66a8b63d15b6c51bd216d3578777ecf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02f45e216206e2183c2fb1caddbb79c66a8b63d15b6c51bd216d3578777ecf4->enter($__internal_e02f45e216206e2183c2fb1caddbb79c66a8b63d15b6c51bd216d3578777ecf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barra"));

        // line 26
        echo "    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"#\">Carousel</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Link</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                </li>
            </ul>
            <form class=\"form-inline mt-2 mt-md-0\">
                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
        ";
        
        $__internal_e02f45e216206e2183c2fb1caddbb79c66a8b63d15b6c51bd216d3578777ecf4->leave($__internal_e02f45e216206e2183c2fb1caddbb79c66a8b63d15b6c51bd216d3578777ecf4_prof);

        
        $__internal_4ad004a5e564c15b15a224b7fd4c6241266317554637895d83b2ee357ae41df2->leave($__internal_4ad004a5e564c15b15a224b7fd4c6241266317554637895d83b2ee357ae41df2_prof);

    }

    // line 61
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2b5472a591fcaab74bbebc378a0028aed7daba5d157b5069df4e6d30b81053ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5472a591fcaab74bbebc378a0028aed7daba5d157b5069df4e6d30b81053ed->enter($__internal_2b5472a591fcaab74bbebc378a0028aed7daba5d157b5069df4e6d30b81053ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_d98d843d77437e5d99a2e64deda836cab70f39c4a46d364a02bff87503aca0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98d843d77437e5d99a2e64deda836cab70f39c4a46d364a02bff87503aca0ba->enter($__internal_d98d843d77437e5d99a2e64deda836cab70f39c4a46d364a02bff87503aca0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 62
        echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                <img class=\"rounded-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <img class=\"rounded-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <img class=\"rounded-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading\">First featurette heading. <span class=\"text-muted\">It'll blow your mind.</span></h2>
                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7 order-md-2\">
                <h2 class=\"featurette-heading\">Oh yeah, it's that good. <span class=\"text-muted\">See for yourself.</span></h2>
                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class=\"col-md-5 order-md-1\">
                <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading\">And lastly, this one. <span class=\"text-muted\">Checkmate.</span></h2>
                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <!-- /END THE FEATURETTES -->
        ";
        
        $__internal_d98d843d77437e5d99a2e64deda836cab70f39c4a46d364a02bff87503aca0ba->leave($__internal_d98d843d77437e5d99a2e64deda836cab70f39c4a46d364a02bff87503aca0ba_prof);

        
        $__internal_2b5472a591fcaab74bbebc378a0028aed7daba5d157b5069df4e6d30b81053ed->leave($__internal_2b5472a591fcaab74bbebc378a0028aed7daba5d157b5069df4e6d30b81053ed_prof);

    }

    // line 131
    public function block_pie($context, array $blocks = array())
    {
        $__internal_1922f866e1d3dc88dd6b263c70edbeeb30913c3513f01af1724445b516e24470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1922f866e1d3dc88dd6b263c70edbeeb30913c3513f01af1724445b516e24470->enter($__internal_1922f866e1d3dc88dd6b263c70edbeeb30913c3513f01af1724445b516e24470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pie"));

        $__internal_9cda4774f66ad10b9fb1c93cf552b328e973417782e04861826742d90791d455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cda4774f66ad10b9fb1c93cf552b328e973417782e04861826742d90791d455->enter($__internal_9cda4774f66ad10b9fb1c93cf552b328e973417782e04861826742d90791d455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pie"));

        // line 132
        echo "        <p class=\"float-right\"><a href=\"#\">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
        ";
        
        $__internal_9cda4774f66ad10b9fb1c93cf552b328e973417782e04861826742d90791d455->leave($__internal_9cda4774f66ad10b9fb1c93cf552b328e973417782e04861826742d90791d455_prof);

        
        $__internal_1922f866e1d3dc88dd6b263c70edbeeb30913c3513f01af1724445b516e24470->leave($__internal_1922f866e1d3dc88dd6b263c70edbeeb30913c3513f01af1724445b516e24470_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8627fb0e4f3ea418c4427ebe0153d94f9b03ed998bc2f45d0809583cea30cf9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8627fb0e4f3ea418c4427ebe0153d94f9b03ed998bc2f45d0809583cea30cf9c->enter($__internal_8627fb0e4f3ea418c4427ebe0153d94f9b03ed998bc2f45d0809583cea30cf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_028f4cc5538651709e31be572111231642ca417b2da21b3eac1bb9c748032d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028f4cc5538651709e31be572111231642ca417b2da21b3eac1bb9c748032d19->enter($__internal_028f4cc5538651709e31be572111231642ca417b2da21b3eac1bb9c748032d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_028f4cc5538651709e31be572111231642ca417b2da21b3eac1bb9c748032d19->leave($__internal_028f4cc5538651709e31be572111231642ca417b2da21b3eac1bb9c748032d19_prof);

        
        $__internal_8627fb0e4f3ea418c4427ebe0153d94f9b03ed998bc2f45d0809583cea30cf9c->leave($__internal_8627fb0e4f3ea418c4427ebe0153d94f9b03ed998bc2f45d0809583cea30cf9c_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  273 => 144,  261 => 132,  252 => 131,  179 => 62,  170 => 61,  138 => 26,  129 => 25,  111 => 11,  99 => 146,  97 => 144,  86 => 135,  84 => 131,  77 => 126,  75 => 61,  61 => 49,  59 => 25,  42 => 11,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.0/assets/img/favicons/favicon.ico\">

    <title>{% block titulo %}Carousel Template for Bootstrap{% endblock %}</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/4.0/examples/carousel/\">

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">


    <!-- Custom styles for this template -->
    <link href=\"carousel.css\" rel=\"stylesheet\">
</head>
<body>

<header>
    {% block barra %}
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"#\">Carousel</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Link</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                </li>
            </ul>
            <form class=\"form-inline mt-2 mt-md-0\">
                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
        {% endblock %}
    </nav>
</header>

<main role=\"main\">


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\" style=\"padding-top: 100px;\">

        {% block contenido %}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <img class=\"rounded-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <img class=\"rounded-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <img class=\"rounded-circle\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==\" alt=\"Generic placeholder image\" width=\"140\" height=\"140\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading\">First featurette heading. <span class=\"text-muted\">It'll blow your mind.</span></h2>
                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7 order-md-2\">
                <h2 class=\"featurette-heading\">Oh yeah, it's that good. <span class=\"text-muted\">See for yourself.</span></h2>
                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class=\"col-md-5 order-md-1\">
                <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading\">And lastly, this one. <span class=\"text-muted\">Checkmate.</span></h2>
                <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class=\"col-md-5\">
                <img class=\"featurette-image img-fluid mx-auto\" data-src=\"holder.js/500x500/auto\" alt=\"Generic placeholder image\">
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <!-- /END THE FEATURETTES -->
        {% endblock %}
    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class=\"container\">
        {% block pie %}
        <p class=\"float-right\"><a href=\"#\">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
        {% endblock %}
    </footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
{% block javascripts %}
{% endblock %}
</body>
</html>
", "layout.html.twig", "/var/www/html/clases/clase1/app/Resources/views/layout.html.twig");
    }
}
