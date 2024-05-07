<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\CommandeController::front'], null, null, null, false, false, null]],
        '/frontcommande' => [[['_route' => 'app_commande_front', '_controller' => 'App\\Controller\\CommandeController::frontcommande'], null, ['GET' => 0], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/statistics' => [[['_route' => 'app_statistics', '_controller' => 'App\\Controller\\CommandeController::statistics'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/plat/new' => [[['_route' => 'app_plat_new', '_controller' => 'App\\Controller\\PlatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restaurant_category/new' => [[['_route' => 'app_restaurant_category_new', '_controller' => 'App\\Controller\\RestaurantCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restaurant/new' => [[['_route' => 'restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/([^/]++)(*:16)'
                .'|/showfront/([^/]++)(*:42)'
                .'|/([^/]++)(?'
                    .'|/edit(*:66)'
                    .'|(*:73)'
                .')'
                .'|/generateCommandePdf/([^/]++)(*:110)'
                .'|/Main(*:123)'
                .'|/admin(*:137)'
                .'|/plat(?'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|delete(*:175)'
                            .'|edit(*:187)'
                        .')'
                        .'|(*:196)'
                    .')'
                    .'|(*:205)'
                .')'
                .'|/restaurant(?'
                    .'|_category(?'
                        .'|/([^/]++)(?'
                            .'|(*:252)'
                        .')'
                        .'|(*:261)'
                    .')'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:290)'
                            .'|(*:298)'
                        .')'
                        .'|new(*:310)'
                        .'|([^/]++)(*:326)'
                        .'|category/([^/]++)/edit(*:356)'
                    .')'
                    .'|(*:365)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:405)'
                    .'|wdt/([^/]++)(*:425)'
                    .'|profiler(?'
                        .'|(*:444)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:482)'
                                .'|router(*:496)'
                                .'|exception(?'
                                    .'|(*:516)'
                                    .'|\\.css(*:529)'
                                .')'
                            .')'
                            .'|(*:539)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        16 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['idCommande'], ['GET' => 0], null, false, true, null]],
        42 => [[['_route' => 'app_commande_showfront', '_controller' => 'App\\Controller\\CommandeController::showfront'], ['idCommande'], ['GET' => 0], null, false, true, null]],
        66 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['idCommande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        73 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['idCommande'], ['POST' => 0], null, false, true, null]],
        110 => [[['_route' => 'generateCommandePdf', '_controller' => 'App\\Controller\\CommandeController::generateCommandePdf'], ['idCommande'], null, null, false, true, null]],
        123 => [[['_route' => 'index', '_controller' => 'App\\Controller\\MainController::index'], [], null, null, false, false, null]],
        137 => [[['_route' => 'display_admin', '_controller' => 'App\\Controller\\MainController::indexAdmin'], [], null, null, false, false, null]],
        175 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['idPlat'], ['POST' => 0], null, false, false, null]],
        187 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        196 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'app_plat_index', '_controller' => 'App\\Controller\\PlatController::index'], [], ['GET' => 0], null, false, false, null]],
        252 => [
            [['_route' => 'app_restaurant_category_show', '_controller' => 'App\\Controller\\RestaurantCategoryController::show'], ['idCategory'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_restaurant_category_delete', '_controller' => 'App\\Controller\\RestaurantCategoryController::delete'], ['idCategory'], ['POST' => 0], null, false, true, null],
        ],
        261 => [[['_route' => 'app_restaurant_category_index', '_controller' => 'App\\Controller\\RestaurantCategoryController::index'], [], ['GET' => 0], null, false, false, null]],
        290 => [[['_route' => 'app_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        298 => [[['_route' => 'app_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        326 => [[['_route' => 'app_restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'app_restaurant_category_edit', '_controller' => 'App\\Controller\\RestaurantCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        365 => [[['_route' => 'app_restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], [], ['GET' => 0], null, false, false, null]],
        405 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        425 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        444 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        482 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        496 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        516 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        529 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        539 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
