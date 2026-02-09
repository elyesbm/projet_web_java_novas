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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/ateliers' => [[['_route' => 'app_admin_ateliers_list', '_controller' => 'App\\Controller\\Admin\\AtelierAdminController::list'], null, null, null, true, false, null]],
        '/admin/ateliers/new' => [[['_route' => 'app_admin_ateliers_new', '_controller' => 'App\\Controller\\Admin\\AtelierAdminController::new'], null, null, null, false, false, null]],
        '/admin/commentaires' => [[['_route' => 'app_admin_commentaires_list', '_controller' => 'App\\Controller\\Admin\\CommentaireAdminController::list'], null, ['GET' => 0], null, true, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, true, false, null]],
        '/admin/jobs' => [[['_route' => 'app_admin_jobs_list', '_controller' => 'App\\Controller\\Admin\\JobsAdminController::list'], null, null, null, true, false, null]],
        '/admin/jobs/new' => [[['_route' => 'app_admin_jobs_new', '_controller' => 'App\\Controller\\Admin\\JobsAdminController::new'], null, null, null, false, false, null]],
        '/admin/marketplace' => [[['_route' => 'app_admin_marketplace_list', '_controller' => 'App\\Controller\\Admin\\MarketplaceAdminController::list'], null, null, null, true, false, null]],
        '/admin/marketplace/new' => [[['_route' => 'app_admin_marketplace_new', '_controller' => 'App\\Controller\\Admin\\MarketplaceAdminController::new'], null, null, null, false, false, null]],
        '/admin/publications' => [[['_route' => 'app_admin_publications_list', '_controller' => 'App\\Controller\\Admin\\PublicationAdminController::list'], null, ['GET' => 0], null, true, false, null]],
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
        '/publications' => [[['_route' => 'app_publications_index', '_controller' => 'App\\Controller\\Front\\PublicationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/publications/nouvelle' => [[['_route' => 'app_publication_nouvelle', '_controller' => 'App\\Controller\\Front\\PublicationController::nouvelle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/ateliers' => [[['_route' => 'app_reservation_ateliers', '_controller' => 'App\\Controller\\Front\\ReservationController::ateliers'], null, null, null, false, false, null]],
        '/reservation/mes-reservations' => [[['_route' => 'app_reservation_mes', '_controller' => 'App\\Controller\\Front\\ReservationController::mesReservations'], null, null, null, false, false, null]],
        '/skills' => [[['_route' => 'app_skills_index', '_controller' => 'App\\Controller\\Front\\SkillController::index'], null, null, null, true, false, null]],
        '/skills/mes-skills' => [[['_route' => 'app_skills_mes', '_controller' => 'App\\Controller\\Front\\SkillController::mesSkills'], null, null, null, false, false, null]],
        '/skills/ajouter' => [[['_route' => 'app_skills_ajouter', '_controller' => 'App\\Controller\\Front\\SkillController::ajouter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\Front\\UserController::profile'], null, null, null, false, false, null]],
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
                    .'|commentaires/([^/]++)/delete(*:270)'
                    .'|jobs/([^/]++)/edit(*:296)'
                    .'|marketplace/([^/]++)/edit(*:329)'
                    .'|publications/([^/]++)/(?'
                        .'|edit(*:366)'
                        .'|toggle(*:380)'
                        .'|delete(*:394)'
                        .'|approve(*:409)'
                        .'|hide(*:421)'
                    .')'
                    .'|skills/([^/]++)/edit(*:450)'
                    .'|users/([^/]++)/edit(*:477)'
                .')'
                .'|/commentaires/(?'
                    .'|publication/([^/]++)/ajouter(*:531)'
                    .'|([^/]++)/(?'
                        .'|supprimer(*:560)'
                        .'|modifier(*:576)'
                    .')'
                    .'|nouveau/publication/([^/]++)(*:613)'
                .')'
                .'|/jobs/(?'
                    .'|offre/(?'
                        .'|(\\d+)(*:645)'
                        .'|(\\d+)/postuler(*:667)'
                        .'|(\\d+)/modifier(*:689)'
                        .'|(\\d+)/supprimer(*:712)'
                        .'|(\\d+)/candidatures(*:738)'
                    .')'
                    .'|candidature/(?'
                        .'|(\\d+)/accepter(*:776)'
                        .'|(\\d+)/refuser(*:797)'
                    .')'
                .')'
                .'|/learning\\-paths/([^/]++)/detail(*:839)'
                .'|/marketplace/article/(?'
                    .'|(\\d+)(*:876)'
                    .'|(\\d+)/modifier(*:898)'
                .')'
                .'|/publications/([^/]++)/(?'
                    .'|modifier(*:941)'
                    .'|s(?'
                        .'|upprimer(*:961)'
                        .'|ignaler(*:976)'
                    .')'
                    .'|like(*:989)'
                .')'
                .'|/reservation/([^/]++)/reserver(*:1028)'
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
        270 => [[['_route' => 'app_admin_commentaires_delete', '_controller' => 'App\\Controller\\Admin\\CommentaireAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        296 => [[['_route' => 'app_admin_jobs_edit', '_controller' => 'App\\Controller\\Admin\\JobsAdminController::edit'], ['id'], null, null, false, false, null]],
        329 => [[['_route' => 'app_admin_marketplace_edit', '_controller' => 'App\\Controller\\Admin\\MarketplaceAdminController::edit'], ['id'], null, null, false, false, null]],
        366 => [[['_route' => 'app_admin_publications_edit', '_controller' => 'App\\Controller\\Admin\\PublicationAdminController::edit'], ['id'], ['GET' => 0], null, false, false, null]],
        380 => [[['_route' => 'app_admin_publications_toggle', '_controller' => 'App\\Controller\\Admin\\PublicationAdminController::toggleStatut'], ['id'], ['POST' => 0], null, false, false, null]],
        394 => [[['_route' => 'app_admin_publications_delete', '_controller' => 'App\\Controller\\Admin\\PublicationAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        409 => [[['_route' => 'app_admin_publications_approve', '_controller' => 'App\\Controller\\Admin\\PublicationAdminController::approve'], ['id'], ['POST' => 0], null, false, false, null]],
        421 => [[['_route' => 'app_admin_publications_hide', '_controller' => 'App\\Controller\\Admin\\PublicationAdminController::hide'], ['id'], ['POST' => 0], null, false, false, null]],
        450 => [[['_route' => 'app_admin_skills_edit', '_controller' => 'App\\Controller\\Admin\\SkillAdminController::edit'], ['id'], null, null, false, false, null]],
        477 => [[['_route' => 'app_admin_users_edit', '_controller' => 'App\\Controller\\Admin\\UserAdminController::edit'], ['id'], null, null, false, false, null]],
        531 => [[['_route' => 'app_commentaire_ajouter', '_controller' => 'App\\Controller\\Front\\CommentaireController::ajouter'], ['id'], ['POST' => 0], null, false, false, null]],
        560 => [[['_route' => 'app_commentaire_supprimer', '_controller' => 'App\\Controller\\Front\\CommentaireController::supprimer'], ['id'], ['POST' => 0], null, false, false, null]],
        576 => [[['_route' => 'app_commentaire_modifier', '_controller' => 'App\\Controller\\Front\\CommentaireController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        613 => [[['_route' => 'app_commentaire_nouveau', '_controller' => 'App\\Controller\\Front\\CommentaireController::nouveau'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        645 => [[['_route' => 'app_jobs_detail', '_controller' => 'App\\Controller\\Front\\JobsController::detail'], ['id'], null, null, false, true, null]],
        667 => [[['_route' => 'app_jobs_postuler', '_controller' => 'App\\Controller\\Front\\JobsController::postuler'], ['id'], ['POST' => 0], null, false, false, null]],
        689 => [[['_route' => 'app_jobs_modifier', '_controller' => 'App\\Controller\\Front\\JobsController::modifier'], ['id'], null, null, false, false, null]],
        712 => [[['_route' => 'app_jobs_supprimer', '_controller' => 'App\\Controller\\Front\\JobsController::supprimer'], ['id'], null, null, false, false, null]],
        738 => [[['_route' => 'app_jobs_candidatures', '_controller' => 'App\\Controller\\Front\\JobsController::candidatures'], ['id'], null, null, false, false, null]],
        776 => [[['_route' => 'app_jobs_accepter_candidature', '_controller' => 'App\\Controller\\Front\\JobsController::accepterCandidature'], ['id'], ['POST' => 0], null, false, false, null]],
        797 => [[['_route' => 'app_jobs_refuser_candidature', '_controller' => 'App\\Controller\\Front\\JobsController::refuserCandidature'], ['id'], ['POST' => 0], null, false, false, null]],
        839 => [[['_route' => 'app_learning_path_detail', '_controller' => 'App\\Controller\\Front\\LearningPathController::detail'], ['id'], null, null, false, false, null]],
        876 => [[['_route' => 'app_marketplace_detail', '_controller' => 'App\\Controller\\Front\\MarketplaceController::detail'], ['id'], null, null, false, true, null]],
        898 => [[['_route' => 'app_marketplace_modifier', '_controller' => 'App\\Controller\\Front\\MarketplaceController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        941 => [[['_route' => 'app_publication_modifier', '_controller' => 'App\\Controller\\Front\\PublicationController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        961 => [[['_route' => 'app_publication_supprimer', '_controller' => 'App\\Controller\\Front\\PublicationController::supprimerPublication'], ['id'], ['POST' => 0], null, false, false, null]],
        976 => [[['_route' => 'app_publication_signaler', '_controller' => 'App\\Controller\\Front\\PublicationController::signaler'], ['id'], ['GET' => 0], null, false, false, null]],
        989 => [[['_route' => 'app_publication_like', '_controller' => 'App\\Controller\\Front\\PublicationController::like'], ['id'], ['POST' => 0], null, false, false, null]],
        1028 => [
            [['_route' => 'app_reservation_reserver', '_controller' => 'App\\Controller\\Front\\ReservationController::reserver'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
