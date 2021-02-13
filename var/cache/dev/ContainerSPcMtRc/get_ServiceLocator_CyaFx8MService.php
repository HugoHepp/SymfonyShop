<?php

namespace ContainerSPcMtRc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CyaFx8MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CyaFx8M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CyaFx8M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'repository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', false],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'repository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}