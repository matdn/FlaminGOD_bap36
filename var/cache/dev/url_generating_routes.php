<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_app' => [[], ['_controller' => 'App\\Controller\\AppController::index'], [], [['text', '/']], [], [], []],
    'app_bio' => [[], ['_controller' => 'App\\Controller\\BioController::index'], [], [['text', '/bio']], [], [], []],
    'app_newsletter' => [[], ['_controller' => 'App\\Controller\\NewsletterController::index'], [], [['text', '/newsletter']], [], [], []],
    'app_collection' => [[], ['_controller' => 'App\\Controller\\NftCollectionController::index'], [], [['text', '/nft/collection']], [], [], []],
    'app_nftSingle' => [['id'], ['_controller' => 'App\\Controller\\NftCollectionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/nft']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
