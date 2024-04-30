<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/statistics' => [[['_route' => 'app_statistics', '_controller' => 'App\\Controller\\CommandeController::statistics'], null, null, null, false, false, null]],
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
                .'|/commande/(?'
                    .'|([^/]++)(?'
                        .'|(*:31)'
                        .'|/edit(*:43)'
                        .'|(*:50)'
                    .')'
                    .'|generateCommandePdf/([^/]++)(*:86)'
                .')'
                .'|/plat/([^/]++)(?'
                    .'|/(?'
                        .'|delete(*:121)'
                        .'|edit(*:133)'
                    .')'
                    .'|(*:142)'
                .')'
                .'|/restaurant(?'
                    .'|_category/([^/]++)(?'
                        .'|(*:186)'
                    .')'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:215)'
                            .'|(*:223)'
                        .')'
                        .'|new(*:235)'
                        .'|([^/]++)(*:251)'
                        .'|category/([^/]++)/edit(*:281)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:322)'
                    .'|wdt/([^/]++)(*:342)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:388)'
                            .'|router(*:402)'
                            .'|exception(?'
                                .'|(*:422)'
                                .'|\\.css(*:435)'
                            .')'
                        .')'
                        .'|(*:445)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['idCommande'], ['GET' => 0], null, false, true, null]],
        43 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['idCommande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        50 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['idCommande'], ['POST' => 0], null, false, true, null]],
        86 => [[['_route' => 'generateCommandePdf', '_controller' => 'App\\Controller\\CommandeController::generateCommandePdf'], ['idCommande'], null, null, false, true, null]],
        121 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['idPlat'], ['POST' => 0], null, false, false, null]],
        133 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        142 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        186 => [
            [['_route' => 'app_restaurant_category_show', '_controller' => 'App\\Controller\\RestaurantCategoryController::show'], ['idCategory'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_restaurant_category_delete', '_controller' => 'App\\Controller\\RestaurantCategoryController::delete'], ['idCategory'], ['POST' => 0], null, false, true, null],
        ],
        215 => [[['_route' => 'app_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'app_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        251 => [[['_route' => 'app_restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        281 => [[['_route' => 'app_restaurant_category_edit', '_controller' => 'App\\Controller\\RestaurantCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        322 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        342 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        388 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        402 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        422 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        435 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        445 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
