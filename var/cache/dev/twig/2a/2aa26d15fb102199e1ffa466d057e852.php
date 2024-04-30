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

/* back&front/back.html.twig */
class __TwigTemplate_dbcf92fbab700dbaafc9b137d29a3c4e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'java_scripts' => [$this, 'block_java_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back&front/back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back&front/back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html
        lang=\"en\"
        class=\"light-style layout-navbar-fixed layout-menu-fixed\"
        dir=\"ltr\"
        data-theme=\"theme-default\"
        data-Back-path=\"../../Back/\"
        data-template=\"vertical-menu-template-no-customizer\"
>
<head>
    <meta charset=\"utf-8\"/>
    <meta
            name=\"viewport\"
            content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"
    />

    <title>Wakkel Food</title>

    <meta name=\"description\" content=\"\"/>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        echo "\">
    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"/>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin/>
    <link
            href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
            rel=\"stylesheet\"
    />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/fonts/fontawesome.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/fonts/tabler-icons.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/fonts/flag-icons.css"), "html", null, true);
        echo "\"/>

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/css/rtl/core.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/css/rtl/theme-default.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/css/demo.css"), "html", null, true);
        echo "\"/>

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/node-waves/node-waves.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/typeahead-js/typeahead.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/swiper/swiper.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/datatables-bs5/datatables.bootstrap5.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/sweetalert2/sweetalert2.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/apex-charts/apex-charts.css\""), "html", null, true);
        echo "\"/>

    <link rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css"), "html", null, true);
        echo "\"/>

    <link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/css/pages/page-auth.css"), "html", null, true);
        echo "\"/>
    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/css/pages/cards-advance.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/bs-stepper/bs-stepper.css"), "html", null, true);
        echo "\"/>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\"
          rel=\"stylesheet\"/>

    <!-- Helpers -->
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/js/helpers.js"), "html", null, true);
        echo "\"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/config.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>


</head>

<body>

<!-- Layout wrapper -->

<div class=\"layout-wrapper layout-content-navbar\">
    <div class=\"layout-container\">
        <!-- Menu -->

        <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
            <div class=\"app-brand demo\">
                <a class=\"app-brand-link\">

                  <span class=\"app-brand-text demo menu-text fw-bold\" style=\"display: flex; align-items: center;\">
    <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        echo "\" width=\"40\" height=\"40\" style=\"margin-right: 10px;\" alt=\"Logo\">
    Wakkel Food
</span>


                <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
                    <i class=\"ti menu-toggle-icon d-none d-xl-block ti-sm align-middle\"></i>
                    <i class=\"ti ti-x d-block d-xl-none ti-sm align-middle\"></i>
                </a>
            </div>


            ";
        // line 100
        $context["current"] = "";
        // line 101
        echo "            ";
        if (array_key_exists("currentItem", $context)) {
            // line 102
            echo "            ";
            $context["current"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 102, $this->source); })());
            // line 103
            echo "            ";
        }
        // line 104
        echo "

            <ul class=\"menu-inner py-1\">
                <!-- Dashboards -->
                <li class=\"menu-item ";
        // line 108
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 108, $this->source); })()) == "admin_home")) {
            echo "active ";
        }
        echo "\">
                    <a class=\"menu-link\">
                        <i class=\"menu-icon tf-icons ti ti-smart-home\"></i>
                        <div>Dashborad</div>
                    </a>
                </li>
                <ul class=\"menu-inner py-1\">
                

        </li>
        

    <li class=\"menu-item ";
        // line 120
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 120, $this->source); })()) == "admin_home")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        echo "\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-user\"></i>
        <div>Users</div>
    </a>
</li>

<li class=\"menu-item ";
        // line 127
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 127, $this->source); })()) == "admin_home")) {
            echo "active";
        }
        echo "\">
    <a href=\"/evenement/\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-calendar-alt\"></i>
        <div>Evenements</div>
    </a>
