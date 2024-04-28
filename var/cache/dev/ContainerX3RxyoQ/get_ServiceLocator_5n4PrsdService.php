<?php

namespace ContainerX3RxyoQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5n4PrsdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5n4Prsd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5n4Prsd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'tokenStorage' => ['services', '.container.private.security.token_storage', 'get_Container_Private_Security_TokenStorageService', false],
        ], [
            'security' => '?',
            'tokenStorage' => '?',
        ]);
    }
}
