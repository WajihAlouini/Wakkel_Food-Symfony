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

/* back&front/back.html.twig */
class __TwigTemplate_e956313d8e35df1db05fa98701a566d3 extends Template
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
        yield "<!DOCTYPE html>

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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        yield "\">
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/fonts/fontawesome.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/fonts/tabler-icons.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/fonts/flag-icons.css"), "html", null, true);
        yield "\"/>

    <!-- Core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/css/rtl/core.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/css/rtl/theme-default.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/css/demo.css"), "html", null, true);
        yield "\"/>

    <!-- Vendors CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/node-waves/node-waves.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/typeahead-js/typeahead.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 46
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/apex-charts/apex-charts.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/swiper/swiper.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/datatables-bs5/datatables.bootstrap5.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 49
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/sweetalert2/sweetalert2.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/apex-charts/apex-charts.css\""), "html", null, true);
        yield "\"/>

    <link rel=\"stylesheet\" href=\"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css"), "html", null, true);
        yield "\"/>

    <link rel=\"stylesheet\" href=\"";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\"/>
    <!-- Page CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 58
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/css/pages/cards-advance.css"), "html", null, true);
        yield "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/bs-stepper/bs-stepper.css"), "html", null, true);
        yield "\"/>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\"
          rel=\"stylesheet\"/>

    <!-- Helpers -->
    <script src=\"";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=\"";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/config.js"), "html", null, true);
        yield "\"></script>
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/LOGO_PNG.png"), "html", null, true);
        yield "\" width=\"40\" height=\"40\" style=\"margin-right: 10px;\" alt=\"Logo\">
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
        yield "            ";
        if (array_key_exists("currentItem", $context)) {
            // line 102
            yield "            ";
            $context["current"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 102, $this->source); })());
            // line 103
            yield "            ";
        }
        // line 104
        yield "

            <ul class=\"menu-inner py-1\">
                <!-- Dashboards -->
                <li class=\"menu-item ";
        // line 108
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 108, $this->source); })()) == "admin_home")) {
            yield "active ";
        }
        yield "\">
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
            yield "active";
        }
        yield "\">
    <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        yield "\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-user\"></i>
        <div>Users</div>
    </a>
</li>

<li class=\"menu-item\">
                    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                        <i class=\"menu-icon tf-icons ti ti-settings\"></i>
                        <div data-i18n=\"Liste gestion restaurants\"></div>
                    </a>
                    <ul class=\"menu-sub\">
                        <li class=\"menu-item ";
        // line 133
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 133, $this->source); })()) == "app_modele_contrat")) {
            yield "active ";
        }
        yield "\">

                            <a class=\"menu-link\" href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_index");
        yield "\">
                            <div>Plats</div>
                            </a>

                        </li>

                        <li class=\"menu-item ";
        // line 141
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 141, $this->source); })()) == "app_modele_contrat")) {
            yield "active ";
        }
        yield "\">
                        <a class=\"menu-link\" href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_category_index");
        yield "\">
                            <div>Category</div>
                            </a>
                        </li>

                        <li class=\"menu-item ";
        // line 147
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 147, $this->source); })()) == "app_modele_contrat")) {
            yield "active ";
        }
        yield "\">
                        <a class=\"menu-link\" href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_index");
        yield "\">
                            <div>Restaurant</div>
                            </a>
                        </li>

                    </ul>
                </li>
                

<li class=\"menu-item ";
        // line 157
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 157, $this->source); })()) == "admin_home")) {
            yield "active";
        }
        yield "\">
    <a href=\"/evenement/\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-calendar-alt\"></i>
        <div>Evenements</div>
    </a>
</li>

<li class=\"menu-item ";
        // line 164
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 164, $this->source); })()) == "admin_home")) {
            yield "active";
        }
        yield "\">
    <a href=\"/participation/\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-handshake\"></i>
        <div>Participations</div>
    </a>
</li>

<li class=\"menu-item ";
        // line 171
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 171, $this->source); })()) == "admin_home")) {
            yield "active";
        }
        yield "\">
    <a href=\"/evaluation/\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-handshake\"></i>
        <div>Evaluations</div>
    </a>
</li>

<li class=\"menu-item ";
        // line 178
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 178, $this->source); })()) == "admin_home")) {
            yield "active";
        }
        yield "\">
    <a href=\"/reclamation/\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-handshake\"></i>
        <div>Reclamations</div>
    </a>
