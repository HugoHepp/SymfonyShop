<?php

namespace ContainerSPcMtRc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wl612BwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wl612Bw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wl612Bw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AddProductController::index' => ['privates', '.service_locator.maHzDpB', 'get_ServiceLocator_MaHzDpBService', true],
            'App\\Controller\\CartController::show' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\CategoriesController::category' => ['privates', '.service_locator.IrXwkls', 'get_ServiceLocator_IrXwklsService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.CyaFx8M', 'get_ServiceLocator_CyaFx8MService', true],
            'App\\Controller\\NewArrivalsController::index' => ['privates', '.service_locator.BOF9k5a', 'get_ServiceLocator_BOF9k5aService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.CyaFx8M', 'get_ServiceLocator_CyaFx8MService', true],
            'App\\Controller\\Purchase\\PurchasePaymentController::showCardForm' => ['privates', '.service_locator.X0DbD_z', 'get_ServiceLocator_X0DbDZService', true],
            'App\\Controller\\Purchase\\PurchasePaymentSuccessController::success' => ['privates', '.service_locator.A_C4PXd', 'get_ServiceLocator_AC4PXdService', true],
            'App\\Controller\\Purchase\\PurchasesListController::index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.tvJ2KK.', 'get_ServiceLocator_TvJ2KK_Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AddProductController:index' => ['privates', '.service_locator.maHzDpB', 'get_ServiceLocator_MaHzDpBService', true],
            'App\\Controller\\CartController:show' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\CategoriesController:category' => ['privates', '.service_locator.IrXwkls', 'get_ServiceLocator_IrXwklsService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.CyaFx8M', 'get_ServiceLocator_CyaFx8MService', true],
            'App\\Controller\\NewArrivalsController:index' => ['privates', '.service_locator.BOF9k5a', 'get_ServiceLocator_BOF9k5aService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.CyaFx8M', 'get_ServiceLocator_CyaFx8MService', true],
            'App\\Controller\\Purchase\\PurchasePaymentController:showCardForm' => ['privates', '.service_locator.X0DbD_z', 'get_ServiceLocator_X0DbDZService', true],
            'App\\Controller\\Purchase\\PurchasePaymentSuccessController:success' => ['privates', '.service_locator.A_C4PXd', 'get_ServiceLocator_AC4PXdService', true],
            'App\\Controller\\Purchase\\PurchasesListController:index' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.tvJ2KK.', 'get_ServiceLocator_TvJ2KK_Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AddProductController::index' => '?',
            'App\\Controller\\CartController::show' => '?',
            'App\\Controller\\CategoriesController::category' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\NewArrivalsController::index' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\Purchase\\PurchasePaymentController::showCardForm' => '?',
            'App\\Controller\\Purchase\\PurchasePaymentSuccessController::success' => '?',
            'App\\Controller\\Purchase\\PurchasesListController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AddProductController:index' => '?',
            'App\\Controller\\CartController:show' => '?',
            'App\\Controller\\CategoriesController:category' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\NewArrivalsController:index' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\Purchase\\PurchasePaymentController:showCardForm' => '?',
            'App\\Controller\\Purchase\\PurchasePaymentSuccessController:success' => '?',
            'App\\Controller\\Purchase\\PurchasesListController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
