<?php

namespace Container79UNsS1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurchasePaymentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Purchase\PurchasePaymentController' shared autowired service.
     *
     * @return \App\Controller\Purchase\PurchasePaymentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Purchase/PurchasePaymentController.php';

        $container->services['App\\Controller\\Purchase\\PurchasePaymentController'] = $instance = new \App\Controller\Purchase\PurchasePaymentController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\Purchase\\PurchasePaymentController', $container));

        return $instance;
    }
}