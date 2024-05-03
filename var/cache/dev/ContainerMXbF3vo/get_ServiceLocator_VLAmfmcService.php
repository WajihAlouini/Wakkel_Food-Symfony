<?php

namespace ContainerMXbF3vo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VLAmfmcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VLAmfmc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VLAmfmc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'plat' => ['privates', '.errored..service_locator.VLAmfmc.App\\Entity\\Plat', NULL, 'Cannot autowire service ".service_locator.VLAmfmc": it references class "App\\Entity\\Plat" but no such service exists.'],
        ], [
            'plat' => 'App\\Entity\\Plat',
        ]);
    }
}
