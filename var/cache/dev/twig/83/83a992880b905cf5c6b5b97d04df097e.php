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

/* base.html.twig */
class __TwigTemplate_a2b81f96e39a1c4a6d102874b684b769 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        ";
        // line 8
        yield "        ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 27
        yield "
        ";
        // line 28
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 42
        yield "    </head>
    <body>

        ";
        // line 45
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 284
        yield "
        ";
        // line 285
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 472
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 477
        yield "
    ";
        // line 478
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 493
        yield "    <script>
        // Fonction de recherche automatique avancée
        function rechercherAvancee() {
            var inputSearch = document.getElementById('inputSearch').value.trim().toLowerCase();
            var table = document.querySelector('.table');
            var tbody = table.querySelector('tbody');
            var rows = tbody.querySelectorAll('tr');
    
            rows.forEach(row => {
                var found = false;
                row.querySelectorAll('td').forEach(cell => {
                    var text = cell.textContent.trim().toLowerCase();
                    if (text.includes(inputSearch)) {
                        found = true;
                    }
                });
                if (found) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    
        // Écoute de l'événement d'entrée dans le champ de recherche
        document.getElementById('inputSearch').addEventListener('input', rechercherAvancee);
    </script>
    
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "

            <!-- Google Fonts -->
            <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
            <link href=\"";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
            <link href=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
            <link href=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
            <link href=\"";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
            <link href=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
            <link href=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

            <!-- Template Main CSS File -->
            <link href=\"";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        yield "
            <!-- Vendor JS Files -->
            <script src=\"";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>

            <!-- Template Main JS File -->
            <script src=\"";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 46
        yield "            <!-- ======= Header ======= -->
            <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

                <div class=\"d-flex align-items-center justify-content-between\">
                    <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                        <img src=\"assets/img/logo.png\" alt=\"\">
                        <span class=\"d-none d-lg-block\">NiceAdmin</span>
                    </a>
                    <i class=\"bi bi-list toggle-sidebar-btn\"></i>
                </div><!-- End Logo -->

                <div class=\"col-md-6 mb-3\">
                    <input type=\"text\" id=\"inputSearch\" class=\"form-control\" placeholder=\"Rechercher dans la table...\">
                </div>
                <div class=\"col-md-6 mb-3 d-flex justify-content-end align-items-center\">
                    <div class=\"me-3\">
                        <select id=\"selectTri\" class=\"form-select\">
                            <option value=\"1\">Trier par Réclamation</option>
                            <option value=\"2\">Trier par Nom du Client</option>
                            <option value=\"3\">Trier par Réponse</option>
                            <option value=\"4\">Trier par Date du réponse</option>
                        </select>
                    </div>
                    <div>
                        <button onclick=\"trierAvancee()\" class=\"btn btn-primary\">Trier</button>
                    </div>
                </div>

                <nav class=\"header-nav ms-auto\">
                    <ul class=\"d-flex align-items-center\">

                        <li class=\"nav-item d-block d-lg-none\">
                            <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                                <i class=\"bi bi-search\"></i>
                            </a>
                        </li><!-- End Search Icon-->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-bell\"></i>
                                <span class=\"badge bg-primary badge-number\">4</span>
                            </a><!-- End Notification Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                                <li class=\"dropdown-header\">
                                    You have 4 new notifications
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-exclamation-circle text-warning\"></i>
                                    <div>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>30 min. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-x-circle text-danger\"></i>
                                    <div>
                                        <h4>Atque rerum nesciunt</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>1 hr. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-check-circle text-success\"></i>
                                    <div>
                                        <h4>Sit rerum fuga</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>2 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-info-circle text-primary\"></i>
                                    <div>
                                        <h4>Dicta reprehenderit</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>
                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all notifications</a>
                                </li>

                            </ul><!-- End Notification Dropdown Items -->

                        </li><!-- End Notification Nav -->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-chat-left-text\"></i>
                                <span class=\"badge bg-success badge-number\">3</span>
                            </a><!-- End Messages Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                                <li class=\"dropdown-header\">
                                    You have 3 new messages
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Maria Hudson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>4 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Anna Nelson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>6 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>David Muldon</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>8 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all messages</a>
                                </li>

                            </ul><!-- End Messages Dropdown Items -->

                        </li><!-- End Messages Nav -->

                        <li class=\"nav-item dropdown pe-3\">

                            <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                             ";
        // line 228
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "user", [], "any", false, false, false, 228) != null)) {
            // line 229
            yield "
                                 <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
            // line 230
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "user", [], "any", false, false, false, 230), "username", [], "any", false, false, false, 230), "html", null, true);
            yield "</span>
                                ";
        }
        // line 232
        yield "                            </a><!-- End Profile Iamge Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                    <h6>Kevin Anderson</h6>
                                    <span>Web Designer</span>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                        <i class=\"bi bi-question-circle\"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>



                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
                </nav><!-- End Icons Navigation -->

            </header><!-- End Header -->

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 285
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 286
        yield "            <!-- ======= Sidebar ======= -->
            <aside id=\"sidebar\" class=\"sidebar\">

                <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"index.html\">
                            <i class=\"bi bi-grid\"></i>
                            <span>Gestion des commandes</span>
                        </a>
                    </li><!-- End Dashboard Nav -->

    <a class=\"nav-link collapsed\" data-bs-target=\"#restaurants-nav\" data-bs-toggle=\"collapse\" href=\"#\">
        <i class=\"bi bi-menu-button-wide\"></i><span>List</span><i class=\"bi bi-chevron-down ms-auto\"></i>
    </a>
    <ul id=\"restaurants-nav\" class=\"nav-content collapse\" data-bs-parent=\"#sidebar-nav\">
        <li>
            <a href=\"";
        // line 303
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_index");
        yield "\">
                <i class=\"bi bi-circle\"></i><span>Plats</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 308
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_category_index");
        yield "\">
                <i class=\"bi bi-circle\"></i><span>Category</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 313
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_index");
        yield "\">
                <i class=\"bi bi-circle\"></i><span>Restaurant</span>
            </a>
        </li>
    </ul>
