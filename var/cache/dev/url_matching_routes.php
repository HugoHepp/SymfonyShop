<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/purchase/confirm' => [[['_route' => 'purchase_confirm', '_controller' => 'App\\Controller\\Purchase\\PurchaseConfirmationController::confirm'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/add_product' => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\AddProductController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::show'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\CategoriesController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'home_search', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/new_arrivals' => [[['_route' => 'new_arrivals', '_controller' => 'App\\Controller\\NewArrivalsController::index'], null, null, null, false, false, null]],
        '/purchases' => [[['_route' => 'purchase_index', '_controller' => 'App\\Controller\\Purchase\\PurchasesListController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/ca(?'
                    .'|rt/(?'
                        .'|add/([^/]++)(*:193)'
                        .'|de(?'
                            .'|crement/(\\d+)(*:219)'
                            .'|lete/(\\d+)(*:237)'
                        .')'
                    .')'
                    .'|tegory/([^/]++)(*:262)'
                .')'
                .'|/p(?'
                    .'|roduct/([^/]++)(*:291)'
                    .'|urchase/(?'
                        .'|payment/([^/]++)(*:326)'
                        .'|terminate/([^/]++)(*:352)'
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
        193 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'cart_decrement', '_controller' => 'App\\Controller\\CartController::decrement'], ['id'], null, null, false, true, null]],
        237 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoriesController::category'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'purchase_payment_form', '_controller' => 'App\\Controller\\Purchase\\PurchasePaymentController::showCardForm'], ['id'], null, null, false, true, null]],
        352 => [
            [['_route' => 'purchase_payment_success', '_controller' => 'App\\Controller\\Purchase\\PurchasePaymentSuccessController::success'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
