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

/* client/navbar.html.twig */
class __TwigTemplate_320c2a1c7c162be3f68ce35d5e7a613c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/navbar.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
   <meta charset=\"utf-8\">
<title>Wakkel Food</title>
<link rel=\"icon\" href=\"";
        // line 7
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        yield "\">
<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
<meta content=\"\" name=\"keywords\">
<meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/favicon.ico"), "html", null, true);
        yield "\" rel=\"icon\">

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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/animate/animate.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
</head>


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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        yield "\" alt=\"Logo\">Wakkel Food</h1>
            </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0 pe-4\">
                        <a href=\"/front\" class=\"nav-item nav-link\">Home</a>
                        <a href=\"/edit\" class=\"nav-item nav-link active\">Compte</a>
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

            
        </div>
        <!-- Navbar & Hero End -->

        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 88
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 89
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 90
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 91
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 92
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 93
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 94
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 95
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 98
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/js/main.js"), "html", null, true);
        yield "\"></script>
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
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/navbar.html.twig";
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
        return array (  191 => 98,  185 => 95,  181 => 94,  177 => 93,  173 => 92,  169 => 91,  165 => 90,  161 => 89,  157 => 88,  118 => 52,  96 => 33,  90 => 30,  84 => 27,  80 => 26,  76 => 25,  61 => 13,  52 => 7,  44 => 1,);
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
                        <a href=\"/front\" class=\"nav-item nav-link\">Home</a>
                        <a href=\"/edit\" class=\"nav-item nav-link active\">Compte</a>
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

            
        </div>
        <!-- Navbar & Hero End -->

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
", "client/navbar.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\client\\navbar.html.twig");
    }
}