</li>
<li class=\"menu-item ";
        // line 133
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 133, $this->source); })()) == "admin_home")) {
            echo "active";
        }
        echo "\">
    <a href=\"/participation/\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-handshake\"></i>
        <div>Participations</div>
    </a>
</li>
        
                <li class=\"menu-item ";
        // line 140
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 140, $this->source); })()) == "contrat_index")) {
            echo "active ";
        }
        echo "\">
                    <a  class=\"menu-link\">
                        <i class=\"menu-icon tf-icons ti ti-file\"></i>
                        <div>Compte</div>
                    </a>
                </li>


                <li class=\"menu-item\">
                    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                        <i class=\"menu-icon tf-icons ti ti-settings\"></i>
                        <div data-i18n=\"Paramétrage\">Paramétrage</div>
                    </a>
                    <ul class=\"menu-sub\">
                        <li class=\"menu-item ";
        // line 154
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 154, $this->source); })()) == "app_modele_contrat")) {
            echo "active ";
        }
        echo "\">

                            <a  class=\"menu-link\">
                                <div>Transaction</div>
                            </a>
                        </li>
                        <li class=\"menu-item ";
        // line 160
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 160, $this->source); })()) == "app_entreprise")) {
            echo "active ";
        }
        echo "\">
                            <a class=\"menu-link\">
                                <div>Carte Bancaire</div>
                            </a>
                        </li>
                        <li class=\"menu-item ";
        // line 165
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 165, $this->source); })()) == "app_user")) {
            echo "active ";
        }
        echo "\">
                            <a  class=\"menu-link\">
                                <div>Crédit</div>
                            </a>
                        </li>
                        <li class=\"menu-item ";
        // line 170
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 170, $this->source); })()) == "app_workflow")) {
            echo "active ";
        }
        echo "\">
                            <a class=\"menu-link\">
                                <div>Assurance</div>
                            </a>
                        </li>
                       
                    </ul>
                </li>


                <li class=\"menu-item ";
        // line 180
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 180, $this->source); })()) == "statistiques")) {
            echo "active ";
        }
        echo "\">
                    <a  class=\"menu-link\">
                        <i class=\"menu-icon tf-icons ti ti-table\"></i>
                        <div data-i18n=\"Stat et Rapports\">Stat et Rapports</div>
                    </a>
                </li>
            </ul>

        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class=\"layout-page\">
            <!-- Navbar -->

            <nav
                    class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\"
                    id=\"layout-navbar\"
            >
                <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
                    <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                        <i class=\"ti ti-menu-2 ti-sm\"></i>
                    </a>
                </div>

                <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                    <!-- Search -->
                    <div class=\"navbar-nav align-items-center\">
                        <div class=\"nav-item navbar-search-wrapper mb-0\">
                            <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\"
                               href=\"javascript:void(0);\">
                                <i class=\"ti ti-search ti-md me-2\"></i>
                                <span class=\"d-none d-md-inline-block text-muted\">Search (Ctrl+/)</span>
                            </a>
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class=\"navbar-nav flex-row align-items-center ms-auto\">


                         <!-- Notification -->
                        <li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1\">
                            <a
                                    class=\"nav-link dropdown-toggle hide-arrow\"
                                    href=\"javascript:void(0);\"
                                    data-bs-toggle=\"dropdown\"
                                    data-bs-auto-close=\"outside\"
                                    aria-expanded=\"false\"
                            >
                                <i class=\"ti ti-bell ti-md\"></i>
                                <span class=\"badge bg-danger rounded-pill badge-notifications\">5</span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-end py-0\">
                                <li class=\"dropdown-menu-header border-bottom\">
                                    <div class=\"dropdown-header d-flex align-items-center py-3\">
                                        <h5 class=\"text-body mb-0 me-auto\">Notification</h5>
                                        <a
                                                href=\"javascript:void(0)\"
                                                class=\"dropdown-notifications-all text-body\"
                                                data-bs-toggle=\"tooltip\"
                                                data-bs-placement=\"top\"
                                                title=\"Mark all as read\"
                                        ><i class=\"ti ti-mail-opened fs-4\"></i
                                            ></a>
                                    </div>
                                </li>
                                <li class=\"dropdown-notifications-list scrollable-container\">
                                    <ul class=\"list-group list-group-flush\">
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <img src=\"../../Back/img/avatars/1.png\" alt
                                                             class=\"h-auto rounded-circle\"/>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Congratulation Lettie 🎉</h6>
                                                    <p class=\"mb-0\">Won the monthly best seller gold badge</p>
                                                    <small class=\"text-muted\">1h ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <span class=\"avatar-initial rounded-circle bg-label-danger\">CF</span>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Charles Franklin</h6>
                                                    <p class=\"mb-0\">Accepted your connection</p>
                                                    <small class=\"text-muted\">12hr ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <img src=\"../../Back/img/avatars/2.png\" alt
                                                             class=\"h-auto rounded-circle\"/>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">New Message ✉️</h6>
                                                    <p class=\"mb-0\">You have new message from Natalie</p>
                                                    <small class=\"text-muted\">1h ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-success\"
                                ><i class=\"ti ti-shopping-cart\"></i
                                    ></span>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Whoo! You have new order 🛒</h6>
                                                    <p class=\"mb-0\">ACME Inc. made new order \$1,154</p>
                                                    <small class=\"text-muted\">1 day ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <img src=\"../../Back/img/avatars/9.png\" alt
                                                             class=\"h-auto rounded-circle\"/>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Application has been approved 🚀</h6>
                                                    <p class=\"mb-0\">Your ABC project application has been approved.</p>
                                                    <small class=\"text-muted\">2 days ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-success\"
                                ><i class=\"ti ti-chart-pie\"></i
                                    ></span>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Monthly report is generated</h6>
                                                    <p class=\"mb-0\">July monthly financial report is generated</p>
                                                    <small class=\"text-muted\">3 days ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <img src=\"../../Back/img/avatars/5.png\" alt
                                                             class=\"h-auto rounded-circle\"/>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Send connection request</h6>
                                                    <p class=\"mb-0\">Peter sent you connection request</p>
                                                    <small class=\"text-muted\">4 days ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <img src=\"../../Back/img/avatars/6.png\" alt
                                                             class=\"h-auto rounded-circle\"/>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">New message from Jane</h6>
                                                    <p class=\"mb-0\">Your have new message from Jane</p>
                                                    <small class=\"text-muted\">5 days ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-warning\"
                                ><i class=\"ti ti-alert-triangle\"></i
                                    ></span>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">CPU is running high</h6>
                                                    <p class=\"mb-0\">CPU Utilization Percent is currently at 88.63%,</p>
                                                    <small class=\"text-muted\">5 days ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"dropdown-menu-footer border-top\">
                                    <a
                                            href=\"javascript:void(0);\"
                                            class=\"dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center\"
                                    >
                                        View all notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                          <!-- User -->
                        <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                            <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\"
                               data-bs-toggle=\"dropdown\">
                                <div class=\"avatar avatar-online\">
                                    <img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/avatars/image.jpg"), "html", null, true);
        echo "\" alt
                                         class=\"h-auto rounded-circle\"/>
                                </div>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"pages-account-settings-account.html\">
                                        <div class=\"d-flex\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <div class=\"avatar avatar-online\">
                                                    <img src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/avatars/image.jpg"), "html", null, true);
        echo "\" alt
                                                         class=\"h-auto rounded-circle\"/>
                                                </div>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <span class=\"fw-semibold d-block\">John Doe</span>
                                                <small class=\"text-muted\">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"dropdown-divider\"></div>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\"  >
                                        <i class=\"ti ti-user-check me-2 ti-sm\"></i>
                                        <span class=\"align-middle\">Mon profile</span>
                                    </a>
                                </li>

                                <li>
                                  <!--  <a href=\"/evenement/\" class=\"dropdown-item\"> -->
    <i class=\"ti ti-logout me-2 ti-sm\"></i>
    <span class=\"align-middle\">Déconnecté</span>