</li>

                <li class=\"menu-item ";
        // line 185
        if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 185, $this->source); })()) == "statistiques")) {
            yield "active ";
        }
        yield "\">
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
        // line 472
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/defaultImageUser.png"), "html", null, true);
        yield "\" alt
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
        // line 482
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Main/img/defaultImageUser.png"), "html", null, true);
        yield "\" alt
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
                                    <a href=\"";
        // line 504
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"dropdown-item\">
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
        // line 523
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 523, $this->source); })()), "flashes", ["success"], "method", false, false, false, 523));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 524
            yield "                        <div class=\"liveToast\">
                        <div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                            <div class=\"toast-header\">
                                <i class=\"ti ti-bell ti-xs me-2 text-primary\"></i>
                                <div class=\"me-auto fw-semibold\">Succès</div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"toast-body\">";
            // line 531
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flashMessage"], "html", null, true);
            yield "</div>
                        </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        yield "
                    ";
        // line 536
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 536, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 536));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 537
            yield "
                    <div class=\"liveToast\">
                        <div class=\"toast\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-autohide=\"true\">
                            <div class=\"toast-header\">
                                <i class=\"ti ti-exclamation-mark ti-xs me-2 text-danger\"></i>
                                <div class=\"me-auto fw-semibold text-black-50\">Erreur</div>
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                            </div>
                            <div class=\"toast-body text-black\">";
            // line 545
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["flashMessage"], "html", null, true);
            yield "</div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        yield "                </div>




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
        // line 572
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 575
        yield "
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
        // line 613
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 614
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 615
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 616
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 617
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/node-waves/node-waves.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 619
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/hammer/hammer.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 620
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/i18n/i18n.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 621
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/typeahead-js/typeahead.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 623
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src=\"";
        // line 627
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 628
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/swiper/swiper.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 629
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 630
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>

<!-- Main JS -->
<script src=\"";
        // line 633
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/main.js"), "html", null, true);
        yield "\"></script>

<!-- Page JS -->

<script src=\"";
        // line 637
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 638
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/charts-apex.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 639
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 640
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/charts-chartjs.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 641
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/cards-statistics.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 642
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/dashboards-analytics.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 643
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/vendor/libs/toastr/toastr.js"), "html", null, true);
        yield "\"></script>
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
        // line 657
        yield from $this->unwrap()->yieldBlock('java_scripts', $context, $blocks);
        // line 660
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 572
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 573
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 657
    public function block_java_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "java_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "java_scripts"));

        // line 658
        yield "
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
        return array (  993 => 658,  983 => 657,  971 => 573,  961 => 572,  948 => 660,  946 => 657,  929 => 643,  925 => 642,  921 => 641,  917 => 640,  913 => 639,  909 => 638,  905 => 637,  898 => 633,  892 => 630,  888 => 629,  884 => 628,  880 => 627,  873 => 623,  868 => 621,  864 => 620,  860 => 619,  855 => 617,  851 => 616,  847 => 615,  843 => 614,  839 => 613,  799 => 575,  797 => 572,  772 => 549,  762 => 545,  752 => 537,  748 => 536,  745 => 535,  735 => 531,  726 => 524,  722 => 523,  700 => 504,  675 => 482,  662 => 472,  370 => 185,  358 => 178,  346 => 171,  334 => 164,  322 => 157,  310 => 148,  304 => 147,  296 => 142,  290 => 141,  281 => 135,  274 => 133,  259 => 121,  253 => 120,  236 => 108,  230 => 104,  227 => 103,  224 => 102,  221 => 101,  219 => 100,  204 => 88,  182 => 69,  175 => 65,  166 => 59,  162 => 58,  157 => 56,  152 => 54,  147 => 52,  143 => 51,  139 => 50,  135 => 49,  131 => 48,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  111 => 43,  105 => 40,  101 => 39,  97 => 38,  91 => 35,  87 => 34,  83 => 33,  70 => 23,  46 => 1,);
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

<li class=\"menu-item\">
                    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
                        <i class=\"menu-icon tf-icons ti ti-settings\"></i>
                        <div data-i18n=\"Liste gestion restaurants\"></div>
                    </a>
                    <ul class=\"menu-sub\">
                        <li class=\"menu-item {% if(current == 'app_modele_contrat') %}active {% endif %}\">

                            <a class=\"menu-link\" href=\"{{ path('app_plat_index') }}\">
                            <div>Plats</div>
                            </a>

                        </li>

                        <li class=\"menu-item {% if(current == 'app_modele_contrat') %}active {% endif %}\">
                        <a class=\"menu-link\" href=\"{{ path('app_restaurant_category_index') }}\">
                            <div>Category</div>
                            </a>
                        </li>

                        <li class=\"menu-item {% if(current == 'app_modele_contrat') %}active {% endif %}\">
                        <a class=\"menu-link\" href=\"{{ path('app_restaurant_index') }}\">
                            <div>Restaurant</div>
                            </a>
                        </li>

                    </ul>
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

<li class=\"menu-item {% if current == 'admin_home' %}active{% endif %}\">
    <a href=\"/evaluation/\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-handshake\"></i>
        <div>Evaluations</div>
    </a>
</li>

<li class=\"menu-item {% if current == 'admin_home' %}active{% endif %}\">
    <a href=\"/reclamation/\" class=\"menu-link\">
        <i class=\"menu-icon fas fa-handshake\"></i>
        <div>Reclamations</div>
    </a>
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
                                    <img src=\"{{ asset('Main/img/defaultImageUser.png') }}\" alt
                                         class=\"h-auto rounded-circle\"/>
                                </div>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"pages-account-settings-account.html\">
                                        <div class=\"d-flex\">
                                            <div class=\"flex-shrink-0 me-3\">
                                                <div class=\"avatar avatar-online\">
                                                    <img src=\"{{ asset('Main/img/defaultImageUser.png') }}\" alt
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
                                    <a href=\"{{ path('app_login') }}\" class=\"dropdown-item\">
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
</html>
", "back&front/back.html.twig", "C:\\Users\\legion 5\\Desktop\\userprojet\\templates\\back&front\\back.html.twig");
    }
}
