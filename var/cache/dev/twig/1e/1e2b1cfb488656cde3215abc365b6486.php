<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* commande/front/frontcommande.html.twig */
class __TwigTemplate_4fb15d73ca9f95053b7c414385afa397 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/front/frontcommande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/front/frontcommande.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
     ";
        // line 3
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 34
        yield "</head>

<body>
    ";
        // line 37
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 179
        yield "
    ";
        // line 180
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 196
        yield "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "<head>
    <meta charset=\"utf-8\">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
    <link href=\"lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"css/style.css\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 38
        yield "    <div class=\"container-xxl bg-white p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class=\"container-xxl position-relative p-0\">
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0\">
                <a href=\"\" class=\"navbar-brand p-0\">
                    <h1 class=\"text-primary m-0\"><i class=\"fa fa-utensils me-3\"></i>Restoran</h1>
                    <!-- <img src=\"img/logo.png\" alt=\"Logo\"> -->
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0 pe-4\">
                        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                        <a href=\"service.html\" class=\"nav-item nav-link\">Service</a>
                        <a href=\"menu.html\" class=\"nav-item nav-link\">Menu</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu m-0\">
                                <a href=\"booking.html\" class=\"dropdown-item\">Booking</a>
                                <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                            </div>
                        </div>
                        <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                    </div>
                    <a href=\"\" class=\"btn btn-primary py-2 px-4\">Book A Table</a>
                </div>
            </nav>

            <div class=\"container-xxl py-5 bg-dark hero-header mb-5\">
                <div class=\"container my-5 py-5\">
                    <div class=\"row align-items-center g-5\">
                        <div class=\"col-lg-6 text-center text-lg-start\">
                            <h1 class=\"display-3 text-white animated slideInLeft\">Enjoy Our<br>Delicious Meal</h1>
                            <p class=\"text-white animated slideInLeft mb-4 pb-2\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <a href=\"\" class=\"btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft\">Book A Table</a>
                        </div>
                        <div class=\"col-lg-6 text-center text-lg-end overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/hero.png\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        


        <!-- About Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-md-8\">
                                <h1 class=\"text-center\">Table des commandes</h1>
                    
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 116, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 116) > 0)) {
            // line 117
            yield "                                        <div class=\"table-responsive\">
                                            <table class=\"table table-bordered table-striped\">
                                                <thead class=\"thead-dark\">
                                                    <tr>
                                                        <th scope=\"col\">
                                                            <a href=\"";
            // line 122
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "idCommande", "orderDirection" => "asc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">IdCommande ▲</a>
                                                            <a href=\"";
            // line 123
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "idCommande", "orderDirection" => "desc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">IdCommande ▼</a>
                                                        </th>
                                                        <th scope=\"col\">
                                                            <a href=\"";
            // line 126
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "statusCommande", "orderDirection" => "asc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Status ▲</a>
                                                            <a href=\"";
            // line 127
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "statusCommande", "orderDirection" => "desc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Status ▼</a>
                                                        </th>
                                                        <th scope=\"col\">
                                                            <a href=\"";
            // line 130
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "prix", "orderDirection" => "asc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Prix ▲</a>
                                                            <a href=\"";
            // line 131
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index", ["orderBy" => "prix", "orderDirection" => "desc"]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">Prix ▼</a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 136, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 137
                yield "                                                    <tr>
                                                        <td>";
                // line 138
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "idCommande", [], "any", false, false, false, 138), "html", null, true);
                yield "</td>
                                                        <td>";
                // line 139
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "statusCommande", [], "any", false, false, false, 139), "html", null, true);
                yield "</td>
                                                        <td>";
                // line 140
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prix", [], "any", false, false, false, 140), "html", null, true);
                yield "</td>
                                                        
                                                    </tr>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "                                                </tbody>
                                            </table>
                                        </div>
                    
                                        ";
            // line 149
            yield "                                        <div class=\"d-flex justify-content-center mt-3\">
                                            ";
            // line 150
            yield $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 150, $this->source); })()));
            yield "
                                        </div>
                                        ";
        } else {
            // line 153
            yield "                                        <div class=\"alert alert-info\" role=\"alert\">
                                            No records found.
                                        </div>
                                        ";
        }
        // line 157
        yield "                                    </div>
                                </div>
                    
                                <div class=\"text-center mt-3\">
                                    <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statistics");
        yield "\" class=\"btn btn-primary\">Statistiques</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- About End -->


        


        
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 180
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 181
        yield "    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/counterup/counterup.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>
    <script src=\"lib/tempusdominus/js/moment.min.js\"></script>
    <script src=\"lib/tempusdominus/js/moment-timezone.min.js\"></script>
    <script src=\"lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "commande/front/frontcommande.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  354 => 181,  344 => 180,  315 => 161,  309 => 157,  303 => 153,  297 => 150,  294 => 149,  288 => 144,  278 => 140,  274 => 139,  270 => 138,  267 => 137,  263 => 136,  255 => 131,  251 => 130,  245 => 127,  241 => 126,  235 => 123,  231 => 122,  224 => 117,  222 => 116,  163 => 60,  139 => 38,  129 => 37,  89 => 4,  79 => 3,  65 => 196,  63 => 180,  60 => 179,  58 => 37,  53 => 34,  51 => 3,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
     {% block head %}