</a>


<script>
    function closeCurrentTab() {
        window.close(); // Cette ligne ferme l'onglet courant
    }
</script>

                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
                <div class=\"position-fixed top-50 end-0 p-3\" style=\"z-index: 9999\">
                    ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 528, $this->source); })()), "flashes", ["success"], "method", false, false, false, 528));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 529
            echo "                        <div class=\"liveToast\">
                        <div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                            <div class=\"toast-header\">
                                <i class=\"ti ti-bell ti-xs me-2 text-primary\"></i>
                                <div class=\"me-auto fw-semibold\">Succès</div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"toast-body\">";
            // line 536
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
                        </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "
                    ";
        // line 541
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 541, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 541));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 542
            echo "
                    <div class=\"liveToast\">
                        <div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-autohide=\"true\">
                            <div class=\"toast-header\">
                                <i class=\"ti ti-exclamation-mark ti-xs me-2 text-danger\"></i>
                                <div class=\"me-auto fw-semibold text-black-50\">Erreur</div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"toast-body text-black\">";
            // line 550
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 554
        echo "                </div>




                <!-- Search Small Screens -->
                <div class=\"navbar-search-wrapper search-input-wrapper d-none\">
                    <input
                            type=\"text\"
                            class=\"form-control search-input container-xxl border-0\"
                            placeholder=\"Search...\"
                            aria-label=\"Search...\"
                    />
                    <i class=\"ti ti-x ti-sm search-toggler cursor-pointer\"></i>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class=\"content-wrapper\">
                <div class=\"container-xxl flex-grow-1 container-p-y\">

                    ";
        // line 577
        $this->displayBlock('body', $context, $blocks);
        // line 580
        echo "
                </div>

                <!-- Footer -->
                <footer class=\"content-footer footer bg-footer-theme\">
                    <div class=\"container-xxl\">
                        <div
                                class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\"
                        >
                            <div>

                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                <a target=\"_blank\" class=\"fw-semibold\">Wakkel Food</a>
                            </div>

                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class=\"content-backdrop fade\"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class=\"layout-overlay layout-menu-toggle\"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class=\"drag-target\"></div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js\"></script>

