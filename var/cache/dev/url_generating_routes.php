<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'index' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/Main']], [], [], []],
    'display_admin' => [[], ['_controller' => 'App\\Controller\\MainController::indexAdmin'], [], [['text', '/admin']], [], [], []],
    'app_plat_new' => [[], ['_controller' => 'App\\Controller\\PlatController::new'], [], [['text', '/plat/new']], [], [], []],
    'app_plat_delete' => [['idPlat'], ['_controller' => 'App\\Controller\\PlatController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'idPlat', true], ['text', '/plat']], [], [], []],
    'app_restaurant_category_new' => [[], ['_controller' => 'App\\Controller\\RestaurantCategoryController::new'], [], [['text', '/restaurant_category/new']], [], [], []],
    'app_restaurant_category_show' => [['idCategory'], ['_controller' => 'App\\Controller\\RestaurantCategoryController::show'], [], [['variable', '/', '[^/]++', 'idCategory', true], ['text', '/restaurant_category']], [], [], []],
    'app_restaurant_category_delete' => [['idCategory'], ['_controller' => 'App\\Controller\\RestaurantCategoryController::delete'], [], [['variable', '/', '[^/]++', 'idCategory', true], ['text', '/restaurant_category']], [], [], []],
    'restaurant_new' => [[], ['_controller' => 'App\\Controller\\RestaurantController::new'], [], [['text', '/restaurant/new']], [], [], []],
    'app_restaurant_edit' => [['id'], ['_controller' => 'App\\Controller\\RestaurantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/restaurant']], [], [], []],
    'app_restaurant_delete' => [['id'], ['_controller' => 'App\\Controller\\RestaurantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/restaurant']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_restaurant_index' => [[], ['_controller' => 'App\\Controller\\RestaurantController::index'], [], [['text', '/restaurant']], [], [], []],
    'app_restaurant_new' => [[], ['_controller' => 'App\\Controller\\RestaurantController::new'], [], [['text', '/restaurant/new']], [], [], []],
    'app_restaurant_show' => [['id'], ['_controller' => 'App\\Controller\\RestaurantController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/restaurant']], [], [], []],
    'app_restaurant_category_index' => [[], ['_controller' => 'App\\Controller\\RestaurantCategoryController::index'], [], [['text', '/restaurant_category']], [], [], []],
    'app_restaurant_category_edit' => [['id'], ['_controller' => 'App\\Controller\\RestaurantCategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/restaurant/category']], [], [], []],
    'app_plat_index' => [[], ['_controller' => 'App\\Controller\\PlatController::index'], [], [['text', '/plat']], [], [], []],
    'app_plat_show' => [['id'], ['_controller' => 'App\\Controller\\PlatController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/plat']], [], [], []],
    'app_plat_edit' => [['id'], ['_controller' => 'App\\Controller\\PlatController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/plat']], [], [], []],
];