</li><!-- End Components Nav -->




                    </li><!-- End Components Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-journal-text\"></i><span>Gestion des utilisateurs</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"forms-elements.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-layouts.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-editors.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-validation.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Forms Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"tables-general.html\">
                                    <i class=\"bi bi-circle\"></i><span>General Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"tables-data.html\">
                                    <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Tables Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"charts-chartjs.html\">
                                    <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"charts-apexcharts.html\">
                                    <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"charts-echarts.html\">
                                    <i class=\"bi bi-circle\"></i><span>ECharts</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Charts Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"icons-bootstrap.html\">
                                    <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"icons-remix.html\">
                                    <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"icons-boxicons.html\">
                                    <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Icons Nav -->

                    <li class=\"nav-heading\">Pages</li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>Profile</span>
                        </a>
                    </li><!-- End Profile Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>F.A.Q</span>
                        </a>
                    </li><!-- End F.A.Q Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                            <i class=\"bi bi-envelope\"></i>
                            <span>Contact</span>
                        </a>
                    </li><!-- End Contact Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                            <i class=\"bi bi-card-list\"></i>
                            <span>Register</span>
                        </a>
                    </li><!-- End Register Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                            <i class=\"bi bi-box-arrow-in-right\"></i>
                            <span>Login</span>
                        </a>
                    </li><!-- End Login Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                            <i class=\"bi bi-dash-circle\"></i>
                            <span>Error 404</span>
                        </a>
                    </li><!-- End Error 404 Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                            <i class=\"bi bi-file-earmark\"></i>
                            <span>Blank</span>
                        </a>
                    </li><!-- End Blank Page Nav -->

                </ul>

            </aside><!-- End Sidebar-->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 472
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 473
        yield "


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 478
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 479
        yield "        <!-- ======= Footer ======= -->
        <footer id=\"footer\" class=\"footer\">
            <div class=\"copyright\">
                &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
            </div>
            <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </footer><!-- End Footer -->
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  786 => 479,  776 => 478,  762 => 473,  752 => 472,  582 => 313,  574 => 308,  566 => 303,  547 => 286,  537 => 285,  475 => 232,  470 => 230,  467 => 229,  465 => 228,  281 => 46,  271 => 45,  259 => 41,  253 => 38,  249 => 37,  245 => 36,  241 => 35,  237 => 34,  233 => 33,  229 => 32,  225 => 31,  221 => 29,  211 => 28,  198 => 25,  192 => 22,  188 => 21,  184 => 20,  180 => 19,  176 => 18,  172 => 17,  168 => 16,  159 => 9,  149 => 8,  129 => 5,  89 => 493,  87 => 478,  84 => 477,  81 => 472,  79 => 285,  76 => 284,  74 => 45,  69 => 42,  67 => 28,  64 => 27,  61 => 8,  57 => 5,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}


            <!-- Google Fonts -->
            <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
            <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

            <!-- Template Main CSS File -->
            <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
        {% endblock %}

        {% block javascripts %}

            <!-- Vendor JS Files -->
            <script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/chart.js/chart.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/quill/quill.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

            <!-- Template Main JS File -->
            <script src=\"{{ asset('assets/js/main.js') }}\"></script>        {% endblock %}
    </head>
    <body>

        {% block header %}
            <!-- ======= Header ======= -->
            <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

                <div class=\"d-flex align-items-center justify-content-between\">
                    <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                        <img src=\"assets/img/logo.png\" alt=\"\">
                        <span class=\"d-none d-lg-block\">NiceAdmin</span>
                    </a>
                    <i class=\"bi bi-list toggle-sidebar-btn\"></i>
                </div><!-- End Logo -->

                <div class=\"col-md-6 mb-3\">
                    <input type=\"text\" id=\"inputSearch\" class=\"form-control\" placeholder=\"Rechercher dans la table...\">
                </div>
                <div class=\"col-md-6 mb-3 d-flex justify-content-end align-items-center\">
                    <div class=\"me-3\">
                        <select id=\"selectTri\" class=\"form-select\">
                            <option value=\"1\">Trier par Réclamation</option>
                            <option value=\"2\">Trier par Nom du Client</option>
                            <option value=\"3\">Trier par Réponse</option>
                            <option value=\"4\">Trier par Date du réponse</option>
                        </select>
                    </div>
                    <div>
                        <button onclick=\"trierAvancee()\" class=\"btn btn-primary\">Trier</button>
                    </div>
                </div>

                <nav class=\"header-nav ms-auto\">
                    <ul class=\"d-flex align-items-center\">

                        <li class=\"nav-item d-block d-lg-none\">
                            <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                                <i class=\"bi bi-search\"></i>
                            </a>
                        </li><!-- End Search Icon-->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-bell\"></i>
                                <span class=\"badge bg-primary badge-number\">4</span>
                            </a><!-- End Notification Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                                <li class=\"dropdown-header\">
                                    You have 4 new notifications
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-exclamation-circle text-warning\"></i>
                                    <div>
                                        <h4>Lorem Ipsum</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>30 min. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-x-circle text-danger\"></i>
                                    <div>
                                        <h4>Atque rerum nesciunt</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>1 hr. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-check-circle text-success\"></i>
                                    <div>
                                        <h4>Sit rerum fuga</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>2 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"notification-item\">
                                    <i class=\"bi bi-info-circle text-primary\"></i>
                                    <div>
                                        <h4>Dicta reprehenderit</h4>
                                        <p>Quae dolorem earum veritatis oditseno</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </li>

                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>
                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all notifications</a>
                                </li>

                            </ul><!-- End Notification Dropdown Items -->

                        </li><!-- End Notification Nav -->

                        <li class=\"nav-item dropdown\">

                            <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-chat-left-text\"></i>
                                <span class=\"badge bg-success badge-number\">3</span>
                            </a><!-- End Messages Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                                <li class=\"dropdown-header\">
                                    You have 3 new messages
                                    <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Maria Hudson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>4 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>Anna Nelson</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>6 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"message-item\">
                                    <a href=\"#\">
                                        <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                                        <div>
                                            <h4>David Muldon</h4>
                                            <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                            <p>8 hrs. ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li class=\"dropdown-footer\">
                                    <a href=\"#\">Show all messages</a>
                                </li>

                            </ul><!-- End Messages Dropdown Items -->

                        </li><!-- End Messages Nav -->

                        <li class=\"nav-item dropdown pe-3\">

                            <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                             {% if app.user !=null %}

                                 <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ app.user.username }}</span>
                                {% endif %}
                            </a><!-- End Profile Iamge Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                                <li class=\"dropdown-header\">
                                    <h6>Kevin Anderson</h6>
                                    <span>Web Designer</span>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-person\"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                                        <i class=\"bi bi-gear\"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>

                                <li>
                                    <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                                        <i class=\"bi bi-question-circle\"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class=\"dropdown-divider\">
                                </li>



                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
                </nav><!-- End Icons Navigation -->

            </header><!-- End Header -->

        {% endblock %}

        {% block sidebar %}
            <!-- ======= Sidebar ======= -->
            <aside id=\"sidebar\" class=\"sidebar\">

                <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

                    <li class=\"nav-item\">
                        <a class=\"nav-link \" href=\"index.html\">
                            <i class=\"bi bi-grid\"></i>
                            <span>Gestion des commandes</span>
                        </a>
                    </li><!-- End Dashboard Nav -->

    <a class=\"nav-link collapsed\" data-bs-target=\"#restaurants-nav\" data-bs-toggle=\"collapse\" href=\"#\">
        <i class=\"bi bi-menu-button-wide\"></i><span>List</span><i class=\"bi bi-chevron-down ms-auto\"></i>
    </a>
    <ul id=\"restaurants-nav\" class=\"nav-content collapse\" data-bs-parent=\"#sidebar-nav\">
        <li>
            <a href=\"{{ path('app_plat_index') }}\">
                <i class=\"bi bi-circle\"></i><span>Plats</span>
            </a>
        </li>
        <li>
            <a href=\"{{ path('app_restaurant_category_index') }}\">
                <i class=\"bi bi-circle\"></i><span>Category</span>
            </a>
        </li>
        <li>
            <a href=\"{{ path('app_restaurant_index') }}\">
                <i class=\"bi bi-circle\"></i><span>Restaurant</span>
            </a>
        </li>
    </ul>