<script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/popper/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/hammer/hammer.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/i18n/i18n.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/js/menu.js"), "html", null, true);
        echo "\"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/swiper/swiper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        echo "\"></script>

<!-- Main JS -->
<script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/main.js"), "html", null, true);
        echo "\"></script>

<!-- Page JS -->

<script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/popper/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/charts-apex.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/charts-chartjs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/cards-statistics.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/dashboards-analytics.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/toastr/toastr.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js\"></script>
<script>
    \$(document).ready(function(){
        document.querySelectorAll('.toast')
            .forEach(toastNode => {
                const toast = new bootstrap.Toast(toastNode, {
                    autohide: true
                })

                toast.show()
            })
    });
</script>
";
        // line 662
        $this->displayBlock('java_scripts', $context, $blocks);
        // line 665
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 577
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 578
        echo "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 662
    public function block_java_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "java_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "java_scripts"));

        // line 663
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back&front/back.html.twig";
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
        return array (  982 => 663,  972 => 662,  961 => 578,  951 => 577,  940 => 665,  938 => 662,  921 => 648,  917 => 647,  913 => 646,  909 => 645,  905 => 644,  901 => 643,  897 => 642,  890 => 638,  884 => 635,  880 => 634,  876 => 633,  872 => 632,  865 => 628,  860 => 626,  856 => 625,  852 => 624,  847 => 622,  843 => 621,  839 => 620,  835 => 619,  831 => 618,  791 => 580,  789 => 577,  764 => 554,  754 => 550,  744 => 542,  740 => 541,  737 => 540,  727 => 536,  718 => 529,  714 => 528,  670 => 487,  657 => 477,  355 => 180,  340 => 170,  330 => 165,  320 => 160,  309 => 154,  290 => 140,  278 => 133,  267 => 127,  258 => 121,  252 => 120,  235 => 108,  229 => 104,  226 => 103,  223 => 102,  220 => 101,  218 => 100,  203 => 88,  181 => 69,  174 => 65,  165 => 59,  161 => 58,  156 => 56,  151 => 54,  146 => 52,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  118 => 45,  114 => 44,  110 => 43,  104 => 40,  100 => 39,  96 => 38,  90 => 35,  86 => 34,  82 => 33,  69 => 23,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html
        lang=\"en\"
        class=\"light-style layout-navbar-fixed layout-menu-fixed\"
        dir=\"ltr\"
        data-theme=\"theme-default\"
        data-Back-path=\"../../Back/\"
        data-template=\"vertical-menu-template-no-customizer\"
>
<head>
    <meta charset=\"utf-8\"/>
    <meta
            name=\"viewport\"
            content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"
    />

    <title>Wakkel Food</title>

    <meta name=\"description\" content=\"\"/>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"{{asset('Main/img/LOGO_PNG.png')}}\">
    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"/>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin/>
    <link
            href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap\"
            rel=\"stylesheet\"
    />

    <!-- Icons -->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/fonts/fontawesome.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/fonts/tabler-icons.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/fonts/flag-icons.css') }}\"/>

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/css/rtl/core.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/css/rtl/theme-default.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/css/demo.css') }}\"/>

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/node-waves/node-waves.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/typeahead-js/typeahead.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/apex-charts/apex-charts.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/swiper/swiper.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/sweetalert2/sweetalert2.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/apex-charts/apex-charts.css\"') }}\"/>

    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}\"/>

    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/css/pages/page-auth.css') }}\"/>
    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/css/pages/cards-advance.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendor/libs/bs-stepper/bs-stepper.css') }}\"/>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\"
          rel=\"stylesheet\"/>

    <!-- Helpers -->
    <script src=\"{{ asset('Back/vendor/js/helpers.js') }}\"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=\"{{ asset('Back/js/config.js') }}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>


