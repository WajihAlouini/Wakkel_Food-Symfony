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

/* index.html.twig */
class __TwigTemplate_bf993dfdf25daf4599e4ff5150ce6d1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
   <meta charset=\"utf-8\">
<title>Wakkel Food</title>
<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
<meta content=\"\" name=\"keywords\">
<meta content=\"\" name=\"description\">
<link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        echo "\">

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




        <!-- Navbar & Hero Start -->
        <div class=\"container-xxl position-relative p-0\">
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0\">
            <a href=\"\" class=\"navbar-brand p-0\">
            <h1 class=\"text-primary m-0\">
            <img src=\"";
        // line 46
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
                    <a href=\"/login\" class=\"btn btn-primary py-2 px-4\">Deconnexion</a>
                </div>
            </nav>

       <!-- Menu Section -->
       <div class=\"container-xxl py-5 bg-dark hero-header mb-5\" style=\"background-image;\">
           <div class=\"container my-5 py-5\">
               <div class=\"row\">
                   <div class=\"col-md-12\">
                       <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                           <h5 class=\"section-title ff-secondary text-center text-primary fw-normal\">Food Menu</h5>
                           <h1 class=\"mb-5 text-light\">Pick a restaurant Category</h1> <!-- Updated text color to light -->
                       </div>
                   </div>
               </div>
               <div class=\"row\">
                   <!-- Iterate over restaurant categories -->
                   ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurant_categories"]) || array_key_exists("restaurant_categories", $context) ? $context["restaurant_categories"] : (function () { throw new RuntimeError('Variable "restaurant_categories" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurantCategory"]) {
            // line 85
            echo "                   <div class=\"col-md-4 mb-4\">
                       <div class=\"category-box text-center border rounded p-3\" style=\"background-color: #f0f0f0;\">
                           <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurants_by_category", ["idCategory" => twig_get_attribute($this->env, $this->source, $context["restaurantCategory"], "idCategory", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" class=\"category-link\">
                               <img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["restaurantCategory"], "categoryImage", [], "any", false, false, false, 88))), "html", null, true);
            echo "\" alt=\"Category Image\" class=\"img-fluid mb-3\" style=\"max-height: 150px;\">
                               <h5 class=\"category-name\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurantCategory"], "categoryName", [], "any", false, false, false, 89), "html", null, true);
            echo "</h5>
                           </a>
                       </div>
                   </div>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurantCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "               </div>
       
               <!-- Restaurant List Section -->
               <div id=\"restaurant-list\" class=\"mt-5\">
                   <!-- Restaurant list will be dynamically loaded here -->
               </div>
           </div>
       </div>
       <!-- Menu End -->


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
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/about-1.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-6 text-start\">
                                <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.3s\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/about-2.jpg"), "html", null, true);
        echo "\" style=\"margin-top: 25%;\">
                            </div>
                            <div class=\"col-6 text-end\">
                                <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.5s\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/about-3.jpg"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-6 text-end\">
                                <img class=\"img-fluid rounded w-100 wow zoomIn\" data-wow-delay=\"0.7s\" src=\"";
        // line 167
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
        // line 246
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
        // line 258
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
        // line 270
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
        // line 282
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
        // line 294
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
        // line 306
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
        // line 318
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
        // line 330
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
        // line 346
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
        // line 358
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
        // line 370
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
        // line 382
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
        // line 394
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
        // line 406
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
        // line 418
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
        // line 430
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
        // line 446
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
        // line 458
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
        // line 470
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
        // line 482
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
        // line 494
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
        // line 506
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
        // line 518
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
        // line 530
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
        // line 556
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
        // line 643
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
        // line 657
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
        // line 671
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
        // line 685
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
        // line 714
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
        // line 725
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
        // line 736
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
        // line 747
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
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\t\tDesigned By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
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
        // line 832
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 833
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 834
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 835
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 836
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 837
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 838
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 839
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 842
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/js/main.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html.twig";
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
        return array (  1064 => 842,  1058 => 839,  1054 => 838,  1050 => 837,  1046 => 836,  1042 => 835,  1038 => 834,  1034 => 833,  1030 => 832,  942 => 747,  928 => 736,  914 => 725,  900 => 714,  868 => 685,  851 => 671,  834 => 657,  817 => 643,  727 => 556,  698 => 530,  683 => 518,  668 => 506,  653 => 494,  638 => 482,  623 => 470,  608 => 458,  593 => 446,  574 => 430,  559 => 418,  544 => 406,  529 => 394,  514 => 382,  499 => 370,  484 => 358,  469 => 346,  450 => 330,  435 => 318,  420 => 306,  405 => 294,  390 => 282,  375 => 270,  360 => 258,  345 => 246,  263 => 167,  257 => 164,  251 => 161,  245 => 158,  179 => 94,  168 => 89,  164 => 88,  160 => 87,  156 => 85,  152 => 84,  111 => 46,  95 => 33,  89 => 30,  83 => 27,  79 => 26,  75 => 25,  60 => 13,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
   <meta charset=\"utf-8\">
<title>Wakkel Food</title>
<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
<meta content=\"\" name=\"keywords\">
<meta content=\"\" name=\"description\">
<link rel=\"icon\" href=\"{{asset('Main/img/LOGO_PNG.png')}}\">

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
                    <a href=\"/login\" class=\"btn btn-primary py-2 px-4\">Deconnexion</a>
                </div>
            </nav>

       <!-- Menu Section -->
       <div class=\"container-xxl py-5 bg-dark hero-header mb-5\" style=\"background-image;\">
           <div class=\"container my-5 py-5\">
               <div class=\"row\">
                   <div class=\"col-md-12\">
                       <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                           <h5 class=\"section-title ff-secondary text-center text-primary fw-normal\">Food Menu</h5>
                           <h1 class=\"mb-5 text-light\">Pick a restaurant Category</h1> <!-- Updated text color to light -->
                       </div>
                   </div>
               </div>
               <div class=\"row\">
                   <!-- Iterate over restaurant categories -->
                   {% for restaurantCategory in restaurant_categories %}
                   <div class=\"col-md-4 mb-4\">
                       <div class=\"category-box text-center border rounded p-3\" style=\"background-color: #f0f0f0;\">
                           <a href=\"{{ path('restaurants_by_category', {'idCategory': restaurantCategory.idCategory}) }}\" class=\"category-link\">
                               <img src=\"{{ asset('uploads/' ~ restaurantCategory.categoryImage) }}\" alt=\"Category Image\" class=\"img-fluid mb-3\" style=\"max-height: 150px;\">
                               <h5 class=\"category-name\">{{ restaurantCategory.categoryName }}</h5>
                           </a>
                       </div>
                   </div>
                   {% endfor %}
               </div>
       
               <!-- Restaurant List Section -->
               <div id=\"restaurant-list\" class=\"mt-5\">
                   <!-- Restaurant list will be dynamically loaded here -->
               </div>
           </div>
       </div>
       <!-- Menu End -->


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
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\t\tDesigned By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a>
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
</body>

</html>", "index.html.twig", "C:\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\index.html.twig");
    }
}
