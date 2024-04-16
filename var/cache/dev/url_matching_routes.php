<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Main' => [[['_route' => 'index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'display_admin', '_controller' => 'App\\Controller\\MainController::indexAdmin'], null, null, null, false, false, null]],
        '/plat/new' => [[['_route' => 'app_plat_new', '_controller' => 'App\\Controller\\PlatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restaurant_category/new' => [[['_route' => 'app_restaurant_category_new', '_controller' => 'App\\Controller\\RestaurantCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restaurant/new' => [[['_route' => 'restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/restaurant' => [[['_route' => 'app_restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], null, ['GET' => 0], null, false, false, null]],
        '/restaurant_category' => [[['_route' => 'app_restaurant_category_index', '_controller' => 'App\\Controller\\RestaurantCategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/plat' => [[['_route' => 'app_plat_index', '_controller' => 'App\\Controller\\PlatController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/commande/([^/]++)(?'
                    .'|(*:28)'
                    .'|/edit(*:40)'
                    .'|(*:47)'
                .')'
                .'|/plat/([^/]++)(?'
                    .'|/(?'
                        .'|delete(*:82)'
                        .'|edit(*:93)'
                    .')'
                    .'|(*:101)'
                .')'
                .'|/restaurant(?'
                    .'|_category/([^/]++)(?'
                        .'|(*:145)'
                    .')'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:174)'
                            .'|(*:182)'
                        .')'
                        .'|new(*:194)'
                        .'|([^/]++)(*:210)'
                        .'|category/([^/]++)/edit(*:240)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:281)'
                    .'|wdt/([^/]++)(*:301)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:347)'
                            .'|router(*:361)'
                            .'|exception(?'
                                .'|(*:381)'
                                .'|\\.css(*:394)'
                            .')'
                        .')'
                        .'|(*:404)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['idCommande'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['idCommande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['idCommande'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['idPlat'], ['POST' => 0], null, false, false, null]],
        93 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        101 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        145 => [
            [['_route' => 'app_restaurant_category_show', '_controller' => 'App\\Controller\\RestaurantCategoryController::show'], ['idCategory'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_restaurant_category_delete', '_controller' => 'App\\Controller\\RestaurantCategoryController::delete'], ['idCategory'], ['POST' => 0], null, false, true, null],
        ],
        174 => [[['_route' => 'app_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        182 => [[['_route' => 'app_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        194 => [[['_route' => 'app_restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'app_restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'app_restaurant_category_edit', '_controller' => 'App\\Controller\\RestaurantCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        281 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        301 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        347 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        361 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        381 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        394 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        404 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