</head>

<body>

<!-- Layout wrapper -->

<div class=\"layout-wrapper layout-content-navbar\">
    <div class=\"layout-container\">
        <!-- Menu -->

        <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">
            <div class=\"app-brand demo\">
                <a class=\"app-brand-link\">

                  <span class=\"app-brand-text demo menu-text fw-bold\" style=\"display: flex; align-items: center;\">
    <img src=\"{{ asset('Main/img/LOGO_PNG.png') }}\" width=\"40\" height=\"40\" style=\"margin-right: 10px;\" alt=\"Logo\">
    Wakkel Food
</span>


                <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
                    <i class=\"ti menu-toggle-icon d-none d-xl-block ti-sm align-middle\"></i>
                    <i class=\"ti ti-x d-block d-xl-none ti-sm align-middle\"></i>
                </a>
            </div>


            {% set current = '' %}
            {% if( currentItem is defined ) %}
            {% set current = currentItem %}
            {% endif %}


            <ul class=\"menu-inner py-1\">
                <!-- Dashboards -->
                <li class=\"menu-item {% if(current == 'admin_home') %}active {% endif %}\">
                    <a class=\"menu-link\">
                        <i class=\"menu-icon tf-icons ti ti-smart-home\"></i>
                        <div>Dashborad</div>
                    </a>
                </li>
                <ul class=\"menu-inner py-1\">
                

        </li>
        

    <li class=\"menu-item {% if current == 'admin_home' %}active{% endif %}\">
    <a href=\"{{ path('app_back') }}\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-user\"></i>
        <div>Users</div>
    </a>
</li>

<li class=\"menu-item {% if current == 'admin_home' %}active{% endif %}\">
    <a href=\"/evenement/\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-calendar-alt\"></i>
        <div>Evenements</div>
    </a>
</li>
<li class=\"menu-item {% if current == 'admin_home' %}active{% endif %}\">
    <a href=\"/participation/\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-handshake\"></i>
        <div>Participations</div>
    </a>
