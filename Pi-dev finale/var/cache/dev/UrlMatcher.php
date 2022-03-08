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
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/new' => [[['_route' => 'admin_new', '_controller' => 'App\\Controller\\AdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/agent/service' => [[['_route' => 'app_agentservice', '_controller' => 'App\\Controller\\AgentServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/agent/service/new' => [[['_route' => 'agent_service_new', '_controller' => 'App\\Controller\\AgentServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/amande' => [[['_route' => 'app_amande', '_controller' => 'App\\Controller\\AmandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/amande/new' => [[['_route' => 'amande_new', '_controller' => 'App\\Controller\\AmandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/facture/mypdf' => [[['_route' => 'app_mypdf', '_controller' => 'App\\Controller\\FactureController::mypdf'], null, ['GET' => 0], null, false, false, null]],
        '/facture/new' => [[['_route' => 'facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fourriere' => [[['_route' => 'app_fourriere', '_controller' => 'App\\Controller\\FourriereController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fourriere/new' => [[['_route' => 'fourriere_new', '_controller' => 'App\\Controller\\FourriereController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fourriere/recherche/fou' => [[['_route' => 'fourriere_search', '_controller' => 'App\\Controller\\FourriereController::reche'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/speakers-details' => [[['_route' => 'speakers-details', '_controller' => 'App\\Controller\\FrontController::detail'], null, null, null, false, false, null]],
        '/equipe' => [[['_route' => 'equipe', '_controller' => 'App\\Controller\\FrontController::equipe'], null, null, null, false, false, null]],
        '/addfacture' => [[['_route' => 'addfacture', '_controller' => 'App\\Controller\\FrontController::addfacture'], null, null, null, false, false, null]],
        '/parking' => [[['_route' => 'app_parking', '_controller' => 'App\\Controller\\ParkingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/parking/new' => [[['_route' => 'parking_new', '_controller' => 'App\\Controller\\ParkingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|showone/([^/]++)(*:198)'
                        .'|([^/]++)(?'
                            .'|/edit(*:222)'
                            .'|(*:230)'
                        .')'
                    .')'
                    .'|gent/service/([^/]++)(?'
                        .'|(*:264)'
                        .'|/edit(*:277)'
                        .'|(*:285)'
                    .')'
                    .'|mande/([^/]++)(?'
                        .'|(*:311)'
                        .'|/edit(*:324)'
                        .'|(*:332)'
                    .')'
                .')'
                .'|/client/([^/]++)(?'
                    .'|(*:361)'
                    .'|/edit(*:374)'
                    .'|(*:382)'
                .')'
                .'|/f(?'
                    .'|acture/(?'
                        .'|([^/]++)(?'
                            .'|(*:417)'
                            .'|/edit(*:430)'
                            .'|(*:438)'
                        .')'
                        .'|tri(*:450)'
                        .'|recherche(*:467)'
                    .')'
                    .'|ourriere/([^/]++)(?'
                        .'|(*:496)'
                        .'|/edit(*:509)'
                        .'|(*:517)'
                    .')'
                .')'
                .'|/parking/([^/]++)(?'
                    .'|(*:547)'
                    .'|/edit(*:560)'
                    .'|(*:568)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:604)'
                        .'|/edit(*:617)'
                        .'|(*:625)'
                    .')'
                    .'|ponse/([^/]++)(?'
                        .'|(*:651)'
                        .'|/edit(*:664)'
                        .'|(*:672)'
                    .')'
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
        198 => [[['_route' => 'admin_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        222 => [[['_route' => 'admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        230 => [[['_route' => 'admin_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        264 => [[['_route' => 'agent_service_show', '_controller' => 'App\\Controller\\AgentServiceController::show'], ['id_agent_serv'], ['GET' => 0], null, false, true, null]],
        277 => [[['_route' => 'agent_service_edit', '_controller' => 'App\\Controller\\AgentServiceController::edit'], ['id_agent_serv'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'agent_service_delete', '_controller' => 'App\\Controller\\AgentServiceController::delete'], ['id_agent_serv'], ['POST' => 0], null, false, true, null]],
        311 => [[['_route' => 'amande_show', '_controller' => 'App\\Controller\\AmandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        324 => [[['_route' => 'amande_edit', '_controller' => 'App\\Controller\\AmandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        332 => [[['_route' => 'amande_delete', '_controller' => 'App\\Controller\\AmandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        361 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id_client'], ['GET' => 0], null, false, true, null]],
        374 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id_client'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        382 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id_client'], ['POST' => 0], null, false, true, null]],
        417 => [[['_route' => 'facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['id_facture'], ['GET' => 0], null, false, true, null]],
        430 => [[['_route' => 'facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['id_facture'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        438 => [[['_route' => 'facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id_facture'], ['POST' => 0], null, false, true, null]],
        450 => [[['_route' => 'facture_tri', '_controller' => 'App\\Controller\\FactureController::Tri'], [], ['GET' => 0], null, false, false, null]],
        467 => [[['_route' => 'facture_search', '_controller' => 'App\\Controller\\FactureController::recherche'], [], ['GET' => 0], null, false, false, null]],
        496 => [[['_route' => 'fourriere_show', '_controller' => 'App\\Controller\\FourriereController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        509 => [[['_route' => 'fourriere_edit', '_controller' => 'App\\Controller\\FourriereController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        517 => [[['_route' => 'fourriere_delete', '_controller' => 'App\\Controller\\FourriereController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        547 => [[['_route' => 'parking_show', '_controller' => 'App\\Controller\\ParkingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        560 => [[['_route' => 'parking_edit', '_controller' => 'App\\Controller\\ParkingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        568 => [[['_route' => 'parking_delete', '_controller' => 'App\\Controller\\ParkingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        604 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id_rec'], ['GET' => 0], null, false, true, null]],
        617 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id_rec'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        625 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id_rec'], ['POST' => 0], null, false, true, null]],
        651 => [[['_route' => 'reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        664 => [[['_route' => 'reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        672 => [
            [['_route' => 'reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
