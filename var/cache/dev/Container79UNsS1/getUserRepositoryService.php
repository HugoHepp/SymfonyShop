<?php

namespace Container79UNsS1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Repository\UserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/UserRepository.php';

        return $container->privates['App\\Repository\\UserRepository'] = new \App\Repository\UserRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
