<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* back&front/front.html.twig */
class __TwigTemplate_c65f9c9d5f9730c47bd727c2dd31e0a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back&front/front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back&front/front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
   <meta charset=\"utf-8\">
<title>Wakkel Food</title>
<link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        echo "\">
<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
<meta content=\"\" name=\"keywords\">
<meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>
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
            <h1 class=\"text-primary m-0\">
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        echo "\" alt=\"Logo\">Wakkel Food</h1>
            </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0 pe-4\">
                        <a href=\"/front\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"/edit\" class=\"nav-item nav-link\">Compte</a>
                        <a href=\"/frontindex\" class=\"nav-item nav-link\">Evenements</a>
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
                    <a href=\"/login\" class=\"btn btn-primary py-2 px-4\">Deconnexion</a>
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
                            <img class=\"img-fluid\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/hero.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <div class=\"service-item rounded pt-3\">
                            <div class=\"p-4\">
                                <i class=\"fa fa-3x fa-user-tie text-primary mb-4\"></i>
                                <h5>Master Chefs</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                        <div class=\"service-item rounded pt-3\">
                            <div class=\"p-4\">
                                <i class=\"fa fa-3x fa-utensils text-primary mb-4\"></i>
                                <h5>Quality Food</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                        <div class=\"service-item rounded pt-3\">
                            <div class=\"p-4\">
                                <i class=\"fa fa-3x fa-cart-plus text-primary mb-4\"></i>
                                <h5>Online Order</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                        <div class=\"service-item rounded pt-3\">
                            <div class=\"p-4\">
                                <i class=\"fa fa-3x fa-headset text-primary mb-4\"></i>
                                <h5>24/7 Service</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"row g-3\">
                            <div class=\"col-6 text-start\">
                                <img class=\"img-fluid rounded w-100 wow zoomIn\" data-wow-delay=\"0.1s\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/about-1.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-6 text-start\">
                                <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.3s\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/about-2.jpg"), "html", null, true);
        echo "\" style=\"margin-top: 25%;\">
                            </div>
                            <div class=\"col-6 text-end\">
                                <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.5s\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/about-3.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-6 text-end\">
                                <img class=\"img-fluid rounded w-100 wow zoomIn\" data-wow-delay=\"0.7s\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/about-4.jpg"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <h5 class=\"section-title ff-secondary text-start text-primary fw-normal\">About Us</h5>
                        <h1 class=\"mb-4\">Welcome to <i class=\"fa fa-utensils text-primary me-2\"></i>Restoran</h1>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class=\"row g-4 mb-4\">
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center border-start border-5 border-primary px-3\">
                                    <h1 class=\"flex-shrink-0 display-5 text-primary mb-0\" data-toggle=\"counter-up\">15</h1>
                                    <div class=\"ps-4\">
                                        <p class=\"mb-0\">Years of</p>
                                        <h6 class=\"text-uppercase mb-0\">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center border-start border-5 border-primary px-3\">
                                    <h1 class=\"flex-shrink-0 display-5 text-primary mb-0\" data-toggle=\"counter-up\">50</h1>
                                    <div class=\"ps-4\">
                                        <p class=\"mb-0\">Popular</p>
                                        <h6 class=\"text-uppercase mb-0\">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"\">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <h5 class=\"section-title ff-secondary text-center text-primary fw-normal\">Food Menu</h5>
                    <h1 class=\"mb-5\">Most Popular Items</h1>
                </div>
                <div class=\"tab-class text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <ul class=\"nav nav-pills d-inline-flex justify-content-center border-bottom mb-5\">
                        <li class=\"nav-item\">
                            <a class=\"d-flex align-items-center text-start mx-3 ms-0 pb-3 active\" data-bs-toggle=\"pill\" href=\"#tab-1\">
                                <i class=\"fa fa-coffee fa-2x text-primary\"></i>
                                <div class=\"ps-3\">
                                    <small class=\"text-body\">Popular</small>
                                    <h6 class=\"mt-n1 mb-0\">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"d-flex align-items-center text-start mx-3 pb-3\" data-bs-toggle=\"pill\" href=\"#tab-2\">
                                <i class=\"fa fa-hamburger fa-2x text-primary\"></i>
                                <div class=\"ps-3\">
                                    <small class=\"text-body\">Special</small>
                                    <h6 class=\"mt-n1 mb-0\">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"d-flex align-items-center text-start mx-3 me-0 pb-3\" data-bs-toggle=\"pill\" href=\"#tab-3\">
                                <i class=\"fa fa-utensils fa-2x text-primary\"></i>
                                <div class=\"ps-3\">
                                    <small class=\"text-body\">Lovely</small>
                                    <h6 class=\"mt-n1 mb-0\">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class=\"tab-content\">
                        <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-1.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-2.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-3.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-4.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-5.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-6.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-7.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-8.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-2\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-1.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-2.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-3.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-4.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-5.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-6.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-7.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-8.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-3\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-1.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-2.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-3.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-4.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-5.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-6.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-7.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/menu-8.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class=\"container-xxl py-5 px-0 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"row g-0\">
                <div class=\"col-md-6\">
    <div class=\"video\">
        <!-- Utilisation du lecteur vidéo HTML5 -->
        <video controls width=\"100%\" height=\"auto\">
            <source src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/monvideo.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

                <div class=\"col-md-6 bg-dark d-flex align-items-center\">
                    <div class=\"p-5 wow fadeInUp\" data-wow-delay=\"0.2s\">
                        <h5 class=\"section-title ff-secondary text-start text-primary fw-normal\">Reservation</h5>
                        <h1 class=\"text-white mb-4\">Book A Table Online</h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                                        <label for=\"name\">Your Name</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\">
                                        <label for=\"email\">Your Email</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating date\" id=\"date3\" data-target-input=\"nearest\">
                                        <input type=\"text\" class=\"form-control datetimepicker-input\" id=\"datetime\" placeholder=\"Date & Time\" data-target=\"#date3\" data-toggle=\"datetimepicker\" />
                                        <label for=\"datetime\">Date & Time</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <select class=\"form-select\" id=\"select1\">
                                          <option value=\"1\">People 1</option>
                                          <option value=\"2\">People 2</option>
                                          <option value=\"3\">People 3</option>
                                        </select>
                                        <label for=\"select1\">No Of People</label>
                                      </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        <textarea class=\"form-control\" placeholder=\"Special Request\" id=\"message\" style=\"height: 100px\"></textarea>
                                        <label for=\"message\">Special Request</label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"videoModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Youtube Video</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <!-- 16:9 aspect ratio -->
                        <div class=\"ratio ratio-16x9\">
                            <iframe class=\"embed-responsive-item\" src=\" id=\"video\" allowfullscreen allowscriptaccess=\"always\"
                                allow=\"autoplay\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class=\"container-xxl pt-5 pb-3\">
            <div class=\"container\">
                <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <h5 class=\"section-title ff-secondary text-center text-primary fw-normal\">Team Members</h5>
                    <h1 class=\"mb-5\">Our Master Chefs</h1>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <div class=\"team-item text-center rounded overflow-hidden\">
                            <div class=\"rounded-circle overflow-hidden m-4\">
                                <img class=\"img-fluid\" src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/team-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                            <div class=\"d-flex justify-content-center mt-3\">
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                        <div class=\"team-item text-center rounded overflow-hidden\">
                            <div class=\"rounded-circle overflow-hidden m-4\">
                                <img class=\"img-fluid\" src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/team-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                            <div class=\"d-flex justify-content-center mt-3\">
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                        <div class=\"team-item text-center rounded overflow-hidden\">
                            <div class=\"rounded-circle overflow-hidden m-4\">
                                <img class=\"img-fluid\" src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/team-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                            <div class=\"d-flex justify-content-center mt-3\">
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                        <div class=\"team-item text-center rounded overflow-hidden\">
                            <div class=\"rounded-circle overflow-hidden m-4\">
                                <img class=\"img-fluid\" src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/team-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                            <div class=\"d-flex justify-content-center mt-3\">
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h5 class=\"section-title ff-secondary text-center text-primary fw-normal\">Testimonial</h5>
                    <h1 class=\"mb-5\">Our Clients Say!!!</h1>
                </div>
                <div class=\"owl-carousel testimonial-carousel\">
                    <div class=\"testimonial-item bg-transparent border rounded p-4\">
                        <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class=\"d-flex align-items-center\">
                            <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/testimonial-1.jpg"), "html", null, true);
        echo "\" style=\"width: 50px; height: 50px;\">
                            <div class=\"ps-3\">
                                <h5 class=\"mb-1\">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item bg-transparent border rounded p-4\">
                        <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class=\"d-flex align-items-center\">
                            <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/testimonial-2.jpg"), "html", null, true);
        echo "\" style=\"width: 50px; height: 50px;\">
                            <div class=\"ps-3\">
                                <h5 class=\"mb-1\">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item bg-transparent border rounded p-4\">
                        <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class=\"d-flex align-items-center\">
                            <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"";
        // line 726
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/testimonial-3.jpg"), "html", null, true);
        echo "\" style=\"width: 50px; height: 50px;\">
                            <div class=\"ps-3\">
                                <h5 class=\"mb-1\">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item bg-transparent border rounded p-4\">
                        <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class=\"d-flex align-items-center\">
                            <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/testimonial-4.jpg"), "html", null, true);
        echo "\" style=\"width: 50px; height: 50px;\">
                            <div class=\"ps-3\">
                                <h5 class=\"mb-1\">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
       

        <!-- Footer Start -->
        <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-3 col-md-6\">
                        <h4 class=\"section-title ff-secondary text-start text-primary fw-normal mb-4\">Company</h4>
                        <a class=\"btn btn-link\" href=\"\">About Us</a>
                        <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                        <a class=\"btn btn-link\" href=\"\">Reservation</a>
                        <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                        <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h4 class=\"section-title ff-secondary text-start text-primary fw-normal mb-4\">Contact</h4>
                        <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                        <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                        <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                        <div class=\"d-flex pt-2\">
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h4 class=\"section-title ff-secondary text-start text-primary fw-normal mb-4\">Opening</h4>
                        <h5 class=\"text-light fw-normal\">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class=\"text-light fw-normal\">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h4 class=\"section-title ff-secondary text-start text-primary fw-normal mb-4\">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                            <input class=\"form-control border-primary w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                            <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                            &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.
                                          
                                          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                                          Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
                        </div>
                        <div class=\"col-md-6 text-center text-md-end\">
                            <div class=\"footer-menu\">
                                <a href=\"\">Home</a>
                                <a href=\"\">Cookies</a>
                                <a href=\"\">Help</a>
                                <a href=\"\">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 824
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 825
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 826
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 827
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 828
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 832
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/js/main.js"), "html", null, true);
        echo "\"></script>
    <script>
