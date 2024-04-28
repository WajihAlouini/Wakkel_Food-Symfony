<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\ClientController::back'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\ClientController::front'], null, null, null, false, false, null]],
        '/Main' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/create_account' => [[['_route' => 'app_createaccount', '_controller' => 'App\\Controller\\ClientController::createCompte'], null, null, null, false, false, null]],
        '/authenticate' => [[['_route' => 'app_authenticate', '_controller' => 'App\\Controller\\SecurityController::authenticate'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgotmdp' => [[['_route' => 'app_forgotmdp', '_controller' => 'App\\Controller\\ClientController::forgotmdp'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\ClientController::search'], null, null, null, false, false, null]],
        '/bannedCompte' => [[['_route' => 'banned_Compte', '_controller' => 'App\\Controller\\ClientController::bannedCompte'], null, null, null, false, false, null]],
        '/edit' => [[['_route' => 'edit_c', '_controller' => 'App\\Controller\\ClientController::editc'], null, null, null, false, false, null]],
        '/verifmdp' => [[['_route' => 'verif_mdp', '_controller' => 'App\\Controller\\ClientController::verifmdp'], null, null, null, false, false, null]],
        '/editprivacy' => [[['_route' => 'edit_privacy', '_controller' => 'App\\Controller\\ClientController::editprivacy'], null, null, null, false, false, null]],
        '/statistics' => [[['_route' => 'client_statistics', '_controller' => 'App\\Controller\\ClientController::clientStatistics'], null, null, null, false, false, null]],
        '/access-denied' => [[['_route' => 'access_denied', '_controller' => 'App\\Security\\AccessDeniedController::handle'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/c(?'
                    .'|lient/(?'
                        .'|delete/([^/]++)(*:198)'
                        .'|edit/([^/]++)(*:219)'
                        .'|ban/([^/]++)(*:239)'
                        .'|unban/([^/]++)(*:261)'
                    .')'
                    .'|onfirm(?'
                        .'|Sms/([^/]++)(*:291)'
                        .'|Email/([^/]++)(*:313)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'delete_client', '_controller' => 'App\\Controller\\ClientController::deleteClient'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'edit_client', '_controller' => 'App\\Controller\\ClientController::editClient'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'ban_client', '_controller' => 'App\\Controller\\ClientController::banClient'], ['id'], null, null, false, true, null]],
        261 => [[['_route' => 'unban_client', '_controller' => 'App\\Controller\\ClientController::unbanClient'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'confirm_sms', '_controller' => 'App\\Controller\\ClientController::confirmSms'], ['id'], null, null, false, true, null]],
        313 => [
            [['_route' => 'confirm_email', '_controller' => 'App\\Controller\\ClientController::confirmEmail'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
