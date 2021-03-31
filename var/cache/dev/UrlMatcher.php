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
        '/backevent' => [[['_route' => 'backevent', '_controller' => 'App\\Controller\\BackeventController::index'], null, null, null, false, false, null]],
        '/dash' => [[['_route' => 'dash', '_controller' => 'App\\Controller\\DashController::index'], null, null, null, false, false, null]],
        '/escapade' => [[['_route' => 'escapade_index', '_controller' => 'App\\Controller\\EscapadeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/escapade/new' => [[['_route' => 'escapade_new', '_controller' => 'App\\Controller\\EscapadeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/escapadeescapade/recherche' => [[['_route' => 'rechercher', '_controller' => 'App\\Controller\\EscapadeController::recherche'], null, null, null, false, false, null]],
        '/evenement/evenement' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement_front', '_controller' => 'App\\Controller\\EvenementfrontController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evenet' => [[['_route' => 'evenet', '_controller' => 'App\\Controller\\EvenetController::index'], null, null, null, false, false, null]],
        '/frontmaison' => [[['_route' => 'frontmaison', '_controller' => 'App\\Controller\\FrontmaisonController::index'], null, ['GET' => 0], null, false, false, null]],
        '/add' => [[['_route' => 'reservationmaison_add', '_controller' => 'App\\Controller\\FrontmaisonController::newreservation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/searchfrontMaisondhote' => [[['_route' => 'searchfrontMaisondhote', '_controller' => 'App\\Controller\\FrontmaisonController::searchMaisondhote'], null, null, null, false, false, null]],
        '/frontvoiture' => [[['_route' => 'frontvoiture', '_controller' => 'App\\Controller\\FrontvoitureController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ajouter' => [[['_route' => 'detail', '_controller' => 'App\\Controller\\FrontvoitureController::ajouter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/searchfrontVoiture' => [[['_route' => 'searchfrontVoiture', '_controller' => 'App\\Controller\\FrontvoitureController::searchVoiture'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'globale', '_controller' => 'App\\Controller\\GlobaleController::index'], null, null, null, false, false, null]],
        '/locationv/locationvindex' => [[['_route' => 'locationv_index', '_controller' => 'App\\Controller\\LocationvController::index'], null, ['GET' => 0], null, false, false, null]],
        '/locationv/new' => [[['_route' => 'locationv_new', '_controller' => 'App\\Controller\\LocationvController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/maisondhote' => [[['_route' => 'maisondhote_index', '_controller' => 'App\\Controller\\MaisondhoteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/maisondhote/new' => [[['_route' => 'maisondhote_new', '_controller' => 'App\\Controller\\MaisondhoteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voiturepanier' => [[['_route' => 'paniervoiture', '_controller' => 'App\\Controller\\Panier2Controller::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/reclamationback' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamationback/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationfrontController::newrecla'], null, null, null, false, false, null]],
        '/reservationesc' => [[['_route' => 'reservationesc_index', '_controller' => 'App\\Controller\\ReservationescController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationesc/new' => [[['_route' => 'reservationesc_new', '_controller' => 'App\\Controller\\ReservationescController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservationescreservation/recherche' => [[['_route' => 'rechercherr', '_controller' => 'App\\Controller\\ReservationescController::recherche'], null, null, null, false, false, null]],
        '/reservationescreservationesc/list' => [[['_route' => 'list_index', '_controller' => 'App\\Controller\\ReservationescController::list'], null, ['GET' => 0], null, false, false, null]],
        '/reservationmaison' => [[['_route' => 'reservationmaison_index', '_controller' => 'App\\Controller\\ReservationmaisonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationmaison/listr' => [[['_route' => 'reservationmaison_list', '_controller' => 'App\\Controller\\ReservationmaisonController::listr'], null, ['GET' => 0], null, false, false, null]],
        '/reservationmaison/new' => [[['_route' => 'reservationmaison_new', '_controller' => 'App\\Controller\\ReservationmaisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\SecurityController::new'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/oubli-pass' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::oubliPass'], null, null, null, false, false, null]],
        '/sponsor/sponsor' => [[['_route' => 'sponsor_index', '_controller' => 'App\\Controller\\SponsorController::index'], null, ['GET' => 0], null, false, false, null]],
        '/sponsor/new' => [[['_route' => 'sponsor_new', '_controller' => 'App\\Controller\\SponsorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sponsor/ajout' => [[['_route' => 'sponsor_ajout', '_controller' => 'App\\Controller\\SponsorController::ajout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/thouraya/esca' => [[['_route' => 'thouraya', '_controller' => 'App\\Controller\\ThourayaController::index'], null, null, null, false, false, null]],
        '/thouraya/reserver' => [[['_route' => 'reserver', '_controller' => 'App\\Controller\\ThourayaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voiture/voitureindex' => [[['_route' => 'voiture_index', '_controller' => 'App\\Controller\\VoitureController::index'], null, ['GET' => 0], null, false, false, null]],
        '/voiture/new' => [[['_route' => 'voiture_new', '_controller' => 'App\\Controller\\VoitureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voiturevoiture/searchVoiture' => [[['_route' => 'searchVoiture', '_controller' => 'App\\Controller\\VoitureController::searchVoiture'], null, null, null, false, false, null]],
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
                .'|/e(?'
                    .'|scapade/([^/]++)(?'
                        .'|(*:193)'
                        .'|/edit(*:206)'
                        .'|(*:214)'
                    .')'
                    .'|venement/([^/]++)(?'
                        .'|(*:243)'
                        .'|/edit(*:256)'
                        .'|(*:264)'
                    .')'
                .')'
                .'|/locationv/([^/]++)(?'
                    .'|(*:296)'
                    .'|/edit(*:309)'
                    .'|(*:317)'
                .')'
                .'|/maisondhote/([^/]++)(?'
                    .'|(*:350)'
                    .'|/edit(?'
                        .'|(*:366)'
                        .'|Disponibilite(*:387)'
                    .')'
                    .'|(*:396)'
                .')'
                .'|/f(?'
                    .'|rontvoiture/([^/]++)/edit(*:435)'
                    .'|avoris/([^/]++)(*:458)'
                .')'
                .'|/panier/remove/([^/]++)(*:490)'
                .'|/supprimer/([^/]++)(*:517)'
                .'|/re(?'
                    .'|clamation(?'
                        .'|back/([^/]++)(?'
                            .'|(*:559)'
                            .'|/edit(*:572)'
                            .'|(*:580)'
                        .')'
                        .'|/([^/]++)(*:598)'
                    .')'
                    .'|servation(?'
                        .'|esc/([^/]++)(?'
                            .'|(*:634)'
                            .'|/edit(*:647)'
                            .'|(*:655)'
                        .')'
                        .'|maison/([^/]++)(?'
                            .'|(*:682)'
                            .'|/edit(*:695)'
                            .'|(*:703)'
                        .')'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/myaccount(*:736)'
                    .'|(*:744)'
                .')'
                .'|/reset_pass/([^/]++)(*:773)'
                .'|/s(?'
                    .'|ponsor/([^/]++)(?'
                        .'|(*:804)'
                        .'|/(?'
                            .'|edit(*:820)'
                            .'|modifier(*:836)'
                        .')'
                        .'|(*:845)'
                    .')'
                    .'|earchEscapade(*:867)'
                .')'
                .'|/admin/user/([^/]++)(?'
                    .'|(*:899)'
                    .'|/edit(*:912)'
                    .'|(*:920)'
                .')'
                .'|/voiture/([^/]++)(?'
                    .'|(*:949)'
                    .'|/edit(?'
                        .'|(*:965)'
                        .'|dispo(*:978)'
                    .')'
                    .'|(*:987)'
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
        193 => [[['_route' => 'escapade_show', '_controller' => 'App\\Controller\\EscapadeController::show'], ['id_esc'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'escapade_edit', '_controller' => 'App\\Controller\\EscapadeController::edit'], ['id_esc'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [[['_route' => 'escapade_delete', '_controller' => 'App\\Controller\\EscapadeController::delete'], ['id_esc'], ['DELETE' => 0], null, false, true, null]],
        243 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['idEvent'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['idEvent'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['idEvent'], ['DELETE' => 0], null, false, true, null]],
        296 => [[['_route' => 'locationv_show', '_controller' => 'App\\Controller\\LocationvController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'locationv_edit', '_controller' => 'App\\Controller\\LocationvController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        317 => [[['_route' => 'locationv_delete', '_controller' => 'App\\Controller\\LocationvController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        350 => [[['_route' => 'maisondhote_show', '_controller' => 'App\\Controller\\MaisondhoteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        366 => [[['_route' => 'maisondhote_edit', '_controller' => 'App\\Controller\\MaisondhoteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [[['_route' => 'maisondhote_editDisponibilite', '_controller' => 'App\\Controller\\MaisondhoteController::editDisponibilite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        396 => [[['_route' => 'maisondhote_delete', '_controller' => 'App\\Controller\\MaisondhoteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        435 => [[['_route' => 'frontvoiture_edit', '_controller' => 'App\\Controller\\Panier2Controller::add'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        458 => [[['_route' => 'panier_favoris', '_controller' => 'App\\Controller\\PanierController::favoris'], ['id_esc'], null, null, false, true, null]],
        490 => [[['_route' => 'voiture_remove', '_controller' => 'App\\Controller\\Panier2Controller::remove'], ['id'], null, null, false, true, null]],
        517 => [[['_route' => 'supprimer_favoris', '_controller' => 'App\\Controller\\PanierController::delete'], ['id_esc'], null, null, false, true, null]],
        559 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idReclamation'], ['GET' => 0], null, false, true, null]],
        572 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        580 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idReclamation'], ['DELETE' => 0], null, false, true, null]],
        598 => [[['_route' => 'editrecla', '_controller' => 'App\\Controller\\ReclamationfrontController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        634 => [[['_route' => 'reservationesc_show', '_controller' => 'App\\Controller\\ReservationescController::show'], ['ref'], ['GET' => 0], null, false, true, null]],
        647 => [[['_route' => 'reservationesc_edit', '_controller' => 'App\\Controller\\ReservationescController::edit'], ['ref'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        655 => [[['_route' => 'reservationesc_delete', '_controller' => 'App\\Controller\\ReservationescController::delete'], ['ref'], ['DELETE' => 0], null, false, true, null]],
        682 => [[['_route' => 'reservationmaison_show', '_controller' => 'App\\Controller\\ReservationmaisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        695 => [[['_route' => 'reservationmaison_edit', '_controller' => 'App\\Controller\\ReservationmaisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        703 => [[['_route' => 'reservationmaison_delete', '_controller' => 'App\\Controller\\ReservationmaisonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        736 => [[['_route' => 'editaccount', '_controller' => 'App\\Controller\\SecurityController::edit'], ['username'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        744 => [[['_route' => 'user_profil', '_controller' => 'App\\Controller\\SecurityController::show'], ['username'], ['GET' => 0], null, false, true, null]],
        773 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        804 => [[['_route' => 'sponsor_show', '_controller' => 'App\\Controller\\SponsorController::show'], ['refSponsor'], ['GET' => 0], null, false, true, null]],
        820 => [[['_route' => 'sponsor_edit', '_controller' => 'App\\Controller\\SponsorController::edit'], ['refSponsor'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        836 => [[['_route' => 'sponsor_modifier', '_controller' => 'App\\Controller\\SponsorController::modifier'], ['cin'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        845 => [[['_route' => 'sponsor_delete', '_controller' => 'App\\Controller\\SponsorController::delete'], ['refSponsor'], ['DELETE' => 0], null, false, true, null]],
        867 => [[['_route' => 'searchEscapade', '_controller' => 'App\\Controller\\ThourayaController::searchEscapade'], [], null, null, false, false, null]],
        899 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['idUser'], ['GET' => 0], null, false, true, null]],
        912 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['idUser'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        920 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['idUser'], ['DELETE' => 0], null, false, true, null]],
        949 => [[['_route' => 'voiture_show', '_controller' => 'App\\Controller\\VoitureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        965 => [[['_route' => 'voiture_edit', '_controller' => 'App\\Controller\\VoitureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        978 => [[['_route' => 'voiture_editdispo', '_controller' => 'App\\Controller\\VoitureController::editdispo'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        987 => [
            [['_route' => 'voiture_delete', '_controller' => 'App\\Controller\\VoitureController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