\$(document).ready(function(){
    // Fonction pour gérer le clic sur les liens de navigation
    \$(\".nav-link\").click(function(){
        // Supprimer la classe 'active' de tous les liens de navigation
        \$(\".nav-link\").removeClass(\"active\");
        // Ajouter la classe 'active' uniquement au lien cliqué
        \$(this).addClass(\"active\");
    });

    // Fonction pour gérer le clic sur les éléments de sous-menu
    \$(\".dropdown-item\").click(function(){
        // Supprimer la classe 'active' de tous les éléments de sous-menu
        \$(\".dropdown-item\").removeClass(\"active\");
        // Ajouter la classe 'active' uniquement à l'élément cliqué
        \$(this).addClass(\"active\");
        // Ajouter la classe 'active' également au lien parent du sous-menu
        \$(this).closest(\".nav-item.dropdown\").find(\".nav-link\").addClass(\"active\");
    });
});
</script>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back&front/front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1038 => 832,  1032 => 829,  1028 => 828,  1024 => 827,  1020 => 826,  1016 => 825,  1012 => 824,  1008 => 823,  1004 => 822,  916 => 737,  902 => 726,  888 => 715,  874 => 704,  842 => 675,  825 => 661,  808 => 647,  791 => 633,  701 => 546,  672 => 520,  657 => 508,  642 => 496,  627 => 484,  612 => 472,  597 => 460,  582 => 448,  567 => 436,  548 => 420,  533 => 408,  518 => 396,  503 => 384,  488 => 372,  473 => 360,  458 => 348,  443 => 336,  424 => 320,  409 => 308,  394 => 296,  379 => 284,  364 => 272,  349 => 260,  334 => 248,  319 => 236,  237 => 157,  231 => 154,  225 => 151,  219 => 148,  154 => 86,  117 => 52,  95 => 33,  89 => 30,  83 => 27,  79 => 26,  75 => 25,  60 => 13,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
   <meta charset=\"utf-8\">
<title>Wakkel Food</title>
<link rel=\"icon\" href=\"{{asset('Main/img/LOGO_PNG.png')}}\">
<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
<meta content=\"\" name=\"keywords\">
<meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"{{asset('Main/img/favicon.ico')}}\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{asset('Main/lib/animate/animate.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('Main/lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('Main/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{asset('Main/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{asset('Main/css/style.css')}}\" rel=\"stylesheet\">
</head>

<body>
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
            <h1 class=\"text-primary m-0\">
            <img src=\"{{asset('Main/img/LOGO_PNG.png')}}\" alt=\"Logo\">Wakkel Food</h1>
            </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0 pe-4\">
                        <a href=\"/front\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"/edit\" class=\"nav-item nav-link\">Compte</a>
                        <a href=\"/frontindex\" class=\"nav-item nav-link\">Evenements</a>
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
                    <a href=\"/login\" class=\"btn btn-primary py-2 px-4\">Deconnexion</a>
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
                            <img class=\"img-fluid\" src=\"{{asset('Main/img/hero.png')}}\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-4\">
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <div class=\"service-item rounded pt-3\">
                            <div class=\"p-4\">
                                <i class=\"fa fa-3x fa-user-tie text-primary mb-4\"></i>
                                <h5>Master Chefs</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                        <div class=\"service-item rounded pt-3\">
                            <div class=\"p-4\">
                                <i class=\"fa fa-3x fa-utensils text-primary mb-4\"></i>
                                <h5>Quality Food</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                        <div class=\"service-item rounded pt-3\">
                            <div class=\"p-4\">
                                <i class=\"fa fa-3x fa-cart-plus text-primary mb-4\"></i>
                                <h5>Online Order</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                        <div class=\"service-item rounded pt-3\">
                            <div class=\"p-4\">
                                <i class=\"fa fa-3x fa-headset text-primary mb-4\"></i>
                                <h5>24/7 Service</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"row g-3\">
                            <div class=\"col-6 text-start\">
                                <img class=\"img-fluid rounded w-100 wow zoomIn\" data-wow-delay=\"0.1s\" src=\"{{asset('Main/img/about-1.jpg')}}\">
                            </div>
                            <div class=\"col-6 text-start\">
                                <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.3s\" src=\"{{asset('Main/img/about-2.jpg')}}\" style=\"margin-top: 25%;\">
                            </div>
                            <div class=\"col-6 text-end\">
                                <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.5s\" src=\"{{asset('Main/img/about-3.jpg')}}\">
                            </div>
                            <div class=\"col-6 text-end\">
                                <img class=\"img-fluid rounded w-100 wow zoomIn\" data-wow-delay=\"0.7s\" src=\"{{asset('Main/img/about-4.jpg')}}\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <h5 class=\"section-title ff-secondary text-start text-primary fw-normal\">About Us</h5>
                        <h1 class=\"mb-4\">Welcome to <i class=\"fa fa-utensils text-primary me-2\"></i>Restoran</h1>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class=\"row g-4 mb-4\">
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center border-start border-5 border-primary px-3\">
                                    <h1 class=\"flex-shrink-0 display-5 text-primary mb-0\" data-toggle=\"counter-up\">15</h1>
                                    <div class=\"ps-4\">
                                        <p class=\"mb-0\">Years of</p>
                                        <h6 class=\"text-uppercase mb-0\">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex align-items-center border-start border-5 border-primary px-3\">
                                    <h1 class=\"flex-shrink-0 display-5 text-primary mb-0\" data-toggle=\"counter-up\">50</h1>
                                    <div class=\"ps-4\">
                                        <p class=\"mb-0\">Popular</p>
                                        <h6 class=\"text-uppercase mb-0\">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class=\"btn btn-primary py-3 px-5 mt-2\" href=\"\">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container\">
                <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <h5 class=\"section-title ff-secondary text-center text-primary fw-normal\">Food Menu</h5>
                    <h1 class=\"mb-5\">Most Popular Items</h1>
                </div>
                <div class=\"tab-class text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <ul class=\"nav nav-pills d-inline-flex justify-content-center border-bottom mb-5\">
                        <li class=\"nav-item\">
                            <a class=\"d-flex align-items-center text-start mx-3 ms-0 pb-3 active\" data-bs-toggle=\"pill\" href=\"#tab-1\">
                                <i class=\"fa fa-coffee fa-2x text-primary\"></i>
                                <div class=\"ps-3\">
                                    <small class=\"text-body\">Popular</small>
                                    <h6 class=\"mt-n1 mb-0\">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"d-flex align-items-center text-start mx-3 pb-3\" data-bs-toggle=\"pill\" href=\"#tab-2\">
                                <i class=\"fa fa-hamburger fa-2x text-primary\"></i>
                                <div class=\"ps-3\">
                                    <small class=\"text-body\">Special</small>
                                    <h6 class=\"mt-n1 mb-0\">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"d-flex align-items-center text-start mx-3 me-0 pb-3\" data-bs-toggle=\"pill\" href=\"#tab-3\">
                                <i class=\"fa fa-utensils fa-2x text-primary\"></i>
                                <div class=\"ps-3\">
                                    <small class=\"text-body\">Lovely</small>
                                    <h6 class=\"mt-n1 mb-0\">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class=\"tab-content\">
                        <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-1.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-2.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-3.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-4.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-5.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-6.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-7.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-8.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-2\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-1.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-2.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-3.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-4.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-5.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-6.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-7.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-8.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-3\" class=\"tab-pane fade show p-0\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-1.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-2.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-3.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-4.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-5.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-6.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-7.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"flex-shrink-0 img-fluid rounded\" src=\"{{asset('Main/img/menu-8.jpg')}}\" alt=\"\" style=\"width: 80px;\">
                                        <div class=\"w-100 d-flex flex-column text-start ps-4\">
                                            <h5 class=\"d-flex justify-content-between border-bottom pb-2\">
                                                <span>Chicken Burger</span>
                                                <span class=\"text-primary\">\$115</span>
                                            </h5>
                                            <small class=\"fst-italic\">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class=\"container-xxl py-5 px-0 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"row g-0\">
                <div class=\"col-md-6\">
    <div class=\"video\">
        <!-- Utilisation du lecteur vidéo HTML5 -->
        <video controls width=\"100%\" height=\"auto\">
            <source src=\"{{asset('Main/img/monvideo.mp4')}}\" type=\"video/mp4\">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

                <div class=\"col-md-6 bg-dark d-flex align-items-center\">
                    <div class=\"p-5 wow fadeInUp\" data-wow-delay=\"0.2s\">
                        <h5 class=\"section-title ff-secondary text-start text-primary fw-normal\">Reservation</h5>
                        <h1 class=\"text-white mb-4\">Book A Table Online</h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\">
                                        <label for=\"name\">Your Name</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\">
                                        <label for=\"email\">Your Email</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating date\" id=\"date3\" data-target-input=\"nearest\">
                                        <input type=\"text\" class=\"form-control datetimepicker-input\" id=\"datetime\" placeholder=\"Date & Time\" data-target=\"#date3\" data-toggle=\"datetimepicker\" />
                                        <label for=\"datetime\">Date & Time</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <select class=\"form-select\" id=\"select1\">
                                          <option value=\"1\">People 1</option>
                                          <option value=\"2\">People 2</option>
                                          <option value=\"3\">People 3</option>
                                        </select>
                                        <label for=\"select1\">No Of People</label>
                                      </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        <textarea class=\"form-control\" placeholder=\"Special Request\" id=\"message\" style=\"height: 100px\"></textarea>
                                        <label for=\"message\">Special Request</label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary w-100 py-3\" type=\"submit\">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"modal fade\" id=\"videoModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content rounded-0\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Youtube Video</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <!-- 16:9 aspect ratio -->
                        <div class=\"ratio ratio-16x9\">
                            <iframe class=\"embed-responsive-item\" src=\" id=\"video\" allowfullscreen allowscriptaccess=\"always\"
                                allow=\"autoplay\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class=\"container-xxl pt-5 pb-3\">
            <div class=\"container\">
                <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <h5 class=\"section-title ff-secondary text-center text-primary fw-normal\">Team Members</h5>
                    <h1 class=\"mb-5\">Our Master Chefs</h1>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                        <div class=\"team-item text-center rounded overflow-hidden\">
                            <div class=\"rounded-circle overflow-hidden m-4\">
                                <img class=\"img-fluid\" src=\"{{asset('Main/img/team-1.jpg')}}\" alt=\"\">
                            </div>
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                            <div class=\"d-flex justify-content-center mt-3\">
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                        <div class=\"team-item text-center rounded overflow-hidden\">
                            <div class=\"rounded-circle overflow-hidden m-4\">
                                <img class=\"img-fluid\" src=\"{{asset('Main/img/team-2.jpg')}}\" alt=\"\">
                            </div>
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                            <div class=\"d-flex justify-content-center mt-3\">
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                        <div class=\"team-item text-center rounded overflow-hidden\">
                            <div class=\"rounded-circle overflow-hidden m-4\">
                                <img class=\"img-fluid\" src=\"{{asset('Main/img/team-3.jpg')}}\" alt=\"\">
                            </div>
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                            <div class=\"d-flex justify-content-center mt-3\">
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                        <div class=\"team-item text-center rounded overflow-hidden\">
                            <div class=\"rounded-circle overflow-hidden m-4\">
                                <img class=\"img-fluid\" src=\"{{asset('Main/img/team-4.jpg')}}\" alt=\"\">
                            </div>
                            <h5 class=\"mb-0\">Full Name</h5>
                            <small>Designation</small>
                            <div class=\"d-flex justify-content-center mt-3\">
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                <a class=\"btn btn-square btn-primary mx-1\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"container\">
                <div class=\"text-center\">
                    <h5 class=\"section-title ff-secondary text-center text-primary fw-normal\">Testimonial</h5>
                    <h1 class=\"mb-5\">Our Clients Say!!!</h1>
                </div>
                <div class=\"owl-carousel testimonial-carousel\">
                    <div class=\"testimonial-item bg-transparent border rounded p-4\">
                        <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class=\"d-flex align-items-center\">
                            <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"{{asset('Main/img/testimonial-1.jpg')}}\" style=\"width: 50px; height: 50px;\">
                            <div class=\"ps-3\">
                                <h5 class=\"mb-1\">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item bg-transparent border rounded p-4\">
                        <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class=\"d-flex align-items-center\">
                            <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"{{asset('Main/img/testimonial-2.jpg')}}\" style=\"width: 50px; height: 50px;\">
                            <div class=\"ps-3\">
                                <h5 class=\"mb-1\">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item bg-transparent border rounded p-4\">
                        <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class=\"d-flex align-items-center\">
                            <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"{{asset('Main/img/testimonial-3.jpg')}}\" style=\"width: 50px; height: 50px;\">
                            <div class=\"ps-3\">
                                <h5 class=\"mb-1\">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class=\"testimonial-item bg-transparent border rounded p-4\">
                        <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class=\"d-flex align-items-center\">
                            <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"{{asset('Main/img/testimonial-4.jpg')}}\" style=\"width: 50px; height: 50px;\">
                            <div class=\"ps-3\">
                                <h5 class=\"mb-1\">Client Name</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
       

        <!-- Footer Start -->
        <div class=\"container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-3 col-md-6\">
                        <h4 class=\"section-title ff-secondary text-start text-primary fw-normal mb-4\">Company</h4>
                        <a class=\"btn btn-link\" href=\"\">About Us</a>
                        <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                        <a class=\"btn btn-link\" href=\"\">Reservation</a>
                        <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                        <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h4 class=\"section-title ff-secondary text-start text-primary fw-normal mb-4\">Contact</h4>
                        <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                        <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                        <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                        <div class=\"d-flex pt-2\">
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h4 class=\"section-title ff-secondary text-start text-primary fw-normal mb-4\">Opening</h4>
                        <h5 class=\"text-light fw-normal\">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class=\"text-light fw-normal\">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h4 class=\"section-title ff-secondary text-start text-primary fw-normal mb-4\">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                            <input class=\"form-control border-primary w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                            <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                            &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.
                                          
                                          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                                          Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
                        </div>
                        <div class=\"col-md-6 text-center text-md-end\">
                            <div class=\"footer-menu\">
                                <a href=\"\">Home</a>
                                <a href=\"\">Cookies</a>
                                <a href=\"\">Help</a>
                                <a href=\"\">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{asset('Main/lib/wow/wow.min.js')}}\"></script>
    <script src=\"{{asset('Main/lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{asset('Main/lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('Main/lib/counterup/counterup.min.js')}}\"></script>
    <script src=\"{{asset('Main/lib/owlcarousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('Main/lib/tempusdominus/js/moment.min.js')}}\"></script>
    <script src=\"{{asset('Main/lib/tempusdominus/js/moment-timezone.min.js')}}\"></script>
    <script src=\"{{asset('Main/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{asset('Main/js/main.js')}}\"></script>
    <script>
\$(document).ready(function(){
    // Fonction pour gérer le clic sur les liens de navigation
    \$(\".nav-link\").click(function(){
        // Supprimer la classe 'active' de tous les liens de navigation
        \$(\".nav-link\").removeClass(\"active\");
        // Ajouter la classe 'active' uniquement au lien cliqué
        \$(this).addClass(\"active\");
    });

    // Fonction pour gérer le clic sur les éléments de sous-menu
    \$(\".dropdown-item\").click(function(){
        // Supprimer la classe 'active' de tous les éléments de sous-menu
        \$(\".dropdown-item\").removeClass(\"active\");
        // Ajouter la classe 'active' uniquement à l'élément cliqué
        \$(this).addClass(\"active\");
        // Ajouter la classe 'active' également au lien parent du sous-menu
        \$(this).closest(\".nav-item.dropdown\").find(\".nav-link\").addClass(\"active\");
    });
});
</script>
</body>

</html>
", "back&front/front.html.twig", "C:\\Users\\user\\OneDrive\\Documents\\Bureau\\Workshops-Pidev-master\\templates\\back&front\\front.html.twig");
    }
}
