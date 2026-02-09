<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [
            [['_route' => '_logout_main'], null, null, null, false, false, null],
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\Front\\AuthController::logout'], null, ['GET' => 0], null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/ateliers' => [[['_route' => 'app_admin_ateliers_list', '_controller' => 'App\\Controller\\Admin\\AtelierAdminController::list'], null, null, null, true, false, null]],
        '/admin/ateliers/new' => [[['_route' => 'app_admin_ateliers_new', '_controller' => 'App\\Controller\\Admin\\AtelierAdminController::new'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, true, false, null]],
        '/admin/jobs' => [[['_route' => 'app_admin_jobs_list', '_controller' => 'App\\Controller\\Admin\\JobsAdminController::list'], null, null, null, true, false, null]],
        '/admin/jobs/new' => [[['_route' => 'app_admin_jobs_new', '_controller' => 'App\\Controller\\Admin\\JobsAdminController::new'], null, null, null, false, false, null]],
        '/admin/marketplace' => [[['_route' => 'app_admin_marketplace_list', '_controller' => 'App\\Controller\\Admin\\MarketplaceAdminController::list'], null, null, null, true, false, null]],
        '/admin/marketplace/new' => [[['_route' => 'app_admin_marketplace_new', '_controller' => 'App\\Controller\\Admin\\MarketplaceAdminController::new'], null, null, null, false, false, null]],
        '/admin/publications' => [[['_route' => 'app_admin_publications_list', '_controller' => 'App\\Controller\\Admin\\PublicationAdminController::list'], null, null, null, true, false, null]],
        '/admin/settings' => [[['_route' => 'app_admin_settings', '_controller' => 'App\\Controller\\Admin\\SettingsController'], null, null, null, false, false, null]],
        '/admin/skills' => [[['_route' => 'app_admin_skills_list', '_controller' => 'App\\Controller\\Admin\\SkillAdminController::list'], null, null, null, true, false, null]],
        '/admin/skills/new' => [[['_route' => 'app_admin_skills_new', '_controller' => 'App\\Controller\\Admin\\SkillAdminController::new'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_admin_users_list', '_controller' => 'App\\Controller\\Admin\\UserAdminController::list'], null, null, null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'app_admin_users_new', '_controller' => 'App\\Controller\\Admin\\UserAdminController::new'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Front\\AuthController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\Front\\AuthController::register'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\Front\\HomeController::index'], null, null, null, false, false, null]],
        '/jobs' => [[['_route' => 'app_jobs_index', '_controller' => 'App\\Controller\\Front\\JobsController::index'], null, null, null, false, false, null]],
        '/jobs/mes-offres' => [[['_route' => 'app_jobs_mes_offres', '_controller' => 'App\\Controller\\Front\\JobsController::mesOffres'], null, null, null, false, false, null]],
        '/jobs/ajouter' => [[['_route' => 'app_jobs_ajouter', '_controller' => 'App\\Controller\\Front\\JobsController::ajouter'], null, null, null, false, false, null]],
        '/jobs/mes-candidatures' => [[['_route' => 'app_jobs_mes_candidatures', '_controller' => 'App\\Controller\\Front\\JobsController::mesCandidatures'], null, null, null, false, false, null]],
        '/learning-paths' => [[['_route' => 'app_learning_paths_index', '_controller' => 'App\\Controller\\Front\\LearningPathController::index'], null, null, null, true, false, null]],
        '/marketplace' => [[['_route' => 'app_marketplace_index', '_controller' => 'App\\Controller\\Front\\MarketplaceController::index'], null, null, null, true, false, null]],
        '/marketplace/mes-articles' => [[['_route' => 'app_marketplace_mes', '_controller' => 'App\\Controller\\Front\\MarketplaceController::mesArticles'], null, null, null, false, false, null]],
        '/marketplace/article/ajouter' => [[['_route' => 'app_marketplace_ajouter', '_controller' => 'App\\Controller\\Front\\MarketplaceController::ajouter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/publications' => [[['_route' => 'app_publications_index', '_controller' => 'App\\Controller\\Front\\PublicationController::index'], null, null, null, true, false, null]],
        '/publications/nouvelle' => [[['_route' => 'app_publication_nouvelle', '_controller' => 'App\\Controller\\Front\\PublicationController::nouvelle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/ateliers' => [[['_route' => 'app_reservation_ateliers', '_controller' => 'App\\Controller\\Front\\ReservationController::ateliers'], null, null, null, false, false, null]],
        '/reservation/mes-reservations' => [[['_route' => 'app_reservation_mes', '_controller' => 'App\\Controller\\Front\\ReservationController::mesReservations'], null, null, null, false, false, null]],
        '/skills' => [[['_route' => 'app_skills_index', '_controller' => 'App\\Controller\\Front\\SkillController::index'], null, null, null, true, false, null]],
        '/skills/mes-skills' => [[['_route' => 'app_skills_mes', '_controller' => 'App\\Controller\\Front\\SkillController::mesSkills'], null, null, null, false, false, null]],
        '/skills/ajouter' => [[['_route' => 'app_skills_ajouter', '_controller' => 'App\\Controller\\Front\\SkillController::ajouter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\Front\\UserController::profile'], null, null, null, false, false, null]],
        '/user/profile/edit' => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Front\\UserController::edit'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|ateliers/([^/]++)/edit(*:234)'
                    .'|jobs/([^/]++)/edit(*:260)'
                    .'|marketplace/([^/]++)/edit(*:293)'
                    .'|publications/([^/]++)/edit(*:327)'
                    .'|skills/([^/]++)/edit(*:355)'
                    .'|users/(?'
                        .'|(\\d+)/edit(*:382)'
                        .'|(\\d+)/delete(*:402)'
                    .')'
                .')'
                .'|/jobs/(?'
                    .'|offre/(?'
                        .'|(\\d+)(*:435)'
                        .'|(\\d+)/postuler(*:457)'
                        .'|(\\d+)/modifier(*:479)'
                        .'|(\\d+)/supprimer(*:502)'
                        .'|(\\d+)/candidatures(*:528)'
                    .')'
                    .'|candidature/(?'
                        .'|(\\d+)/accepter(*:566)'
                        .'|(\\d+)/refuser(*:587)'
                    .')'
                .')'
                .'|/learning\\-paths/([^/]++)/detail(*:629)'
                .'|/marketplace/article/(?'
                    .'|(\\d+)(*:666)'
                    .'|(\\d+)/modifier(*:688)'
                .')'
                .'|/publications/([^/]++)/(?'
                    .'|commenter(*:732)'
                    .'|signaler(*:748)'
                .')'
                .'|/reservation/([^/]++)/reserver(*:787)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        234 => [[['_route' => 'app_admin_ateliers_edit', '_controller' => 'App\\Controller\\Admin\\AtelierAdminController::edit'], ['id'], null, null, false, false, null]],
        260 => [[['_route' => 'app_admin_jobs_edit', '_controller' => 'App\\Controller\\Admin\\JobsAdminController::edit'], ['id'], null, null, false, false, null]],
        293 => [[['_route' => 'app_admin_marketplace_edit', '_controller' => 'App\\Controller\\Admin\\MarketplaceAdminController::edit'], ['id'], null, null, false, false, null]],
        327 => [[['_route' => 'app_admin_publications_edit', '_controller' => 'App\\Controller\\Admin\\PublicationAdminController::edit'], ['id'], null, null, false, false, null]],
        355 => [[['_route' => 'app_admin_skills_edit', '_controller' => 'App\\Controller\\Admin\\SkillAdminController::edit'], ['id'], null, null, false, false, null]],
        382 => [[['_route' => 'app_admin_users_edit', '_controller' => 'App\\Controller\\Admin\\UserAdminController::edit'], ['id'], null, null, false, false, null]],
        402 => [[['_route' => 'app_admin_users_delete', '_controller' => 'App\\Controller\\Admin\\UserAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        435 => [[['_route' => 'app_jobs_detail', '_controller' => 'App\\Controller\\Front\\JobsController::detail'], ['id'], null, null, false, true, null]],
        457 => [[['_route' => 'app_jobs_postuler', '_controller' => 'App\\Controller\\Front\\JobsController::postuler'], ['id'], ['POST' => 0], null, false, false, null]],
        479 => [[['_route' => 'app_jobs_modifier', '_controller' => 'App\\Controller\\Front\\JobsController::modifier'], ['id'], null, null, false, false, null]],
        502 => [[['_route' => 'app_jobs_supprimer', '_controller' => 'App\\Controller\\Front\\JobsController::supprimer'], ['id'], null, null, false, false, null]],
        528 => [[['_route' => 'app_jobs_candidatures', '_controller' => 'App\\Controller\\Front\\JobsController::candidatures'], ['id'], null, null, false, false, null]],
        566 => [[['_route' => 'app_jobs_accepter_candidature', '_controller' => 'App\\Controller\\Front\\JobsController::accepterCandidature'], ['id'], ['POST' => 0], null, false, false, null]],
        587 => [[['_route' => 'app_jobs_refuser_candidature', '_controller' => 'App\\Controller\\Front\\JobsController::refuserCandidature'], ['id'], ['POST' => 0], null, false, false, null]],
        629 => [[['_route' => 'app_learning_path_detail', '_controller' => 'App\\Controller\\Front\\LearningPathController::detail'], ['id'], null, null, false, false, null]],
        666 => [[['_route' => 'app_marketplace_detail', '_controller' => 'App\\Controller\\Front\\MarketplaceController::detail'], ['id'], null, null, false, true, null]],
        688 => [[['_route' => 'app_marketplace_modifier', '_controller' => 'App\\Controller\\Front\\MarketplaceController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        732 => [[['_route' => 'app_publication_commenter', '_controller' => 'App\\Controller\\Front\\PublicationController::commenter'], ['id'], ['POST' => 0], null, false, false, null]],
        748 => [[['_route' => 'app_publication_signaler', '_controller' => 'App\\Controller\\Front\\PublicationController::signaler'], ['id'], null, null, false, false, null]],
        787 => [
            [['_route' => 'app_reservation_reserver', '_controller' => 'App\\Controller\\Front\\ReservationController::reserver'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