</li>
        
                <li class=\"menu-item {% if(current == 'contrat_index')%}active {% endif %}\">
                    <a  class=\"menu-link\">
                        <i class=\"menu-icon tf-icons ti ti-file\"></i>
                        <div>Compte</div>
                    </a>
                </li>


                <li class=\"menu-item\">
                    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                        <i class=\"menu-icon tf-icons ti ti-settings\"></i>
                        <div data-i18n=\"Paramétrage\">Paramétrage</div>
                    </a>
                    <ul class=\"menu-sub\">
                        <li class=\"menu-item {% if(current == 'app_modele_contrat') %}active {% endif %}\">

                            <a  class=\"menu-link\">
                                <div>Transaction</div>
                            </a>
                        </li>
                        <li class=\"menu-item {% if(current == 'app_entreprise') %}active {% endif %}\">
                            <a class=\"menu-link\">
                                <div>Carte Bancaire</div>
                            </a>
                        </li>
                        <li class=\"menu-item {% if(current == 'app_user') %}active {% endif %}\">
                            <a  class=\"menu-link\">
                                <div>Crédit</div>
                            </a>
                        </li>
                        <li class=\"menu-item {% if(current == 'app_workflow') %}active {% endif %}\">
                            <a class=\"menu-link\">
                                <div>Assurance</div>
                            </a>
                        </li>
                       
                    </ul>
                </li>


                <li class=\"menu-item {% if(current == 'statistiques')%}active {% endif %}\">
                    <a  class=\"menu-link\">
                        <i class=\"menu-icon tf-icons ti ti-table\"></i>
                        <div data-i18n=\"Stat et Rapports\">Stat et Rapports</div>
                    </a>
                </li>
            </ul>

        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class=\"layout-page\">
            <!-- Navbar -->

            <nav
                    class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\"
                    id=\"layout-navbar\"
            >
                <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none\">
                    <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
                        <i class=\"ti ti-menu-2 ti-sm\"></i>
                    </a>
                </div>

                <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">
                    <!-- Search -->
                    <div class=\"navbar-nav align-items-center\">
                        <div class=\"nav-item navbar-search-wrapper mb-0\">
                            <a class=\"nav-item nav-link search-toggler d-flex align-items-center px-0\"
                               href=\"javascript:void(0);\">
                                <i class=\"ti ti-search ti-md me-2\"></i>
                                <span class=\"d-none d-md-inline-block text-muted\">Search (Ctrl+/)</span>
                            </a>
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class=\"navbar-nav flex-row align-items-center ms-auto\">


                         <!-- Notification -->
                        <li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1\">
                            <a
                                    class=\"nav-link dropdown-toggle hide-arrow\"
                                    href=\"javascript:void(0);\"
                                    data-bs-toggle=\"dropdown\"
                                    data-bs-auto-close=\"outside\"
                                    aria-expanded=\"false\"
                            >
                                <i class=\"ti ti-bell ti-md\"></i>
                                <span class=\"badge bg-danger rounded-pill badge-notifications\">5</span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-end py-0\">
                                <li class=\"dropdown-menu-header border-bottom\">
                                    <div class=\"dropdown-header d-flex align-items-center py-3\">
                                        <h5 class=\"text-body mb-0 me-auto\">Notification</h5>
                                        <a
                                                href=\"javascript:void(0)\"
                                                class=\"dropdown-notifications-all text-body\"
                                                data-bs-toggle=\"tooltip\"
                                                data-bs-placement=\"top\"
                                                title=\"Mark all as read\"
                                        ><i class=\"ti ti-mail-opened fs-4\"></i
                                            ></a>
                                    </div>
                                </li>
                                <li class=\"dropdown-notifications-list scrollable-container\">
                                    <ul class=\"list-group list-group-flush\">
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <img src=\"../../Back/img/avatars/1.png\" alt
                                                             class=\"h-auto rounded-circle\"/>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Congratulation Lettie 🎉</h6>
                                                    <p class=\"mb-0\">Won the monthly best seller gold badge</p>
                                                    <small class=\"text-muted\">1h ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <span class=\"avatar-initial rounded-circle bg-label-danger\">CF</span>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Charles Franklin</h6>
                                                    <p class=\"mb-0\">Accepted your connection</p>
                                                    <small class=\"text-muted\">12hr ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <img src=\"../../Back/img/avatars/2.png\" alt
                                                             class=\"h-auto rounded-circle\"/>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">New Message ✉️</h6>
                                                    <p class=\"mb-0\">You have new message from Natalie</p>
                                                    <small class=\"text-muted\">1h ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-success\"
                                ><i class=\"ti ti-shopping-cart\"></i
                                    ></span>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Whoo! You have new order 🛒</h6>
                                                    <p class=\"mb-0\">ACME Inc. made new order \$1,154</p>
                                                    <small class=\"text-muted\">1 day ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <img src=\"../../Back/img/avatars/9.png\" alt
                                                             class=\"h-auto rounded-circle\"/>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Application has been approved 🚀</h6>
                                                    <p class=\"mb-0\">Your ABC project application has been approved.</p>
                                                    <small class=\"text-muted\">2 days ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-success\"
                                ><i class=\"ti ti-chart-pie\"></i
                                    ></span>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Monthly report is generated</h6>
                                                    <p class=\"mb-0\">July monthly financial report is generated</p>
                                                    <small class=\"text-muted\">3 days ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <img src=\"../../Back/img/avatars/5.png\" alt
                                                             class=\"h-auto rounded-circle\"/>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">Send connection request</h6>
                                                    <p class=\"mb-0\">Peter sent you connection request</p>
                                                    <small class=\"text-muted\">4 days ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                                        <img src=\"../../Back/img/avatars/6.png\" alt
                                                             class=\"h-auto rounded-circle\"/>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">New message from Jane</h6>
                                                    <p class=\"mb-0\">Your have new message from Jane</p>
                                                    <small class=\"text-muted\">5 days ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                                            <div class=\"d-flex\">
                                                <div class=\"flex-shrink-0 me-3\">
                                                    <div class=\"avatar\">
                                <span class=\"avatar-initial rounded-circle bg-label-warning\"
                                ><i class=\"ti ti-alert-triangle\"></i
                                    ></span>
                                                    </div>
                                                </div>
                                                <div class=\"flex-grow-1\">
                                                    <h6 class=\"mb-1\">CPU is running high</h6>
                                                    <p class=\"mb-0\">CPU Utilization Percent is currently at 88.63%,</p>
                                                    <small class=\"text-muted\">5 days ago</small>
                                                </div>
                                                <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"
                                                    ><span class=\"badge badge-dot\"></span
                                                        ></a>
                                                    <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"
                                                    ><span class=\"ti ti-x\"></span
                                                        ></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"dropdown-menu-footer border-top\">
                                    <a
                                            href=\"javascript:void(0);\"
                                            class=\"dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center\"
                                    >
                                        View all notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                          <!-- User -->
                        <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
                            <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\"
                               data-bs-toggle=\"dropdown\">
                                <div class=\"avatar avatar-online\">
                                    <img src=\"{{ asset('Back/img/avatars/image.jpg') }}\" alt
                                         class=\"h-auto rounded-circle\"/>
                                </div>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"pages-account-settings-account.html\">
                                        <div class=\"d-flex\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <div class=\"avatar avatar-online\">
                                                    <img src=\"{{ asset('Back/img/avatars/image.jpg') }}\" alt
                                                         class=\"h-auto rounded-circle\"/>
                                                </div>
                                            </div>
                                            <div class=\"flex-grow-1\">
                                                <span class=\"fw-semibold d-block\">John Doe</span>
                                                <small class=\"text-muted\">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class=\"dropdown-divider\"></div>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\"  >
                                        <i class=\"ti ti-user-check me-2 ti-sm\"></i>
                                        <span class=\"align-middle\">Mon profile</span>
                                    </a>
                                </li>

                                <li>
                                  <!--  <a href=\"/evenement/\" class=\"dropdown-item\"> -->
    <i class=\"ti ti-logout me-2 ti-sm\"></i>
    <span class=\"align-middle\">Déconnecté</span>