</li><!-- End Components Nav -->




                    </li><!-- End Components Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-journal-text\"></i><span>Gestion des utilisateurs</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"forms-elements.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-layouts.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-editors.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"forms-validation.html\">
                                    <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Forms Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"tables-general.html\">
                                    <i class=\"bi bi-circle\"></i><span>General Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"tables-data.html\">
                                    <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Tables Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"charts-chartjs.html\">
                                    <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"charts-apexcharts.html\">
                                    <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"charts-echarts.html\">
                                    <i class=\"bi bi-circle\"></i><span>ECharts</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Charts Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                            <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                        </a>
                        <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                            <li>
                                <a href=\"icons-bootstrap.html\">
                                    <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"icons-remix.html\">
                                    <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"icons-boxicons.html\">
                                    <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Icons Nav -->

                    <li class=\"nav-heading\">Pages</li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>Profile</span>
                        </a>
                    </li><!-- End Profile Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>F.A.Q</span>
                        </a>
                    </li><!-- End F.A.Q Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                            <i class=\"bi bi-envelope\"></i>
                            <span>Contact</span>
                        </a>
                    </li><!-- End Contact Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                            <i class=\"bi bi-card-list\"></i>
                            <span>Register</span>
                        </a>
                    </li><!-- End Register Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                            <i class=\"bi bi-box-arrow-in-right\"></i>
                            <span>Login</span>
                        </a>
                    </li><!-- End Login Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                            <i class=\"bi bi-dash-circle\"></i>
                            <span>Error 404</span>
                        </a>
                    </li><!-- End Error 404 Page Nav -->

                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                            <i class=\"bi bi-file-earmark\"></i>
                            <span>Blank</span>
                        </a>
                    </li><!-- End Blank Page Nav -->

                </ul>

            </aside><!-- End Sidebar-->
        {% endblock %}
        {% block body %}



        {% endblock %}

    {% block footer %}
        <!-- ======= Footer ======= -->
        <footer id=\"footer\" class=\"footer\">
            <div class=\"copyright\">
                &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
            </div>
            <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
        </footer><!-- End Footer -->
    {% endblock %}
    <script>
        // Fonction de recherche automatique avancée
        function rechercherAvancee() {
            var inputSearch = document.getElementById('inputSearch').value.trim().toLowerCase();
            var table = document.querySelector('.table');
            var tbody = table.querySelector('tbody');
            var rows = tbody.querySelectorAll('tr');
    
            rows.forEach(row => {
                var found = false;
                row.querySelectorAll('td').forEach(cell => {
                    var text = cell.textContent.trim().toLowerCase();
                    if (text.includes(inputSearch)) {
                        found = true;
                    }
                });
                if (found) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    
        // Écoute de l'événement d'entrée dans le champ de recherche
        document.getElementById('inputSearch').addEventListener('input', rechercherAvancee);
    </script>
    
    </body>
</html>", "base.html.twig", "C:\\Users\\mhamd\\Downloads\\Wakkel_Food-Symfony-Gestion_Resto\\Wakkel_Food-Symfony-Gestion_Resto\\templates\\base.html.twig");
    }
}