<head>
    <meta charset=\"utf-8\">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
    <link href=\"lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"css/style.css\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body>
    {% block content %}
    <div class=\"container-xxl bg-white p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class=\"container-xxl position-relative p-0\">
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0\">
                <a href=\"\" class=\"navbar-brand p-0\">
                    <h1 class=\"text-primary m-0\"><i class=\"fa fa-utensils me-3\"></i>Restoran</h1>
                    <!-- <img src=\"img/logo.png\" alt=\"Logo\"> -->
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0 pe-4\">
                        <a href=\"{{ path('front') }}\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                        <a href=\"service.html\" class=\"nav-item nav-link\">Service</a>
                        <a href=\"menu.html\" class=\"nav-item nav-link\">Menu</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu m-0\">
                                <a href=\"booking.html\" class=\"dropdown-item\">Booking</a>
                                <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                            </div>
                        </div>
                        <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                    </div>
                    <a href=\"\" class=\"btn btn-primary py-2 px-4\">Book A Table</a>
                </div>
            </nav>

            <div class=\"container-xxl py-5 bg-dark hero-header mb-5\">
                <div class=\"container my-5 py-5\">
                    <div class=\"row align-items-center g-5\">
                        <div class=\"col-lg-6 text-center text-lg-start\">
                            <h1 class=\"display-3 text-white animated slideInLeft\">Enjoy Our<br>Delicious Meal</h1>
                            <p class=\"text-white animated slideInLeft mb-4 pb-2\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <a href=\"\" class=\"btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft\">Book A Table</a>
                        </div>
                        <div class=\"col-lg-6 text-center text-lg-end overflow-hidden\">
                            <img class=\"img-fluid\" src=\"img/hero.png\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        


        <!-- About Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class=\"container\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-md-8\">
                                <h1 class=\"text-center\">Table des commandes</h1>
                    
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        {% if pagination.getTotalItemCount() > 0 %}
                                        <div class=\"table-responsive\">
                                            <table class=\"table table-bordered table-striped\">
                                                <thead class=\"thead-dark\">
                                                    <tr>
                                                        <th scope=\"col\">
                                                            <a href=\"{{ path('app_commande_index', {'orderBy': 'idCommande', 'orderDirection': 'asc'}) }}\" class=\"btn btn-sm btn-info\">IdCommande ▲</a>
                                                            <a href=\"{{ path('app_commande_index', {'orderBy': 'idCommande', 'orderDirection': 'desc'}) }}\" class=\"btn btn-sm btn-info\">IdCommande ▼</a>
                                                        </th>
                                                        <th scope=\"col\">
                                                            <a href=\"{{ path('app_commande_index', {'orderBy': 'statusCommande', 'orderDirection': 'asc'}) }}\" class=\"btn btn-sm btn-info\">Status ▲</a>
                                                            <a href=\"{{ path('app_commande_index', {'orderBy': 'statusCommande', 'orderDirection': 'desc'}) }}\" class=\"btn btn-sm btn-info\">Status ▼</a>
                                                        </th>
                                                        <th scope=\"col\">
                                                            <a href=\"{{ path('app_commande_index', {'orderBy': 'prix', 'orderDirection': 'asc'}) }}\" class=\"btn btn-sm btn-info\">Prix ▲</a>
                                                            <a href=\"{{ path('app_commande_index', {'orderBy': 'prix', 'orderDirection': 'desc'}) }}\" class=\"btn btn-sm btn-info\">Prix ▼</a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {% for commande in pagination %}
                                                    <tr>
                                                        <td>{{ commande.idCommande }}</td>
                                                        <td>{{ commande.statusCommande }}</td>
                                                        <td>{{ commande.prix }}</td>
                                                        
                                                    </tr>
                                                    {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>
                    
                                        {# Affichage de la pagination #}
                                        <div class=\"d-flex justify-content-center mt-3\">
                                            {{ knp_pagination_render(pagination) }}
                                        </div>
                                        {% else %}
                                        <div class=\"alert alert-info\" role=\"alert\">
                                            No records found.
                                        </div>
                                        {% endif %}
                                    </div>
                                </div>
                    
                                <div class=\"text-center mt-3\">
                                    <a href=\"{{ path('app_statistics') }}\" class=\"btn btn-primary\">Statistiques</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- About End -->


        


        
    {% endblock %}

    {% block scripts %}
    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"lib/wow/wow.min.js\"></script>
    <script src=\"lib/easing/easing.min.js\"></script>
    <script src=\"lib/waypoints/waypoints.min.js\"></script>
    <script src=\"lib/counterup/counterup.min.js\"></script>
    <script src=\"lib/owlcarousel/owl.carousel.min.js\"></script>
    <script src=\"lib/tempusdominus/js/moment.min.js\"></script>
    <script src=\"lib/tempusdominus/js/moment-timezone.min.js\"></script>
    <script src=\"lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
    {% endblock %}

</body>

</html>", "commande/front/frontcommande.html.twig", "C:\\Users\\mhamd\\Downloads\\Wakkel_Food-Symfony-Gestion_Resto\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\commande\\front\\frontcommande.html.twig");
    }
}