</a>


<script>
    function closeCurrentTab() {
        window.close(); // Cette ligne ferme l'onglet courant
    }
</script>

                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
                <div class=\"position-fixed top-50 end-0 p-3\" style=\"z-index: 9999\">
                    {% for flashMessage in app.flashes('success') %}
                        <div class=\"liveToast\">
                        <div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                            <div class=\"toast-header\">
                                <i class=\"ti ti-bell ti-xs me-2 text-primary\"></i>
                                <div class=\"me-auto fw-semibold\">Succès</div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"toast-body\">{{ flashMessage }}</div>
                        </div>
                        </div>
                    {% endfor %}

                    {% for flashMessage in app.flashes('danger') %}

                    <div class=\"liveToast\">
                        <div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-autohide=\"true\">
                            <div class=\"toast-header\">
                                <i class=\"ti ti-exclamation-mark ti-xs me-2 text-danger\"></i>
                                <div class=\"me-auto fw-semibold text-black-50\">Erreur</div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"toast-body text-black\">{{ flashMessage }}</div>
                        </div>
                    </div>
                    {% endfor %}
                </div>




                <!-- Search Small Screens -->
                <div class=\"navbar-search-wrapper search-input-wrapper d-none\">
                    <input
                            type=\"text\"
                            class=\"form-control search-input container-xxl border-0\"
                            placeholder=\"Search...\"
                            aria-label=\"Search...\"
                    />
                    <i class=\"ti ti-x ti-sm search-toggler cursor-pointer\"></i>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class=\"content-wrapper\">
                <div class=\"container-xxl flex-grow-1 container-p-y\">

                    {% block body %}

                    {% endblock %}

                </div>

                <!-- Footer -->
                <footer class=\"content-footer footer bg-footer-theme\">
                    <div class=\"container-xxl\">
                        <div
                                class=\"footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column\"
                        >
                            <div>

                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                <a target=\"_blank\" class=\"fw-semibold\">Wakkel Food</a>
                            </div>

                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class=\"content-backdrop fade\"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class=\"layout-overlay layout-menu-toggle\"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class=\"drag-target\"></div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js\"></script>

