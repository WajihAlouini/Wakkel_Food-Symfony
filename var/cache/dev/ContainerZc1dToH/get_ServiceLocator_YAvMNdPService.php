<?php

namespace ContainerZc1dToH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YAvMNdPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yAvMNdP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yAvMNdP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'evenement' => ['privates', '.errored..service_locator.yAvMNdP.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.yAvMNdP": it references class "App\\Entity\\Evenement" but no such service exists.'],
        ], [
            'evenement' => 'App\\Entity\\Evenement',
        ]);
    }
}
