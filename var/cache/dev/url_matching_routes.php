<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_app', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/bio' => [[['_route' => 'app_bio', '_controller' => 'App\\Controller\\BioController::index'], null, null, null, false, false, null]],
        '/newsletter' => [[['_route' => 'app_newsletter', '_controller' => 'App\\Controller\\NewsletterController::index'], null, null, null, false, false, null]],
        '/nft/collection' => [[['_route' => 'app_collection', '_controller' => 'App\\Controller\\NftCollectionController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/nft/([^/]++)(*:55)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        55 => [
            [['_route' => 'app_nftSingle', '_controller' => 'App\\Controller\\NftCollectionController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