<script src=\"{{ asset('Back/vendor/libs/jquery/jquery.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/libs/popper/popper.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/js/bootstrap.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/libs/node-waves/node-waves.js') }}\"></script>

<script src=\"{{ asset('Back/vendor/libs/hammer/hammer.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/libs/i18n/i18n.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/libs/typeahead-js/typeahead.js') }}\"></script>

<script src=\"{{ asset('Back/vendor/js/menu.js') }}\"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src=\"{{ asset('Back/vendor/libs/apex-charts/apexcharts.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/libs/swiper/swiper.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/libs/sweetalert2/sweetalert2.js') }}\"></script>

<!-- Main JS -->
<script src=\"{{ asset('Back/js/main.js') }}\"></script>

<!-- Page JS -->

<script src=\"{{ asset('Back/vendor/libs/popper/popper.js') }}\"></script>
<script src=\"{{ asset('Back/js/charts-apex.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/libs/apex-charts/apexcharts.js') }}\"></script>
<script src=\"{{ asset('Back/js/charts-chartjs.js') }}\"></script>
<script src=\"{{ asset('Back/js/cards-statistics.js') }}\"></script>
<script src=\"{{ asset('Back/js/dashboards-analytics.js') }}\"></script>
<script src=\"{{ asset('Back/vendor/libs/toastr/toastr.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js\"></script>
<script>
    \$(document).ready(function(){
        document.querySelectorAll('.toast')
            .forEach(toastNode => {
                const toast = new bootstrap.Toast(toastNode, {
                    autohide: true
                })

                toast.show()
            })
    });
</script>
{% block java_scripts %}

{% endblock %}
</body>
</html>", "back&front/back.html.twig", "C:\\Users\\user\\OneDrive\\Documents\\Bureau\\Workshops-Pidev-master\\templates\\back&front\\back.html.twig");
    }
}
