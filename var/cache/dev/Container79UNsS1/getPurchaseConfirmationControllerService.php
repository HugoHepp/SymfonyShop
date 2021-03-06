<?php

namespace Container79UNsS1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurchaseConfirmationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Purchase\PurchaseConfirmationController' shared autowired service.
     *
     * @return \App\Controller\Purchase\PurchaseConfirmationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Purchase/PurchaseConfirmationController.php';
        include_once \dirname(__DIR__, 4).'/src/Purchase/PurchasePersister.php';

        $a = ($container->privates['App\\Cart\\CartService'] ?? $container->getCartServiceService());
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService());

        $container->services['App\\Controller\\Purchase\\PurchaseConfirmationController'] = $instance = new \App\Controller\Purchase\PurchaseConfirmationController($a, $b, new \App\Purchase\PurchasePersister(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), $a, $b));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\Purchase\\PurchaseConfirmationController', $container));

        return $instance;
    }
}
