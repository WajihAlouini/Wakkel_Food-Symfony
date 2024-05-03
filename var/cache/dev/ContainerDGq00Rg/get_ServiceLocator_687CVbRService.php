<?php

namespace ContainerDGq00Rg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_687CVbRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.687CVbR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.687CVbR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'platRepository' => ['privates', 'App\\Repository\\PlatRepository', 'getPlatRepositoryService', true],
        ], [
            'platRepository' => 'App\\Repository\\PlatRepository',
        ]);
    }
}
