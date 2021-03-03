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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/dash' => [[['_route' => 'dash', '_controller' => 'App\\Controller\\DashController::index'], null, null, null, false, false, null]],
        '/escapade' => [[['_route' => 'escapade', '_controller' => 'App\\Controller\\EscapadeController::index'], null, null, null, false, false, null]],
        '/evenet' => [[['_route' => 'evenet', '_controller' => 'App\\Controller\\EvenetController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'globale', '_controller' => 'App\\Controller\\GlobaleController::index'], null, null, null, false, false, null]],
        '/reclamationback' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamationback/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationfrontController::newrecla'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\SecurityController::new'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/reclamation(?'
                    .'|back/([^/]++)(?'
                        .'|(*:200)'
                        .'|/edit(*:213)'
                        .'|(*:221)'
                    .')'
                    .'|/([^/]++)(*:239)'
                .')'
                .'|/([^/]++)/myaccount(*:267)'
                .'|/user/([^/]++)(?'
                    .'|(*:292)'
                    .'|/edit(*:305)'
                    .'|(*:313)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idReclamation'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idReclamation'], ['DELETE' => 0], null, false, true, null]],
        239 => [[['_route' => 'editrecla', '_controller' => 'App\\Controller\\ReclamationfrontController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        267 => [[['_route' => 'editaccount', '_controller' => 'App\\Controller\\SecurityController::edit'], ['username'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        292 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['idUser'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['idUser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['idUser'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
