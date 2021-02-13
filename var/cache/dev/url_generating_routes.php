<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'purchase_confirm' => [[], ['_controller' => 'App\\Controller\\Purchase\\PurchaseConfirmationController::confirm'], [], [['text', '/purchase/confirm']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'add_product' => [[], ['_controller' => 'App\\Controller\\AddProductController::index'], [], [['text', '/admin/add_product']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/add']], [], []],
    'cart_decrement' => [['id'], ['_controller' => 'App\\Controller\\CartController::decrement'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/cart/decrement']], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::show'], [], [['text', '/cart']], [], []],
    'cart_delete' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/cart/delete']], [], []],
    'categories' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/categories']], [], []],
    'category' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::category'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'home_search' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/search']], [], []],
    'new_arrivals' => [[], ['_controller' => 'App\\Controller\\NewArrivalsController::index'], [], [['text', '/new_arrivals']], [], []],
    'product' => [['id'], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], []],
    'purchase_payment_form' => [['id'], ['_controller' => 'App\\Controller\\Purchase\\PurchasePaymentController::showCardForm'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/purchase/payment']], [], []],
    'purchase_payment_success' => [['id'], ['_controller' => 'App\\Controller\\Purchase\\PurchasePaymentSuccessController::success'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/purchase/terminate']], [], []],
    'purchase_index' => [[], ['_controller' => 'App\\Controller\\Purchase\\PurchasesListController::index'], [], [['text', '/purchases']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
